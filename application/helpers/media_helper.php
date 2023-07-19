<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * @name        CodeIgniter Advanced Images
 * @author         Jens Segers
 * @link           http://www.jenssegers.be
 * @license        MIT License Copyright (c) 2012 Jens Segers
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/** BEGIN TEMPORARY FUNCTION */
function get_media_url( $file )
{
	return base_url( "/content/media/{$file}" );
}

function get_media_src( $file, $alt = '', $class = '' )
{
	return "<img alt=\"{$alt}\" src=\"" . get_media_url( $file ) . "\" class=\"{$class}\"/>";
}

/** END TEMPORARY FUNCTION */

if ( ! function_exists( 'get_image' ) )
{
	/**
	 * Generates a modified image source to work with the advanced images controller
	 *
	 * @param        $image_id
	 * @param string $size
	 * @param bool $src
	 * @param bool $fit
	 * @param bool $crop
	 * @return bool|string
	 */
	function get_image( $image_id, $size = 'medium', $src = FALSE, $fit = FALSE, $crop = FALSE )
	{
		$image = get_image_by_id( $image_id );
		
		// load the allowed image presets
		$_CI = &get_instance();
		$_CI->load->config( "images" );
		$sizes = $_CI->config->item( "image_sizes" );
		
		if ( ! $image || ! is_file( $image->path ) )
		{
			$path = config_item( 'content_folder' ) . DIRECTORY_SEPARATOR . config_item( 'media_folder' ) . DIRECTORY_SEPARATOR . 'placeholder.jpg';
		}
		else
		{
			$path = $image->path;
		}
		$original = $path;
		$pathinfo = pathinfo( $original );
		$src_size = getimagesize( $original );
		
		$src_width = $src_size[ 0 ];
		$src_height = $src_size[ 1 ];
		$dirname = $pathinfo[ "dirname" ];
		$filename = $pathinfo[ "filename" ];
		$extension = $pathinfo[ "extension" ];
		
		
		// check if requested preset exists
		if ( is_array( $size ) )
		{
			$width = $size[ 0 ];
			$height = $size[ 1 ];
		}
		else
		{
			if ( isset( $sizes[ $size ] ) )
			{
				$width = $sizes[ $size ][ 0 ];
				$height = $sizes[ $size ][ 1 ];
			}
		}
		
		$ratio = $src_width / $src_height;
		if ( $width == 0 )
		{
			$width = ceil( $height * $ratio );
		}
		if ( $height == 0 )
		{
			$height = ceil( $width / $ratio );
		}
		$path = "{$dirname}/{$filename}-{$width}x{$height}" . ( $fit ? "_f" : "" ) . ( $crop ? "_c" : "" ) . ".{$extension}";
		if ( ! file_exists( $path ) )
		{
			if ( $width > 0 && $height > 0 && ( $src_width > $width || $src_height > $height ) )
			{
				// initialize library
				$config[ "width" ] = $width;
				$config[ "height" ] = $height;
				$config[ "source_image" ] = $original;
				$config[ "new_image" ] = $path;
				$config[ "dynamic_output" ] = FALSE; // always save as cache
				
				$_CI->my_image_lib->initialize( $config );
				if ( $fit )
				{
					if ( ! $_CI->my_image_lib->fit() )
					{
						echo $_CI->my_image_lib->display_errors();
						
						return FALSE;
					}
				}
				elseif ( $crop )
				{
					$config[ 'maintain_ratio' ] = FALSE;
					if ( ! $_CI->my_image_lib->crop() )
					{
						echo $_CI->my_image_lib->display_errors();
						
						return FALSE;
					}
				}
				elseif ( ! $_CI->my_image_lib->resize() )
				{
					echo $_CI->my_image_lib->display_errors();
					
					return FALSE;
				}
			}
			else
			{
				$path = $original;
				$width = $src_size[ 0 ];
				$height = $src_size[ 1 ];
			}
		}
		if ( $src )
		{
			return base_url( $path );
		}
		else
		{
			return '<img src="' . base_url( $path ) . '" alt="" title="" ' . image_hwstring( $width, $height ) . ' />';
		}
	}
}

if ( ! function_exists( 'get_image_by_id' ) )
{
	/**
	 * Get an image by its id
	 *
	 * @param $id
	 * @return bool|mixed
	 */
	function get_image_by_id( $id )
	{
		$_CI = &get_instance();
		$query = $_CI->db->get_where( 'media', "id = $id" );
		if ( $query->num_rows() )
		{
			$image = $query->row();
			$image->name = $image->path;
			$image->path = config_item( 'content_folder' ) . DIRECTORY_SEPARATOR . config_item( 'media_folder' ) . DIRECTORY_SEPARATOR . $image->path;
			
			return $image;
		}
		
		return FALSE;
	}
}

if ( ! function_exists( 'image_hwstring' ) )
{
	/**
	 * Retrieve width and height attributes using given width and height values.
	 * Both attributes are required in the sense that both parameters must have a
	 * value, but are optional in that if you set them to false or null, then they
	 * will not be added to the returned string.
	 * You can set the value using a string, but it will only take numeric values.
	 * If you wish to put 'px' after the numbers, then it will be stripped out of
	 * the return.
	 *
	 * @param int|string $width Image width in pixels.
	 * @param int|string $height Image height in pixels.
	 * @return string HTML attributes for width and, or height.
	 */
	function image_hwstring( $width, $height )
	{
		$out = '';
		if ( $width )
		{
			$out .= 'width="' . (int) $width . '" ';
		}
		if ( $height )
		{
			$out .= 'height="' . (int) $height . '" ';
		}
		
		return $out;
	}
}

if ( ! function_exists( 'get_media_url' ) )
{
	/**
	 * Get the url of a given media item
	 *
	 * @param $id
	 * @return bool|string
	 */
	function get_media_url( $id )
	{
		$_CI = &get_instance();
		$query = $_CI->db->get_where( 'media', "ID = $id" );
		
		if ( $query->num_rows() )
		{
			$file = $query->row();
			
			return base_url( config_item( 'content_folder' ) . '/' . config_item( 'media_folder' ) . "/{$file->path}" );
		}
		
		return FALSE;
	}
}

if ( ! function_exists( 'get_media_path' ) )
{
	/**
	 * Get the path of a given media item
	 *
	 * @param $id
	 * @return bool|string
	 */
	function get_media_path( $id )
	{
		$_CI = &get_instance();
		$query = $_CI->db->get_where( 'media', "id = $id" );
		
		if ( $query->num_rows() )
		{
			$file = $query->row();
			
			return FCPATH . config_item( 'content_folder' ) . DIRECTORY_SEPARATOR . config_item( 'media_folder' ) . DIRECTORY_SEPARATOR . $file->path;
		}
		
		return FALSE;
	}
}

if ( ! function_exists( 'get_all_media_files' ) )
{
	/**
	 * Get akk the media files that match the path stored in the database
	 *
	 * @param string $needle
	 * @param string $extension
	 * @return array
	 */
	function get_all_media_files( $needle, $extension )
	{
		$similar_files = [];
		$dir = FCPATH . config_item( 'content_folder' ) . DIRECTORY_SEPARATOR . config_item( 'media_folder' );
		
		if ( is_dir( $dir ) )
		{
			if ( $dh = opendir( $dir ) )
			{
				while ( ( $file = readdir( $dh ) ) !== FALSE )
				{
					if ( preg_match( "/^{$needle}(-\d+x\d+(_c|_f)?)?\{$extension}$/", $file ) )
						$similar_files[] = $dir . DIRECTORY_SEPARATOR . $file;
					
				}
				closedir( $dh );
			}
		}
		
		return $similar_files;
	}
}

if ( ! function_exists( 'delete_file' ) )
{
	/**
	 * Delete a file
	 *
	 * @param string $file The path to the file to delete.
	 * @return bool
	 */
	function delete_file( $file )
	{
		if ( ! empty( $file ) )
		{
			return @unlink( $file );
		}
		
		return FALSE;
	}
}
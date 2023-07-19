<?php

namespace app\models;

use MY_Model;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Media_model extends MY_Model {
	
	/**
	 * @vars
	 */
	private $_db;
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
		
		// define primary table
		$this->_db = 'media';
	}
	
	/**
	 * Get list of non-deleted media items
	 *
	 * @param array $filters
	 * @param string $sort
	 * @param string $dir
	 * @param int $limit
	 * @param int $offset
	 * @return object|bool
	 */
	public function get_all( $filters = [], $sort = 'ID', $dir = 'ASC', $limit = 0, $offset = 0 )
	{
		$this->db->sql_calc_found_rows()
			->select( '*' )
			->from( $this->_db );
		
		// apply any filters
		if ( ! empty( $filters ) )
		{
			foreach ( $filters as $key => $value )
			{
				$this->db->like( $key, $value );
			}
		}
		
		$this->db->order_by( $sort, $dir );
		
		if ( $limit )
		{
			$this->db->limit( $limit, $offset );
		}
		
		$query = $this->db->get();
		
		if ( $query->num_rows() )
		{
			return $query->result();
		}
		
		return FALSE;
	}
	
	/**
	 * Get a specific media file by key value pairs array
	 *
	 * @param array $filters
	 * @return object|boolean
	 */
	public function get_by( $filters = [] )
	{
		if ( ! empty( $filters ) )
		{
			$this->db->select( '*' )
				->from( $this->_db );
			
			foreach ( $filters as $key => $value )
			{
				$this->db->like( $key, $value );
			}
			
			$this->db->limit( 1 );
			
			$query = $this->db->get();
			
			if ( $query->num_rows() )
			{
				return $query->row();
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Get a specific media file
	 *
	 * @param int $id
	 * @return object|boolean
	 */
	public function get( $id = NULL )
	{
		if ( $id )
		{
			$this->db->select( '*' )
				->from( $this->_db )
				->where( 'ID', $id );
			
			$query = $this->db->get();
			
			if ( $query->num_rows() )
			{
				return $query->row();
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Add a new media file
	 *
	 * @param array $data
	 * @return int|boolean
	 */
	public function create( $data )
	{
		$set = [
			'path'      => $data[ 'path' ],
			'file_size' => $data[ 'file_size' ],
			'file_ext'  => $data[ 'file_ext' ],
			'mime_type' => $data[ 'mime_type' ],
			'author'    => get_current_user_id(),
		];
		
		$this->db->insert( $this->_db, $set );
		
		if ( $this->db->affected_rows() )
		{
			return $this->db->insert_id();
		}
		
		return FALSE;
	}
	
	/**
	 * Edit an existing media file
	 *
	 * @param array $data
	 * @return int|boolean
	 */
	public function update( $data )
	{
		$set = [
			'path'      => $data[ 'path' ],
			'file_size' => $data[ 'file_size' ],
			'file_ext'  => $data[ 'file_ext' ],
			'mime_type' => $data[ 'mime_type' ],
		];
		
		$this->db->update( $this->_db, $set, [ 'ID' => $data[ 'id' ] ] );
		
		if ( $this->db->affected_rows() )
		{
			return $data[ 'id' ];
		}
		
		return FALSE;
	}
	
	/**
	 * Delete a media file and unlink it
	 *
	 * @param int $id
	 * @return boolean
	 */
	public function delete( $id ) : bool
	{
		if ( $id )
		{
			// get the image record before we remove it from the database
			$this->db->select( '*' )
				->from( $this->_db )
				->where( [ 'id' => $id ] );
			
			$query = $this->db->get();
			
			if ( $query->num_rows() > 0 )
			{
				$image = $query->row();
				// remove the record from the database
				$this->db->delete( $this->_db, [ 'ID' => $id ] );
				
				// if we successfully remove the record unlink the file(s)
				if ( $this->db->affected_rows() )
				{
					$files = get_all_media_files( str_replace( $image[ 'file_ext' ], '', $image[ 'path' ] ), $image[ 'file_ext' ] );
					if ( count( $files ) > 0 )
					{
						foreach ( $files as $filepath )
						{
							delete_file( $filepath );
						}
					}
					
					return TRUE;
				}
			}
			
			return FALSE;
		}
		
		return FALSE;
	}
	
	/**
	 * Handle the insertion of a media file into the database
	 *
	 * @param array $data
	 * @param array $resize_original
	 * @return string|boolean
	 */
	public function handle_upload( $data, $resize_original = [] )
	{
		$sizes = config_item( 'image_sizes' );
		$src_width = $data[ 'image_width' ];
		$src_height = $data[ 'image_height' ];
		$original = str_replace( FCPATH, '', $data[ 'full_path' ] );
		$dirname = str_replace( FCPATH, '', $data[ 'file_path' ] );
		$filename = $data[ 'raw_name' ];
		$extension = $data[ 'file_ext' ];
		
		if ( isset( $resize_original[ 'width' ], $resize_original[ 'height' ] ) && $data[ 'is_image' ] )
		{
			// initialize library
			$this->load->library( 'image_lib' );
			
			$config[ 'width' ] = $resize_original[ 'width' ];
			$config[ 'height' ] = $resize_original[ 'height' ];
			$config[ 'source_image' ] = $original;
			$config[ 'new_image' ] = $original;
			$config[ 'maintain_ratio' ] = TRUE;
			$config[ 'dynamic_output' ] = FALSE; // always save as cache
			
			$this->image_lib->initialize( $config );
			if ( ! $this->image_lib->resize() )
			{
				return $this->image_lib->display_errors();
			}
			
			$src_width = $resize_original[ 'width' ];
			$src_height = $resize_original[ 'height' ];
		}
		
		$insert = $this->create( [
			'path'      => $data[ 'file_name' ],
			'file_size' => filesize( $data[ 'full_path' ] ),
			'file_ext'  => $data[ 'file_ext' ],
			'mime_type' => $data[ 'file_type' ]
		] );
		
		if ( $insert )
		{
			if ( $data[ 'is_image' ] )
			{
				// initialize library
				$this->load->library( 'image_lib' );
				
				if ( $image = getimagesize( $original ) )
				{
					foreach ( $sizes as $size )
					{
						$width = $size[ 0 ];
						$height = $size[ 1 ];
						$ratio = $src_width / $src_height;
						if ( $width == 0 )
						{
							$width = ceil( $height * $ratio );
						}
						if ( $height == 0 )
						{
							$height = ceil( $width / $ratio );
						}
						$path = $dirname . $filename . '-' . $width . 'x' . $height . $extension;
						if ( ! file_exists( $path ) && $width > 0 && $height > 0 && ( $src_width > $width || $src_height > $height ) )
						{
							$config[ 'width' ] = $width;
							$config[ 'height' ] = $height;
							$config[ 'source_image' ] = $original;
							$config[ 'new_image' ] = $path;
							$config[ 'dynamic_output' ] = FALSE; // always save as cache
							
							$this->image_lib->initialize( $config );
							if ( ! $this->image_lib->resize() )
							{
								return $this->image_lib->display_errors();
							}
							
							return $insert;
						}
					}
				}
			}
			else
			{
				return $insert;
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Handle the insertion of a media file into the database
	 *
	 * @param        $file
	 * @return int|boolean
	 */
	public function handle_side_load( $file )
	{
		if ( is_file( $file ) )
		{
			$filedata = file_get_contents( $file );
			$name = basename( $file );
			
			$newfile = FCPATH . config_item( 'content_folder' ) . DIRECTORY_SEPARATOR . config_item( 'media_folder' ) . DIRECTORY_SEPARATOR . $name;
			
			if ( is_file( $newfile ) )
			{
				delete_file( $newfile );
			}
			
			if ( write_file( $newfile, $filedata ) )
			{
				$file_info = get_file_info( $newfile );
				$path_parts = pathinfo( $newfile );
				$file_size = getimagesize( $newfile );
				
				$data = [
					'file_name'      => $path_parts[ 'basename' ],
					'file_type'      => get_mime_by_extension( $path_parts[ 'basename' ] ),
					'file_path'      => $path_parts[ 'dirname' ] . DIRECTORY_SEPARATOR,
					'full_path'      => $file_info[ 'server_path' ],
					'raw_name'       => $path_parts[ 'filename' ],
					'orig_name'      => $path_parts[ 'basename' ],
					'client_name'    => '',
					'file_ext'       => '.' . $path_parts[ 'extension' ],
					'file_size'      => $file_info[ 'size' ],
					'is_image'       => ( ! empty( $file_size ) ? 1 : '' ),
					'image_width'    => $file_size[ 0 ],
					'image_height'   => $file_size[ 1 ],
					'image_type'     => '',
					'image_size_str' => ''
				];
				
				$set = [
					'path'      => $data[ 'file_name' ],
					'file_size' => filesize( $data[ 'full_path' ] ),
					'file_ext'  => $data[ 'file_ext' ],
					'mime_type' => $data[ 'file_type' ],
				];
				
				if ( $insert = $this->create( $set ) )
				{
					return $insert;
				}
			}
		}
		
		return FALSE;
	}
	
}
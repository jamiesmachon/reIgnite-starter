<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

if ( ! function_exists( 'ci_no_admin_access' ) )
{
	/**
	 * No admin access
	 *
	 * @return void
	 */
	function ci_no_admin_access()
	{
		get_instance()->session->set_flashdata( 'error', lang( 'core error access_forbidden' ) );
		// redirect to admin
		redirect( 'admin' );
	}
}

if ( ! function_exists( 'ci_ajax_response' ) )
{
	/**
	 * helper function for returning json data in an ajax call
	 *
	 * @param $response
	 * @return void
	 */
	function ci_ajax_response( $response = [] )
	{
		if ( $response )
		{
			echo json_encode( $response );
		}
		session_write_close();
		die();
	}
}

if ( ! function_exists( 'ip_info' ) )
{
	/**
	 * Get information about this users IP address
	 *
	 * @param null $ip
	 * @param string $purpose
	 * @param bool $deep_detect
	 * @return mixed|object|string|null
	 */
	function ip_info( $ip = NULL, $purpose = "all", $deep_detect = TRUE )
	{
		$return = NULL;
		if ( filter_var( $ip, FILTER_VALIDATE_IP ) === FALSE )
		{
			$ip = $_SERVER[ "REMOTE_ADDR" ];
			if ( $deep_detect )
			{
				if ( filter_var( @$_SERVER[ 'HTTP_X_FORWARDED_FOR' ], FILTER_VALIDATE_IP ) )
					$ip = $_SERVER[ 'HTTP_X_FORWARDED_FOR' ];
				if ( filter_var( @$_SERVER[ 'HTTP_CLIENT_IP' ], FILTER_VALIDATE_IP ) )
					$ip = $_SERVER[ 'HTTP_CLIENT_IP' ];
			}
		}
		
		$purpose = str_replace( [ "name", "\n", "\t", " ", "-", "_" ], NULL, strtolower( trim( $purpose ) ) );
		$support = [ "all", "location", "address", "city", "state", "region", "country", "countrycode" ];
		
		if ( filter_var( $ip, FILTER_VALIDATE_IP ) && in_array( $purpose, $support ) )
		{
			$ipdat = @json_decode( file_get_contents( "http://www.geoplugin.net/json.gp?ip=" . $ip ) );
			if ( @strlen( trim( $ipdat->geoplugin_countryCode ) ) == 2 )
			{
				switch ( $purpose )
				{
					case "all":
						$return = (array) @$ipdat;
						break;
					case "location":
						$return = (array) [
							"geoplugin_city"          => @$ipdat->geoplugin_city,
							"geoplugin_regionName"    => @$ipdat->geoplugin_regionName,
							"geoplugin_countryName"   => @$ipdat->geoplugin_countryName,
							"geoplugin_countryCode"   => @$ipdat->geoplugin_countryCode,
							"geoplugin_continentName" => @$ipdat->geoplugin_continentName,
							"geoplugin_continentCode" => @$ipdat->geoplugin_continentCode
						];
						break;
					case "address":
						$address = [ $ipdat->geoplugin_countryName ];
						if ( @strlen( $ipdat->geoplugin_regionName ) >= 1 )
							$address[] = $ipdat->geoplugin_regionName;
						if ( @strlen( $ipdat->geoplugin_city ) >= 1 )
							$address[] = $ipdat->geoplugin_city;
						$return = implode( ", ", array_reverse( $address ) );
						break;
					case "city":
						$return = @$ipdat->geoplugin_city;
						break;
					case "state":
						$return = @$ipdat->geoplugin_regionName;
						break;
					case "region":
						$return = @$ipdat->geoplugin_regionName;
						break;
					case "country":
						$return = @$ipdat->geoplugin_countryName;
						break;
					case "countrycode":
						$return = @$ipdat->geoplugin_countryCode;
						break;
				}
			}
		}
		return $return;
	}
}

if ( ! function_exists( 'is_ci_error' ) )
{
	/**
	 * Check whether variable is a CI_Error Error.
	 * Returns true if $thing is an object of the CI_Error class.
	 *
	 * @param mixed $thing Check if unknown variable is a CI_Error object.
	 * @return bool True, if CI_Error. False, if not CI_Error.
	 */
	function is_ci_error( $thing )
	{
		return ( $thing instanceof CI_Error );
	}
}

if ( ! function_exists( 'display_json' ) )
{
	/**
	 * Outputs an array in a user-readable JSON format
	 *
	 * @param array $array
	 */
	function display_json( $array )
	{
		$data = json_indent( $array );
		
		header( 'Cache-Control: no-cache, must-revalidate' );
		header( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' );
		header( 'Content-type: application/json' );
		
		echo $data;
	}
}

if ( ! function_exists( 'json_indent' ) )
{
	/**
	 * Convert an array to a user-readable JSON string
	 *
	 * @param array $array - The original array to convert to JSON
	 * @return string - Friendly formatted JSON string
	 */
	function json_indent( $array = [] )
	{
		// make sure array is provided
		if ( empty( $array ) )
		{
			return NULL;
		}
		
		//Encode the string
		$json = json_encode( $array );
		
		$result = '';
		$pos = 0;
		$str_len = strlen( $json );
		$indent_str = '  ';
		$new_line = "\n";
		$prev_char = '';
		$out_of_quotes = TRUE;
		
		for ( $i = 0; $i <= $str_len; $i++ )
		{
			// grab the next character in the string
			$char = substr( $json, $i, 1 );
			
			// are we inside a quoted string?
			if ( $char == '"' && $prev_char != '\\' )
			{
				$out_of_quotes = ! $out_of_quotes;
			} // if this character is the end of an element, output a new line and indent the next line
			else if ( ( $char == '}' or $char == ']' ) && $out_of_quotes )
			{
				$result .= $new_line;
				$pos--;
				
				for ( $j = 0; $j < $pos; $j++ )
				{
					$result .= $indent_str;
				}
			}
			
			// add the character to the result string
			$result .= $char;
			
			// if the last character was the beginning of an element, output a new line and indent the next line
			if ( ( $char == ',' or $char == '{' or $char == '[' ) && $out_of_quotes )
			{
				$result .= $new_line;
				
				if ( $char == '{' or $char == '[' )
				{
					$pos++;
				}
				
				for ( $j = 0; $j < $pos; $j++ )
				{
					$result .= $indent_str;
				}
			}
			
			$prev_char = $char;
		}
		
		// return result
		return $result . $new_line;
	}
}

if ( ! function_exists( 'array_to_csv' ) )
{
	/**
	 * Save data to a CSV file and return filename
	 *
	 * @param array $array
	 * @return boolean|string
	 */
	function array_to_csv( $array = [] )
	{
		// disable the profiler otherwise header errors will occur
		get_instance()->output->enable_profiler( FALSE );
		
		if ( ! empty( $array ) )
		{
			try
			{
				$filename = tempnam( sys_get_temp_dir(), 'array_to_csv_' . date( 'd-m-Y-His' ) ) . '.csv';
				$output = fopen( $filename, 'w' );
				
				// used to determine header row
				$header_displayed = FALSE;
				
				foreach ( $array as $row )
				{
					if ( ! $header_displayed )
					{
						// use the array keys as the header row
						fputcsv( $output, array_keys( $row ) );
						$header_displayed = TRUE;
					}
					
					// clean the data
					$allowed = '/[^a-zA-Z0-9_,;: %\/\|\[\]\.\(\)%&-]/s';
					foreach ( $row as $key => $value )
					{
						$row[ $key ] = preg_replace( $allowed, '', $value );
					}
					
					// insert the data
					fputcsv( $output, $row );
				}
				
				fclose( $output );
				
				return $filename;
				
			} catch ( Exception $e )
			{
				return FALSE;
			}
		}
		
		return FALSE;
	}
}

if ( ! function_exists( 'csv_to_browser' ) )
{
	/**
	 * Save data to a CSV file and output to browser
	 *
	 * @param array $array
	 * @param string $filename
	 * @return bool
	 */
	function csv_to_browser( $array = [], $filename = "export.csv" )
	{
		// disable the profiler otherwise header errors will occur
		get_instance()->output->enable_profiler( FALSE );
		
		if ( ! empty( $array ) )
		{
			// ensure proper file extension is used
			if ( ! substr( strrchr( $filename, '.csv' ), 1 ) )
			{
				$filename .= '.csv';
			}
			
			try
			{
				// set the headers for file download
				header( 'Expires: ' . gmdate( 'D, d M Y H:i:s', time() + ( 60 * 60 ) ) . "GMT" ); // 1 hour
				header( "Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );
				header( "Cache-Control: no-cache, must-revalidate" );
				header( "Pragma: no-cache" );
				header( "Content-type: text/csv" );
				header( "Content-Description: File Transfer" );
				header( "Content-Disposition: attachment; filename={$filename}" );
				
				$output = @fopen( 'php://output', 'w' );
				
				// used to determine header row
				$header_displayed = FALSE;
				
				foreach ( $array as $row )
				{
					if ( ! $header_displayed )
					{
						// use the array keys as the header row
						fputcsv( $output, array_keys( $row ) );
						$header_displayed = TRUE;
					}
					
					// clean the data
					$allowed = '/[^a-zA-Z0-9_,;: %\/\|\[\]\.\(\)%&-]/s';
					foreach ( $row as $key => $value )
					{
						$row[ $key ] = preg_replace( $allowed, '', $value );
					}
					
					// insert the data
					fputcsv( $output, $row );
				}
				
				fclose( $output );
				
			} catch ( Exception $e )
			{
				return FALSE;
			}
		}
		
		exit;
	}
}

if ( ! function_exists( 'force_download' ) )
{
	/**
	 * Force Download
	 * Generates headers that force a download to happen
	 *
	 * @param string    filename
	 * @param mixed    the data to be downloaded
	 * @param bool    whether to try and send the actual file MIME type
	 * @return    void
	 */
	function force_download( $file = '', $filename = '', $data = '', $set_mime = FALSE )
	{
		if ( $file === '' or ( $data === '' && $filename === '' ) )
		{
			return;
		}
		else if ( $data === NULL )
		{
			if ( ! @is_file( $file ) or ( $filesize = @filesize( $file ) ) === FALSE )
			{
				return;
			}
			if ( empty( $filename ) )
			{
				$filename = $file;
			}
			$filepath = $file;
			$filename = explode( '/', str_replace( DIRECTORY_SEPARATOR, '/', $filename ) );
			$filename = end( $filename );
		}
		else
		{
			$filesize = strlen( $data );
		}
		
		// Set the default MIME type to send
		$mime = 'application/octet-stream';
		
		$x = explode( '.', $filename );
		$extension = end( $x );
		
		if ( $set_mime === TRUE )
		{
			if ( count( $x ) === 1 or $extension === '' )
			{
				/* If we're going to detect the MIME type,
				 * we'll need a file extension.
				 */
				return;
			}
			
			// Load the mime types
			$mimes =& get_mimes();
			
			// Only change the default MIME if we can find one
			if ( isset( $mimes[ $extension ] ) )
			{
				$mime = is_array( $mimes[ $extension ] ) ? $mimes[ $extension ][ 0 ] : $mimes[ $extension ];
			}
		}
		
		/* It was reported that browsers on Android 2.1 (and possibly older as well)
		 * need to have the filename extension upper-cased in order to be able to
		 * download it.
		 *
		 * Reference: http://digiblog.de/2011/04/19/android-and-the-download-file-headers/
		 */
		if ( count( $x ) !== 1 && isset( $_SERVER[ 'HTTP_USER_AGENT' ] ) && preg_match( '/Android\s(1|2\.[01])/', $_SERVER[ 'HTTP_USER_AGENT' ] ) )
		{
			$x[ count( $x ) - 1 ] = strtoupper( $extension );
			$filename = implode( '.', $x );
		}
		
		if ( $data === NULL && ( $fp = @fopen( $filepath, 'rb' ) ) === FALSE )
		{
			return;
		}
		
		// Clean output buffer
		if ( ob_get_level() !== 0 && @ob_end_clean() === FALSE )
		{
			@ob_clean();
		}
		
		// Generate the server headers
		header( 'Content-Type: ' . $mime );
		header( 'Content-Disposition: attachment; filename="' . $filename . '"' );
		header( 'Expires: 0' );
		header( 'Content-Transfer-Encoding: binary' );
		header( 'Content-Length: ' . $filesize );
		header( 'Cache-Control: private, no-transform, no-store, must-revalidate' );
		
		// If we have raw data - just dump it
		if ( $data !== NULL )
		{
			exit( $data );
		}
		
		// Flush 1MB chunks of data
		while ( ! feof( $fp ) && ( $data = fread( $fp, 1048576 ) ) !== FALSE )
		{
			echo $data;
		}
		
		fclose( $fp );
		exit;
	}
}

if ( ! function_exists( 'generate_random_password' ) )
{
	/**
	 * Generates a random password
	 *
	 * @return string
	 */
	function generate_random_password()
	{
		$characters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = [];
		$alpha_length = strlen( $characters ) - 1;
		
		for ( $i = 0; $i < 8; $i++ )
		{
			$n = rand( 0, $alpha_length );
			$pass[] = $characters[ $n ];
		}
		
		return implode( $pass );
	}
}

if ( ! function_exists( 'is_serialized' ) )
{
	/**
	 * Check value to find if it was serialized.
	 * If $data is not an string, then returned value will always be false.
	 * Serialized data is always a string.
	 *
	 * @param string $data Value to check to see if was serialized.
	 * @param bool $strict Optional. Whether to be strict about the end of the string. Default true.
	 * @return bool False if not serialized and true if it was.
	 */
	function is_serialized( $data, $strict = TRUE )
	{
		// if it isn't a string, it isn't serialized.
		if ( ! is_string( $data ) )
		{
			return FALSE;
		}
		$data = trim( $data );
		if ( 'N;' == $data )
		{
			return TRUE;
		}
		if ( strlen( $data ) < 4 )
		{
			return FALSE;
		}
		if ( ':' !== $data[ 1 ] )
		{
			return FALSE;
		}
		if ( $strict )
		{
			$lastc = substr( $data, -1 );
			if ( ';' !== $lastc && '}' !== $lastc )
			{
				return FALSE;
			}
		}
		else
		{
			$semicolon = strpos( $data, ';' );
			$brace = strpos( $data, '}' );
			// Either ; or } must exist.
			if ( FALSE === $semicolon && FALSE === $brace )
				return FALSE;
			// But neither must be in the first X characters.
			if ( FALSE !== $semicolon && $semicolon < 3 )
				return FALSE;
			if ( FALSE !== $brace && $brace < 4 )
				return FALSE;
		}
		$token = $data[ 0 ];
		switch ( $token )
		{
			case 's' :
				if ( $strict )
				{
					if ( '"' !== substr( $data, -2, 1 ) )
					{
						return FALSE;
					}
				}
				elseif ( FALSE === strpos( $data, '"' ) )
				{
					return FALSE;
				}
			// or else fall through
			case 'a' :
			case 'O' :
				return (bool) preg_match( "/^{$token}:[0-9]+:/s", $data );
			case 'b' :
			case 'i' :
			case 'd' :
				$end = $strict ? '$' : '';
				return (bool) preg_match( "/^{$token}:[0-9.E-]+;$end/", $data );
		}
		return FALSE;
	}
}

if ( ! function_exists( 'is_serialized_string' ) )
{
	/**
	 * Check whether serialized data is of string type.
	 *
	 * @param string $data Serialized data.
	 * @return bool False if not a serialized string, true if it is.
	 */
	function is_serialized_string( $data )
	{
		// if it isn't a string, it isn't a serialized string.
		if ( ! is_string( $data ) )
		{
			return FALSE;
		}
		$data = trim( $data );
		if ( strlen( $data ) < 4 )
		{
			return FALSE;
		}
		elseif ( ':' !== $data[ 1 ] )
		{
			return FALSE;
		}
		elseif ( ';' !== substr( $data, -1 ) )
		{
			return FALSE;
		}
		elseif ( $data[ 0 ] !== 's' )
		{
			return FALSE;
		}
		elseif ( '"' !== substr( $data, -2, 1 ) )
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}

if ( ! function_exists( 'maybe_serialize' ) )
{
	/**
	 * Serialize data, if needed.
	 *
	 * @param string|array|object $data Data that might be serialized.
	 * @return mixed A scalar data
	 */
	function maybe_serialize( $data )
	{
		if ( is_array( $data ) || is_object( $data ) )
			return serialize( $data );
		
		// Double serialization is required for backward compatibility.
		// See https://core.trac.wordpress.org/ticket/12930
		// Also the world will end. See WP 3.6.1.
		if ( is_serialized( $data, FALSE ) )
			return serialize( $data );
		
		return $data;
	}
}

if ( ! function_exists( 'maybe_unserialize' ) )
{
	/**
	 * Unserialize value only if it was serialized.
	 *
	 * @param string $original Maybe unserialized original, if is needed.
	 * @return mixed Unserialized data can be any type.
	 */
	function maybe_unserialize( $original )
	{
		if ( is_serialized( $original ) ) // don't attempt to unserialize data that wasn't serialized going in
			return @unserialize( $original );
		return $original;
	}
}

if ( ! function_exists( 'maybe_json_encode' ) )
{
	/**
	 * Serialize data, if needed.
	 *
	 * @param string|array|object $data Data that might be serialized.
	 * @return mixed A scalar data
	 */
	function maybe_json_encode( $data )
	{
		if ( is_array( $data ) || is_object( $data ) )
			return json_encode( $data );
		
		return $data;
	}
}

if ( ! function_exists( 'maybe_json_decode' ) )
{
	/**
	 * Unserialize value only if it was serialized.
	 *
	 * @param string $original Maybe unserialized original, if is needed.
	 * @return mixed Unserialized data can be any type.
	 */
	function maybe_json_decode( $original )
	{
		if ( is_string( $original ) && is_array( json_decode( $original, TRUE ) ) && ( json_last_error() == JSON_ERROR_NONE ) ) // don't attempt to unserialize data that wasn't serialized going in
			return @json_decode( $original );
		
		return $original;
	}
}

if ( ! function_exists( 'ci_json_encode' ) )
{
	/**
	 * Encodes a variable into JSON, with some sanity checks.
	 *
	 * @param mixed $data Variable (usually an array or object) to encode as JSON.
	 * @param int $options Optional. Options to be passed to json_encode(). Default 0.
	 * @param int $depth Optional. Maximum depth to walk through $data. Must be
	 *                       greater than 0. Default 512.
	 * @return string|false The JSON encoded string, or false if it cannot be encoded.
	 */
	function ci_json_encode( $data, $options = 0, $depth = 512 )
	{
		$json = json_encode( $data, $options, $depth );
		
		// If json_encode() was successful, no need to do more sanity checking.
		if ( FALSE !== $json )
		{
			return $json;
		}
		
		try
		{
			$data = _ci_json_sanity_check( $data, $depth );
		} catch ( Exception $e )
		{
			return FALSE;
		}
		
		return json_encode( $data, $options, $depth );
	}
}

if ( ! function_exists( '_ci_json_sanity_check' ) )
{
	/**
	 * Performs sanity checks on data that shall be encoded to JSON.
	 *
	 * @param mixed $data Variable (usually an array or object) to encode as JSON.
	 * @param int $depth Maximum depth to walk through $data. Must be greater than 0.
	 * @return mixed The sanitized data that shall be encoded to JSON.
	 * @throws Exception If depth limit is reached.
	 *
	 * @ignore
	 * @access private
	 *
	 * @see ci_json_encode()
	 *
	 */
	function _ci_json_sanity_check( $data, $depth )
	{
		if ( $depth < 0 )
		{
			throw new Exception( 'Reached depth limit' );
		}
		
		if ( is_array( $data ) )
		{
			$output = [];
			foreach ( $data as $id => $el )
			{
				// Don't forget to sanitize the ID!
				if ( is_string( $id ) )
				{
					$clean_id = _ci_json_convert_string( $id );
				}
				else
				{
					$clean_id = $id;
				}
				
				// Check the element type, so that we're only recursing if we really have to.
				if ( is_array( $el ) || is_object( $el ) )
				{
					$output[ $clean_id ] = _ci_json_sanity_check( $el, $depth - 1 );
				}
				elseif ( is_string( $el ) )
				{
					$output[ $clean_id ] = _ci_json_convert_string( $el );
				}
				else
				{
					$output[ $clean_id ] = $el;
				}
			}
		}
		elseif ( is_object( $data ) )
		{
			$output = new stdClass;
			foreach ( $data as $id => $el )
			{
				if ( is_string( $id ) )
				{
					$clean_id = _ci_json_convert_string( $id );
				}
				else
				{
					$clean_id = $id;
				}
				
				if ( is_array( $el ) || is_object( $el ) )
				{
					$output->$clean_id = _ci_json_sanity_check( $el, $depth - 1 );
				}
				elseif ( is_string( $el ) )
				{
					$output->$clean_id = _ci_json_convert_string( $el );
				}
				else
				{
					$output->$clean_id = $el;
				}
			}
		}
		elseif ( is_string( $data ) )
		{
			return _ci_json_convert_string( $data );
		}
		else
		{
			return $data;
		}
		
		return $output;
	}
}

if ( ! function_exists( '_ci_json_convert_string' ) )
{
	/**
	 * Converts a string to UTF-8, so that it can be safely encoded to JSON.
	 *
	 * @param string $string The string which is to be converted.
	 * @return string The checked string.
	 * @ignore
	 * @access private
	 *
	 * @see _ci_json_sanity_check()
	 *
	 */
	function _ci_json_convert_string( $string )
	{
		static $use_mb = NULL;
		if ( is_null( $use_mb ) )
		{
			$use_mb = function_exists( 'mb_convert_encoding' );
		}
		
		if ( $use_mb )
		{
			$encoding = mb_detect_encoding( $string, mb_detect_order(), TRUE );
			if ( $encoding )
			{
				return mb_convert_encoding( $string, 'UTF-8', $encoding );
			}
			else
			{
				return mb_convert_encoding( $string, 'UTF-8', 'UTF-8' );
			}
		}
		else
		{
			return ci_check_invalid_utf8( $string, TRUE );
		}
	}
}

if ( ! function_exists( 'ci_check_invalid_utf8' ) )
{
	/**
	 * Checks for invalid UTF8 in a string.
	 *
	 * @param string $string The text which is to be checked.
	 * @param bool $strip Optional. Whether to attempt to strip out invalid UTF8. Default false.
	 * @return string The checked text.
	 * @since 2.8.0
	 *
	 */
	function ci_check_invalid_utf8( $string, $strip = FALSE )
	{
		$string = (string) $string;
		
		if ( 0 === strlen( $string ) )
		{
			return '';
		}
		
		// Store the site charset as a static to avoid multiple calls to get_option().
		static $is_utf8 = NULL;
		if ( ! isset( $is_utf8 ) )
		{
			$is_utf8 = in_array( get_option( 'charset' ), [ 'utf8', 'utf-8', 'UTF8', 'UTF-8' ], TRUE );
		}
		if ( ! $is_utf8 )
		{
			return $string;
		}
		
		// Check for support for utf8 in the installed PCRE library once and store the result in a static.
		static $utf8_pcre = NULL;
		if ( ! isset( $utf8_pcre ) )
		{
			// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged
			$utf8_pcre = @preg_match( '/^./u', 'a' );
		}
		// We can't demand utf8 in the PCRE installation, so just return the string in those cases.
		if ( ! $utf8_pcre )
		{
			return $string;
		}
		
		// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged -- preg_match fails when it encounters invalid UTF8 in $string.
		if ( 1 === @preg_match( '/^./us', $string ) )
		{
			return $string;
		}
		
		// Attempt to strip the bad chars if requested (not recommended).
		if ( $strip && function_exists( 'iconv' ) )
		{
			return iconv( 'utf-8', 'utf-8', $string );
		}
		
		return '';
	}
}

if ( ! function_exists( 'nocache_headers' ) )
{
	/**
	 * Set the headers to prevent caching for the different browsers.
	 * Different browsers support different nocache headers, so several
	 * headers must be sent so that all of them get the point that no
	 * caching should occur.
	 */
	function nocache_headers()
	{
		$headers = [
			'Expires'       => 'Wed, 11 Jan 1984 05:00:00 GMT',
			'Cache-Control' => 'no-cache, must-revalidate, max-age=0',
			'Last-Modified' => FALSE
		];
		
		unset( $headers[ 'Last-Modified' ] );
		
		// In PHP 5.3+, make sure we are not sending a Last-Modified header.
		if ( function_exists( 'header_remove' ) )
		{
			@header_remove( 'Last-Modified' );
		}
		else
		{
			// In PHP 5.2, send an empty Last-Modified header, but only as a
			// last resort to override a header already sent. #WP23021
			foreach ( headers_list() as $header )
			{
				if ( 0 === stripos( $header, 'Last-Modified' ) )
				{
					$headers[ 'Last-Modified' ] = '';
					break;
				}
			}
		}
		
		foreach ( $headers as $name => $field_value )
			@header( "{$name}: {$field_value}" );
	}
}

if ( ! function_exists( 'ci_check_filetype' ) )
{
	/**
	 * Retrieve the file type from the file name.
	 * You can optionally define the mime array, if needed.
	 *
	 * @param string $filename File name or path.
	 * @param array $mimes Optional. Key is the file extension with value as the mime type.
	 * @return array Values with extension first and mime type.
	 */
	function ci_check_filetype( $filename, $mimes = NULL )
	{
		if ( empty( $mimes ) )
			$mimes = get_mimes();
		$type = FALSE;
		$ext = FALSE;
		
		foreach ( $mimes as $ext_preg => $mime_match )
		{
			$ext_preg = '!\.(' . $ext_preg . ')$!i';
			if ( preg_match( $ext_preg, $filename, $ext_matches ) )
			{
				$type = $mime_match;
				$ext = $ext_matches[ 1 ];
				break;
			}
		}
		
		return compact( 'ext', 'type' );
	}
}

if ( ! function_exists( 'absint' ) )
{
	/**
	 * Convert a value to non-negative integer.
	 *
	 * @param mixed $maybeint Data you wish to have converted to a non-negative integer.
	 * @return int A non-negative integer.
	 */
	function absint( $maybeint )
	{
		return abs( (int) $maybeint );
	}
}

if ( ! function_exists( 'ci_parse_args' ) )
{
	/**
	 * Merge user defined arguments into defaults array.
	 * This function is used to allow for both string or array
	 * to be merged into another array.
	 *
	 * @param string|array|object $args Value to merge with $defaults.
	 * @param array $defaults Optional. Array that serves as the defaults. Default empty.
	 * @return array Merged user defined values with defaults.
	 */
	function ci_parse_args( $args, $defaults = '' )
	{
		if ( is_object( $args ) )
			$r = get_object_vars( $args );
		elseif ( is_array( $args ) )
			$r =& $args;
		else
			ci_parse_str( $args, $r );
		
		if ( is_array( $defaults ) )
			return array_merge( $defaults, $r );
		return $r;
	}
}

if ( ! function_exists( 'url_exists' ) )
{
	/**
	 * URL Exists
	 *
	 * @param array $remoteFile
	 * @return boolean
	 */
	function url_exists( $remoteFile )
	{
		// Open file
		$handle = @fopen( $remoteFile, 'r' );
		
		// Check if file exists
		if ( ! $handle )
		{
			return TRUE;
		}
		
		return FALSE;
	}
}

if ( ! function_exists( 'ci_is_numeric_array' ) )
{
	/**
	 * Determines if the variable is a numeric-indexed array.
	 *
	 * @param mixed $data Variable to check.
	 * @return bool Whether the variable is a list.
	 */
	function ci_is_numeric_array( $data )
	{
		if ( ! is_array( $data ) )
		{
			return FALSE;
		}
		
		$keys = array_keys( $data );
		$string_keys = array_filter( $keys, 'is_string' );
		
		return count( $string_keys ) === 0;
	}
}

if ( ! function_exists( 'ci_list_pluck' ) )
{
	/**
	 * Plucks a certain field out of each object or array in an array.
	 *
	 * This has the same functionality and prototype of
	 * array_column() (PHP 5.5) but also supports objects.
	 *
	 * @param array $list List of objects or arrays.
	 * @param int|string $field Field from the object to place instead of the entire object.
	 * @param int|string $index_key Optional. Field from the object to use as keys for the new array.
	 *                              Default null.
	 * @return array Array of found values. If `$index_key` is set, an array of found values with keys
	 *               corresponding to `$index_key`. If `$index_key` is null, array keys from the original
	 *               `$list` will be preserved in the results.
	 */
	function ci_list_pluck( $list, $field, $index_key = NULL )
	{
		if ( ! is_array( $list ) )
		{
			return [];
		}
		
		$util = new CI_List_Util( $list );
		
		return $util->pluck( $field, $index_key );
	}
}


/**
 * When catching an exception, this allows us to log it if unexpected.
 *
 * @param Exception $exception_object The exception object.
 * @param string $function The function which threw exception.
 * @param array $args The args passed to the function.
 */
function ci_caught_exception( $exception_object, $function = '', $args = [] )
{
	// @codingStandardsIgnoreStart
	$message = $exception_object->getMessage();
	$message .= '. Args: ' . print_r( $args, TRUE ) . '.';
	
	error_log( "Exception caught in {$function}. {$message}." );
}
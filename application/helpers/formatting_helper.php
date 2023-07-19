<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

if ( ! function_exists( 'ci_parse_str' ) )
{
	/**
	 * Parses a string into variables to be stored in an array.
	 * Uses {@link https://secure.php.net/parse_str parse_str()} and stripslashes if
	 * {@link https://secure.php.net/magic_quotes magic_quotes_gpc} is on.
	 *
	 * @param string $string The string to be parsed.
	 * @param array $array Variables will be stored in this array.
	 */
	function ci_parse_str( $string, &$array )
	{
		parse_str( $string, $array );
		if ( get_magic_quotes_gpc() )
			$array = stripslashes_from_strings_only( $array );
	}
}

if ( ! function_exists( 'stripslashes_from_strings_only' ) )
{
	/**
	 * Function which strips slashes from strings.
	 *
	 * @param mixed $value The array or string to be stripped.
	 * @return mixed $value The stripped value.
	 */
	function stripslashes_from_strings_only( $value )
	{
		return is_string( $value ) ? stripslashes( $value ) : $value;
	}
}

if ( ! function_exists( 'ci_check_invalid_utf8' ) )
{
	/**
	 * Checks for invalid UTF8 in a string.
	 *
	 * @staticvar bool $is_utf8
	 * @staticvar bool $utf8_pcre
	 * @param string $string The text which is to be checked.
	 * @param bool $strip Optional. Whether to attempt to strip out invalid UTF8. Default is false.
	 * @return string The checked text.
	 */
	function ci_check_invalid_utf8( $string, $strip = FALSE )
	{
		$string = (string) $string;
		
		if ( 0 === strlen( $string ) )
		{
			return '';
		}
		
		// Store the site charset as a static to avoid multiple calls to get_option()
		static $is_utf8 = NULL;
		if ( ! isset( $is_utf8 ) )
		{
			$is_utf8 = in_array( 'UTF-8', [ 'utf8', 'utf-8', 'UTF8', 'UTF-8' ] );
		}
		if ( ! $is_utf8 )
		{
			return $string;
		}
		
		// Check for support for utf8 in the installed PCRE library once and store the result in a static
		static $utf8_pcre = NULL;
		if ( ! isset( $utf8_pcre ) )
		{
			$utf8_pcre = @preg_match( '/^./u', 'a' );
		}
		// We can't demand utf8 in the PCRE installation, so just return the string in those cases
		if ( ! $utf8_pcre )
		{
			return $string;
		}
		
		// preg_match fails when it encounters invalid UTF8 in $string
		if ( 1 === @preg_match( '/^./us', $string ) )
		{
			return $string;
		}
		
		// Attempt to strip the bad chars if requested (not recommended)
		if ( $strip && function_exists( 'iconv' ) )
		{
			return iconv( 'utf-8', 'utf-8', $string );
		}
		
		return '';
	}
}

if ( ! function_exists( 'ci_pre_kses_less_than' ) )
{
	/**
	 * Convert lone less than signs.
	 * KSES already converts lone greater than signs.
	 *
	 * @param string $text Text to be converted.
	 * @return string Converted text.
	 */
	function ci_pre_kses_less_than( $text )
	{
		return preg_replace_callback( '%<[^>]*?((?=<)|>|$)%', 'ci_pre_kses_less_than_callback', $text );
	}
}

if ( ! function_exists( 'ci_pre_kses_less_than_callback' ) )
{
	/**
	 * Callback function used by preg_replace.
	 *
	 * @param array $matches Populated by matches to preg_replace.
	 * @return string The text returned after esc_html if needed.
	 */
	function ci_pre_kses_less_than_callback( $matches )
	{
		if ( FALSE === strpos( $matches[ 0 ], '>' ) )
			return $matches[ 0 ];
		
		return $matches[ 0 ];
	}
}

if ( ! function_exists( 'ci_strip_all_tags' ) )
{
	/**
	 * Properly strip all HTML tags including script and style
	 * This differs from strip_tags() because it removes the contents of
	 * the `<script>` and `<style>` tags. E.g. `strip_tags( '<script>something</script>' )`
	 * will return 'something'. ci_strip_all_tags will return ''
	 *
	 * @param string $string String containing HTML tags
	 * @param bool $remove_breaks Optional. Whether to remove left over line breaks and white space chars
	 * @return string The processed string.
	 */
	function ci_strip_all_tags( $string, $remove_breaks = FALSE )
	{
		$string = preg_replace( '@<(script|style)[^>]*?>.*?</\\1>@si', '', $string );
		$string = strip_tags( $string );
		
		if ( $remove_breaks )
			$string = preg_replace( '/[\r\n\t ]+/', ' ', $string );
		
		return trim( $string );
	}
}

if ( ! function_exists( 'sanitize_text_field' ) )
{
	/**
	 * Sanitizes a string from user input or from the database.
	 * - Checks for invalid UTF-8,
	 * - Converts single `<` characters to entities
	 * - Strips all tags
	 * - Removes line breaks, tabs, and extra whitespace
	 * - Strips octets
	 *
	 * @param string $str String to sanitize.
	 * @return string Sanitized string.
	 */
	function sanitize_text_field( $str )
	{
		$filtered = ci_check_invalid_utf8( $str );
		
		if ( strpos( $filtered, '<' ) !== FALSE )
		{
			$filtered = ci_pre_kses_less_than( $filtered );
			// This will strip extra whitespace for us.
			$filtered = ci_strip_all_tags( $filtered, TRUE );
		}
		else
		{
			$filtered = trim( preg_replace( '/[\r\n\t ]+/', ' ', $filtered ) );
		}
		
		$found = FALSE;
		while ( preg_match( '/%[a-f0-9]{2}/i', $filtered, $match ) )
		{
			$filtered = str_replace( $match[ 0 ], '', $filtered );
			$found = TRUE;
		}
		
		if ( $found )
		{
			// Strip out the whitespace that may now exist after removing the octets.
			$filtered = trim( preg_replace( '/ +/', ' ', $filtered ) );
		}
		
		return $filtered;
	}
}

if ( ! function_exists( 'ci_clean' ) )
{
	/**
	 * Clean variables using sanitize_text_field. Arrays are cleaned recursively.
	 * Non-scalar values are ignored.
	 *
	 * @param string|array $var
	 * @return string|array
	 */
	function ci_clean( $var )
	{
		if ( is_array( $var ) )
		{
			return array_map( 'ci_clean', $var );
		}
		else
		{
			return is_scalar( $var ) ? sanitize_text_field( $var ) : $var;
		}
	}
}

if ( ! function_exists( 'map_deep' ) )
{
	/**
	 * Maps a function to all non-iterable elements of an array or an object.
	 * This is similar to `array_walk_recursive()` but acts upon objects too.
	 *
	 * @param mixed $value The array, object, or scalar.
	 * @param callable $callback The function to map onto $value.
	 * @return mixed The value with the callback applied to all non-arrays and non-objects inside it.
	 */
	function map_deep( $value, $callback )
	{
		if ( is_array( $value ) )
		{
			foreach ( $value as $index => $item )
			{
				$value[ $index ] = map_deep( $item, $callback );
			}
		}
		elseif ( is_object( $value ) )
		{
			$object_vars = get_object_vars( $value );
			foreach ( $object_vars as $property_name => $property_value )
			{
				$value->$property_name = map_deep( $property_value, $callback );
			}
		}
		else
		{
			$value = call_user_func( $callback, $value );
		}
		
		return $value;
	}
}

if ( ! function_exists( 'ci_slash' ) )
{
	/**
	 * Adds slashes to a string or recursively adds slashes to strings within an array.
	 *
	 * This should be used when preparing data for core API that expects slashed data.
	 * This should not be used to escape data going directly into an SQL query.
	 *
	 * @param string|array $value String or array of data to slash.
	 * @return string|array Slashed `$value`, in the same type as supplied.
	 */
	function ci_slash( $value )
	{
		if ( is_array( $value ) )
		{
			$value = array_map( 'ci_slash', $value );
		}
		
		if ( is_string( $value ) )
		{
			return addslashes( $value );
		}
		
		return $value;
	}
}

if ( ! function_exists( 'ci_unslash' ) )
{
	/**
	 * Removes slashes from a string or recursively removes slashes from strings within an array.
	 *
	 * This should be used to remove slashes from data passed to core API that
	 * expects data to be unslashed.
	 *
	 * @param string|array $value String or array of data to unslash.
	 * @return string|array Unslashed `$value`, in the same type as supplied.
	 */
	function ci_unslash( $value )
	{
		return stripslashes_deep( $value );
	}
}

if ( ! function_exists( 'stripslashes_deep' ) )
{
	/**
	 * Navigates through an array, object, or scalar, and removes slashes from the values.
	 *
	 * @param mixed $value The value to be stripped.
	 * @return mixed Stripped value.
	 */
	function stripslashes_deep( $value )
	{
		return map_deep( $value, 'stripslashes_from_strings_only' );
	}
}

if ( ! function_exists( 'trimtext' ) )
{
	/**
	 * Trim a string to a given number of words
	 *
	 * @param     $str
	 * @param int $limit
	 * @return string
	 */
	function trimtext( $str, $limit = 10 )
	{
		$arr = explode( ' ', $str );
		if ( count( $arr ) > $limit )
		{
			$new_arr = array_slice( $arr, 0, $limit );
			$new_arr[] = '...';
			return implode( ' ', $new_arr );
		}
		
		return $str;
	}
}

if ( ! function_exists( 'size_format' ) )
{
	/**
	 * Convert bytes to the unit specified by the $to parameter.
	 * It is easier to read 1 KB than 1024 bytes and 1 MB than 1048576 bytes. Converts
	 * number of bytes to human readable number by taking the number of that unit
	 * that the bytes will go into it. Supports TB value.
	 * Please note that integers in PHP are limited to 32 bits, unless they are on
	 * 64 bit architecture, then they have 64 bit size. If you need to place the
	 * larger size then what PHP integer type will hold, then use a string. It will
	 * be converted to a double, which should always have 64 bit length.
	 * Technically the correct unit names for powers of 1024 are KiB, MiB etc.
	 *
	 * @param int|string $bytes Number of bytes. Note max integer size for integers.
	 * @param int $decimals Optional. Precision of number of decimal places. Default 0.
	 * @return string|false False on failure. Number string on success.
	 */
	function size_format( $bytes, $decimals = 0 )
	{
		$i = floor( log( $bytes ) / log( 1024 ) );
		$sizes = [ 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB' ];
		
		return sprintf( '%.02F', $bytes / pow( 1024, $i ) ) * 1 . ' ' . $sizes[ $i ];
	}
}

if ( ! function_exists( 'specific_size_format' ) )
{
	/**
	 * Convert bytes to the unit specified by the $to parameter.
	 *
	 * @param     $bytes
	 * @param     $to
	 * @param int $decimal_places
	 * @return string
	 */
	function specific_size_format( $bytes, $to, $decimal_places = 0 )
	{
		$formulas = [
			'KB' => 0,
			'MB' => 10,
			'GB' => 20,
			'TB' => 30,
		];
		
		$hr = ( $bytes / ( 1024 * pow( 2, $formulas[ $to ] ) ) );
		
		return number_format( $hr, $decimal_places );
	}
}

if ( ! function_exists( 'number_format_i18n' ) )
{
	/**
	 * Convert float number to format.
	 *
	 * @param float $number The number to convert based on locale.
	 * @param int $decimals Optional. Precision of the number of decimal places. Default 0.
	 * @return string Converted number in string format.
	 */
	function number_format_i18n( $number, $decimals = 0 )
	{
		$formatted = number_format( $number, absint( $decimals ), '.', ',' );
		
		return $formatted;
	}
}

if ( ! function_exists( 'sanitize_key' ) )
{
	/**
	 * Sanitizes a string key.
	 *
	 * Keys are used as internal identifiers. Lowercase alphanumeric characters,
	 * dashes, and underscores are allowed.
	 *
	 * @param string $key String key.
	 * @return string Sanitized key.
	 *
	 */
	function sanitize_key( $key )
	{
		$sanitized_key = '';
		
		if ( is_scalar( $key ) )
		{
			$sanitized_key = strtolower( $key );
			$sanitized_key = preg_replace( '/[^a-z0-9_\-]/', '', $sanitized_key );
		}
		
		return $sanitized_key;
	}
}

if ( ! function_exists( 'ci_unslash' ) )
{
	/**
	 * Removes slashes from a string or recursively removes slashes from strings within an array.
	 *
	 * This should be used to remove slashes from data passed to core API that
	 * expects data to be unslashed.
	 *
	 * @param string|array $value String or array of data to unslash.
	 * @return string|array Unslashed `$value`, in the same type as supplied.
	 *
	 */
	function ci_unslash( $value )
	{
		return stripslashes_deep( $value );
	}
}
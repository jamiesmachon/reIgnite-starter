<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Generate a new API key
 *
 * @return false|string
 */
function _generate_key()
{
	$_CI = &get_instance();
	do
	{
		// Generate a random salt
		$salt = base_convert( bin2hex( $_CI->security->get_random_bytes( 64 ) ), 16, 36 );
		
		// If an error occurred, then fall back to the previous method
		if ( $salt === FALSE )
		{
			$salt = hash( 'sha256', time() . mt_rand() );
		}
		
		$new_key = substr( $salt, 0, $_CI->config->item( 'rest_key_length' ) );
	} while ( _key_exists( $new_key ) );
	
	return $new_key;
}

/**
 * Get a users API key
 *
 * @param $key
 * @return array|mixed|object|null
 */
function _get_key( $key )
{
	$_CI = &get_instance();
	
	return $_CI->db
		->where( $_CI->config->item( 'rest_key_column' ), $key )
		->get( $_CI->config->item( 'rest_keys_table' ) )
		->row();
}

/**
 * Check a valid API key exists
 *
 * @param $key
 * @return bool
 */
function _key_exists( $key )
{
	$_CI = &get_instance();
	
	return $_CI->db
			->where( $_CI->config->item( 'rest_key_column' ), $key )
			->count_all_results( $_CI->config->item( 'rest_keys_table' ) ) > 0;
}

/**
 * Check a valid API key and is not in use
 *
 * @param $key
 * @return bool
 */
function _key_in_use( $key )
{
	$_CI = &get_instance();
	
	return $_CI->db
			->where( $_CI->config->item( 'rest_key_column' ), $key )
			->where( $_CI->config->item( 'rest_status_column' ), '1' )
			->count_all_results( $_CI->config->item( 'rest_keys_table' ) ) > 0;
}

/**
 * Insert a new API key into the key database
 *
 * @param $key
 * @param $set
 * @return bool
 */
function _insert_key( $key, $set )
{
	$_CI = &get_instance();
	$set[ $_CI->config->item( 'rest_key_column' ) ] = $key;
	$set[ 'date_created' ] = function_exists( 'now' ) ? now() : time();
	
	return $_CI->db->insert( $_CI->config->item( 'rest_keys_table' ), $set );
}

/**
 * Update an API key in the key database
 *
 * @param $set
 * @param $where
 * @return bool
 */
function _update_key( $set, $where )
{
	$_CI = &get_instance();
	
	return $_CI->db->update( $_CI->config->item( 'rest_keys_table' ), $set, $where );
}

/**
 * Delete an API key from the key database
 *
 * @param $key
 * @return false|mixed|string
 */
function _delete_key( $key )
{
	$_CI = &get_instance();
	
	return $_CI->db->delete( $_CI->config->item( 'rest_keys_table' ), [ $_CI->config->item( 'rest_key_column' ) => $key ] );
}

/**
 * Check what version of the API a users application requires
 *
 * @param $app_version
 * @return string
 */
function _get_api_version( $app_version ) : string
{
	switch ( $app_version )
	{
		default:
			return 'v1';
	}
}
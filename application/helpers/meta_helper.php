<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Core Metadata API
 *
 * Functions for retrieving and manipulating metadata of various WordPress object types. Metadata
 * for an object is a represented by a simple key-value pair. Objects may contain multiple
 * metadata entries that share the same key and differ only in their value.
 *
 * @package WordPress
 * @subpackage Meta
 */

/**
 * Adds metadata for the specified object.
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'user', 'order', 'product'
 *                           or any other object type with an associated meta table.
 * @param int $object_id ID of the object metadata is for.
 * @param string $meta_key Metadata key.
 * @param mixed $meta_value Metadata value. Must be serializable if non-scalar.
 * @param bool $unique Optional. Whether the specified metadata key should be unique for the object.
 *                           If true, and the object already has a value for the specified metadata key,
 *                           no change will be made. Default false.
 * @return int|false The meta ID on success, false on failure.
 */
function add_metadata( $meta_type, $object_id, $meta_key, $meta_value, $unique = FALSE )
{
	if ( ! $meta_type || ! $meta_key || ! is_numeric( $object_id ) )
	{
		return FALSE;
	}
	
	$object_id = absint( $object_id );
	if ( ! $object_id )
	{
		return FALSE;
	}
	
	$model = _get_meta_model( $meta_type );
	if ( ! $model )
	{
		return FALSE;
	}
	
	// expected_slashed ($meta_key)
	$meta_key = ci_unslash( $meta_key );
	$meta_value = ci_unslash( $meta_value );
	
	// check if the meta already exists in the specific meta table
	if ( $unique && get_instance()->$model->count( $meta_key, $object_id ) )
	{
		return FALSE;
	}
	
	$meta_value = maybe_serialize( $meta_value );
	
	// inset the meta data into the appropriate table
	$result = get_instance()->$model->create( $object_id, $meta_key, $meta_value );
	
	if ( ! $result )
	{
		return FALSE;
	}
	
	ci_cache_delete( $object_id, $meta_type . '_meta' );
	
	return (int) $result;
}

/**
 * Updates metadata for the specified object. If no value already exists for the specified object
 * ID and metadata key, the metadata will be added.
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                           or any other object type with an associated meta table.
 * @param int $object_id ID of the object metadata is for.
 * @param string $meta_key Metadata key.
 * @param mixed $meta_value Metadata value. Must be serializable if non-scalar.
 * @param mixed $prev_value Optional. Previous value to check before updating.
 *                           If specified, only update existing metadata entries with
 *                           this value. Otherwise, update all entries. Default empty.
 * @return int|bool The new meta field ID if a field with the given key didn't exist
 *                  and was therefore added, true on successful update,
 *                  false on failure or if the value passed to the function
 *                  is the same as the one that is already in the database.
 */
function update_metadata( $meta_type, $object_id, $meta_key, $meta_value, $prev_value = '' )
{
	if ( ! $meta_type || ! $meta_key || ! is_numeric( $object_id ) )
	{
		return FALSE;
	}
	
	$object_id = absint( $object_id );
	if ( ! $object_id )
	{
		return FALSE;
	}
	
	$model = _get_meta_model( $meta_type );
	if ( ! $model )
	{
		return FALSE;
	}
	
	$column = sanitize_key( $meta_type . '_id' );
	
	// expected_slashed ($meta_key)
	$raw_meta_key = $meta_key;
	$meta_key = ci_unslash( $meta_key );
	$passed_value = $meta_value;
	$meta_value = ci_unslash( $meta_value );
	
	// Compare existing value to new value if no prev value given and the key exists only once.
	if ( empty( $prev_value ) )
	{
		$old_value = get_metadata_raw( $meta_type, $object_id, $meta_key );
		if ( is_countable( $old_value ) && count( $old_value ) === 1 )
		{
			if ( $old_value[ 0 ] === $meta_value )
			{
				return FALSE;
			}
		}
	}
	
	// check if the meta data already exists in the specific meta table
	$meta_exists = get_instance()->$model->count( $meta_key, $object_id );
	
	// if meta count is empty or 0 then add metadata
	if ( ! $meta_exists )
	{
		return add_metadata( $meta_type, $object_id, $raw_meta_key, $passed_value );
	}
	
	$meta_value = maybe_serialize( $meta_value );
	
	$data = compact( 'meta_value' );
	$where = [
		$column    => $object_id,
		'meta_key' => $meta_key,
	];
	
	if ( ! empty( $prev_value ) )
	{
		$prev_value = maybe_serialize( $prev_value );
		$where[ 'meta_value' ] = $prev_value;
	}
	
	// update the meta data in the appropriate table
	$result = get_instance()->$model->update( $data, $where );
	if ( ! $result )
	{
		return FALSE;
	}
	
	ci_cache_delete( $object_id, $meta_type . '_meta' );
	
	return TRUE;
}

/**
 * Deletes metadata for the specified object.
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                           or any other object type with an associated meta table.
 * @param int $object_id ID of the object metadata is for.
 * @param string $meta_key Metadata key.
 * @param mixed $meta_value Optional. Metadata value. Must be serializable if non-scalar.
 *                           If specified, only delete metadata entries with this value.
 *                           Otherwise, delete all entries with the specified meta_key.
 *                           Pass `null`, `false`, or an empty string to skip this check.
 *                           (For backward compatibility, it is not possible to pass an empty string
 *                           to delete those entries with an empty string for a value.)
 * @param bool $delete_all Optional. If true, delete matching metadata entries for all objects,
 *                           ignoring the specified object_id. Otherwise, only delete
 *                           matching metadata entries for the specified object_id. Default false.
 * @return bool True on successful delete, false on failure.
 *
 */
function delete_metadata( $meta_type, $object_id, $meta_key, $meta_value = '', $delete_all = FALSE )
{
	if ( ! $meta_type || ! $meta_key || ! is_numeric( $object_id ) && ! $delete_all )
	{
		return FALSE;
	}
	
	$object_id = absint( $object_id );
	if ( ! $object_id && ! $delete_all )
	{
		return FALSE;
	}
	
	$model = _get_meta_model( $meta_type );
	if ( ! $model )
	{
		return FALSE;
	}
	
	$type_column = sanitize_key( $meta_type . '_id' );
	$id_column = ( 'user' === $meta_type ) ? 'umeta_id' : 'meta_id';
	
	// expected_slashed ($meta_key)
	$meta_key = ci_unslash( $meta_key );
	$meta_value = ci_unslash( $meta_value );
	
	$meta_value = maybe_serialize( $meta_value );
	
	// build a where array
	$where[ 'meta_key' ] = $meta_key;
	if ( ! $delete_all )
	{
		$where[ $type_column ] = $object_id;
	}
	if ( '' !== $meta_value && NULL !== $meta_value && FALSE !== $meta_value )
	{
		$where[ 'meta_value' ] = $meta_value;
	}
	
	$meta_exists = get_instance()->$model->get_all( $where );
	if ( ! $meta_exists )
	{
		return FALSE;
	}
	
	$meta_ids = array_column( $meta_exists, $id_column );
	
	if ( $delete_all )
	{
		if ( '' !== $meta_value && NULL !== $meta_value && FALSE !== $meta_value )
		{
			$objects = get_instance()->$model->get_all( [ 'meta_key' => $meta_key, 'meta_value' => $meta_value ] );
		}
		else
		{
			$objects = get_instance()->$model->get_all( [ 'meta_key' => $meta_key ] );
		}
	}
	
	// delete the meta data from the specified meta table
	$deleted = get_instance()->$model->delete( $meta_ids );
	
	if ( ! $deleted )
	{
		return FALSE;
	}
	
	if ( $delete_all )
	{
		$data = (array) array_column( $objects, $id_column );
	}
	else
	{
		$data = [ $object_id ];
	}
	
	ci_cache_delete_multiple( $data, $meta_type . '_meta' );
	
	return TRUE;
}

/**
 * Retrieves the value of a metadata field for the specified object type and ID.
 *
 * If the meta field exists, a single value is returned if `$single` is true,
 * or an array of values if it's false.
 *
 * If the meta field does not exist, the result depends on get_metadata_default().
 * By default, an empty string is returned if `$single` is true, or an empty array
 * if it's false.
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @param int $object_id ID of the object metadata is for.
 * @param string $meta_key Optional. Metadata key. If not specified, retrieve all metadata for
 *                          the specified object. Default empty.
 * @param bool $single Optional. If true, return only the first value of the specified `$meta_key`.
 *                          This parameter has no effect if `$meta_key` is not specified. Default false.
 * @return mixed An array of values if `$single` is false.
 *               The value of the meta field if `$single` is true.
 *               False for an invalid `$object_id` (non-numeric, zero, or negative value),
 *               or if `$meta_type` is not specified.
 *               An empty string if a valid but non-existing object ID is passed.
 * @see get_metadata_default()
 * @see get_metadata_raw()
 */
function get_metadata( $meta_type, $object_id, $meta_key = '', $single = FALSE )
{
	$value = get_metadata_raw( $meta_type, $object_id, $meta_key, $single );
	if ( ! is_null( $value ) )
	{
		return $value;
	}
	
	return get_metadata_default( $meta_type, $object_id, $meta_key, $single );
}

/**
 * Retrieves raw metadata value for the specified object.
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @param int $object_id ID of the object metadata is for.
 * @param string $meta_key Optional. Metadata key. If not specified, retrieve all metadata for
 *                          the specified object. Default empty.
 * @param bool $single Optional. If true, return only the first value of the specified `$meta_key`.
 *                          This parameter has no effect if `$meta_key` is not specified. Default false.
 * @return mixed An array of values if `$single` is false.
 *               The value of the meta field if `$single` is true.
 *               False for an invalid `$object_id` (non-numeric, zero, or negative value),
 *               or if `$meta_type` is not specified.
 *               Null if the value does not exist.
 */
function get_metadata_raw( $meta_type, $object_id, $meta_key = '', $single = FALSE )
{
	if ( ! $meta_type || ! is_numeric( $object_id ) )
	{
		return FALSE;
	}
	
	$object_id = absint( $object_id );
	if ( ! $object_id )
	{
		return FALSE;
	}
	
	$meta_cache = ci_cache_get( $object_id, $meta_type . '_meta' );
	
	if ( ! $meta_cache )
	{
		$meta_cache = update_meta_cache( $meta_type, [ $object_id ] );
		if ( isset( $meta_cache[ $object_id ] ) )
		{
			$meta_cache = $meta_cache[ $object_id ];
		}
		else
		{
			$meta_cache = NULL;
		}
	}
	
	if ( ! $meta_key )
	{
		return $meta_cache;
	}
	
	if ( isset( $meta_cache[ $meta_key ] ) )
	{
		if ( $single )
		{
			return maybe_unserialize( $meta_cache[ $meta_key ][ 0 ] );
		}
		else
		{
			return array_map( 'maybe_unserialize', $meta_cache[ $meta_key ] );
		}
	}
	
	return NULL;
}

/**
 * Retrieves default metadata value for the specified meta key and object.
 *
 * By default, an empty string is returned if `$single` is true, or an empty array
 * if it's false.
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @param int $object_id ID of the object metadata is for.
 * @param string $meta_key Metadata key.
 * @param bool $single Optional. If true, return only the first value of the specified `$meta_key`.
 *                          This parameter has no effect if `$meta_key` is not specified. Default false.
 * @return mixed An array of default values if `$single` is false.
 *               The default value of the meta field if `$single` is true.
 */
function get_metadata_default( $meta_type, $object_id, $meta_key, $single = FALSE )
{
	if ( $single )
	{
		$value = '';
	}
	else
	{
		$value = [];
	}
	
	if ( ! $single && ! ci_is_numeric_array( $value ) )
	{
		$value = [ $value ];
	}
	
	return $value;
}

/**
 * Determines if a meta field with the given key exists for the given object ID.
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @param int $object_id ID of the object metadata is for.
 * @param string $meta_key Metadata key.
 * @return bool Whether a meta field with the given key exists.
 */
function metadata_exists( $meta_type, $object_id, $meta_key )
{
	if ( ! $meta_type || ! is_numeric( $object_id ) )
	{
		return FALSE;
	}
	
	$object_id = absint( $object_id );
	if ( ! $object_id )
	{
		return FALSE;
	}
	
	$meta_cache = ci_cache_get( $object_id, $meta_type . '_meta' );
	
	if ( ! $meta_cache )
	{
		$meta_cache = update_meta_cache( $meta_type, [ $object_id ] );
		$meta_cache = $meta_cache[ $object_id ];
	}
	
	if ( isset( $meta_cache[ $meta_key ] ) )
	{
		return TRUE;
	}
	
	return FALSE;
}

/**
 * Retrieves metadata by meta ID.
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @param int $meta_id ID for a specific meta row.
 * @return stdClass|false {
 *     Metadata object, or boolean `false` if the metadata doesn't exist.
 *
 * @type string $meta_key The meta key.
 * @type mixed $meta_value The unserialized meta value.
 * @type string $meta_id Optional. The meta ID when the meta type is any value except 'user'.
 * @type string $umeta_id Optional. The meta ID when the meta type is 'user'.
 * @type string $post_id Optional. The object ID when the meta type is 'post'.
 * @type string $comment_id Optional. The object ID when the meta type is 'comment'.
 * @type string $term_id Optional. The object ID when the meta type is 'term'.
 * @type string $user_id Optional. The object ID when the meta type is 'user'.
 * }
 */
function get_metadata_by_mid( $meta_type, $meta_id )
{
	if ( ! $meta_type || ! is_numeric( $meta_id ) || floor( $meta_id ) != $meta_id )
	{
		return FALSE;
	}
	
	$meta_id = (int) $meta_id;
	if ( $meta_id <= 0 )
	{
		return FALSE;
	}
	
	$model = _get_meta_model( $meta_type );
	if ( ! $model )
	{
		return FALSE;
	}
	
	// get metadata from specific table
	$meta = get_instance()->$model->get( $meta_id );
	
	if ( empty( $meta ) )
	{
		return FALSE;
	}
	
	if ( isset( $meta->meta_value ) )
	{
		$meta->meta_value = maybe_unserialize( $meta->meta_value );
	}
	
	return $meta;
}

/**
 * Updates metadata by meta ID.
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                                 or any other object type with an associated meta table.
 * @param int $meta_id ID for a specific meta row.
 * @param string $meta_value Metadata value. Must be serializable if non-scalar.
 * @param string|false $meta_key Optional. You can provide a meta key to update it. Default false.
 * @return bool True on successful update, false on failure.
 */
function update_metadata_by_mid( $meta_type, $meta_id, $meta_value, $meta_key = FALSE )
{
	// Make sure everything is valid.
	if ( ! $meta_type || ! is_numeric( $meta_id ) || floor( $meta_id ) != $meta_id )
	{
		return FALSE;
	}
	
	$meta_id = (int) $meta_id;
	if ( $meta_id <= 0 )
	{
		return FALSE;
	}
	
	$model = _get_meta_model( $meta_type );
	if ( ! $model )
	{
		return FALSE;
	}
	
	$column = sanitize_key( $meta_type . '_id' );
	$id_column = ( 'user' === $meta_type ) ? 'umeta_id' : 'meta_id';
	
	// Fetch the meta and go on if it's found.
	$meta = get_metadata_by_mid( $meta_type, $meta_id );
	if ( $meta )
	{
		$original_key = $meta->meta_key;
		$object_id = $meta->{$column};
		
		// If a new meta_key (last parameter) was specified, change the meta key,
		// otherwise use the original key in the update statement.
		if ( FALSE === $meta_key )
		{
			$meta_key = $original_key;
		}
		elseif ( ! is_string( $meta_key ) )
		{
			return FALSE;
		}
		
		// Sanitize the meta.
		$meta_value = maybe_serialize( $meta_value );
		
		// Format the data query arguments.
		$data = [
			'meta_key'   => $meta_key,
			'meta_value' => $meta_value,
		];
		
		// Format the where query arguments.
		$where = [];
		$where[ $id_column ] = $meta_id;
		
		// Run the update query, all fields in $data are %s, $where is a %d.
		$result = get_instance()->$model->update( $data, $where );
		if ( ! $result )
		{
			return FALSE;
		}
		
		// Clear the caches.
		ci_cache_delete( $object_id, $meta_type . '_meta' );
		
		return TRUE;
	}
	
	// And if the meta was not found.
	return FALSE;
}

/**
 * Deletes metadata by meta ID.
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @param int $meta_id ID for a specific meta row.
 * @return bool True on successful delete, false on failure.
 */
function delete_metadata_by_mid( $meta_type, $meta_id )
{
	// Make sure everything is valid.
	if ( ! $meta_type || ! is_numeric( $meta_id ) || floor( $meta_id ) != $meta_id )
	{
		return FALSE;
	}
	
	$meta_id = (int) $meta_id;
	if ( $meta_id <= 0 )
	{
		return FALSE;
	}
	
	$model = _get_meta_model( $meta_type );
	if ( ! $model )
	{
		return FALSE;
	}
	
	// Object and ID columns.
	$column = sanitize_key( $meta_type . '_id' );
	$id_column = ( 'user' === $meta_type ) ? 'umeta_id' : 'meta_id';
	
	// Fetch the meta and go on if it's found.
	$meta = get_metadata_by_mid( $meta_type, $meta_id );
	if ( $meta )
	{
		$object_id = (int) $meta->{$column};
		
		// Run the query, will return true if deleted, false otherwise.
		$result = (bool) get_instance()->$model->delete( $meta_id );
		
		// Clear the caches.
		ci_cache_delete( $object_id, $meta_type . '_meta' );
		
		return $result;
		
	}
	
	// Meta ID was not found.
	return FALSE;
}

/**
 * Updates the metadata cache for the specified objects.
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                                 or any other object type with an associated meta table.
 * @param string|int[] $object_ids Array or comma delimited list of object IDs to update cache for.
 * @return array|false Metadata cache for the specified objects, or false on failure.
 */
function update_meta_cache( $meta_type, $object_ids )
{
	if ( ! $meta_type || ! $object_ids )
	{
		return FALSE;
	}
	
	$model = _get_meta_model( $meta_type );
	if ( ! $model )
	{
		return FALSE;
	}
	
	$column = sanitize_key( $meta_type . '_id' );
	
	if ( ! is_array( $object_ids ) )
	{
		$object_ids = preg_replace( '|[^0-9,]|', '', $object_ids );
		$object_ids = explode( ',', $object_ids );
	}
	
	$object_ids = array_map( 'intval', $object_ids );
	
	$cache_key = $meta_type . '_meta';
	$non_cached_ids = [];
	$cache = [];
	$cache_values = ci_cache_get_multiple( $object_ids, $cache_key );
	
	foreach ( $cache_values as $id => $cached_object )
	{
		if ( FALSE === $cached_object )
		{
			$non_cached_ids[] = $id;
		}
		else
		{
			$cache[ $id ] = $cached_object;
		}
	}
	
	if ( empty( $non_cached_ids ) )
	{
		return $cache;
	}
	
	// Get meta info.
	$id_list = implode( ',', $non_cached_ids );
	
	$metadata = get_instance()->$model->get_all( [ $column => $id_list ] );
	if ( ! empty( $metadata ) )
	{
		$meta_list = array_map( static function ( $meta ) use ( $column ) {
			return [
				$column      => $meta->{$column},
				'meta_key'   => $meta->meta_key,
				'meta_value' => $meta->meta_value,
			];
		}, $metadata );
		
		foreach ( $meta_list as $metarow )
		{
			$mpid = (int) $metarow[ $column ];
			$mkey = $metarow[ 'meta_key' ];
			$mval = $metarow[ 'meta_value' ];
			
			// Force subkeys to be array type.
			if ( ! isset( $cache[ $mpid ] ) || ! is_array( $cache[ $mpid ] ) )
			{
				$cache[ $mpid ] = [];
			}
			if ( ! isset( $cache[ $mpid ][ $mkey ] ) || ! is_array( $cache[ $mpid ][ $mkey ] ) )
			{
				$cache[ $mpid ][ $mkey ] = [];
			}
			
			// Add a value to the current pid/key.
			$cache[ $mpid ][ $mkey ][] = $mval;
		}
	}
	
	$data = [];
	foreach ( $non_cached_ids as $id )
	{
		if ( ! isset( $cache[ $id ] ) )
		{
			$cache[ $id ] = [];
		}
		$data[ $id ] = $cache[ $id ];
	}
	ci_cache_add_multiple( $data, $cache_key );
	
	return $cache;
}

/**
 * Retrieves the name of the metadata table for the specified object type.
 *
 * @param string $type Type of object metadata is for. Accepts 'user',
 *                     or any other object type with an associated meta table.
 * @return string|false Metadata table name, or false if no metadata table exists
 */
function _get_meta_model( $type )
{
	$table_name = $type . 'meta';
	
	if ( ! get_instance()->db->table_exists( $table_name ) )
	{
		return FALSE;
	}
	
	// load the model into the environment
	get_instance()->load->model( $table_name . '_model' );
	
	// return the model name
	return $table_name . '_model';
}

/**
 * Determines whether a meta key is considered protected.
 *
 * @param string $meta_key Metadata key.
 * @param string $meta_type Optional. Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table. Default empty.
 * @return bool Whether the meta key is considered protected.
 */
function is_protected_meta( $meta_key, $meta_type = '' )
{
	$sanitized_key = preg_replace( "/[^\x20-\x7E\p{L}]/", '', $meta_key );
	return strlen( $sanitized_key ) > 0 && ( '_' === $sanitized_key[ 0 ] );
}
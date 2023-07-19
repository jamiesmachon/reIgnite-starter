<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * CI_Data_Store_WP class.
 * Shared logic for Meta based data.
 */
class CI_Meta_Data_Store {
	
	/**
	 * Meta type.
	 *
	 * @var string
	 */
	protected $meta_type = '';
	
	/**
	 * This only needs set if you are using a custom metadata type (for example payment tokens.
	 * This should be the name of the field your table uses for associating meta with objects.
	 *
	 * @var string
	 */
	protected $object_id_field_for_meta = '';
	
	/**
	 * Data stored in meta keys, but not considered "meta" for an object.
	 *
	 * @var array
	 */
	protected $internal_meta_keys = array();
	
	/**
	 * Meta data which should exist in the DB, even if empty.
	 *
	 * @var array
	 */
	protected $must_exist_meta_keys = array();
	
	/**
	 * Get and store terms from a taxonomy.
	 *
	 * @param  CI_Data|integer $object CI_Data object or object ID.
	 * @param  string          $taxonomy Taxonomy name e.g. product_cat.
	 * @return array of terms
	 */
	protected function get_term_ids( $object, $taxonomy ) {
		if ( is_numeric( $object ) ) {
			$object_id = $object;
		} else {
			$object_id = $object->get_id();
		}
		$terms = get_the_terms( $object_id, $taxonomy );
		if ( false === $terms || is_ci_error( $terms ) ) {
			return array();
		}
		return ci_list_pluck( $terms, 'term_id' );
	}
	
	/**
	 * Returns an array of meta for an object.
	 *
	 * @param  CI_Data $object CI_Data object.
	 * @return array
	 */
	public function read_meta( &$object ) {
		$db_info       = $this->get_db_info();
		$raw_meta_data = $wpdb->get_results(
			$wpdb->prepare(
			// phpcs:disable WordPress.DB.PreparedSQL.InterpolatedNotPrepared
				"SELECT {$db_info['meta_id_field']} as meta_id, meta_key, meta_value
				FROM {$db_info['table']}
				WHERE {$db_info['object_id_field']} = %d
				ORDER BY {$db_info['meta_id_field']}",
				// phpcs:enable
				$object->get_id()
			)
		);
		return $this->filter_raw_meta_data( $object, $raw_meta_data );
	}
	
	/**
	 * Helper method to filter internal meta keys from all meta data rows for the object.
	 *
	 * @param CI_Data $object        CI_Data object.
	 * @param array   $raw_meta_data Array of std object of meta data to be filtered.
	 *
	 * @return mixed|void
	 */
	public function filter_raw_meta_data( &$object, $raw_meta_data ) {
		$this->internal_meta_keys = array_merge( array_map( array( $this, 'prefix_key' ), $object->get_data_keys() ), $this->internal_meta_keys );
		$meta_data                = array_filter( $raw_meta_data, array( $this, 'exclude_internal_meta_keys' ) );
		return $meta_data;
	}
	
	/**
	 * Deletes meta based on meta ID.
	 *
	 * @param  CI_Data  $object CI_Data object.
	 * @param  stdClass $meta (containing at least ->id).
	 */
	public function delete_meta( &$object, $meta ) {
		delete_metadata_by_mid( $this->meta_type, $meta->id );
	}
	
	/**
	 * Add new piece of meta.
	 *
	 * @param  CI_Data  $object CI_Data object.
	 * @param  stdClass $meta (containing ->key and ->value).
	 * @return int meta ID
	 */
	public function add_meta( &$object, $meta ) {
		return add_metadata( $this->meta_type, $object->get_id(), ci_slash( $meta->key ), is_string( $meta->value ) ? ci_slash( $meta->value ) : $meta->value, false );
	}
	
	/**
	 * Update meta.
	 *
	 * @param  CI_Data  $object CI_Data object.
	 * @param  stdClass $meta (containing ->id, ->key and ->value).
	 */
	public function update_meta( &$object, $meta ) {
		update_metadata_by_mid( $this->meta_type, $meta->id, $meta->value, $meta->key );
	}
	
	/**
	 * Table structure is slightly different between meta types, this function will return what we need to know.
	 *
	 * @return array Array elements: table, object_id_field, meta_id_field
	 */
	protected function get_db_info() {
		$meta_id_field = 'meta_id'; // for some reason users calls this umeta_id so we need to track this as well.
		$table          = $this->meta_type . 'meta';
		$object_id_field = $this->meta_type . '_id';
		
		// Figure out our field names.
		if ( 'user' === $this->meta_type ) {
			$meta_id_field = 'umeta_id';
		}
		
		if ( ! empty( $this->object_id_field_for_meta ) ) {
			$object_id_field = $this->object_id_field_for_meta;
		}
		
		return array(
			'table'           => $table,
			'object_id_field' => $object_id_field,
			'meta_id_field'   => $meta_id_field,
		);
	}
	
	/**
	 * Internal meta keys we don't want exposed as part of meta_data. This is in
	 * addition to all data props with _ prefix.
	 *
	 * @param string $key Prefix to be added to meta keys.
	 * @return string
	 */
	protected function prefix_key( $key ) {
		return '_' === substr( $key, 0, 1 ) ? $key : '_' . $key;
	}
	
	/**
	 * Callback to remove unwanted meta data.
	 *
	 * @param object $meta Meta object to check if it should be excluded or not.
	 * @return bool
	 */
	protected function exclude_internal_meta_keys( $meta ) {
		return ! in_array( $meta->meta_key, $this->internal_meta_keys, true ) && 0 !== stripos( $meta->meta_key, 'ci_' );
	}
	
	/**
	 * Gets a list of props and meta keys that need updated based on change state
	 * or if they are present in the database or not.
	 *
	 * @param  CI_Data $object              The WP_Data object (CI_Coupon for coupons, etc).
	 * @param  array   $meta_key_to_props   A mapping of meta keys => prop names.
	 * @param  string  $meta_type           The internal WP meta type (post, user, etc).
	 * @return array                        A mapping of meta keys => prop names, filtered by ones that should be updated.
	 */
	protected function get_props_to_update( $object, $meta_key_to_props, $meta_type = '' ) {
		$props_to_update = array();
		$changed_props   = $object->get_changes();
		
		// Props should be updated if they are a part of the $changed array or don't exist yet.
		foreach ( $meta_key_to_props as $meta_key => $prop ) {
			if ( array_key_exists( $prop, $changed_props ) || ! metadata_exists( $meta_type, $object->get_id(), $meta_key ) ) {
				$props_to_update[ $meta_key ] = $prop;
			}
		}
		
		return $props_to_update;
	}
	
	/**
	 * Update meta data in, or delete it from, the database.
	 *
	 * Avoids storing meta when it's either an empty string or empty array.
	 * Other empty values such as numeric 0 and null should still be stored.
	 * Data-stores can force meta to exist using `must_exist_meta_keys`.
	 *
	 * Note: WordPress `get_metadata` function returns an empty string when meta data does not exist.
	 *
	 * @param CI_Data $object The WP_Data object (CI_Coupon for coupons, etc).
	 * @param string  $meta_key Meta key to update.
	 * @param mixed   $meta_value Value to save.
	 *
	 * @return bool True if updated/deleted.
	 */
	protected function update_or_delete_post_meta( $object, $meta_key, $meta_value ) {
		if ( in_array( $meta_value, array( array(), '' ), true ) && ! in_array( $meta_key, $this->must_exist_meta_keys, true ) ) {
			$updated = delete_post_meta( $object->get_id(), $meta_key );
		} else {
			$updated = update_post_meta( $object->get_id(), $meta_key, $meta_value );
		}
		
		return (bool) $updated;
	}
	
	/**
	 * Return list of internal meta keys.
	 *
	 * @return array
	 */
	public function get_internal_meta_keys() {
		return $this->internal_meta_keys;
	}
	
	/**
	 * Converts a date string into a timestamp.
	 *
	 * @param  string $time_string The WP post date string.
	 * @return int|null The date string converted to a timestamp or null.
	 */
	protected function string_to_timestamp( $time_string ) {
		return '0000-00-00 00:00:00' !== $time_string ? ci_string_to_timestamp( $time_string ) : null;
	}
}

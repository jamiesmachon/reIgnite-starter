<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * CI Product Data Store: Stored.
 */
class CI_Product_Data_Store extends CI_Meta_Data_Store implements CI_Object_Data_Store_Interface, CI_Product_Data_Store_Interface {
	
	/**
	 * Data stored in meta keys, but not considered "meta".
	 *
	 * @var array
	 */
	protected $internal_meta_keys = array(
		'_visibility',
		'_sku',
		'_price',
		'_regular_price',
		'_sale_price',
		'_sale_price_dates_from',
		'_sale_price_dates_to',
		'total_sales',
		'_tax_status',
		'_tax_class',
		'_manage_stock',
		'_stock',
		'_stock_status',
		'_backorders',
		'_low_stock_amount',
		'_sold_individually',
		'_weight',
		'_length',
		'_width',
		'_height',
		'_upsell_ids',
		'_crosssell_ids',
		'_purchase_note',
		'_default_attributes',
		'_product_attributes',
		'_featured',
		'_ci_rating_count',
		'_ci_average_rating',
		'_ci_review_count',
		'_variation_description',
		'_thumbnail_id',
		'_file_paths',
		'_product_image_gallery',
		'_product_version',
		'_ci_old_slug',
		'_edit_last',
		'_edit_lock',
	);
	
	/**
	 * Meta data which should exist in the DB, even if empty.
	 *
	 * @var array
	 */
	protected $must_exist_meta_keys = array(
		'_tax_class',
	);
	
	/**
	 * If we have already saved our extra data, don't do automatic / default handling.
	 *
	 * @var bool
	 */
	protected $extra_data_saved = false;
	
	/**
	 * Stores updated props.
	 *
	 * @var array
	 */
	protected $updated_props = array();
	
	/*
	|--------------------------------------------------------------------------
	| CRUD Methods
	|--------------------------------------------------------------------------
	*/
	
	/**
	 * Method to create a new product in the database.
	 *
	 * @param CI_Product $product Product object.
	 */
	public function create( &$product ) {
		if ( ! $product->get_date_created() ) {
			$product->set_date_created( time() );
		}
		
		// TODO:: CREATE THE PRODUCT RECORD
		$id = NULL;
		
		if ( $id && ! is_ci_error( $id ) ) {
			$product->set_id( $id );
			
			$this->update_post_meta( $product, true );
			$this->update_terms( $product, true );
			$this->update_visibility( $product, true );
			$this->update_attributes( $product, true );
			$this->update_version_and_type( $product );
			$this->handle_updated_props( $product );
			$this->clear_caches( $product );
			
			$product->save_meta_data();
			$product->apply_changes();
		}
	}
	
	/**
	 * Method to read a product from the database.
	 *
	 * @param CI_Product $product Product object.
	 * @throws Exception If invalid product.
	 */
	public function read( &$product ) {
		$product->set_defaults();
		$post_object = get_post( $product->get_id() );
		
		if ( ! $product->get_id() || ! $post_object || 'product' !== $post_object->post_type ) {
			throw new Exception( __( 'Invalid product.', 'suppliers-portal' ) );
		}
		
		$product->set_props(
			array(
				'name'              => $post_object->post_title,
				'slug'              => $post_object->post_name,
				'date_created'      => $this->string_to_timestamp( $post_object->post_date_gmt ),
				'date_modified'     => $this->string_to_timestamp( $post_object->post_modified_gmt ),
				'status'            => $post_object->post_status,
				'description'       => $post_object->post_content,
				'short_description' => $post_object->post_excerpt,
				'parent_id'         => $post_object->post_parent,
				'menu_order'        => $post_object->menu_order,
				'post_password'     => $post_object->post_password,
				'reviews_allowed'   => 'open' === $post_object->comment_status,
			)
		);
		
		$this->read_attributes( $product );
		$this->read_visibility( $product );
		$this->read_product_data( $product );
		$this->read_extra_data( $product );
		$product->set_object_read( true );
	}
	
	/**
	 * Method to update a product in the database.
	 *
	 * @param CI_Product $product Product object.
	 */
	public function update( &$product ) {
		$product->save_meta_data();
		$changes = $product->get_changes();
		
		// Only update the post when the post data changes.
		if ( array_intersect( array( 'description', 'short_description', 'name', 'parent_id', 'reviews_allowed', 'status', 'menu_order', 'date_created', 'date_modified', 'slug' ), array_keys( $changes ) ) ) {
			// TODO:: UPDATE THE PRODUCT RECORD
			$product->read_meta_data( true ); // Refresh internal meta data, in case things were hooked into `save_post` or another WP hook.
			
		}
		
		$this->update_post_meta( $product );
		$this->update_terms( $product );
		$this->update_visibility( $product );
		$this->update_attributes( $product );
		$this->update_version_and_type( $product );
		$this->handle_updated_props( $product );
		$this->clear_caches( $product );
		
		$product->apply_changes();
	}
	
	/**
	 * Method to delete a product from the database.
	 *
	 * @param CI_Product $product Product object.
	 * @param array      $args Array of args to pass to the delete method.
	 */
	public function delete( &$product, $args = array() ) {
		$id        = $product->get_id();
		$post_type = $product->is_type( 'variation' ) ? 'product_variation' : 'product';
		
		$args = ci_parse_args(
			$args,
			array(
				'force_delete' => false,
			)
		);
		
		if ( ! $id ) {
			return;
		}
		
		if ( $args['force_delete'] ) {
			// TODO:: DELETE THE PRODUCT RECORD
			$product->set_id( 0 );
		} else {
			// TODO:: SOFT-DELETE THE PRODUCT RECORD
			$product->set_status( 'trash' );
		}
	}
	
	/*
	|--------------------------------------------------------------------------
	| Additional Methods
	|--------------------------------------------------------------------------
	*/
	
	/**
	 * Read product data. Can be overridden by child classes to load other props.
	 *
	 * @param CI_Product $product Product object.
	 */
	protected function read_product_data( &$product ) {
		$id                = $product->get_id();
		$post_meta_values  = get_post_meta( $id );
		$meta_key_to_props = array(
			'_sku'                   => 'sku',
			'_regular_price'         => 'regular_price',
			'_sale_price'            => 'sale_price',
			'_price'                 => 'price',
			'_sale_price_dates_from' => 'date_on_sale_from',
			'_sale_price_dates_to'   => 'date_on_sale_to',
			'total_sales'            => 'total_sales',
			'_tax_status'            => 'tax_status',
			'_tax_class'             => 'tax_class',
			'_manage_stock'          => 'manage_stock',
			'_backorders'            => 'backorders',
			'_low_stock_amount'      => 'low_stock_amount',
			'_sold_individually'     => 'sold_individually',
			'_weight'                => 'weight',
			'_length'                => 'length',
			'_width'                 => 'width',
			'_height'                => 'height',
			'_upsell_ids'            => 'upsell_ids',
			'_crosssell_ids'         => 'cross_sell_ids',
			'_purchase_note'         => 'purchase_note',
			'_default_attributes'    => 'default_attributes',
			'_thumbnail_id'          => 'image_id',
			'_stock'                 => 'stock_quantity',
			'_stock_status'          => 'stock_status',
			'_ci_average_rating'     => 'average_rating',
			'_ci_rating_count'       => 'rating_counts',
			'_ci_review_count'       => 'review_count',
			'_product_image_gallery' => 'gallery_image_ids',
		);
		
		$set_props = array();
		
		foreach ( $meta_key_to_props as $meta_key => $prop ) {
			$meta_value         = isset( $post_meta_values[ $meta_key ][0] ) ? $post_meta_values[ $meta_key ][0] : null;
			$set_props[ $prop ] = maybe_unserialize( $meta_value ); // get_post_meta only unserializes single values.
		}
		
		$set_props['category_ids']      = $this->get_term_ids( $product, 'product_cat' );
		$set_props['tag_ids']           = $this->get_term_ids( $product, 'product_tag' );
		$set_props['shipping_class_id'] = current( $this->get_term_ids( $product, 'product_shipping_class' ) );
		$set_props['gallery_image_ids'] = array_filter( explode( ',', $set_props['gallery_image_ids'] ?? '' ) );
		
		$product->set_props( $set_props );
	}
	
	/**
	 * Re-reads stock from the DB ignoring changes.
	 *
	 * @param CI_Product $product Product object.
	 * @param int|float  $new_stock New stock level if already read.
	 */
	public function read_stock_quantity( &$product, $new_stock = null ) {
		$object_read = $product->get_object_read();
		$product->set_object_read( false ); // This makes update of qty go directly to data- instead of changes-array of the product object (which is needed as the data should hold status of the object as it was read from the db).
		$product->set_stock_quantity( is_null( $new_stock ) ? get_post_meta( $product->get_id(), '_stock', true ) : $new_stock );
		$product->set_object_read( $object_read );
	}
	
	/**
	 * Read extra data associated with the product, like button text or product URL for external products.
	 *
	 * @param CI_Product $product Product object.
	 */
	protected function read_extra_data( &$product ) {
		foreach ( $product->get_extra_data_keys() as $key ) {
			$function = 'set_' . $key;
			if ( is_callable( array( $product, $function ) ) ) {
				$product->{$function}( get_post_meta( $product->get_id(), '_' . $key, true ) );
			}
		}
	}
	
	/**
	 * Convert visibility terms to props.
	 * Catalog visibility valid values are 'visible', 'catalog', 'search', and 'hidden'.
	 *
	 * @param CI_Product $product Product object.
	 */
	protected function read_visibility( &$product ) {
		$terms           = get_the_terms( $product->get_id(), 'product_visibility' );
		$term_names      = is_array( $terms ) ? ci_list_pluck( $terms, 'name' ) : array();
		$featured        = in_array( 'featured', $term_names, true );
		$exclude_search  = in_array( 'exclude-from-search', $term_names, true );
		$exclude_catalog = in_array( 'exclude-from-catalog', $term_names, true );
		
		if ( $exclude_search && $exclude_catalog ) {
			$catalog_visibility = 'hidden';
		} elseif ( $exclude_search ) {
			$catalog_visibility = 'catalog';
		} elseif ( $exclude_catalog ) {
			$catalog_visibility = 'search';
		} else {
			$catalog_visibility = 'visible';
		}
		
		$product->set_props(
			array(
				'featured'           => $featured,
				'catalog_visibility' => $catalog_visibility,
			)
		);
	}
	
	/**
	 * Read attributes from post meta.
	 *
	 * @param CI_Product $product Product object.
	 */
	protected function read_attributes( &$product ) {
		$meta_attributes = get_post_meta( $product->get_id(), '_product_attributes', true );
		
		if ( ! empty( $meta_attributes ) && is_array( $meta_attributes ) ) {
			$attributes = array();
			foreach ( $meta_attributes as $meta_attribute_key => $meta_attribute_value ) {
				$meta_value = array_merge(
					array(
						'name'         => '',
						'value'        => '',
						'position'     => 0,
						'is_visible'   => 0,
						'is_variation' => 0,
						'is_taxonomy'  => 0,
					),
					(array) $meta_attribute_value
				);
				
				// Check if is a taxonomy attribute.
				if ( ! empty( $meta_value['is_taxonomy'] ) ) {
					if ( ! taxonomy_exists( $meta_value['name'] ) ) {
						continue;
					}
					$id      = ci_attribute_taxonomy_id_by_name( $meta_value['name'] );
					$options = ci_get_object_terms( $product->get_id(), $meta_value['name'], 'term_id' );
				} else {
					$id      = 0;
					$options = ci_get_text_attributes( $meta_value['value'] );
				}
				
				$attribute = new CI_Product_Attribute();
				$attribute->set_id( $id );
				$attribute->set_name( $meta_value['name'] );
				$attribute->set_options( $options );
				$attribute->set_position( $meta_value['position'] );
				$attribute->set_visible( $meta_value['is_visible'] );
				$attribute->set_variation( $meta_value['is_variation'] );
				$attributes[] = $attribute;
			}
			$product->set_attributes( $attributes );
		}
	}
	
	/**
	 * Helper method that updates all the post meta for a product based on it's settings in the CI_Product class.
	 *
	 * @param CI_Product $product Product object.
	 * @param bool       $force Force update. Used during create.
	 */
	protected function update_post_meta( &$product, $force = false ) {
		$meta_key_to_props = array(
			'_sku'                   => 'sku',
			'_regular_price'         => 'regular_price',
			'_sale_price'            => 'sale_price',
			'_sale_price_dates_from' => 'date_on_sale_from',
			'_sale_price_dates_to'   => 'date_on_sale_to',
			'total_sales'            => 'total_sales',
			'_tax_status'            => 'tax_status',
			'_tax_class'             => 'tax_class',
			'_manage_stock'          => 'manage_stock',
			'_backorders'            => 'backorders',
			'_low_stock_amount'      => 'low_stock_amount',
			'_sold_individually'     => 'sold_individually',
			'_weight'                => 'weight',
			'_length'                => 'length',
			'_width'                 => 'width',
			'_height'                => 'height',
			'_upsell_ids'            => 'upsell_ids',
			'_crosssell_ids'         => 'cross_sell_ids',
			'_purchase_note'         => 'purchase_note',
			'_default_attributes'    => 'default_attributes',
			'_product_image_gallery' => 'gallery_image_ids',
			'_thumbnail_id'          => 'image_id',
			'_stock'                 => 'stock_quantity',
			'_stock_status'          => 'stock_status',
			'_ci_average_rating'     => 'average_rating',
			'_ci_rating_count'       => 'rating_counts',
			'_ci_review_count'       => 'review_count',
		);
		
		// Make sure to take extra data (like product url or text for external products) into account.
		$extra_data_keys = $product->get_extra_data_keys();
		
		foreach ( $extra_data_keys as $key ) {
			$meta_key_to_props[ '_' . $key ] = $key;
		}
		
		$props_to_update = $force ? $meta_key_to_props : $this->get_props_to_update( $product, $meta_key_to_props );
		
		foreach ( $props_to_update as $meta_key => $prop ) {
			$value = $product->{"get_$prop"}();
			$value = is_string( $value ) ? ci_slash( $value ) : $value;
			switch ( $prop ) {
				case 'manage_stock':
				case 'sold_individually':
					$value = ci_bool_to_string( $value );
					break;
				case 'gallery_image_ids':
					$value = implode( ',', $value );
					break;
				case 'date_on_sale_from':
				case 'date_on_sale_to':
					$value = $value ? $value->getTimestamp() : '';
					break;
			}
			
			$updated = $this->update_or_delete_post_meta( $product, $meta_key, $value );
			
			if ( $updated ) {
				$this->updated_props[] = $prop;
			}
		}
		
		// Update extra data associated with the product like button text or product URL for external products.
		if ( ! $this->extra_data_saved ) {
			foreach ( $extra_data_keys as $key ) {
				$meta_key = '_' . $key;
				$function = 'get_' . $key;
				if ( ! array_key_exists( $meta_key, $props_to_update ) ) {
					continue;
				}
				if ( is_callable( array( $product, $function ) ) ) {
					$value   = $product->{$function}();
					$value   = is_string( $value ) ? ci_slash( $value ) : $value;
					$updated = $this->update_or_delete_post_meta( $product, $meta_key, $value );
					
					if ( $updated ) {
						$this->updated_props[] = $key;
					}
				}
			}
		}
	}
	
	/**
	 * Handle updated meta props after updating meta data.
	 *
	 * @param CI_Product $product Product Object.
	 */
	protected function handle_updated_props( &$product ) {
		$price_is_synced = $product->is_type( array( 'variable', 'grouped' ) );
		
		if ( ! $price_is_synced ) {
			if ( in_array( 'regular_price', $this->updated_props, true ) || in_array( 'sale_price', $this->updated_props, true ) ) {
				if ( $product->get_sale_price() >= $product->get_regular_price() ) {
					update_post_meta( $product->get_id(), '_sale_price', '' );
					$product->set_sale_price( '' );
				}
			}
			
			if ( in_array( 'date_on_sale_from', $this->updated_props, true ) || in_array( 'date_on_sale_to', $this->updated_props, true ) || in_array( 'regular_price', $this->updated_props, true ) || in_array( 'sale_price', $this->updated_props, true ) || in_array( 'product_type', $this->updated_props, true ) ) {
				if ( $product->is_on_sale() ) {
					update_post_meta( $product->get_id(), '_price', $product->get_sale_price() );
					$product->set_price( $product->get_sale_price() );
				} else {
					update_post_meta( $product->get_id(), '_price', $product->get_regular_price() );
					$product->set_price( $product->get_regular_price() );
				}
			}
		}
		
		if ( array_intersect( $this->updated_props, array( 'sku', 'regular_price', 'sale_price', 'date_on_sale_from', 'date_on_sale_to', 'total_sales', 'average_rating', 'stock_quantity', 'stock_status', 'manage_stock', 'tax_status', 'tax_class' ) ) ) {
			$this->update_lookup_table( $product->get_id(), 'ci_product_meta_lookup' );
		}
		
		// After handling, we can reset the props array.
		$this->updated_props = array();
	}
	
	/**
	 * For all stored terms in all taxonomies, save them to the DB.
	 *
	 * @param CI_Product $product Product object.
	 * @param bool       $force Force update. Used during create.
	 */
	protected function update_terms( &$product, $force = false ) {
		$changes = $product->get_changes();
		
		if ( $force || array_key_exists( 'category_ids', $changes ) ) {
			$categories = $product->get_category_ids();
			
			if ( empty( $categories ) && get_option( 'default_product_cat', 0 ) ) {
				$categories = array( get_option( 'default_product_cat', 0 ) );
			}
			
			ci_set_post_terms( $product->get_id(), $categories, 'product_cat', false );
		}
		if ( $force || array_key_exists( 'tag_ids', $changes ) ) {
			ci_set_post_terms( $product->get_id(), $product->get_tag_ids(), 'product_tag', false );
		}
		if ( $force || array_key_exists( 'shipping_class_id', $changes ) ) {
			ci_set_post_terms( $product->get_id(), array( $product->get_shipping_class_id() ), 'product_shipping_class', false );
		}
		
		_ci_recount_terms_by_product( $product->get_id() );
	}
	
	/**
	 * Update visibility terms based on props.
	 *
	 * @param CI_Product $product Product object.
	 * @param bool       $force Force update. Used during create.
	 */
	protected function update_visibility( &$product, $force = false ) {
		$changes = $product->get_changes();
		
		if ( $force || array_intersect( array( 'featured', 'stock_status', 'average_rating', 'catalog_visibility' ), array_keys( $changes ) ) ) {
			$terms = array();
			
			if ( $product->get_featured() ) {
				$terms[] = 'featured';
			}
			
			if ( 'outofstock' === $product->get_stock_status() ) {
				$terms[] = 'outofstock';
			}
			
			$rating = min( 5, NumberUtil::round( $product->get_average_rating(), 0 ) );
			
			if ( $rating > 0 ) {
				$terms[] = 'rated-' . $rating;
			}
			
			switch ( $product->get_catalog_visibility() ) {
				case 'hidden':
					$terms[] = 'exclude-from-search';
					$terms[] = 'exclude-from-catalog';
					break;
				case 'catalog':
					$terms[] = 'exclude-from-search';
					break;
				case 'search':
					$terms[] = 'exclude-from-catalog';
					break;
			}
		}
	}
	
	/**
	 * Update attributes which are a mix of terms and meta data.
	 *
	 * @param CI_Product $product Product object.
	 * @param bool       $force Force update. Used during create.
	 */
	protected function update_attributes( &$product, $force = false ) {
		$changes = $product->get_changes();
		
		if ( $force || array_key_exists( 'attributes', $changes ) ) {
			$attributes  = $product->get_attributes();
			$meta_values = array();
			
			if ( $attributes ) {
				foreach ( $attributes as $attribute_key => $attribute ) {
					$value = '';
					
					if ( is_null( $attribute ) ) {
						if ( taxonomy_exists( $attribute_key ) ) {
							// Handle attributes that have been unset.
							ci_set_object_terms( $product->get_id(), array(), $attribute_key );
						} elseif ( taxonomy_exists( urldecode( $attribute_key ) ) ) {
							// Handle attributes that have been unset.
							ci_set_object_terms( $product->get_id(), array(), urldecode( $attribute_key ) );
						}
						continue;
						
					} elseif ( $attribute->is_taxonomy() ) {
						ci_set_object_terms( $product->get_id(), ci_list_pluck( (array) $attribute->get_terms(), 'term_id' ), $attribute->get_name() );
					} else {
						$value = ci_implode_text_attributes( $attribute->get_options() );
					}
					
					// Store in format WC uses in meta.
					$meta_values[ $attribute_key ] = array(
						'name'         => $attribute->get_name(),
						'value'        => $value,
						'position'     => $attribute->get_position(),
						'is_visible'   => $attribute->get_visible() ? 1 : 0,
						'is_variation' => $attribute->get_variation() ? 1 : 0,
						'is_taxonomy'  => $attribute->is_taxonomy() ? 1 : 0,
					);
				}
			}
			// Note, we use ci_slash to add extra level of escaping. See https://codex.wordpress.org/Function_Reference/update_post_meta#Workaround.
			$this->update_or_delete_post_meta( $product, '_product_attributes', ci_slash( $meta_values ) );
		}
	}
	
	/**
	 * Make sure we store the product type and version (to track data changes).
	 *
	 * @param CI_Product $product Product object.
	 */
	protected function update_version_and_type( &$product ) {
		$old_type = CI_Product_Factory::get_product_type( $product->get_id() );
		$new_type = $product->get_type();
		
		ci_set_object_terms( $product->get_id(), $new_type, 'product_type' );
		update_post_meta( $product->get_id(), '_product_version', Constants::get_constant( 'CI_VERSION' ) );
		
		// Action for the transition.
		if ( $old_type !== $new_type ) {
			$this->updated_props[] = 'product_type';
		}
	}
	
	/**
	 * Clear any caches.
	 *
	 * @param CI_Product $product Product object.
	 */
	protected function clear_caches( &$product ) {
		ci_delete_product_transients( $product->get_id() );
		if ( $product->get_parent_id() ) {
			ci_delete_product_transients( $product->get_parent_id() );
			CI_Cache_Helper::invalidate_cache_group( 'product_' . $product->get_parent_id() );
		}
		CI_Cache_Helper::invalidate_attribute_count( array_keys( $product->get_attributes() ) );
		CI_Cache_Helper::invalidate_cache_group( 'product_' . $product->get_id() );
	}
	
	/*
	|--------------------------------------------------------------------------
	| ci-product-functions.php methods
	|--------------------------------------------------------------------------
	*/
	
	/**
	 * Returns an array of on sale products, as an array of objects with an
	 * ID and parent_id present. Example: $return[0]->id, $return[0]->parent_id.
	 *
	 * @return array
	 */
	public function get_on_sale_products() {
		$exclude_term_ids            = array();
		$outofstock_join             = '';
		$outofstock_where            = '';
		$non_published_where         = '';
		$product_visibility_term_ids = ci_get_product_visibility_term_ids();
		
		if ( 'yes' === get_option( 'codeigniter_hide_out_of_stock_items' ) && $product_visibility_term_ids['outofstock'] ) {
			$exclude_term_ids[] = $product_visibility_term_ids['outofstock'];
		}
		
		if ( count( $exclude_term_ids ) ) {
			$outofstock_join  = " LEFT JOIN ( SELECT object_id FROM {$wpdb->term_relationships} WHERE term_taxonomy_id IN ( " . implode( ',', array_map( 'absint', $exclude_term_ids ) ) . ' ) ) AS exclude_join ON exclude_join.object_id = id';
			$outofstock_where = ' AND exclude_join.object_id IS NULL';
		}
		
		// phpcs:disable WordPress.DB.PreparedSQL.InterpolatedNotPrepared
		return $wpdb->get_results(
			"
			SELECT posts.ID as id, posts.post_parent as parent_id
			FROM {$wpdb->posts} AS posts
			INNER JOIN {$wpdb->ci_product_meta_lookup} AS lookup ON posts.ID = lookup.product_id
			$outofstock_join
			WHERE posts.post_type IN ( 'product', 'product_variation' )
			AND posts.post_status = 'publish'
			AND lookup.onsale = 1
			$outofstock_where
			AND posts.post_parent NOT IN (
				SELECT ID FROM `$wpdb->posts` as posts
				WHERE posts.post_type = 'product'
				AND posts.post_parent = 0
				AND posts.post_status != 'publish'
			)
			GROUP BY posts.ID
			"
		);
		// phpcs:enable WordPress.DB.PreparedSQL.InterpolatedNotPrepared
	}
	
	/**
	 * Returns a list of product IDs ( id as key => parent as value) that are
	 * featured. Uses get_posts instead of ci_get_products since we want
	 * some extra meta queries and ALL products (posts_per_page = -1).
	 *
	 * @return array
	 */
	public function get_featured_product_ids() {
		$product_visibility_term_ids = ci_get_product_visibility_term_ids();
		
		return get_posts(
			array(
				'post_type'      => array( 'product', 'product_variation' ),
				'posts_per_page' => -1,
				'post_status'    => 'publish',
				'tax_query'      => array( // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query
					'relation' => 'AND',
					array(
						'taxonomy' => 'product_visibility',
						'field'    => 'term_taxonomy_id',
						'terms'    => array( $product_visibility_term_ids['featured'] ),
					),
					array(
						'taxonomy' => 'product_visibility',
						'field'    => 'term_taxonomy_id',
						'terms'    => array( $product_visibility_term_ids['exclude-from-catalog'] ),
						'operator' => 'NOT IN',
					),
				),
				'fields'         => 'id=>parent',
			)
		);
	}
	
	/**
	 * Check if product sku is found for any other product IDs.
	 *
	 * @param int    $product_id Product ID.
	 * @param string $sku Will be slashed to work around https://core.trac.wordpress.org/ticket/27421.
	 * @return bool
	 */
	public function is_existing_sku( $product_id, $sku ) {
		// phpcs:ignore WordPress.VIP.DirectDatabaseQuery.DirectQuery
		return (bool) $wpdb->get_var(
			$wpdb->prepare(
				"
				SELECT posts.ID
				FROM {$wpdb->posts} as posts
				INNER JOIN {$wpdb->ci_product_meta_lookup} AS lookup ON posts.ID = lookup.product_id
				WHERE
				posts.post_type IN ( 'product', 'product_variation' )
				AND posts.post_status != 'trash'
				AND lookup.sku = %s
				AND lookup.product_id <> %d
				LIMIT 1
				",
				ci_slash( $sku ),
				$product_id
			)
		);
	}
	
	/**
	 * Return product ID based on SKU.
	 *
	 * @param string $sku Product SKU.
	 * @return int
	 */
	public function get_product_id_by_sku( $sku ) {
		// phpcs:ignore WordPress.VIP.DirectDatabaseQuery.DirectQuery
		$id = $wpdb->get_var(
			$wpdb->prepare(
				"
				SELECT posts.ID
				FROM {$wpdb->posts} as posts
				INNER JOIN {$wpdb->ci_product_meta_lookup} AS lookup ON posts.ID = lookup.product_id
				WHERE
				posts.post_type IN ( 'product', 'product_variation' )
				AND posts.post_status != 'trash'
				AND lookup.sku = %s
				LIMIT 1
				",
				$sku
			)
		);
		
		return (int) $id;
	}
	
	/**
	 * Returns an array of IDs of products that have sales starting soon.
	 *
	 * @return array
	 */
	public function get_starting_sales() {
		// phpcs:ignore WordPress.VIP.DirectDatabaseQuery.DirectQuery
		return $wpdb->get_col(
			$wpdb->prepare(
				"SELECT postmeta.post_id FROM {$wpdb->postmeta} as postmeta
				LEFT JOIN {$wpdb->postmeta} as postmeta_2 ON postmeta.post_id = postmeta_2.post_id
				LEFT JOIN {$wpdb->postmeta} as postmeta_3 ON postmeta.post_id = postmeta_3.post_id
				WHERE postmeta.meta_key = '_sale_price_dates_from'
					AND postmeta_2.meta_key = '_price'
					AND postmeta_3.meta_key = '_sale_price'
					AND postmeta.meta_value > 0
					AND postmeta.meta_value < %s
					AND postmeta_2.meta_value != postmeta_3.meta_value",
				time()
			)
		);
	}
	
	/**
	 * Returns an array of IDs of products that have sales which are due to end.
	 *
	 * @return array
	 */
	public function get_ending_sales() {
		// phpcs:ignore WordPress.VIP.DirectDatabaseQuery.DirectQuery
		return $wpdb->get_col(
			$wpdb->prepare(
				"SELECT postmeta.post_id FROM {$wpdb->postmeta} as postmeta
				LEFT JOIN {$wpdb->postmeta} as postmeta_2 ON postmeta.post_id = postmeta_2.post_id
				LEFT JOIN {$wpdb->postmeta} as postmeta_3 ON postmeta.post_id = postmeta_3.post_id
				WHERE postmeta.meta_key = '_sale_price_dates_to'
					AND postmeta_2.meta_key = '_price'
					AND postmeta_3.meta_key = '_regular_price'
					AND postmeta.meta_value > 0
					AND postmeta.meta_value < %s
					AND postmeta_2.meta_value != postmeta_3.meta_value",
				time()
			)
		);
	}
	
	/**
	 * Find a matching (enabled) variation within a variable product.
	 *
	 * @param  CI_Product $product Variable product.
	 * @param  array      $match_attributes Array of attributes we want to try to match.
	 * @return int Matching variation ID or 0.
	 */
	public function find_matching_product_variation( $product, $match_attributes = array() ) {
		$meta_attribute_names = array();
		
		// Get attributes to match in meta.
		foreach ( $product->get_attributes() as $attribute ) {
			if ( ! $attribute->get_variation() ) {
				continue;
			}
			$meta_attribute_names[] = 'attribute_' . sanitize_title( $attribute->get_name() );
		}
		
		// Get the attributes of the variations.
		$query = $wpdb->prepare(
			"
			SELECT postmeta.post_id, postmeta.meta_key, postmeta.meta_value, posts.menu_order FROM {$wpdb->postmeta} as postmeta
			LEFT JOIN {$wpdb->posts} as posts ON postmeta.post_id=posts.ID
			WHERE postmeta.post_id IN (
				SELECT ID FROM {$wpdb->posts}
				WHERE {$wpdb->posts}.post_parent = %d
				AND {$wpdb->posts}.post_status = 'publish'
				AND {$wpdb->posts}.post_type = 'product_variation'
			)
			",
			$product->get_id()
		);
		
		$query .= " AND postmeta.meta_key IN ( '" . implode( "','", array_map( 'esc_sql', $meta_attribute_names ) ) . "' )";
		
		$query .= ' ORDER BY posts.menu_order ASC, postmeta.post_id ASC;';
		
		$attributes = $wpdb->get_results( $query ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
		
		if ( ! $attributes ) {
			return 0;
		}
		
		$sorted_meta = array();
		
		foreach ( $attributes as $m ) {
			$sorted_meta[ $m->post_id ][ $m->meta_key ] = $m->meta_value; // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
		}
		
		/**
		 * Check each variation to find the one that matches the $match_attributes.
		 *
		 * Note: Not all meta fields will be set which is why we check existance.
		 */
		foreach ( $sorted_meta as $variation_id => $variation ) {
			$match = true;
			
			// Loop over the variation meta keys and values i.e. what is saved to the products. Note: $attribute_value is empty when 'any' is in use.
			foreach ( $variation as $attribute_key => $attribute_value ) {
				$match_any_value = '' === $attribute_value;
				
				if ( ! $match_any_value && ! array_key_exists( $attribute_key, $match_attributes ) ) {
					$match = false; // Requires a selection but no value was provide.
				}
				
				if ( array_key_exists( $attribute_key, $match_attributes ) ) { // Value to match was provided.
					if ( ! $match_any_value && $match_attributes[ $attribute_key ] !== $attribute_value ) {
						$match = false; // Provided value does not match variation.
					}
				}
			}
			
			if ( true === $match ) {
				return $variation_id;
			}
		}
		
		if ( version_compare( get_post_meta( $product->get_id(), '_product_version', true ), '2.4.0', '<' ) ) {
			/**
			 * Pre 2.4 handling where 'slugs' were saved instead of the full text attribute.
			 * Fallback is here because there are cases where data will be 'synced' but the product version will remain the same.
			 */
			return ( array_map( 'sanitize_title', $match_attributes ) === $match_attributes ) ? 0 : $this->find_matching_product_variation( $product, array_map( 'sanitize_title', $match_attributes ) );
		}
		
		return 0;
	}
	
	/**
	 * Creates all possible combinations of variations from the attributes, without creating duplicates.
	 *
	 * @param  CI_Product $product Variable product.
	 * @param  int        $limit Limit the number of created variations.
	 * @return int        Number of created variations.
	 */
	public function create_all_product_variations( $product, $limit = -1 ) {
		$count = 0;
		
		if ( ! $product ) {
			return $count;
		}
		
		$attributes = ci_list_pluck( array_filter( $product->get_attributes(), 'ci_attributes_array_filter_variation' ), 'get_slugs' );
		
		if ( empty( $attributes ) ) {
			return $count;
		}
		
		// Get existing variations so we don't create duplicates.
		$existing_variations = array_map( 'ci_get_product', $product->get_children() );
		$existing_attributes = array();
		
		foreach ( $existing_variations as $existing_variation ) {
			$existing_attributes[] = $existing_variation->get_attributes();
		}
		
		$possible_attributes = array_reverse( ci_array_cartesian( $attributes ) );
		
		foreach ( $possible_attributes as $possible_attribute ) {
			// Allow any order if key/values -- do not use strict mode.
			if ( in_array( $possible_attribute, $existing_attributes ) ) { // phpcs:ignore WordPress.PHP.StrictInArray.MissingTrueStrict
				continue;
			}
			$variation = ci_get_product_object( 'variation' );
			$variation->set_parent_id( $product->get_id() );
			$variation->set_attributes( $possible_attribute );
			$variation_id = $variation->save();
			
			$count ++;
			
			if ( $limit > 0 && $count >= $limit ) {
				break;
			}
		}
		
		return $count;
	}
	
	/**
	 * Make sure all variations have a sort order set so they can be reordered correctly.
	 *
	 * @param int $parent_id Product ID.
	 */
	public function sort_all_product_variations( $parent_id ) {
		// phpcs:ignore WordPress.VIP.DirectDatabaseQuery.DirectQuery
		$ids   = $wpdb->get_col(
			$wpdb->prepare(
				"SELECT ID FROM {$wpdb->posts} WHERE post_type = 'product_variation' AND post_parent = %d AND post_status = 'publish' ORDER BY menu_order ASC, ID ASC",
				$parent_id
			)
		);
		$index = 1;
		
		foreach ( $ids as $id ) {
			// phpcs:ignore WordPress.VIP.DirectDatabaseQuery.DirectQuery
			$wpdb->update( $wpdb->posts, array( 'menu_order' => ( $index++ ) ), array( 'ID' => absint( $id ) ) );
		}
	}
	
	/**
	 * Update a product's stock amount directly in the database.
	 *
	 * Updates both post meta and lookup tables. Ignores manage stock setting on the product.
	 *
	 * @param int            $product_id_with_stock Product ID.
	 * @param int|float|null $stock_quantity        Stock quantity.
	 */
	protected function set_product_stock( $product_id_with_stock, $stock_quantity ) {
		// TODO:: UPDATE STOCK QUANTITY IN DATABASE WITH NEW STOCK QUANTITY.
	}
	
	/**
	 * Update a product's stock amount directly.
	 *
	 * Uses queries rather than update_post_meta so we can do this in one query (to avoid stock issues).
	 * Ignores manage stock setting on the product and sets quantities directly in the db: post meta and lookup tables.
	 * Uses locking to update the quantity. If the lock is not acquired, change is lost.
	 *
	 * @param  int            $product_id_with_stock Product ID.
	 * @param  int|float|null $stock_quantity Stock quantity.
	 * @param  string         $operation Set, increase and decrease.
	 * @return int|float New stock level.
	 */
	public function update_product_stock( $product_id_with_stock, $stock_quantity = null, $operation = 'set' ) {
		// Ensures a row exists to update.
		add_post_meta( $product_id_with_stock, '_stock', 0, true );
		$new_stock = ci_stock_amount( $stock_quantity );
		
		// TODO:: UPDATE STOCK QUANTITY IN DATABASE WITH NEW STOCK QUANTITY.
		
		return $new_stock;
	}
	
	/**
	 * Get shipping class ID by slug.
	 *
	 * @param string $slug Product shipping class slug.
	 * @return int|false
	 */
	public function get_shipping_class_id_by_slug( $slug ) {
		$shipping_class_term = get_term_by( 'slug', $slug, 'product_shipping_class' );
		if ( $shipping_class_term ) {
			return $shipping_class_term->term_id;
		} else {
			return false;
		}
	}
	
	/**
	 * Returns an array of products.
	 *
	 * @param  array $args Args to pass.
	 * @return array|object
	 * @see ci_get_products
	 */
	public function get_products( $args = array() ) {
		// TODO:: GET PRODUCTS FROM DATABASE.
	}
	
	
	/**
	 * Get the product type based on product ID.
	 *
	 * @param int $product_id Product ID.
	 * @return bool|string
	 */
	public function get_product_type( $product_id ) {
		$cache_key    = CI_Cache_Helper::get_cache_prefix( 'product_' . $product_id ) . '_type_' . $product_id;
		$product_type = ci_cache_get( $cache_key, 'products' );
		
		if ( $product_type ) {
			return $product_type;
		}
		
		$post_type = get_post_type( $product_id );
		
		if ( 'product_variation' === $post_type ) {
			$product_type = 'variation';
		} elseif ( 'product' === $post_type ) {
			$terms        = get_the_terms( $product_id, 'product_type' );
			$product_type = ! empty( $terms ) && ! is_ci_error( $terms ) ? sanitize_title( current( $terms )->name ) : 'simple';
		} else {
			$product_type = false;
		}
		
		ci_cache_set( $cache_key, $product_type, 'products' );
		
		return $product_type;
	}
	
}

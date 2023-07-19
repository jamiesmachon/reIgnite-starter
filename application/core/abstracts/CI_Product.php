<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Abstract Product Class
 *
 * The product class handles individual product data.
 */
class CI_Product extends CI_Abstract_Legacy_Product {
	
	/**
	 * This is the name of this object type.
	 *
	 * @var string
	 */
	protected $object_type = 'product';
	
	/**
	 * Post type.
	 *
	 * @var string
	 */
	protected $post_type = 'product';
	
	/**
	 * Cache group.
	 *
	 * @var string
	 */
	protected $cache_group = 'products';
	
	/**
	 * Stores product data.
	 *
	 * @var array
	 */
	protected $data = [
		'name'               => '',
		'slug'               => '',
		'date_created'       => NULL,
		'date_modified'      => NULL,
		'status'             => FALSE,
		'featured'           => FALSE,
		'catalog_visibility' => 'visible',
		'description'        => '',
		'short_description'  => '',
		'sku'                => '',
		'price'              => '',
		'regular_price'      => '',
		'sale_price'         => '',
		'date_on_sale_from'  => NULL,
		'date_on_sale_to'    => NULL,
		'total_sales'        => '0',
		'tax_status'         => 'taxable',
		'tax_class'          => '',
		'manage_stock'       => FALSE,
		'stock_quantity'     => NULL,
		'stock_status'       => 'instock',
		'backorders'         => 'no',
		'low_stock_amount'   => '',
		'sold_individually'  => FALSE,
		'weight'             => '',
		'length'             => '',
		'width'              => '',
		'height'             => '',
		'upsell_ids'         => [],
		'cross_sell_ids'     => [],
		'parent_id'          => 0,
		'reviews_allowed'    => TRUE,
		'purchase_note'      => '',
		'attributes'         => [],
		'default_attributes' => [],
		'menu_order'         => 0,
		'post_password'      => '',
		'virtual'            => FALSE,
		'downloadable'       => FALSE,
		'category_ids'       => [],
		'tag_ids'            => [],
		'shipping_class_id'  => 0,
		'downloads'          => [],
		'image_id'           => '',
		'gallery_image_ids'  => [],
		'download_limit'     => -1,
		'download_expiry'    => -1,
		'rating_counts'      => [],
		'average_rating'     => 0,
		'review_count'       => 0,
	];
	
	/**
	 * Supported features such as 'ajax_add_to_cart'.
	 *
	 * @var array
	 */
	protected $supports = [];
	
	/**
	 * Get the product if ID is passed, otherwise the product is new and empty.
	 * This class should NOT be instantiated, but the ci_get_product() function
	 * should be used. It is possible, but the ci_get_product() is preferred.
	 *
	 * @param int|CI_Product|object $product Product to init.
	 */
	public function __construct( $product = 0 )
	{
		parent::__construct( $product );
		if ( is_numeric( $product ) && $product > 0 )
		{
			$this->set_id( $product );
		}
		elseif ( $product instanceof self )
		{
			$this->set_id( absint( $product->get_id() ) );
		}
		elseif ( ! empty( $product->ID ) )
		{
			$this->set_id( absint( $product->ID ) );
		}
		else
		{
			$this->set_object_read( TRUE );
		}
		
		$this->data_store = CI_Data_Store::load( 'product-' . $this->get_type() );
		if ( $this->get_id() > 0 )
		{
			$this->data_store->read( $this );
		}
	}
	
	/**
	 * Get internal type. Should return string and *should be overridden* by child classes.
	 *
	 * The product_type property is deprecated but is used here for BW compatibility with child classes which may be defining product_type and not have a get_type method.
	 *
	 * @return string
	 */
	public function get_type()
	{
		return isset( $this->product_type ) ? $this->product_type : 'simple';
	}
	
	/**
	 * Get product name.
	 *
	 * @return string
	 */
	public function get_name()
	{
		return $this->get_prop( 'name' );
	}
	
	/**
	 * Get product slug.
	 *
	 * @return string
	 */
	public function get_slug()
	{
		return $this->get_prop( 'slug' );
	}
	
	/**
	 * Get product created date.
	 *
	 * @return CI_DateTime|NULL object if the date is set or null if there is no date.
	 */
	public function get_date_created()
	{
		return $this->get_prop( 'date_created' );
	}
	
	/**
	 * Get product modified date.
	 *
	 * @return CI_DateTime|NULL object if the date is set or null if there is no date.
	 */
	public function get_date_modified()
	{
		return $this->get_prop( 'date_modified' );
	}
	
	/**
	 * Get product status.
	 *
	 * @return string
	 */
	public function get_status()
	{
		return $this->get_prop( 'status' );
	}
	
	/**
	 * If the product is featured.
	 *
	 * @return boolean
	 */
	public function get_featured()
	{
		return $this->get_prop( 'featured' );
	}
	
	/**
	 * Get catalog visibility.
	 *
	 * @return string
	 */
	public function get_catalog_visibility()
	{
		return $this->get_prop( 'catalog_visibility' );
	}
	
	/**
	 * Get product description.
	 *
	 * @return string
	 */
	public function get_description()
	{
		return $this->get_prop( 'description' );
	}
	
	/**
	 * Get product short description.
	 *
	 * @return string
	 */
	public function get_short_description()
	{
		return $this->get_prop( 'short_description' );
	}
	
	/**
	 * Get SKU (Stock-keeping unit) - product unique ID.
	 *
	 * @return string
	 */
	public function get_sku()
	{
		return $this->get_prop( 'sku' );
	}
	
	/**
	 * Returns the product's active price.
	 *
	 * @return string price
	 */
	public function get_price()
	{
		return $this->get_prop( 'price' );
	}
	
	/**
	 * Returns the product's regular price.
	 *
	 * @return string price
	 */
	public function get_regular_price()
	{
		return $this->get_prop( 'regular_price' );
	}
	
	/**
	 * Returns the product's sale price.
	 *
	 * @return string price
	 */
	public function get_sale_price()
	{
		return $this->get_prop( 'sale_price' );
	}
	
	/**
	 * Get date on sale from.
	 *
	 * @return CI_DateTime|NULL object if the date is set or null if there is no date.
	 */
	public function get_date_on_sale_from()
	{
		return $this->get_prop( 'date_on_sale_from' );
	}
	
	/**
	 * Get date on sale to.
	 *
	 * @return CI_DateTime|NULL object if the date is set or null if there is no date.
	 */
	public function get_date_on_sale_to()
	{
		return $this->get_prop( 'date_on_sale_to' );
	}
	
	/**
	 * Get number total of sales.
	 *
	 * @return int
	 */
	public function get_total_sales()
	{
		return $this->get_prop( 'total_sales' );
	}
	
	/**
	 * Returns the tax status.
	 *
	 * @return string
	 */
	public function get_tax_status()
	{
		return $this->get_prop( 'tax_status' );
	}
	
	/**
	 * Returns the tax class.
	 *
	 * @return string
	 */
	public function get_tax_class()
	{
		return $this->get_prop( 'tax_class' );
	}
	
	/**
	 * Return if product manage stock.
	 *
	 * @return boolean
	 */
	public function get_manage_stock()
	{
		return $this->get_prop( 'manage_stock' );
	}
	
	/**
	 * Returns number of items available for sale.
	 *
	 * @return int|null
	 */
	public function get_stock_quantity()
	{
		return $this->get_prop( 'stock_quantity' );
	}
	
	/**
	 * Return the stock status.
	 *
	 * @return string
	 */
	public function get_stock_status()
	{
		return $this->get_prop( 'stock_status' );
	}
	
	/**
	 * Get backorders.
	 *
	 * @return string yes no or notify
	 */
	public function get_backorders()
	{
		return $this->get_prop( 'backorders' );
	}
	
	/**
	 * Get low stock amount.
	 *
	 * @return int|string Returns empty string if value not set
	 */
	public function get_low_stock_amount()
	{
		return $this->get_prop( 'low_stock_amount' );
	}
	
	/**
	 * Return if should be sold individually.
	 *
	 * @return boolean
	 */
	public function get_sold_individually()
	{
		return $this->get_prop( 'sold_individually' );
	}
	
	/**
	 * Returns the product's weight.
	 *
	 * @return string
	 */
	public function get_weight()
	{
		return $this->get_prop( 'weight' );
	}
	
	/**
	 * Returns the product length.
	 *
	 * @return string
	 */
	public function get_length()
	{
		return $this->get_prop( 'length' );
	}
	
	/**
	 * Returns the product width.
	 *
	 * @return string
	 */
	public function get_width()
	{
		return $this->get_prop( 'width' );
	}
	
	/**
	 * Returns the product height.
	 *
	 * @return string
	 */
	public function get_height()
	{
		return $this->get_prop( 'height' );
	}
	
	/**
	 * Returns formatted dimensions.
	 *
	 * @param bool $formatted True by default for legacy support - will be false/not set in future versions to return the array only. Use ci_format_dimensions for formatted versions instead.
	 * @return string|array
	 */
	public function get_dimensions( $formatted = TRUE )
	{
		if ( $formatted )
		{
			return ci_format_dimensions( $this->get_dimensions( FALSE ) );
		}
		return [
			'length' => $this->get_length(),
			'width'  => $this->get_width(),
			'height' => $this->get_height(),
		];
	}
	
	/**
	 * Get upsell IDs.
	 *
	 * @return array
	 */
	public function get_upsell_ids()
	{
		return $this->get_prop( 'upsell_ids' );
	}
	
	/**
	 * Get cross sell IDs.
	 *
	 * @return array
	 */
	public function get_cross_sell_ids()
	{
		return $this->get_prop( 'cross_sell_ids' );
	}
	
	/**
	 * Get parent ID.
	 *
	 * @return int
	 */
	public function get_parent_id()
	{
		return $this->get_prop( 'parent_id' );
	}
	
	/**
	 * Return if reviews is allowed.
	 *
	 * @return bool
	 */
	public function get_reviews_allowed()
	{
		return $this->get_prop( 'reviews_allowed' );
	}
	
	/**
	 * Get purchase note.
	 *
	 * @return string
	 */
	public function get_purchase_note()
	{
		return $this->get_prop( 'purchase_note' );
	}
	
	/**
	 * Returns product attributes.
	 *
	 * @return array
	 */
	public function get_attributes()
	{
		return $this->get_prop( 'attributes' );
	}
	
	/**
	 * Get default attributes.
	 *
	 * @return array
	 */
	public function get_default_attributes()
	{
		return $this->get_prop( 'default_attributes' );
	}
	
	/**
	 * Get menu order.
	 *
	 * @return int
	 */
	public function get_menu_order()
	{
		return $this->get_prop( 'menu_order' );
	}
	
	/**
	 * Get post password.
	 *
	 * @return int
	 */
	public function get_post_password()
	{
		return $this->get_prop( 'post_password' );
	}
	
	/**
	 * Get category ids.
	 *
	 * @return array
	 */
	public function get_category_ids()
	{
		return $this->get_prop( 'category_ids' );
	}
	
	/**
	 * Get tag ids.
	 *
	 * @return array
	 */
	public function get_tag_ids()
	{
		return $this->get_prop( 'tag_ids' );
	}
	
	/**
	 * Get virtual.
	 *
	 * @return bool
	 */
	public function get_virtual()
	{
		return $this->get_prop( 'virtual' );
	}
	
	/**
	 * Returns the gallery attachment ids.
	 *
	 * @return array
	 */
	public function get_gallery_image_ids()
	{
		return $this->get_prop( 'gallery_image_ids' );
	}
	
	/**
	 * Get shipping class ID.
	 *
	 * @return int
	 */
	public function get_shipping_class_id()
	{
		return $this->get_prop( 'shipping_class_id' );
	}
	
	/**
	 * Get downloads.
	 *
	 * @return array
	 */
	public function get_downloads()
	{
		return $this->get_prop( 'downloads' );
	}
	
	/**
	 * Get download expiry.
	 *
	 * @return int
	 */
	public function get_download_expiry()
	{
		return $this->get_prop( 'download_expiry' );
	}
	
	/**
	 * Get downloadable.
	 *
	 * @return bool
	 */
	public function get_downloadable()
	{
		return $this->get_prop( 'downloadable' );
	}
	
	/**
	 * Get download limit.
	 *
	 * @return int
	 */
	public function get_download_limit()
	{
		return $this->get_prop( 'download_limit' );
	}
	
	/**
	 * Get main image ID.
	 *
	 * @return string
	 */
	public function get_image_id()
	{
		return $this->get_prop( 'image_id' );
	}
	
	/**
	 * Get rating count.
	 *
	 * @return array of counts
	 */
	public function get_rating_counts()
	{
		return $this->get_prop( 'rating_counts' );
	}
	
	/**
	 * Get average rating.
	 *
	 * @return float
	 */
	public function get_average_rating()
	{
		return $this->get_prop( 'average_rating' );
	}
	
	/**
	 * Get review count.
	 *
	 * @return int
	 */
	public function get_review_count()
	{
		return $this->get_prop( 'review_count' );
	}
	
	/*
	|--------------------------------------------------------------------------
	| Setters
	|--------------------------------------------------------------------------
	|
	| Functions for setting product data. These should not update anything in the
	| database itself and should only change what is stored in the class
	| object.
	*/
	
	/**
	 * Set product name.
	 *
	 * @param string $name Product name.
	 */
	public function set_name( $name )
	{
		$this->set_prop( 'name', $name );
	}
	
	/**
	 * Set product slug.
	 *
	 * @param string $slug Product slug.
	 */
	public function set_slug( $slug )
	{
		$this->set_prop( 'slug', $slug );
	}
	
	/**
	 * Set product created date.
	 *
	 * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
	 */
	public function set_date_created( $date = NULL )
	{
		$this->set_date_prop( 'date_created', $date );
	}
	
	/**
	 * Set product modified date.
	 *
	 * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
	 */
	public function set_date_modified( $date = NULL )
	{
		$this->set_date_prop( 'date_modified', $date );
	}
	
	/**
	 * Set product status.
	 *
	 * @param string $status Product status.
	 */
	public function set_status( $status )
	{
		$this->set_prop( 'status', $status );
	}
	
	/**
	 * Set if the product is featured.
	 *
	 * @param bool|string $featured Whether the product is featured or not.
	 */
	public function set_featured( $featured )
	{
		$this->set_prop( 'featured', ci_string_to_bool( $featured ) );
	}
	
	/**
	 * Set catalog visibility.
	 *
	 * @param string $visibility Options: 'hidden', 'visible', 'search' and 'catalog'.
	 * @throws CI_Data_Exception Throws exception when invalid data is found.
	 */
	public function set_catalog_visibility( $visibility )
	{
		$options = array_keys( ci_get_product_visibility_options() );
		if ( ! in_array( $visibility, $options, TRUE ) )
		{
			$this->error( 'product_invalid_catalog_visibility', __( 'Invalid catalog visibility option.', 'suppliers-portal' ) );
		}
		$this->set_prop( 'catalog_visibility', $visibility );
	}
	
	/**
	 * Set product description.
	 *
	 * @param string $description Product description.
	 */
	public function set_description( $description )
	{
		$this->set_prop( 'description', $description );
	}
	
	/**
	 * Set product short description.
	 *
	 * @param string $short_description Product short description.
	 */
	public function set_short_description( $short_description )
	{
		$this->set_prop( 'short_description', $short_description );
	}
	
	/**
	 * Set SKU.
	 *
	 * @param string $sku Product SKU.
	 * @throws CI_Data_Exception Throws exception when invalid data is found.
	 */
	public function set_sku( $sku )
	{
		$sku = (string) $sku;
		if ( $this->get_object_read() && ! empty( $sku ) && ! ci_product_has_unique_sku( $this->get_id(), $sku ) )
		{
			$sku_found = ci_get_product_id_by_sku( $sku );
			
			$this->error( 'product_invalid_sku', __( 'Invalid or duplicated SKU.', 'suppliers-portal' ), 400, [ 'resource_id' => $sku_found ] );
		}
		$this->set_prop( 'sku', $sku );
	}
	
	/**
	 * Set the product's active price.
	 *
	 * @param string $price Price.
	 */
	public function set_price( $price )
	{
		$this->set_prop( 'price', ci_format_decimal( $price ) );
	}
	
	/**
	 * Set the product's regular price.
	 *
	 * @param string $price Regular price.
	 */
	public function set_regular_price( $price )
	{
		$this->set_prop( 'regular_price', ci_format_decimal( $price ) );
	}
	
	/**
	 * Set the product's sale price.
	 *
	 * @param string $price sale price.
	 */
	public function set_sale_price( $price )
	{
		$this->set_prop( 'sale_price', ci_format_decimal( $price ) );
	}
	
	/**
	 * Set date on sale from.
	 *
	 * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
	 */
	public function set_date_on_sale_from( $date = NULL )
	{
		$this->set_date_prop( 'date_on_sale_from', $date );
	}
	
	/**
	 * Set date on sale to.
	 *
	 * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
	 */
	public function set_date_on_sale_to( $date = NULL )
	{
		$this->set_date_prop( 'date_on_sale_to', $date );
	}
	
	/**
	 * Set number total of sales.
	 *
	 * @param int $total Total of sales.
	 */
	public function set_total_sales( $total )
	{
		$this->set_prop( 'total_sales', absint( $total ) );
	}
	
	/**
	 * Set the tax status.
	 *
	 * @param string $status Tax status.
	 * @throws CI_Data_Exception Throws exception when invalid data is found.
	 */
	public function set_tax_status( $status )
	{
		$options = [
			'taxable',
			'shipping',
			'none',
		];
		
		// Set default if empty.
		if ( empty( $status ) )
		{
			$status = 'taxable';
		}
		
		if ( ! in_array( $status, $options, TRUE ) )
		{
			$this->error( 'product_invalid_tax_status', __( 'Invalid product tax status.', 'suppliers-portal' ) );
		}
		
		$this->set_prop( 'tax_status', $status );
	}
	
	/**
	 * Set the tax class.
	 *
	 * @param string $class Tax class.
	 */
	public function set_tax_class( $class )
	{
		$class = sanitize_title( $class );
		$class = 'standard' === $class ? '' : $class;
		$valid_classes = $this->get_valid_tax_classes();
		
		if ( ! in_array( $class, $valid_classes, TRUE ) )
		{
			$class = '';
		}
		
		$this->set_prop( 'tax_class', $class );
	}
	
	/**
	 * Return an array of valid tax classes
	 *
	 * @return array valid tax classes
	 */
	protected function get_valid_tax_classes()
	{
		return CI_Tax::get_tax_class_slugs();
	}
	
	/**
	 * Set if product manage stock.
	 *
	 * @param bool $manage_stock Whether or not manage stock is enabled.
	 */
	public function set_manage_stock( $manage_stock )
	{
		$this->set_prop( 'manage_stock', ci_string_to_bool( $manage_stock ) );
	}
	
	/**
	 * Set number of items available for sale.
	 *
	 * @param float|null $quantity Stock quantity.
	 */
	public function set_stock_quantity( $quantity )
	{
		$this->set_prop( 'stock_quantity', '' !== $quantity ? ci_stock_amount( $quantity ) : NULL );
	}
	
	/**
	 * Set stock status.
	 *
	 * @param string $status New status.
	 */
	public function set_stock_status( $status = 'instock' )
	{
		$valid_statuses = ci_get_product_stock_status_options();
		
		if ( isset( $valid_statuses[ $status ] ) )
		{
			$this->set_prop( 'stock_status', $status );
		}
		else
		{
			$this->set_prop( 'stock_status', 'instock' );
		}
	}
	
	/**
	 * Set backorders.
	 *
	 * @param string $backorders Options: 'yes', 'no' or 'notify'.
	 */
	public function set_backorders( $backorders )
	{
		$this->set_prop( 'backorders', $backorders );
	}
	
	/**
	 * Set low stock amount.
	 *
	 * @param int|string $amount Empty string if value not set.
	 */
	public function set_low_stock_amount( $amount )
	{
		$this->set_prop( 'low_stock_amount', '' === $amount ? '' : absint( $amount ) );
	}
	
	/**
	 * Set if should be sold individually.
	 *
	 * @param bool $sold_individually Whether or not product is sold individually.
	 */
	public function set_sold_individually( $sold_individually )
	{
		$this->set_prop( 'sold_individually', ci_string_to_bool( $sold_individually ) );
	}
	
	/**
	 * Set the product's weight.
	 *
	 * @param float|string $weight Total weight.
	 */
	public function set_weight( $weight )
	{
		$this->set_prop( 'weight', '' === $weight ? '' : ci_format_decimal( $weight ) );
	}
	
	/**
	 * Set the product length.
	 *
	 * @param float|string $length Total length.
	 */
	public function set_length( $length )
	{
		$this->set_prop( 'length', '' === $length ? '' : ci_format_decimal( $length ) );
	}
	
	/**
	 * Set the product width.
	 *
	 * @param float|string $width Total width.
	 */
	public function set_width( $width )
	{
		$this->set_prop( 'width', '' === $width ? '' : ci_format_decimal( $width ) );
	}
	
	/**
	 * Set the product height.
	 *
	 * @param float|string $height Total height.
	 */
	public function set_height( $height )
	{
		$this->set_prop( 'height', '' === $height ? '' : ci_format_decimal( $height ) );
	}
	
	/**
	 * Set upsell IDs.
	 *
	 * @param array $upsell_ids IDs from the up-sell products.
	 */
	public function set_upsell_ids( $upsell_ids )
	{
		$this->set_prop( 'upsell_ids', array_filter( (array) $upsell_ids ) );
	}
	
	/**
	 * Set crosssell IDs.
	 *
	 * @param array $cross_sell_ids IDs from the cross-sell products.
	 */
	public function set_cross_sell_ids( $cross_sell_ids )
	{
		$this->set_prop( 'cross_sell_ids', array_filter( (array) $cross_sell_ids ) );
	}
	
	/**
	 * Set parent ID.
	 *
	 * @param int $parent_id Product parent ID.
	 */
	public function set_parent_id( $parent_id )
	{
		$this->set_prop( 'parent_id', absint( $parent_id ) );
	}
	
	/**
	 * Set if reviews is allowed.
	 *
	 * @param bool $reviews_allowed Reviews allowed or not.
	 */
	public function set_reviews_allowed( $reviews_allowed )
	{
		$this->set_prop( 'reviews_allowed', ci_string_to_bool( $reviews_allowed ) );
	}
	
	/**
	 * Set purchase note.
	 *
	 * @param string $purchase_note Purchase note.
	 */
	public function set_purchase_note( $purchase_note )
	{
		$this->set_prop( 'purchase_note', $purchase_note );
	}
	
	/**
	 * Set product attributes.
	 *
	 * Attributes are made up of:
	 *     id - 0 for product level attributes. ID for global attributes.
	 *     name - Attribute name.
	 *     options - attribute value or array of term ids/names.
	 *     position - integer sort order.
	 *     visible - If visible on frontend.
	 *     variation - If used for variations.
	 * Indexed by unqiue key to allow clearing old ones after a set.
	 *
	 * @param array $raw_attributes Array of CI_Product_Attribute objects.
	 */
	public function set_attributes( $raw_attributes )
	{
		$attributes = array_fill_keys( array_keys( $this->get_attributes( 'edit' ) ), NULL );
		foreach ( $raw_attributes as $attribute )
		{
			if ( is_a( $attribute, 'CI_Product_Attribute' ) )
			{
				$attributes[ sanitize_title( $attribute->get_name() ) ] = $attribute;
			}
		}
		
		uasort( $attributes, 'ci_product_attribute_uasort_comparison' );
		$this->set_prop( 'attributes', $attributes );
	}
	
	/**
	 * Set default attributes. These will be saved as strings and should map to attribute values.
	 *
	 * @param array $default_attributes List of default attributes.
	 */
	public function set_default_attributes( $default_attributes )
	{
		$this->set_prop( 'default_attributes', array_map( 'strval', array_filter( (array) $default_attributes, 'ci_array_filter_default_attributes' ) ) );
	}
	
	/**
	 * Set menu order.
	 *
	 * @param int $menu_order Menu order.
	 */
	public function set_menu_order( $menu_order )
	{
		$this->set_prop( 'menu_order', intval( $menu_order ) );
	}
	
	/**
	 * Set post password.
	 *
	 * @param int $post_password Post password.
	 */
	public function set_post_password( $post_password )
	{
		$this->set_prop( 'post_password', $post_password );
	}
	
	/**
	 * Set the product categories.
	 *
	 * @param array $term_ids List of terms IDs.
	 */
	public function set_category_ids( $term_ids )
	{
		$this->set_prop( 'category_ids', array_unique( array_map( 'intval', $term_ids ) ) );
	}
	
	/**
	 * Set the product tags.
	 *
	 * @param array $term_ids List of terms IDs.
	 */
	public function set_tag_ids( $term_ids )
	{
		$this->set_prop( 'tag_ids', array_unique( array_map( 'intval', $term_ids ) ) );
	}
	
	/**
	 * Set if the product is virtual.
	 *
	 * @param bool|string $virtual Whether product is virtual or not.
	 */
	public function set_virtual( $virtual )
	{
		$this->set_prop( 'virtual', ci_string_to_bool( $virtual ) );
	}
	
	/**
	 * Set shipping class ID.
	 *
	 * @param int $id Product shipping class id.
	 */
	public function set_shipping_class_id( $id )
	{
		$this->set_prop( 'shipping_class_id', absint( $id ) );
	}
	
	/**
	 * Set if the product is downloadable.
	 *
	 * @param bool|string $downloadable Whether product is downloadable or not.
	 */
	public function set_downloadable( $downloadable )
	{
		$this->set_prop( 'downloadable', ci_string_to_bool( $downloadable ) );
	}
	
	/**
	 * Set downloads.
	 *
	 * @param array $downloads_array Array of CI_Product_Download objects or arrays.
	 *
	 * @throws CI_Data_Exception If an error relating to one of the downloads is encountered.
	 */
	public function set_downloads( $downloads_array )
	{
		// When the object is first hydrated, only the previously persisted downloads will be passed in.
		$existing_downloads = $this->get_object_read() ? (array) $this->get_prop( 'downloads' ) : $downloads_array;
		$downloads = [];
		$errors = [];
		
		$downloads_array = $this->build_downloads_map( $downloads_array );
		$existing_downloads = $this->build_downloads_map( $existing_downloads );
		
		foreach ( $downloads_array as $download )
		{
			$download_id = $download->get_id();
			$is_new = ! isset( $existing_downloads[ $download_id ] );
			$has_changed = ! $is_new && $existing_downloads[ $download_id ]->get_file() !== $downloads_array[ $download_id ]->get_file();
			
			try
			{
				$download->check_is_valid( $this->get_object_read() );
				$downloads[ $download_id ] = $download;
			} catch ( Exception $e )
			{
				// We only add error messages for newly added downloads (let's not overwhelm the user if there are
				// multiple existing files which are problematic).
				if ( $is_new || $has_changed )
				{
					$errors[] = $e->getMessage();
				}
				
				// If the problem is with an existing download, disable it.
				if ( ! $is_new )
				{
					$download->set_enabled( FALSE );
					$downloads[ $download_id ] = $download;
				}
			}
		}
		
		$this->set_prop( 'downloads', $downloads );
		
		if ( $errors && $this->get_object_read() )
		{
			$this->error( 'product_invalid_download', $errors[ 0 ] );
		}
	}
	
	/**
	 * Takes an array of downloadable file representations and converts it into an array of
	 * CI_Product_Download objects, indexed by download ID.
	 *
	 * @param array[]|CI_Product_Download[] $downloads Download data to be re-mapped.
	 *
	 * @return CI_Product_Download[]
	 */
	private function build_downloads_map( array $downloads ) : array
	{
		$downloads_map = [];
		
		foreach ( $downloads as $download_data )
		{
			// If the item is already a CI_Product_Download we can add it to the map and move on.
			if ( is_a( $download_data, 'CI_Product_Download' ) )
			{
				$downloads_map[ $download_data->get_id() ] = $download_data;
				continue;
			}
			
			// If the item is not an array, there is nothing else we can do (bad data).
			if ( ! is_array( $download_data ) )
			{
				continue;
			}
			
			// Otherwise, transform the array to a CI_Product_Download and add to the map.
			$download_object = new CI_Product_Download();
			
			// If we don't have a previous hash, generate UUID for download.
			if ( empty( $download_data[ 'download_id' ] ) )
			{
				$download_data[ 'download_id' ] = ci_generate_uuid4();
			}
			
			$download_object->set_id( $download_data[ 'download_id' ] );
			$download_object->set_name( $download_data[ 'name' ] );
			$download_object->set_file( $download_data[ 'file' ] );
			$download_object->set_enabled( isset( $download_data[ 'enabled' ] ) ? $download_data[ 'enabled' ] : TRUE );
			
			$downloads_map[ $download_object->get_id() ] = $download_object;
		}
		
		return $downloads_map;
	}
	
	/**
	 * Set download limit.
	 *
	 * @param int|string $download_limit Product download limit.
	 */
	public function set_download_limit( $download_limit )
	{
		$this->set_prop( 'download_limit', -1 === (int) $download_limit || '' === $download_limit ? -1 : absint( $download_limit ) );
	}
	
	/**
	 * Set download expiry.
	 *
	 * @param int|string $download_expiry Product download expiry.
	 */
	public function set_download_expiry( $download_expiry )
	{
		$this->set_prop( 'download_expiry', -1 === (int) $download_expiry || '' === $download_expiry ? -1 : absint( $download_expiry ) );
	}
	
	/**
	 * Set gallery attachment ids.
	 *
	 * @param array $image_ids List of image ids.
	 */
	public function set_gallery_image_ids( $image_ids )
	{
		$image_ids = ci_parse_id_list( $image_ids );
		
		$this->set_prop( 'gallery_image_ids', $image_ids );
	}
	
	/**
	 * Set main image ID.
	 *
	 * @param int|string $image_id Product image id.
	 */
	public function set_image_id( $image_id = '' )
	{
		$this->set_prop( 'image_id', $image_id );
	}
	
	/**
	 * Set rating counts. Read only.
	 *
	 * @param array $counts Product rating counts.
	 */
	public function set_rating_counts( $counts )
	{
		$this->set_prop( 'rating_counts', array_filter( array_map( 'absint', (array) $counts ) ) );
	}
	
	/**
	 * Set average rating. Read only.
	 *
	 * @param float $average Product average rating.
	 */
	public function set_average_rating( $average )
	{
		$this->set_prop( 'average_rating', ci_format_decimal( $average ) );
	}
	
	/**
	 * Set review count. Read only.
	 *
	 * @param int $count Product review count.
	 */
	public function set_review_count( $count )
	{
		$this->set_prop( 'review_count', absint( $count ) );
	}
	
	/*
	|--------------------------------------------------------------------------
	| Other Methods
	|--------------------------------------------------------------------------
	*/
	
	/**
	 * Ensure properties are set correctly before save.
	 */
	public function validate_props()
	{
		// Before updating, ensure stock props are all aligned. Qty, backorders and low stock amount are not needed if not stock managed.
		if ( ! $this->get_manage_stock() )
		{
			$this->set_stock_quantity( '' );
			$this->set_backorders( 'no' );
			$this->set_low_stock_amount( '' );
			return;
		}
		
		$stock_is_above_notification_threshold = ( $this->get_stock_quantity() > get_option( 'codeigniter_notify_no_stock_amount', 0 ) );
		$backorders_are_allowed = ( 'no' !== $this->get_backorders() );
		
		if ( $stock_is_above_notification_threshold )
		{
			$new_stock_status = 'instock';
		}
		elseif ( $backorders_are_allowed )
		{
			$new_stock_status = 'onbackorder';
		}
		else
		{
			$new_stock_status = 'outofstock';
		}
		
		$this->set_stock_status( $new_stock_status );
	}
	
	/**
	 * Save data (either create or update depending on if we are working on an existing product).
	 *
	 * @return int
	 */
	public function save()
	{
		$this->validate_props();
		
		if ( ! $this->data_store )
		{
			return $this->get_id();
		}
		
		$state = $this->before_data_store_save_or_update();
		
		if ( $this->get_id() )
		{
			$changeset = $this->get_changes();
			$this->data_store->update( $this );
		}
		else
		{
			$changeset = NULL;
			$this->data_store->create( $this );
		}
		
		$this->after_data_store_save_or_update( $state );
		
		// Update attributes lookup table if the product is new OR it's not but there are actually any changes.
		if ( is_null( $changeset ) || ! empty( $changeset ) )
		{
			ci_get_container()->get( ProductAttributesLookupDataStore::class )->on_product_changed( $this, $changeset );
		}
		
		return $this->get_id();
	}
	
	/**
	 * Do any extra processing needed before the actual product save
	 * (but after triggering the 'codeigniter_before_..._object_save' action)
	 *
	 * @return mixed A state value that will be passed to after_data_store_save_or_update.
	 */
	protected function before_data_store_save_or_update()
	{
	}
	
	/**
	 * Do any extra processing needed after the actual product save
	 * (but before triggering the 'codeigniter_after_..._object_save' action)
	 *
	 * @param mixed $state The state object that was returned by before_data_store_save_or_update.
	 */
	protected function after_data_store_save_or_update( $state )
	{
		$this->maybe_defer_product_sync();
	}
	
	/**
	 * Delete the product, set its ID to 0, and return result.
	 *
	 * @param bool $force_delete Should the product be deleted permanently.
	 * @return bool result
	 */
	public function delete( $force_delete = FALSE )
	{
		$product_id = $this->get_id();
		$deleted = parent::delete( $force_delete );
		
		if ( $deleted )
		{
			$this->maybe_defer_product_sync();
			ci_get_container()->get( ProductAttributesLookupDataStore::class )->on_product_deleted( $product_id );
		}
		
		return $deleted;
	}
	
	/**
	 * If this is a child product, queue its parent for syncing at the end of the request.
	 */
	protected function maybe_defer_product_sync()
	{
		$parent_id = $this->get_parent_id();
		if ( $parent_id )
		{
			ci_deferred_product_sync( $parent_id );
		}
	}
	
	/*
	|--------------------------------------------------------------------------
	| Conditionals
	|--------------------------------------------------------------------------
	*/
	
	/**
	 * Check if a product supports a given feature.
	 *
	 * Product classes should override this to declare support (or lack of support) for a feature.
	 *
	 * @param string $feature string The name of a feature to test support for.
	 * @return bool True if the product supports the feature, false otherwise.
	 */
	public function supports( $feature )
	{
		return in_array( $feature, $this->supports, TRUE );
	}
	
	/**
	 * Returns whether or not the product post exists.
	 *
	 * @return bool
	 */
	public function exists()
	{
		return FALSE !== $this->get_status();
	}
	
	/**
	 * Checks the product type.
	 *
	 * Backwards compatibility with downloadable/virtual.
	 *
	 * @param string|array $type Array or string of types.
	 * @return bool
	 */
	public function is_type( $type )
	{
		return ( $this->get_type() === $type || ( is_array( $type ) && in_array( $this->get_type(), $type, TRUE ) ) );
	}
	
	/**
	 * Checks if a product is downloadable.
	 *
	 * @return bool
	 */
	public function is_downloadable()
	{
		return TRUE === $this->get_downloadable();
	}
	
	/**
	 * Checks if a product is virtual (has no shipping).
	 *
	 * @return bool
	 */
	public function is_virtual()
	{
		return TRUE === $this->get_virtual();
	}
	
	/**
	 * Returns whether or not the product is featured.
	 *
	 * @return bool
	 */
	public function is_featured()
	{
		return TRUE === $this->get_featured();
	}
	
	/**
	 * Check if a product is sold individually (no quantities).
	 *
	 * @return bool
	 */
	public function is_sold_individually()
	{
		return TRUE === $this->get_sold_individually();
	}
	
	/**
	 * Returns whether or not the product is visible in the catalog.
	 *
	 * @return bool
	 */
	public function is_visible()
	{
		return $this->is_visible_core();
	}
	
	/**
	 * Returns whether or not the product is visible in the catalog (doesn't trigger filters).
	 *
	 * @return bool
	 */
	protected function is_visible_core()
	{
		$visible = 'visible' === $this->get_catalog_visibility() || ( is_search() && 'search' === $this->get_catalog_visibility() ) || ( ! is_search() && 'catalog' === $this->get_catalog_visibility() );
		
		if ( 'trash' === $this->get_status() )
		{
			$visible = FALSE;
		}
		elseif ( 'publish' !== $this->get_status() && ! current_user_can( 'edit_post', $this->get_id() ) )
		{
			$visible = FALSE;
		}
		
		if ( $this->get_parent_id() )
		{
			$parent_product = ci_get_product( $this->get_parent_id() );
			
			if ( $parent_product && 'publish' !== $parent_product->get_status() )
			{
				$visible = FALSE;
			}
		}
		
		if ( 'yes' === get_option( 'codeigniter_hide_out_of_stock_items' ) && ! $this->is_in_stock() )
		{
			$visible = FALSE;
		}
		
		return $visible;
	}
	
	/**
	 * Returns false if the product cannot be bought.
	 *
	 * @return bool
	 */
	public function is_purchasable()
	{
		return ( $this->exists() && ( 'publish' === $this->get_status() || current_user_can( 'edit_post', $this->get_id() ) ) && '' !== $this->get_price() );
	}
	
	/**
	 * Returns whether or not the product is on sale.
	 *
	 * @return bool
	 */
	public function is_on_sale()
	{
		if ( '' !== (string) $this->get_sale_price( $context ) && $this->get_regular_price( $context ) > $this->get_sale_price( $context ) )
		{
			$on_sale = TRUE;
			
			if ( $this->get_date_on_sale_from( $context ) && $this->get_date_on_sale_from( $context )->getTimestamp() > time() )
			{
				$on_sale = FALSE;
			}
			
			if ( $this->get_date_on_sale_to( $context ) && $this->get_date_on_sale_to( $context )->getTimestamp() < time() )
			{
				$on_sale = FALSE;
			}
		}
		else
		{
			$on_sale = FALSE;
		}
		return $on_sale;
	}
	
	/**
	 * Returns whether or not the product has dimensions set.
	 *
	 * @return bool
	 */
	public function has_dimensions()
	{
		return ( $this->get_length() || $this->get_height() || $this->get_width() ) && ! $this->get_virtual();
	}
	
	/**
	 * Returns whether or not the product has weight set.
	 *
	 * @return bool
	 */
	public function has_weight()
	{
		return $this->get_weight() && ! $this->get_virtual();
	}
	
	/**
	 * Returns whether or not the product can be purchased.
	 * This returns true for 'instock' and 'onbackorder' stock statuses.
	 *
	 * @return bool
	 */
	public function is_in_stock()
	{
		return 'outofstock' !== $this->get_stock_status();
	}
	
	/**
	 * Checks if a product needs shipping.
	 *
	 * @return bool
	 */
	public function needs_shipping()
	{
		return ! $this->is_virtual();
	}
	
	/**
	 * Returns whether or not the product is taxable.
	 *
	 * @return bool
	 */
	public function is_taxable()
	{
		return $this->get_tax_status() === 'taxable' && ci_tax_enabled();
	}
	
	/**
	 * Returns whether or not the product shipping is taxable.
	 *
	 * @return bool
	 */
	public function is_shipping_taxable()
	{
		return $this->needs_shipping() && ( $this->get_tax_status() === 'taxable' || $this->get_tax_status() === 'shipping' );
	}
	
	/**
	 * Returns whether or not the product is stock managed.
	 *
	 * @return bool
	 */
	public function managing_stock()
	{
		if ( 'yes' === get_option( 'codeigniter_manage_stock' ) )
		{
			return $this->get_manage_stock();
		}
		return FALSE;
	}
	
	/**
	 * Returns whether or not the product can be backordered.
	 *
	 * @return bool
	 */
	public function backorders_allowed()
	{
		return ( 'yes' === $this->get_backorders() || 'notify' === $this->get_backorders() );
	}
	
	/**
	 * Returns whether or not the product needs to notify the customer on backorder.
	 *
	 * @return bool
	 */
	public function backorders_require_notification()
	{
		return ( $this->managing_stock() && 'notify' === $this->get_backorders() );
	}
	
	/**
	 * Check if a product is on backorder.
	 *
	 * @param int $qty_in_cart (default: 0).
	 * @return bool
	 */
	public function is_on_backorder( $qty_in_cart = 0 )
	{
		if ( 'onbackorder' === $this->get_stock_status() )
		{
			return TRUE;
		}
		
		return $this->managing_stock() && $this->backorders_allowed() && ( $this->get_stock_quantity() - $qty_in_cart ) < 0;
	}
	
	/**
	 * Returns whether or not the product has enough stock for the order.
	 *
	 * @param mixed $quantity Quantity of a product added to an order.
	 * @return bool
	 */
	public function has_enough_stock( $quantity )
	{
		return ! $this->managing_stock() || $this->backorders_allowed() || $this->get_stock_quantity() >= $quantity;
	}
	
	/**
	 * Returns whether or not the product has any visible attributes.
	 *
	 * @return boolean
	 */
	public function has_attributes()
	{
		foreach ( $this->get_attributes() as $attribute )
		{
			if ( $attribute->get_visible() )
			{
				return TRUE;
			}
		}
		return FALSE;
	}
	
	/**
	 * Returns whether or not the product has any child product.
	 *
	 * @return bool
	 */
	public function has_child()
	{
		return 0 < count( $this->get_children() );
	}
	
	/**
	 * Does a child have dimensions?
	 *
	 * @return bool
	 * @since  3.0.0
	 */
	public function child_has_dimensions()
	{
		return FALSE;
	}
	
	/**
	 * Does a child have a weight?
	 *
	 * @return boolean
	 * @since  3.0.0
	 */
	public function child_has_weight()
	{
		return FALSE;
	}
	
	/**
	 * Check if downloadable product has a file attached.
	 *
	 * @param string $download_id file identifier.
	 * @return bool Whether downloadable product has a file attached.
	 * @since 1.6.2
	 *
	 */
	public function has_file( $download_id = '' )
	{
		return $this->is_downloadable() && $this->get_file( $download_id );
	}
	
	/**
	 * Returns whether or not the product has additional options that need
	 * selecting before adding to cart.
	 *
	 * @return boolean
	 */
	public function has_options()
	{
		return FALSE;
	}
	
	/*
	|--------------------------------------------------------------------------
	| Non-CRUD Getters
	|--------------------------------------------------------------------------
	*/
	
	/**
	 * Get the product's title. For products this is the product name.
	 *
	 * @return string
	 */
	public function get_title()
	{
		return $this->get_name();
	}
	
	/**
	 * Product permalink.
	 *
	 * @return string
	 */
	public function get_permalink()
	{
		return get_permalink( $this->get_id() );
	}
	
	/**
	 * Returns the children IDs if applicable. Overridden by child classes.
	 *
	 * @return array of IDs
	 */
	public function get_children()
	{
		return [];
	}
	
	/**
	 * If the stock level comes from another product ID, this should be modified.
	 *
	 * @return int
	 */
	public function get_stock_managed_by_id()
	{
		return $this->get_id();
	}
	
	/**
	 * Returns the price in html format.
	 *
	 * @param string $deprecated Deprecated param.
	 *
	 * @return string
	 */
	public function get_price_html( $deprecated = '' )
	{
		if ( '' === $this->get_price() )
		{
			$price = '';
		}
		elseif ( $this->is_on_sale() )
		{
			$price = ci_format_sale_price( ci_get_price_to_display( $this, [ 'price' => $this->get_regular_price() ] ), ci_get_price_to_display( $this ) ) . $this->get_price_suffix();
		}
		else
		{
			$price = ci_price( ci_get_price_to_display( $this ) ) . $this->get_price_suffix();
		}
		
		return $price;
	}
	
	/**
	 * Get product name with SKU or ID. Used within admin.
	 *
	 * @return string Formatted product name
	 */
	public function get_formatted_name()
	{
		if ( $this->get_sku() )
		{
			$identifier = $this->get_sku();
		}
		else
		{
			$identifier = '#' . $this->get_id();
		}
		return sprintf( '%2$s (%1$s)', $identifier, $this->get_name() );
	}
	
	/**
	 * Get min quantity which can be purchased at once.
	 *
	 * @return int
	 */
	public function get_min_purchase_quantity()
	{
		return 1;
	}
	
	/**
	 * Get max quantity which can be purchased at once.
	 *
	 * @return int Quantity or -1 if unlimited.
	 */
	public function get_max_purchase_quantity()
	{
		return $this->is_sold_individually() ? 1 : ( $this->backorders_allowed() || ! $this->managing_stock() ? -1 : $this->get_stock_quantity() );
	}
	
	/**
	 * Get the add to url used mainly in loops.
	 *
	 * @return string
	 */
	public function add_to_cart_url()
	{
		return $this->get_permalink();
	}
	
	/**
	 * Get the add to cart button text for the single page.
	 *
	 * @return string
	 */
	public function single_add_to_cart_text()
	{
		return __( 'Add to cart', 'suppliers-portal' );
	}
	
	/**
	 * Get the add to cart button text.
	 *
	 * @return string
	 */
	public function add_to_cart_text()
	{
		return __( 'Read more', 'suppliers-portal' );
	}
	
	/**
	 * Get the add to cart button text description - used in aria tags.
	 *
	 * @return string
	 */
	public function add_to_cart_description()
	{
		/* translators: %s: Product title */
		return sprintf( __( 'Read more about &ldquo;%s&rdquo;', 'suppliers-portal' ), $this->get_name() );
	}
	
	/**
	 * Returns the main product image.
	 *
	 * @param string $size (default: 'codeigniter_thumbnail').
	 * @param array $attr Image attributes.
	 * @param bool $placeholder True to return $placeholder if no image is found, or false to return an empty string.
	 * @return string
	 */
	public function get_image( $size = 'codeigniter_thumbnail', $attr = [], $placeholder = TRUE )
	{
		$image = '';
		if ( $this->get_image_id() )
		{
			$image = ci_get_attachment_image( $this->get_image_id(), $size, FALSE, $attr );
		}
		elseif ( $this->get_parent_id() )
		{
			$parent_product = ci_get_product( $this->get_parent_id() );
			if ( $parent_product )
			{
				$image = $parent_product->get_image( $size, $attr, $placeholder );
			}
		}
		
		if ( ! $image && $placeholder )
		{
			$image = ci_placeholder_img( $size, $attr );
		}
		
		return $image;
	}
	
	/**
	 * Returns the product shipping class SLUG.
	 *
	 * @return string
	 */
	public function get_shipping_class()
	{
		$class_id = $this->get_shipping_class_id();
		if ( $class_id )
		{
			$term = get_term_by( 'id', $class_id, 'product_shipping_class' );
			
			if ( $term && ! is_ci_error( $term ) )
			{
				return $term->slug;
			}
		}
		return '';
	}
	
	/**
	 * Returns a single product attribute as a string.
	 *
	 * @param string $attribute to get.
	 * @return string
	 */
	public function get_attribute( $attribute )
	{
		$attributes = $this->get_attributes();
		$attribute = sanitize_title( $attribute );
		
		if ( isset( $attributes[ $attribute ] ) )
		{
			$attribute_object = $attributes[ $attribute ];
		}
		elseif ( isset( $attributes[ 'pa_' . $attribute ] ) )
		{
			$attribute_object = $attributes[ 'pa_' . $attribute ];
		}
		else
		{
			return '';
		}
		return $attribute_object->is_taxonomy() ? implode( ', ', ci_get_product_terms( $this->get_id(), $attribute_object->get_name(), [ 'fields' => 'names' ] ) ) : ci_implode_text_attributes( $attribute_object->get_options() );
	}
	
	/**
	 * Get the total amount (COUNT) of ratings, or just the count for one rating e.g. number of 5 star ratings.
	 *
	 * @param int $value Optional. Rating value to get the count for. By default returns the count of all rating values.
	 * @return int
	 */
	public function get_rating_count( $value = NULL )
	{
		$counts = $this->get_rating_counts();
		
		if ( is_null( $value ) )
		{
			return array_sum( $counts );
		}
		elseif ( isset( $counts[ $value ] ) )
		{
			return absint( $counts[ $value ] );
		}
		else
		{
			return 0;
		}
	}
	
	/**
	 * Get a file by $download_id.
	 *
	 * @param string $download_id file identifier.
	 * @return array|false if not found
	 */
	public function get_file( $download_id = '' )
	{
		$files = $this->get_downloads();
		
		if ( '' === $download_id )
		{
			$file = count( $files ) ? current( $files ) : FALSE;
		}
		elseif ( isset( $files[ $download_id ] ) )
		{
			$file = $files[ $download_id ];
		}
		else
		{
			$file = FALSE;
		}
		
		return $file;
	}
	
	/**
	 * Get file download path identified by $download_id.
	 *
	 * @param string $download_id file identifier.
	 * @return string
	 */
	public function get_file_download_path( $download_id )
	{
		$files = $this->get_downloads();
		$file_path = isset( $files[ $download_id ] ) ? $files[ $download_id ]->get_file() : '';
		
		// allow overriding based on the particular file being requested.
		return $file_path;
	}
	
	/**
	 * Get the suffix to display after prices > 0.
	 *
	 * @param string $price to calculate, left blank to just use get_price().
	 * @param integer $qty passed on to get_price_including_tax() or get_price_excluding_tax().
	 * @return string
	 */
	public function get_price_suffix( $price = '', $qty = 1 )
	{
		$html = '';
		
		$suffix = get_option( 'codeigniter_price_display_suffix' );
		if ( $suffix && ci_tax_enabled() && 'taxable' === $this->get_tax_status() )
		{
			if ( '' === $price )
			{
				$price = $this->get_price();
			}
			$replacements = [
				'{price_including_tax}' => ci_price( ci_get_price_including_tax( $this, [ 'qty' => $qty, 'price' => $price ] ) ), // @phpcs:ignore WordPress.Arrays.ArrayDeclarationSpacing.ArrayItemNoNewLine, WordPress.Arrays.ArrayDeclarationSpacing.AssociativeArrayFound
				'{price_excluding_tax}' => ci_price( ci_get_price_excluding_tax( $this, [ 'qty' => $qty, 'price' => $price ] ) ), // @phpcs:ignore WordPress.Arrays.ArrayDeclarationSpacing.AssociativeArrayFound
			];
			$html = str_replace( array_keys( $replacements ), array_values( $replacements ), ' <small class="codeigniter-price-suffix">' . ci_kses_post( $suffix ) . '</small>' );
		}
		return $html;
	}
	
	/**
	 * Returns the availability of the product.
	 *
	 * @return string[]
	 */
	public function get_availability()
	{
		return [
			'availability' => $this->get_availability_text(),
			'class'        => $this->get_availability_class(),
		];
	}
	
	/**
	 * Get availability text based on stock status.
	 *
	 * @return string
	 */
	protected function get_availability_text()
	{
		if ( ! $this->is_in_stock() )
		{
			$availability = __( 'Out of stock', 'suppliers-portal' );
		}
		elseif ( $this->managing_stock() && $this->is_on_backorder( 1 ) )
		{
			$availability = $this->backorders_require_notification() ? __( 'Available on backorder', 'suppliers-portal' ) : '';
		}
		elseif ( ! $this->managing_stock() && $this->is_on_backorder( 1 ) )
		{
			$availability = __( 'Available on backorder', 'suppliers-portal' );
		}
		elseif ( $this->managing_stock() )
		{
			$availability = ci_format_stock_for_display( $this );
		}
		else
		{
			$availability = '';
		}
		return $availability;
	}
	
	/**
	 * Get availability classname based on stock status.
	 *
	 * @return string
	 */
	protected function get_availability_class()
	{
		if ( ! $this->is_in_stock() )
		{
			$class = 'out-of-stock';
		}
		elseif ( ( $this->managing_stock() && $this->is_on_backorder( 1 ) ) || ( ! $this->managing_stock() && $this->is_on_backorder( 1 ) ) )
		{
			$class = 'available-on-backorder';
		}
		else
		{
			$class = 'in-stock';
		}
		return $class;
	}
	
}

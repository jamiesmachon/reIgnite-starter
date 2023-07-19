<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Simple product class.
 */
class CI_Product_Simple extends CI_Product {
	
	/**
	 * Initialize simple product.
	 *
	 * @param CI_Product|int $product Product instance or ID.
	 */
	public function __construct( $product = 0 )
	{
		parent::__construct( $product );
	}
	
	/**
	 * Get internal type.
	 *
	 * @return string
	 */
	public function get_type()
	{
		return 'simple';
	}
}

<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * CI Product Data Store Interface
 *
 * Functions that must be defined by product store classes.
 */
interface CI_Product_Data_Store_Interface {
	
	/**
	 * Returns an array of on sale products, as an array of objects with an
	 * ID and parent_id present. Example: $return[0]->id, $return[0]->parent_id.
	 *
	 * @return array
	 */
	public function get_on_sale_products();
	
	/**
	 * Returns a list of product IDs ( id as key => parent as value) that are
	 * featured. Uses get_posts instead of wc_get_products since we want
	 * some extra meta queries and ALL products (posts_per_page = -1).
	 *
	 * @return array
	 */
	public function get_featured_product_ids();
	
	/**
	 * Check if product sku is found for any other product IDs.
	 *
	 * @param int $product_id Product ID.
	 * @param string $sku SKU.
	 * @return bool
	 */
	public function is_existing_sku( $product_id, $sku );
	
	/**
	 * Return product ID based on SKU.
	 *
	 * @param string $sku SKU.
	 * @return int
	 */
	public function get_product_id_by_sku( $sku );
	
	/**
	 * Returns an array of IDs of products that have sales starting soon.
	 *
	 * @return array
	 */
	public function get_starting_sales();
	
	/**
	 * Returns an array of IDs of products that have sales which are due to end.
	 *
	 * @return array
	 */
	public function get_ending_sales();
	
	/**
	 * Find a matching (enabled) variation within a variable product.
	 *
	 * @param WC_Product $product Variable product object.
	 * @param array $match_attributes Array of attributes we want to try to match.
	 * @return int Matching variation ID or 0.
	 */
	public function find_matching_product_variation( $product, $match_attributes = [] );
	
	/**
	 * Make sure all variations have a sort order set so they can be reordered correctly.
	 *
	 * @param int $parent_id Parent ID.
	 */
	public function sort_all_product_variations( $parent_id );
	
	/**
	 * Update a product's stock amount directly.
	 *
	 * Uses queries rather than update_post_meta so we can do this in one query (to avoid stock issues).
	 *
	 * @param int $product_id_with_stock Product ID.
	 * @param int|null $stock_quantity Stock quantity to update to.
	 * @param string $operation Either set, increase or decrease.
	 */
	public function update_product_stock( $product_id_with_stock, $stock_quantity = NULL, $operation = 'set' );
	
	/**
	 * Get shipping class ID by slug.
	 *
	 * @param string $slug Shipping class slug.
	 * @return int|false
	 */
	public function get_shipping_class_id_by_slug( $slug );
	
	/**
	 * Returns an array of products.
	 *
	 * @param array $args @see wc_get_products.
	 * @return array
	 */
	public function get_products( $args = [] );
	
	/**
	 * Get the product type based on product ID.
	 *
	 * @param int $product_id Product ID.
	 * @return bool|string
	 */
	public function get_product_type( $product_id );
	
}

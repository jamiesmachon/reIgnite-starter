<?php

namespace app\controllers\admin\ecommerce;

use Private_Controller;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Catalog extends Private_Controller {
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Main listing page
	 */
	public function index()
	{
		$this->add_theme_scripts( [
			'custom/apps/ecommerce/catalog/products',
		] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Products', '/admin/ecommerce/catalog' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/catalog/listing', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * Add a new product page
	 *
	 * @return void
	 */
	public function add_product()
	{
		$this
			->add_external_scripts( [ "/{$this->_theme_path}/assets/plugins/custom/formrepeater/formrepeater.bundle", ] )
			->add_theme_scripts( [ 'custom/apps/ecommerce/catalog/save-product', ] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Products', '/admin/ecommerce/catalog' );
		$this->breadcrumbs->push( 'Add product', '/admin/ecommerce/catalog/add-product' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/catalog/product', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * Edit an existing product page
	 *
	 * @param $id
	 * @return void
	 */
	public function edit_product( $id = NULL )
	{
		$this
			->add_external_scripts( [ "/{$this->_theme_path}/assets/plugins/custom/formrepeater/formrepeater.bundle", ] )
			->add_theme_scripts( [ 'custom/apps/ecommerce/catalog/save-product', ] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Products', '/admin/ecommerce/catalog' );
		$this->breadcrumbs->push( 'Edit product', '/admin/ecommerce/catalog/edit-product' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/catalog/product', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * Categories listing page
	 */
	public function categories()
	{
		$this->add_theme_scripts( [ 'custom/apps/ecommerce/catalog/categories' ] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Categories', '/admin/ecommerce/catalog/categories' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/catalog/categories', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * Add a new category page
	 *
	 * @return void
	 */
	public function add_category()
	{
		$this->add_theme_scripts( [ 'custom/apps/ecommerce/catalog/save-category' ] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Categories', '/admin/ecommerce/catalog/categories' );
		$this->breadcrumbs->push( 'Add category', '/admin/ecommerce/catalog/add-category' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/catalog/category', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	
	/**
	 * Edit an existing category page
	 *
	 * @param $id
	 * @return void
	 */
	public function edit_category( $id = NULL )
	{
		$this->add_theme_scripts( [ 'custom/apps/ecommerce/catalog/save-category' ] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Categories', '/admin/ecommerce/catalog/categories' );
		$this->breadcrumbs->push( 'Edit category', '/admin/ecommerce/catalog/edit-category' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/catalog/category', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
}

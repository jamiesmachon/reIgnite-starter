<?php

namespace app\controllers\admin\ecommerce;

use Private_Controller;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Reports extends Private_Controller {
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Products viewed
	 */
	public function view()
	{
		$this->add_theme_scripts( [
			'custom/apps/ecommerce/reports/views/views'
		] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Products Viewed', '/admin/ecommerce/reports/view' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/reports/view', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * Sales
	 */
	public function sales()
	{
		$this->add_theme_scripts( [
			'custom/apps/ecommerce/reports/sales/sales'
		] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Sales', '/admin/ecommerce/reports/sales' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/reports/sales', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * Returns
	 */
	public function returns()
	{
		$this->add_theme_scripts( [
			'custom/apps/ecommerce/reports/returns/returns'
		] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Returns', '/admin/ecommerce/reports/returns' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/reports/returns', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * Orders
	 */
	public function orders()
	{
		$this->add_theme_scripts( [
			'custom/apps/ecommerce/reports/customer-orders/customer-orders'
		] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Customer orders', '/admin/ecommerce/reports/orders' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/reports/orders', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * Shipping
	 */
	public function shipping()
	{
		$this->add_theme_scripts( [
			'custom/apps/ecommerce/reports/shipping/shipping'
		] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Shipping', '/admin/ecommerce/reports/shipping' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/reports/shipping', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
}

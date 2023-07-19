<?php

namespace app\controllers\admin;

use Private_Controller;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Customers extends Private_Controller {
	
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
			'custom/apps/customers/listing/listing',
			'custom/apps/customers/listing/add',
			'custom/apps/customers/listing/export',
		] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Customers', '/admin/customers' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/customers/listing', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * View a customer page
	 *
	 * @param $id
	 * @return void
	 */
	public function view( $id = NULL )
	{
		$this->add_theme_scripts( [
			'custom/apps/customers/details/transaction-history',
			'custom/apps/customers/details/add-auth-app',
			'custom/apps/customers/details/add-address',
			'custom/apps/customers/details/add-one-time-password',
			'custom/apps/customers/details/update-password',
			'custom/apps/customers/details/update-phone',
			'custom/apps/customers/details/update-address',
			'custom/apps/customers/details/update-profile',
		] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Customers', '/admin/customers' );
		$this->breadcrumbs->push( 'Customer', '/admin/customers/view' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/customers/details', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
}

<?php

namespace app\controllers\admin\ecommerce;

use CI_Order;
use Private_Controller;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Sales extends Private_Controller {
	
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
			'custom/apps/ecommerce/sales/listing'
		] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Sales', '/admin/ecommerce/sales' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/sales/listing', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * Main order details
	 *
	 * @param $id
	 * @return void
	 */
	public function details( $id = NULL )
	{
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Sales', '/admin/ecommerce/sales' );
		$this->breadcrumbs->push( 'Details', '/admin/ecommerce/sales/details' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/sales/details', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * View a customer page
	 *
	 * @return void
	 */
	public function add_order()
	{
		// validators
		$this->form_validation->set_error_delimiters( config_item( 'error_delimeter_left' ), config_item( 'error_delimeter_right' ) );
		$this->form_validation->set_rules( 'first_name', lang( 'core input label first_name' ), 'required' );
		
		// when a for is submitted validate form
		if ( $this->form_validation->run() === TRUE )
		{
			// if form is valid create an order obejct
			$order = new CI_Order();
			// set all the props for the order object
			$order->set_props( $this->input->post() );
			// save the order object
			if ( $order->save() )
			{
				$this->session->set_flashdata( 'message', sprintf( lang( 'core success new_order' ), $order->get_order_number() ) );
			}
			else
			{
				$this->session->set_flashdata( 'error', lang( 'core error new_order' ) );
			}
			
			// redirect home and display message
			redirect( base_url() );
		}
		
		$this
			->add_external_scripts( [ "/{$this->_theme_path}/assets/plugins/custom/formrepeater/formrepeater.bundle", ] )
			->add_theme_scripts( [ 'custom/apps/ecommerce/sales/save-order' ] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Sales', '/admin/ecommerce/sales' );
		$this->breadcrumbs->push( 'Add order', '/admin/ecommerce/sales/add-order' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/sales/add-order', [], TRUE )
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
	public function edit_order( $id = NULL )
	{
		$this
			->add_external_scripts( [ "/{$this->_theme_path}/assets/plugins/custom/formrepeater/formrepeater.bundle", ] )
			->add_theme_scripts( [ 'custom/apps/ecommerce/sales/save-order' ] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Sales', '/admin/ecommerce/sales' );
		$this->breadcrumbs->push( 'Edit order', '/admin/ecommerce/sales/edit-order' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/ecommerce/sales/edit-order', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
}

<?php

namespace app\controllers\admin;

use Private_Controller;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Settings extends Private_Controller {
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Main settings page
	 */
	public function index()
	{
		$this->add_theme_scripts( [
			'custom/apps/ecommerce/settings/settings'
		] );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		$this->breadcrumbs->push( 'Settings', '/admin/settings' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/settings/index', [], TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
}

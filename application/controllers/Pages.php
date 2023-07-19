<?php

namespace app\controllers;

use Public_Controller;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Pages extends Public_Controller {
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		// construct parent class
		parent::__construct();
	}
	
	/**************************************************************************************
	 * PUBLIC FUNCTIONS
	 **************************************************************************************/
	public function contact_us()
	{
		// set form validation rules
		$this->form_validation->set_error_delimiters( config_item( 'error_delimeter_left' ), config_item( 'error_delimeter_right' ) );
		
		if ( $this->form_validation->run() === TRUE )
		{
		
		}
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// load sign-in specific JS file
		$this->add_theme_scripts( "custom/pages/general/contact" );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'form_action'   => base_url(),
			'form_redirect' => base_url()
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'pages/contact-us', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**************************************************************************************
	 * PUBLIC FUNCTIONS
	 **************************************************************************************/
	public function terms()
	{
		// set form validation rules
		$this->form_validation->set_error_delimiters( config_item( 'error_delimeter_left' ), config_item( 'error_delimeter_right' ) );
		
		if ( $this->form_validation->run() === TRUE )
		{
		
		}
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// load sign-in specific JS file
		$this->add_theme_scripts( "custom/pages/general/contact" );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'form_action'   => base_url(),
			'form_redirect' => base_url()
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'pages/terms', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
}
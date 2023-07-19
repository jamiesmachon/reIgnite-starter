<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Base API Class - used for all API calls
 */
class CLI_Controller extends CI_Controller {
	
	public $settings;
	
	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();
		
		if ( ! is_cli() )
		{
			die( 'CLI Only' );
		}
	}
	
}

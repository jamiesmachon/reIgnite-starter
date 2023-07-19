<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Base Cron Class
 */
class Cron_Controller extends MY_Controller {
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library( 'user_agent' );
		ini_set( 'max_execution_time', 0 );
		// block direct browser access in production environments
		if ( ! $this->input->is_cli_request() && ( ENVIRONMENT === 'production' && strpos( $this->agent->referrer(), base_url() ) ) )
		{
			show_error( lang( 'core error direct_access_forbidden' ) );
		}
	}
	
}

<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Base Private Class - used for all private pages
 */
class Private_Controller extends Public_Controller {
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
		
		// must be logged in
		if ( ! is_user_logged_in() )
		{
			if ( current_url() !== base_url() )
			{
				// store requested URL to session - will load once logged in
				$this->session->set_userdata( [ 'redirect' => current_url() ] );
			}
			
			redirect( base_url() );
		}
		
		$this->add_theme_scripts( [
			'widgets.bundle.js',
			'custom/apps/chat/chat.js',
			'custom/utilities/modals/users-search.js',
		] );
	}
	
}

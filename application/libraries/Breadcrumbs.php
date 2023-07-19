<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Breadcrumbs Class
 * This class manages the breadcrumb object
 *
 * @package        Breadcrumb
 * @version        1.0
 * @author         Buti <buti@nobuti.com>
 * @copyright      Copyright (c) 2012, Buti
 * @link           https://github.com/nobuti/codeigniter-breadcrumb
 */
class Breadcrumbs {
	
	/**
	 * Breadcrumbs stack
	 */
	private $breadcrumbs = [];
	private CI_Controller $_CI;
	private ?string $tag_open;
	private ?string $tag_close;
	private ?string $crumb_open;
	private ?string $crumb_close;
	private ?string $crumb_last_open;
	private ?string $crumb_divider;
	
	/**
	 * Constructor
	 *
	 * @access    public
	 */
	public function __construct()
	{
		$this->_CI =& get_instance();
		// Load config file
		$this->_CI->load->config( 'breadcrumbs' );
		// Get breadcrumbs display options
		$this->tag_open = $this->_CI->config->item( 'tag_open' );
		$this->tag_close = $this->_CI->config->item( 'tag_close' );
		$this->crumb_open = $this->_CI->config->item( 'crumb_open' );
		$this->crumb_close = $this->_CI->config->item( 'crumb_close' );
		$this->crumb_last_open = $this->_CI->config->item( 'crumb_last_open' );
		$this->crumb_divider = $this->_CI->config->item( 'crumb_divider' );
		
		// log_message('debug', "Breadcrumbs Class Initialized");
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Append crumb to stack
	 *
	 * @access    public
	 * @param string $page
	 * @param string $href
	 * @return    void
	 */
	function push( $page, $href )
	{
		// no page or href provided
		if ( ! $page or ! $href ) return;
		
		// Prepend site url
		$href = site_url( $href );
		
		// push breadcrumb
		$this->breadcrumbs[ $href ] = [ 'page' => $page, 'href' => $href ];
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Prepend crumb to stack
	 *
	 * @access    public
	 * @param string $page
	 * @param string $href
	 * @return    void
	 */
	function unshift( $page, $href )
	{
		// no crumb provided
		if ( ! $page or ! $href ) return;
		
		// Prepend site url
		$href = site_url( $href );
		
		// add at firts
		array_unshift( $this->breadcrumbs, [ 'page' => $page, 'href' => $href ] );
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Generate breadcrumb
	 *
	 * @access    public
	 * @return    string
	 */
	function show()
	{
		if ( $this->breadcrumbs )
		{
			
			// set output variable
			$output = $this->tag_open;
			
			// construct output
			foreach ( $this->breadcrumbs as $key => $crumb )
			{
				$keys = array_keys( $this->breadcrumbs );
				if ( end( $keys ) == $key )
				{
					$output .= $this->crumb_last_open . $crumb[ 'page' ] . $this->crumb_close;
				}
				else
				{
					$output .= $this->crumb_open . '<a href="' . $crumb[ 'href' ] . '" class="text-muted text-hover-primary">' . $crumb[ 'page' ] . '</a> ' . $this->crumb_close;
					$output .= $this->crumb_open . $this->crumb_divider . $this->crumb_close;
				}
			}
			
			
			// return output
			return $output . $this->tag_close . PHP_EOL;
		}
		
		// no crumbs
		return '';
	}
	
}
// END Breadcrumbs Class

/* End of file Breadcrumbs.php */
/* Location: ./application/libraries/Breadcrumbs.php */

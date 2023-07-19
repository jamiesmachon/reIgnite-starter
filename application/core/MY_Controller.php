<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Core Class all other classes extend
 */
class MY_Controller extends CI_Controller {
	
	/**
	 * Common data
	 */
	public $_page_title;
	public $_page_header;
	public $_includes;
	public $_template;
	public $_theme_path;
	public $_error;
	private $PHP_EOL;
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
		
		// bootstraping
		ci_cache_init();
		
		$this->PHP_EOL = '<br />';
		
		$this->_theme_path = config_item( 'content_folder' ) . DIRECTORY_SEPARATOR . config_item( 'themes_folder' ) . DIRECTORY_SEPARATOR . config_item( 'theme' );
		
		// declare main template
		$this->set_theme_template( 'index.php' );
		
		// set the time zone
		$timezones = config_item( 'timezones' );
		if ( function_exists( 'date_default_timezone_set' ) )
		{
			date_default_timezone_set( $timezones[ get_option( 'timezones', 'UTC' ) ] );
		}
		
		// Set time and date locale
		if ( $locale = get_option( 'locale' ) )
		{
			setlocale( LC_MONETARY, explode( ',', $locale ) );
			setlocale( LC_NUMERIC, explode( ',', $locale ) );
			setlocale( LC_TIME, explode( ',', $locale ) );
		}
		
		// set global header data - can be merged with or overwritten in controllers
		$this->add_theme_styles( [] );
		
		$this->add_external_styles( [
			'https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700',
			"/{$this->_theme_path}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css",
			"/{$this->_theme_path}/assets/plugins/custom/datatables/datatables.bundle.css",
			"/{$this->_theme_path}/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css",
			"/{$this->_theme_path}/assets/plugins/global/plugins.bundle.css",
			"/{$this->_theme_path}/assets/css/style.bundle.css",
		] );
		
		$this->add_theme_scripts( [
			"scripts.bundle.js"
		] );
		
		$this->add_external_scripts( [
			"https://cdn.amcharts.com/lib/5/index.js",
			"https://cdn.amcharts.com/lib/5/xy.js",
			"https://cdn.amcharts.com/lib/5/percent.js",
			"https://cdn.amcharts.com/lib/5/radar.js",
			"https://cdn.amcharts.com/lib/5/themes/Animated.js",
			"https://cdn.amcharts.com/lib/5/map.js",
			"https://cdn.amcharts.com/lib/5/geodata/worldLow.js",
			"https://cdn.amcharts.com/lib/5/geodata/continentsLow.js",
			"https://cdn.amcharts.com/lib/5/geodata/usaLow.js",
			"https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js",
			"https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js",
			"/{$this->_theme_path}/assets/plugins/global/plugins.bundle.js",
			"/{$this->_theme_path}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js",
			"/{$this->_theme_path}/assets/plugins/custom/datatables/datatables.bundle.js",
			"/{$this->_theme_path}/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js",
		] );
		
		// enable the profiler?
		$this->output->enable_profiler( config_item( 'profiler' ) );
	}
	
	/**
	 * Set Template
	 * sometime, we want to use different template for different page
	 * for example, 404 template, login template, full-width template, sidebar template, etc.
	 * so, use this function
	 * --------------------------------------
	 *
	 * @param string $template_name
	 *
	 * @author  Jamie Stewart Machon
	 * @access  public
	 */
	public function set_theme_template( $template_name = 'index.php' )
	{
		// make sure that $template_name has .php extension
		if ( strpos( $template_name, '.php' ) === FALSE )
		{
			$template_name .= '.php';
		}
		
		$this->_template = $template_name;
	}
	
	/**
	 * Set Page Title
	 * --------------------------------------
	 *
	 * @param string $page_title
	 * @param bool $page_header
	 *
	 * @return $this
	 * @access  public
	 * @author  Jamie Stewart Machon
	 */
	public function set_page_title( $page_title, $page_header = TRUE ) : self
	{
		$this->_page_title = $page_title;
		
		if ( $page_header )
		{
			/**
			 * check wether page_header has been set or has a value
			 * if not, then set page_title as page_header
			 */
			$this->_page_header = $this->_page_header ?? $page_title;
		}
		
		return $this;
	}
	
	/**
	 * Set Page Header
	 * sometime, we want to have page header different from page title
	 * so, use this function
	 * --------------------------------------
	 *
	 * @param $page_header
	 *
	 * @return $this
	 * @access  public
	 * @author  Jamie Stewart Machon
	 */
	public function set_page_header( $page_header )
	{
		$this->_page_header = $page_header;
		
		return $this;
	}
	
	/**
	 * Add CSS from external source or outside folder theme
	 * This function used to easily add css files to be included in a template.
	 * with this function, we can just add css name as parameter and their external path,
	 * or add css complete with path. See example.
	 * We can add one or more css files as parameter, either as string or array.
	 * If using parameter as string, it must use comma separator between css file name.
	 * -----------------------------------
	 * Example:
	 * -----------------------------------
	 * 1. Using string as first parameter
	 *     $this->add_external_styles( "global.css, color.css", "http://example.com/assets/css/" );
	 *      or
	 *      $this->add_external_styles(  "http://example.com/assets/css/global.css, http://example.com/assets/css/color.css" );
	 * 2. Using array as first parameter
	 *     $this->add_external_styles( array( "global.css", "color.css" ),  "http://example.com/assets/css/" );
	 *      or
	 *      $this->add_external_styles(  array( "http://example.com/assets/css/global.css", "http://example.com/assets/css/color.css") );
	 * --------------------------------------
	 *
	 * @param mixed $css_files
	 * @param string $path
	 *
	 * @return $this
	 * @access  public
	 * @author  Jamie Stewart Machon
	 */
	public function add_external_styles( $css_files, $path = NULL ) : self
	{
		// make sure that $this->_includes has array value
		if ( ! is_array( $this->_includes ) )
		{
			$this->_includes = [];
		}
		
		// if $css_files is string, then convert into array
		$css_files = is_array( $css_files ) ? $css_files : explode( ",", $css_files );
		
		foreach ( $css_files as $css )
		{
			// remove white space if any
			$css = trim( $css );
			
			// go to next when passing empty space
			if ( empty( $css ) )
			{
				continue;
			}
			
			// make sure that $css has .css extension
			if ( strpos( $css, '.css' ) === FALSE )
			{
				$css .= '.css';
			}
			
			// using sha1( $css ) as a key to prevent duplicate css to be included
			$this->_includes[ 'css_files' ][ sha1( $css ) ] = $path === NULL ? $css : $path . $css;
		}
		
		return $this;
	}
	
	/**
	 * Add JS from external source or outside folder theme
	 * This function used to easily add js files to be included in a template.
	 * with this function, we can just add js name as parameter and their external path,
	 * or add js complete with path. See example.
	 * We can add one or more js files as parameter, either as string or array.
	 * If using parameter as string, it must use comma separator between js file name.
	 * -----------------------------------
	 * Example:
	 * -----------------------------------
	 * 1. Using string as first parameter
	 *     $this->add_external_scripts( "global.js, color.js", "http://example.com/assets/js/" );
	 *      or
	 *      $this->add_external_scripts(  "http://example.com/assets/js/global.js, http://example.com/assets/js/color.js" );
	 * 2. Using array as first parameter
	 *     $this->add_external_scripts( array( "global.js", "color.js" ),  "http://example.com/assets/js/" );
	 *      or
	 *      $this->add_external_scripts(  array( "http://example.com/assets/js/global.js", "http://example.com/assets/js/color.js") );
	 * --------------------------------------
	 *
	 * @param mixed $js_files
	 * @param string $path
	 *
	 * @return $this
	 * @access  public
	 * @author  Jamie Stewart Machon
	 */
	public function add_external_scripts( $js_files, $path = NULL ) : self
	{
		// make sure that $this->_includes has array value
		if ( ! is_array( $this->_includes ) )
		{
			$this->_includes = [];
		}
		
		// if $js_files is string, then convert into array
		$js_files = is_array( $js_files ) ? $js_files : explode( ",", $js_files );
		
		foreach ( $js_files as $js )
		{
			// remove white space if any
			$js = trim( $js );
			
			// go to next when passing empty space
			if ( empty( $js ) )
			{
				continue;
			}
			
			// make sure that $js has .js extension
			if ( strpos( $js, '.js' ) === FALSE )
			{
				$js .= '.js';
			}
			
			// using sha1( $css ) as a key to prevent duplicate css to be included
			$this->_includes[ 'js_files' ][ sha1( $js ) ] = $path === NULL ? $js : $path . $js;
		}
		
		return $this;
	}
	
	/**
	 * Add CSS from Active Theme Folder
	 * This function used to easily add css files to be included in a template.
	 * with this function, we can just add css name as parameter
	 * and it will use default css path in active theme.
	 * We can add one or more css files as parameter, either as string or array.
	 * If using parameter as string, it must use comma separator between css file name.
	 * -----------------------------------
	 * Example:
	 * -----------------------------------
	 * 1. Using string as parameter
	 *     $this->add_theme_styles( "bootstrap.min.css, style.css, admin.css" );
	 * 2. Using array as parameter
	 *     $this->add_theme_styles( array( "bootstrap.min.css", "style.css", "admin.css" ) );
	 * --------------------------------------
	 *
	 * @param mixed $css_files
	 *
	 * @return $this
	 * @author  Jamie Stewart Machon
	 * @access  public
	 */
	public function add_theme_styles( $css_files ) : self
	{
		// make sure that $this->_includes has array value
		if ( ! is_array( $this->_includes ) )
		{
			$this->_includes = [];
		}
		
		// if $css_files is string, then convert into array
		$css_files = is_array( $css_files ) ? $css_files : explode( ',', $css_files );
		
		foreach ( $css_files as $css )
		{
			// remove white space if any
			$css = trim( $css );
			
			// go to next when passing empty space
			if ( empty( $css ) )
			{
				continue;
			}
			
			// make sure that $css has .css extension
			if ( strpos( $css, '.css' ) === FALSE )
			{
				$css .= '.css';
			}
			
			// using sha1( $css ) as a key to prevent duplicate css to be included
			$this->_includes[ 'css_files' ][ sha1( $css ) ] = base_url( "/{$this->_theme_path}/assets/css/{$css}" );
		}
		
		return $this;
	}
	
	/**
	 * Add JS from Active Theme Folder
	 * This function used to easily add js files to be included in a template.
	 * with this function, we can just add js name as parameter
	 * and it will use default js path in active theme.
	 * We can add one or more js files as parameter, either as string or array.
	 * If using parameter as string, it must use comma separator between js file name.
	 * The second parameter is used to determine wether js file is support internationalization or not.
	 * Default is FALSE
	 * -----------------------------------
	 * Example:
	 * -----------------------------------
	 * 1. Using string as parameter
	 *     $this->add_theme_scripts( "jquery-1.11.1.min.js, bootstrap.min.js, another.js" );
	 * 2. Using array as parameter
	 *     $this->add_theme_scripts( array( "jquery-1.11.1.min.js", "bootstrap.min.js,", "another.js" ) );
	 * --------------------------------------
	 *
	 * @param mixed $js_files
	 * @param bool $is_i18n
	 *
	 * @return $this|chained
	 * @access  public
	 * @author  Jamie Stewart Machon
	 */
	public function add_theme_scripts( $js_files, $is_i18n = FALSE )
	{
		if ( $is_i18n )
		{
			return $this->add_theme_jsi18n( $js_files );
		}
		
		// make sure that $this->_includes has array value
		if ( ! is_array( $this->_includes ) )
		{
			$this->_includes = [];
		}
		
		// if $js_files is string, then convert into array
		$js_files = is_array( $js_files ) ? $js_files : explode( ',', $js_files );
		
		foreach ( $js_files as $js )
		{
			// remove white space if any
			$js = trim( $js );
			
			// go to next when passing empty space
			if ( empty( $js ) )
			{
				continue;
			}
			
			// make sure that $js has .js extension
			if ( strpos( $js, '.js' ) === FALSE )
			{
				$js .= '.js';
			}
			
			// using sha1( $js ) as a key to prevent duplicate js to be included
			$this->_includes[ 'js_files' ][ sha1( $js ) ] = base_url( "/{$this->_theme_path}/assets/js/{$js}" );
		}
		
		return $this;
	}
	
	/**
	 * Add JSi18n files from Active Theme Folder
	 * This function used to easily add jsi18n files to be included in a template.
	 * with this function, we can just add jsi18n name as parameter
	 * and it will use default js path in active theme.
	 * We can add one or more jsi18n files as parameter, either as string or array.
	 * If using parameter as string, it must use comma separator between jsi18n file name.
	 * -----------------------------------
	 * Example:
	 * -----------------------------------
	 * 1. Using string as parameter
	 *     $this->add_theme_jsi18n( "dahboard_i18n.js, contact_i18n.js" );
	 * 2. Using array as parameter
	 *     $this->add_theme_jsi18n( array( "dahboard_i18n.js", "contact_i18n.js" ) );
	 * 3. Or we can use add_theme_scripts function, and add TRUE for second parameter
	 *     $this->add_theme_scripts( "dahboard_i18n.js, contact_i18n.js", TRUE );
	 *      or
	 *     $this->add_theme_scripts( array( "dahboard_i18n.js", "contact_i18n.js" ), TRUE );
	 * --------------------------------------
	 *
	 * @param mixed $js_files
	 *
	 * @return $this
	 * @author  Jamie Stewart Machon
	 * @access  public
	 */
	public function add_theme_jsi18n( $js_files ) : self
	{
		// make sure that $this->_includes has array value
		if ( ! is_array( $this->_includes ) )
		{
			$this->_includes = [];
		}
		
		// if $css_files is string, then convert into array
		$js_files = is_array( $js_files ) ? $js_files : explode( ',', $js_files );
		
		foreach ( $js_files as $js )
		{
			// remove white space if any
			$js = trim( $js );
			
			// go to next when passing empty space
			if ( empty( $js ) )
			{
				continue;
			}
			
			// make sure that $js has .js extension
			if ( strpos( $js, '.js' ) === FALSE )
			{
				$js .= '.js';
			}
			
			// using sha1( $js ) as a key to prevent duplicate js to be included
			$this->_includes[ 'js_files_i18n' ][ sha1( $js ) ] = $this->jsi18n->translate( "/{$this->_theme_path}/js/{$js}" );
		}
		
		return $this;
	}
	
	/**
	 * Add JavaScript from Active Theme Folder
	 * This function will localize a script with passed PHP variables
	 *
	 * @param string $handle
	 * @param string $object_name
	 * @param array $l10n
	 *
	 * @return $this
	 */
	public function add_localize_script( $handle, $object_name, $l10n = [] ) : self
	{
		// make sure that $this->_includes has array value
		if ( ! is_array( $this->_includes ) )
		{
			$this->_includes = [];
		}
		
		if ( is_string( $l10n ) )
		{
			$l10n = html_entity_decode( $l10n, ENT_QUOTES, 'UTF-8' );
		}
		else
		{
			foreach ( (array) $l10n as $key => $value )
			{
				if ( ! is_scalar( $value ) )
				{
					continue;
				}
				
				$l10n[ $key ] = html_entity_decode( (string) $value, ENT_QUOTES, 'UTF-8' );
			}
		}
		
		$script = "var $object_name = " . json_encode( $l10n ) . ';';
		
		// write the script into the head in script tags
		// using sha1( $js ) as a key to prevent duplicate js to be included
		$this->_includes[ 'js_locatizations' ][ $handle ] = $script;
		
		return $this;
	}
	
	/**
	 * Add CSS from Active Theme Folder
	 * This function used to easily add css files to be included in a template.
	 * with this function, we can just add css name as parameter
	 * and it will use default css path in active theme.
	 * We can add one or more css files as parameter, either as string or array.
	 * If using parameter as string, it must use comma separator between css file name.
	 * -----------------------------------
	 * Example:
	 * -----------------------------------
	 * 1. Using string as parameter
	 *     $this->add_theme_styles( "bootstrap.min.css, style.css, admin.css" );
	 * 2. Using array as parameter
	 *     $this->add_theme_styles( array( "bootstrap.min.css", "style.css", "admin.css" ) );
	 * --------------------------------------
	 *
	 * @param mixed $css_files
	 *
	 * @return $this
	 * @author  Jamie Stewart Machon
	 * @access  public
	 */
	public function add_theme_styles_inline( $css_files ) : self
	{
		// make sure that $this->_includes has array value
		if ( ! is_array( $this->_includes ) )
		{
			$this->_includes = [];
		}
		
		// if $css_files is string, then convert into array
		$css_files = is_array( $css_files ) ? $css_files : explode( ',', $css_files );
		
		foreach ( $css_files as $css )
		{
			// remove white space if any
			$css = trim( $css );
			
			// go to next when passing empty space
			if ( empty( $css ) )
			{
				continue;
			}
			
			// make sure that $css has .css extension
			if ( strpos( $css, '.css' ) === FALSE )
			{
				$css .= '.css';
			}
			
			// using sha1( $css ) as a key to prevent duplicate css to be included
			$this->_includes[ 'inline_css_files' ][ sha1( $css ) ] = file_get_contents( "{$this->_theme_path}/css/{$css}" );
		}
		
		return $this;
	}
	
	/**
	 * Set inline style
	 *
	 * @param $content
	 * @param $css
	 *
	 * @return string
	 */
	public function style_inline( $content, $css ) : string
	{
		$this->load->library( 'emogrifier' );
		// apply CSS styles inline for picky email clients
		try
		{
			$emogrifier = new Emogrifier();
			$emogrifier->setHtml( $content );
			$emogrifier->setCss( $css );
			$content = $emogrifier->emogrify();
		} catch ( Exception $e )
		{
			show_error( $e );
		}
		
		return $content;
	}
	
	/**
	 * Output log message
	 *
	 * @param $msg
	 */
	public function logger( $msg )
	{
		if ( is_cli() )
		{
			$this->PHP_EOL = PHP_EOL;
		}
		
		echo date( 'd-m-Y H:i:s' ) . "\t$msg" . $this->PHP_EOL;
	}
	
}

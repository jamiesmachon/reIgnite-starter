<?php

namespace app\controllers\admin;

use Private_Controller;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Dashboard extends Private_Controller {
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->add_theme_scripts( [
			'widgets.bundle',
			'custom/apps/chat/chat',
			'custom/utilities/modals/users-search',
		] );
	}
	
	/**
	 * Dashboard
	 */
	public function index()
	{
		/** COMPONENT LOADING */
		$expected_earnings_component = $this->load->component( 'widgets/cards/_expected_earnings', [ 'data' => [] ], TRUE );
		$orders_this_month_component = $this->load->component( 'widgets/cards/_orders_this_month', [ 'data' => [] ], TRUE );
		$average_daily_sales_component = $this->load->component( 'widgets/cards/_average_daily_sales', [ 'data' => [] ], TRUE );
		$new_customers_this_month_component = $this->load->component( 'widgets/cards/_new_customers_this_month', [ 'data' => [] ], TRUE );
		$sales_this_month_component = $this->load->component( 'widgets/charts/_sales_this_month', [ 'data' => [] ], TRUE );
		$recent_orders_component = $this->load->component( 'widgets/tables/_recent_orders', [ 'data' => [] ], TRUE );
		$discount_product_sales_component = $this->load->component( 'widgets/charts/_discount_product_sales', [ 'data' => [] ], TRUE );
		$have_you_tried_component = $this->load->component( 'widgets/engage/_advert', [ 'data' => [] ], TRUE );
		$product_orders_component = $this->load->component( 'widgets/tables/_product_orders', [ 'data' => [] ], TRUE );
		$product_delivery_component = $this->load->component( 'widgets/lists/_product_delivery', [ 'data' => [] ], TRUE );
		$stock_report_component = $this->load->component( 'widgets/tables/_stock_report', [ 'data' => [] ], TRUE );
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// setup breadcrumbs
		$this->breadcrumbs->push( 'Dashboard', '/admin' );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'_app_content' => $this->load->view( 'admin/dashboard/index', compact(
				'expected_earnings_component',
				'orders_this_month_component',
				'average_daily_sales_component',
				'new_customers_this_month_component',
				'sales_this_month_component',
				'recent_orders_component',
				'discount_product_sales_component',
				'have_you_tried_component',
				'product_orders_component',
				'product_delivery_component',
				'stock_report_component'
			), TRUE )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'layout/_default', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
}

<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
	<!--begin::Content container-->
	<div id="kt_app_content_container" class="app-container">
		<!--begin::Row-->
		<div class="row g-5 g-xl-10 mb-xl-10">
			<!--begin::Col-->
			<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
				<!--begin::Card widget expected earnings-->
				<?php echo $expected_earnings_component; ?>
				<!--end::Card widget expected earnings-->
				<!--begin::Card widget orders this month-->
				<?php echo $orders_this_month_component; ?>
				<!--end::Card widget orders this month-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
				<!--begin::Card widget average daily sales-->
				<?php echo $average_daily_sales_component; ?>
				<!--end::Card widget average daily sales-->
				<!--begin::Card widget new customers this month-->
				<?php echo $new_customers_this_month_component; ?>
				<!--end::Card widget new customers this month-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
				<!--begin::Chart widget sales this month-->
				<?php echo $sales_this_month_component; ?>
				<!--end::Chart widget sales this month-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
		<!--begin::Row-->
		<div class="row gy-5 g-xl-10">
			<!--begin::Col-->
			<div class="col-xl-6 mb-xl-10">
				<!--begin::Table widget recent orders component-->
				<?php echo $recent_orders_component; ?>
				<!--end::Table widget recent orders component-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-xl-6 mb-5 mb-xl-10">
				<!--begin::Chart widget discount product sales component-->
				<?php echo $discount_product_sales_component; ?>
				<!--end::Chart widget discount product sales component-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
		<!--begin::Row-->
		<div class="row gy-5 g-xl-10">
			<!--begin::Col-->
			<div class="col-xl-4 mb-xl-10">
				<!--begin::Engage widget advert-->
				<?php echo $have_you_tried_component; ?>
				<!--end::Engage widget advert-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-xl-8 mb-5 mb-xl-10">
				<!--begin::Table Widget product orders-->
				<?php echo $product_orders_component; ?>
				<!--end::Table Widget product orders-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
		<!--begin::Row-->
		<div class="row gy-5 g-xl-10">
			<!--begin::Col-->
			<div class="col-xl-4">
				<!--begin::List widget product delivery-->
				<?php echo $product_delivery_component; ?>
				<!--end::List widget product delivery-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-xl-8">
				<!--begin::Table Widget stock report-->
				<?php echo $stock_report_component; ?>
				<!--end::Table Widget stock report-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
	</div>
	<!--end::Content container-->
</div>
<!--end::Content-->
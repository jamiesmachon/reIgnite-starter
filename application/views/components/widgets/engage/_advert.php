<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<div class="card h-md-100">
	<!--begin::Body-->
	<div class="card-body d-flex flex-column flex-center">
		<!--begin::Heading-->
		<div class="mb-2">
			<!--begin::Title-->
			<h1 class="fw-semibold text-gray-800 text-center lh-lg">Have you tried
				<br/>new
				<span class="fw-bolder">eCommerce App ?</span></h1>
			<!--end::Title-->
			<!--begin::Illustration-->
			<div class="py-10 text-center">
				<img src="<?php echo get_media_url( 'svg/illustrations/easy/2.svg' ); ?>"
				     class="theme-light-show w-200px" alt=""/>
				<img src="<?php echo get_media_url( 'svg/illustrations/easy/2-dark.svg' ); ?>"
				     class="theme-dark-show w-200px" alt=""/>
			</div>
			<!--end::Illustration-->
		</div>
		<!--end::Heading-->
		<!--begin::Links-->
		<div class="text-center mb-1">
			<!--begin::Link-->
			<a class="btn btn-sm btn-primary me-2" href="<?php echo base_url( 'admin/ecommerce/sales' ); ?>">View
				App</a>
			<!--end::Link-->
			<!--begin::Link-->
			<a class="btn btn-sm btn-light"
			   href="<?php echo base_url( 'admin/ecommerce/catalog/add-product' ); ?>">New Product</a>
			<!--end::Link-->
		</div>
		<!--end::Links-->
	</div>
	<!--end::Body-->
</div>
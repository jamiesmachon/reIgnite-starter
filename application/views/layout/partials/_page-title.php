<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
	<!--begin::Title-->
	<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
		<?php echo $this->_page_header; ?>
	</h1>
	<!--end::Title-->
	<!--begin::Breadcrumb-->
	<?php echo $this->breadcrumbs->show(); ?>
	<!--end::Breadcrumb-->
</div>
<!--end::Page title-->
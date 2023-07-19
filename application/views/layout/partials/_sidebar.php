<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
     data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	<?php $this->load->layout( 'partials/sidebar/_logo' ); ?>
	<?php $this->load->layout( 'partials/sidebar/_menu' ); ?>
	<?php $this->load->layout( 'partials/sidebar/_footer' ); ?>
</div>
<!--end::Sidebar-->
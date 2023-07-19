<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<?php $this->load->partial( 'theme-mode/_init' ); ?>
<?php $this->load->layout( 'partials/_page-loader' ); ?>
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
	<!--begin::Page-->
	<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
		<?php $this->load->layout( 'partials/_header' ); ?>
		<!--begin::Wrapper-->
		<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
			<?php $this->load->layout( 'partials/_sidebar' ); ?>
			<!--begin::Main-->
			<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
				<!--begin::Content wrapper-->
				<div class="d-flex flex-column flex-column-fluid">
					<?php $this->load->layout( 'partials/_toolbar' ); ?>
					<?php echo $_app_content; ?>
				</div>
				<!--end::Content wrapper-->
				<?php $this->load->layout( 'partials/_footer' ); ?>
			</div>
			<!--end:::Main-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!--end::App-->
<?php $this->load->partial( '_drawers' ); ?>
<?php $this->load->partial( '_scrolltop' ); ?>
<!--begin::Modals-->
<?php $this->load->partial( 'modals/users-search/_main' ); ?>
<!--end::Modals-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
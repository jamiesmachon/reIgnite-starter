<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<div class="d-flex flex-column flex-root" id="kt_app_root">
	<!--begin::Authentication - Password reset -->
	<div class="d-flex flex-column flex-lg-row flex-column-fluid">
		<!--begin::Aside-->
		<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center"
		     style="background-image: url(<?php echo get_media_url( 'misc/auth-bg.png' ); ?>)">
			<!--begin::Content-->
			<div class="d-flex flex-column flex-center p-6 p-lg-10 w-100">
				<!--begin::Logo-->
				<a href="<?php echo base_url(); ?>" class="mb-0 mb-lg-20">
					<?php /* <img alt="Logo" src="<?php echo get_media_url( 'logos/default-white.svg' ); ?>" class="h-40px h-lg-50px" /> */ ?>
					<?php $this->load->partial( 'general/_logo-light' ); ?>
				</a>
				<!--end::Logo-->
				<!--begin::Image-->
				<img class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20"
				     src="<?php echo get_media_url( 'misc/auth-screens.png' ); ?>" alt=""/>
				<!--end::Image-->
				<!--begin::Title-->
				<h2 class="d-none d-lg-block text-white fs-2qx fw-bold text-center mb-7">Fast, Efficient and
					Productive</h2>
				<!--end::Title-->
				<!--begin::Text-->
				<div class="d-none d-lg-block text-white fs-base text-center">
					In this kind of post, <a href="#" class="opacity-75-hover text-warning fw-semibold me-1">the
						blogger</a> introduces a person they’ve interviewed
					<br/>
					and provides some background information about <a href="#"
					                                                  class="opacity-75-hover text-warning fw-semibold me-1">the
						interviewee</a> and their
					<br/>
					work following this is a transcript of the interview.
				</div>
				<!--end::Text-->
			</div>
			<!--end::Content-->
		</div>
		<!--begin::Aside-->
		<!--begin::Body-->
		<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
			<?php if ( $this->session->flashdata( 'message' ) ) : ?>
				<?php $this->load->component( 'alerts/_success', [ 'title' => 'Success', 'message' => $this->session->flashdata( 'message' ) ] ); ?>
			<?php elseif ( $this->session->flashdata( 'error' ) ) : ?>
				<?php $this->load->component( 'alerts/_danger', [ 'title' => 'Error', 'message' => $this->session->flashdata( 'error' ) ] ); ?>
			<?php elseif ( validation_errors() ) : ?>
				<?php $this->load->component( 'alerts/_danger', [ 'title' => 'Error', 'message' => validation_errors() ] ); ?>
			<?php elseif ( $this->_error ) : ?>
				<?php $this->load->component( 'alerts/_danger', [ 'title' => 'Error', 'message' => $this->_error ] ); ?>
			<?php endif; ?>
			<!--begin::Form-->
			<div class="d-flex flex-center flex-column flex-lg-row-fluid">
				<!--begin::Wrapper-->
				<div class="w-lg-500px p-10">
					<!--begin::Form-->
					<?php echo form_open( $form_action, [ 'class' => "form w-100", 'novalidate' => "novalidate", 'id' => "kt_password_reset_form", 'data-kt-redirect-url' => $form_redirect ] ); ?>
					<!--begin::Heading-->
					<div class="text-center mb-10">
						<!--begin::Title-->
						<h1 class="text-dark fw-bolder mb-3"><?php echo __( 'Forgot Password ?', 'suppliers-portal' ); ?></h1>
						<!--end::Title-->
						<!--begin::Link-->
						<div
							class="text-gray-500 fw-semibold fs-6"><?php echo __( 'Enter your email to reset your password.', 'suppliers-portal' ); ?></div>
						<!--end::Link-->
					</div>
					<!--begin::Heading-->
					<!--begin::Input group=-->
					<div class="fv-row mb-8">
						<!--begin::Email-->
						<?php echo form_input( [
							'name'         => 'user_email',
							'id'           => 'user_email',
							'class'        => 'form-control bg-transparent' . ( form_error( 'user_email' ) ? ' is-invalid' : '' ),
							'placeholder'  => __( 'Email Address', 'suppliers-portal' ),
							'autocomplete' => 'off',
							'value'        => set_value( 'user_email' ),
						] ); ?>
						<!--end::Email-->
					</div>
					<!--begin::Actions-->
					<div class="d-flex flex-wrap justify-content-center pb-lg-0">
						<button type="submit" id="kt_password_reset_submit" class="btn btn-primary me-4">
							<!--begin::Indicator label-->
							<span class="indicator-label"><?php echo __( 'Submit', 'suppliers-portal' ); ?></span>
							<!--end::Indicator label-->
							<!--begin::Indicator progress-->
							<span class="indicator-progress">
                                    <?php echo __( 'Please wait...', 'suppliers-portal' ); ?> <span
									class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
							<!--end::Indicator progress-->
						</button>
						<a href="<?php echo base_url(); ?>"
						   class="btn btn-light"><?php echo __( 'Cancel', 'suppliers-portal' ); ?></a>
					</div>
					<!--end::Actions-->
					<?php echo form_close(); ?>
					<!--end::Form-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Form-->
			<!--begin::Footer-->
			<div class="d-flex flex-center flex-wrap px-5">
				<!--begin::Links-->
				<div class="d-flex fw-semibold text-primary fs-base">
					<a href="<?php echo base_url( 'terms' ); ?>"
					   class="px-5"><?php echo __( 'Terms', 'suppliers-portal' ); ?></a>
					<a href="<?php echo base_url( 'contact-us' ); ?>"
					   class="px-5"><?php echo __( 'Contact Us', 'suppliers-portal' ); ?></a>
				</div>
				<!--end::Links-->
			</div>
			<!--end::Footer-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::Authentication - Password reset-->
</div>
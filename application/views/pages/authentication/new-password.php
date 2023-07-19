<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<div class="d-flex flex-column flex-root" id="kt_app_root">
	<!--begin::Authentication - New password -->
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
					<?php echo form_open( $form_action, [ 'class' => "form w-100", 'novalidate' => "novalidate", 'id' => "kt_new_password_form", 'data-kt-redirect-url' => $form_redirect ] ); ?>
					<?php echo form_hidden( 'user_email', $user->user_email ); ?>
					<!--begin::Heading-->
					<div class="text-center mb-10">
						<!--begin::Title-->
						<h1 class="text-dark fw-bolder mb-3"><?php echo __( 'Setup New Password', 'suppliers-portal' ); ?></h1>
						<!--end::Title-->
						<!--begin::Link-->
						<div
							class="text-gray-500 fw-semibold fs-6"><?php echo __( 'Have you already reset the password ?', 'suppliers-portal' ); ?>
							<a href="<?php echo base_url(); ?>"
							   class="link-primary fw-bold"><?php echo __( 'Sign In', 'suppliers-portal' ); ?></a>
						</div>
						<!--end::Link-->
					</div>
					<!--begin::Heading-->
					<!--begin::Input group-->
					<div class="fv-row mb-8" data-kt-password-meter="true">
						<!--begin::Wrapper-->
						<div class="mb-1">
							<!--begin::Input wrapper-->
							<div class="position-relative mb-3">
								<!--begin::Password-->
								<?php echo form_input( [
									'type'         => 'password',
									'name'         => 'user_pass',
									'id'           => 'user_pass',
									'class'        => 'form-control bg-transparent' . ( form_error( 'user_pass' ) ? ' is-invalid' : '' ),
									'placeholder'  => __( 'Password', 'suppliers-portal' ),
									'autocomplete' => 'off',
									'value'        => set_value( 'user_pass' ),
								] ); ?>
								<!--end::Password-->
								<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
								      data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
							</div>
							<!--end::Input wrapper-->
							<!--begin::Meter-->
							<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
								<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
								<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
								<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
								<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
							</div>
							<!--end::Meter-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Hint-->
						<div class="text-muted"><?php echo __( 'Use 8 or more characters with a mix of letters, numbers & symbols.', 'suppliers-portal' ); ?></div>
						<!--end::Hint-->
					</div>
					<!--end::Input group=-->
					<!--end::Input group=-->
					<div class="fv-row mb-8">
						<!--begin::Repeat Password-->
						<?php echo form_input( [
							'type'         => 'password',
							'name'         => 'confirm_user_pass',
							'id'           => 'confirm_user_pass',
							'class'        => 'form-control bg-transparent' . ( form_error( 'confirm_user_pass' ) ? ' is-invalid' : '' ),
							'placeholder'  => __( 'Repeat Password', 'suppliers-portal' ),
							'autocomplete' => 'off',
							'value'        => set_value( 'confirm_user_pass' ),
						] ); ?>
						<!--end::Repeat Password-->
					</div>
					<!--end::Input group=-->
					<!--begin::Input group=-->
					<div class="fv-row mb-8">
						<label class="form-check form-check-inline">
							<input class="form-check-input<?php echo form_error( 'tac' ) ? ' is-invalid' : ''; ?>"
							       type="checkbox" name="tac" value="1"/>
							<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the <a
									href="<?php echo __( 'Terms', 'suppliers-portal' ); ?>"
									class="ms-1 link-primary">Terms</a></span>
						</label>
					</div>
					<!--end::Input group=-->
					<!--begin::Action-->
					<div class="d-grid mb-10">
						<button type="submit" id="kt_new_password_submit" class="btn btn-primary">
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
					</div>
					<!--end::Action-->
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
	<!--end::Authentication - New password-->
</div>
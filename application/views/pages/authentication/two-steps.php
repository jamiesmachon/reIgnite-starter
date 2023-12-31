<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<div class="d-flex flex-column flex-root" id="kt_app_root">
	<!--begin::Authentication - Two-stes -->
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
			<!--begin::Form-->
			<div class="d-flex flex-center flex-column flex-lg-row-fluid">
				<!--begin::Wrapper-->
				<div class="w-lg-500px p-10">
					<!--begin::Form-->
					<form class="form w-100 mb-13" novalidate="novalidate" data-kt-redirect-url=""
					      id="kt_sing_in_two_steps_form">
						<!--begin::Icon-->
						<div class="text-center mb-10">
							<img alt="Logo" class="mh-125px"
							     src="/content/media/svg/misc/smartphone-2.svg"/>
						</div>
						<!--end::Icon-->
						<!--begin::Heading-->
						<div class="text-center mb-10">
							<!--begin::Title-->
							<h1 class="text-dark mb-3">Two Step Verification</h1>
							<!--end::Title-->
							<!--begin::Sub-title-->
							<div class="text-muted fw-semibold fs-5 mb-5">Enter the verification code we sent to</div>
							<!--end::Sub-title-->
							<!--begin::Mobile no-->
							<div class="fw-bold text-dark fs-3">******7859</div>
							<!--end::Mobile no-->
						</div>
						<!--end::Heading-->
						<!--begin::Section-->
						<div class="mb-10">
							<!--begin::Label-->
							<div class="fw-bold text-start text-dark fs-6 mb-1 ms-1">Type your 6 digit security code
							</div>
							<!--end::Label-->
							<!--begin::Input group-->
							<div class="d-flex flex-wrap flex-stack">
								<input type="text" name="code_1" data-inputmask="'mask': '9', 'placeholder': ''"
								       maxlength="1"
								       class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
								       value=""/>
								<input type="text" name="code_2" data-inputmask="'mask': '9', 'placeholder': ''"
								       maxlength="1"
								       class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
								       value=""/>
								<input type="text" name="code_3" data-inputmask="'mask': '9', 'placeholder': ''"
								       maxlength="1"
								       class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
								       value=""/>
								<input type="text" name="code_4" data-inputmask="'mask': '9', 'placeholder': ''"
								       maxlength="1"
								       class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
								       value=""/>
								<input type="text" name="code_5" data-inputmask="'mask': '9', 'placeholder': ''"
								       maxlength="1"
								       class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
								       value=""/>
								<input type="text" name="code_6" data-inputmask="'mask': '9', 'placeholder': ''"
								       maxlength="1"
								       class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
								       value=""/>
							</div>
							<!--begin::Input group-->
						</div>
						<!--end::Section-->
						<!--begin::Submit-->
						<div class="d-flex flex-center">
							<button type="button" id="kt_sing_in_two_steps_submit"
							        class="btn btn-lg btn-primary fw-bold">
								<span class="indicator-label">Submit</span>
								<span class="indicator-progress">
									Please wait... <span
										class="spinner-border spinner-border-sm align-middle ms-2"></span>
								</span>
							</button>
						</div>
						<!--end::Submit-->
					</form>
					<!--end::Form-->
					<!--begin::Notice-->
					<div class="text-center fw-semibold fs-5">
						<span class="text-muted me-1">Didn’t get the code ?</span>
						<a href="#" class="link-primary fs-5 me-1">Resend</a>
						<span class="text-muted me-1">or</span>
						<a href="#" class="link-primary fs-5">Call Us</a>
					</div>
					<!--end::Notice-->
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
	<!--end::Authentication - Two-stes-->
</div>
<script src="assets/js/custom/authentication/sign-in/two-steps.js"></script>
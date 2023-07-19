<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<div class="d-flex flex-column flex-xl-row container-xxl">
	<!--begin::Content-->
	<div class="card bg-body flex-row-fluid mb-9 mb-xl-0 me-xl-9">
		<div class="card-body">
			<!--begin::Form-->
			<form action="" class="form mb-15" method="post" id="kt_contact_form">
				<!--begin::Title-->
				<div class="d-flex flex-column mb-9 fv-row">
					<h1 class="fw-bold text-dark mb-7">Submit a Request</h1>
					<span class="fs-4 fw-semibold text-gray-600 d-block">
						First, a disclaimer – the entire process of writing a blog post often takes more
						<br/>
						than a couple of hours, even if you can type
					</span>
				</div>
				<!--end::Title-->
				<!--begin::Input group-->
				<div class="row mb-5">
					<!--begin::Col-->
					<div class="col-md-6 fv-row">
						<!--begin::Label-->
						<label class="fs-5 fw-semibold mb-2">Name</label>
						<!--end::Label-->
						<!--begin::Input-->
						<input type="text" class="form-control form-control-solid" placeholder="" name="name"/>
						<!--end::Input-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-md-6 fv-row">
						<!--end::Label-->
						<label class="fs-5 fw-semibold mb-2">Email</label>
						<!--end::Label-->
						<!--end::Input-->
						<input type="text" class="form-control form-control-solid" placeholder="" name="email"/>
						<!--end::Input-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="d-flex flex-column mb-5 fv-row">
					<!--begin::Label-->
					<label class="fs-5 fw-semibold mb-2">Subject</label>
					<!--end::Label-->
					<!--begin::Input-->
					<input class="form-control form-control-solid" placeholder="" name="subject"/>
					<!--end::Input-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="d-flex flex-column mb-10 fv-row">
					<label class="fs-6 fw-semibold mb-2">Message</label>
					<textarea class="form-control form-control-solid" rows="6" name="message" placeholder=""></textarea>
				</div>
				<!--end::Input group-->
				<!--begin::Submit-->
				<button type="submit" class="btn btn-primary" id="kt_contact_submit_button">
					<!--begin::Indicator label-->
					<span class="indicator-label">Send Feedback</span>
					<!--end::Indicator label-->
					<!--begin::Indicator progress-->
					<span class="indicator-progress">Please wait...
														<span
															class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					<!--end::Indicator progress-->
				</button>
				<!--end::Submit-->
			</form>
			<!--end::Form-->
			<!--begin::Map-->
			<div id="kt_contact_map" class="w-100 rounded mb-2 mb-lg-0 mt-2" style="height: 486px"></div>
			<!--end::Map-->
		</div>
	</div>
	<!--end::Content-->
	<!--begin::Sidebar-->
	<div class="flex-column flex-lg-row-auto w-100 w-xl-350px">
		<!--begin::Support-->
		<div class="card card-flush bg-body mb-9">
			<!--begin::Card header-->
			<div class="card-header">
				<h2 class="card-title fs-2 fw-bold text-dark">Let’s Speak</h2>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon btn-color-primary">
						<i class="bi bi-telephone-fill fs-1"></i>
					</button>
				</div>
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body pt-2">
				<!--begin::Items-->
				<div class="mb-5">
					<!--begin::Item-->
					<div class="d-flex flex-stack mb-5">
						<span class="text-gray-400 fs-4 fw-bold">New York</span>
						<span class="text-gray-700 fs-4 fw-bold">(603) 555-0123</span>
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex flex-stack mb-5">
						<span class="text-gray-400 fs-4 fw-bold">Amsterdam</span>
						<span class="text-gray-700 fs-4 fw-bold">(671) 555-0110</span>
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<span class="text-gray-400 fs-4 fw-bold">Tokyo</span>
						<span class="text-gray-700 fs-4 fw-bold">(405) 555-0128</span>
					</div>
					<!--end::Item-->
				</div>
				<!--end::Items-->
				<!--begin::Text-->
				<span class="text-gray-800 fs-6 fw-semibold d-block mb-9">First, a disclaimer – the entire process of writing a blog post often takes.
													<br/></span>
				<!--end::Text-->
				<!--begin::Info-->
				<div class="d-flex flex-stack mb-6">
					<h2 class="card-title fs-2 fw-bold text-dark">Let’s Read</h2>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-color-primary">
							<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
							<span class="svg-icon svg-icon-2hx">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																	     fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																		      d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
																		      fill="currentColor"/>
																		<path
																			d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
																			fill="currentColor"/>
																	</svg>
																</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Info-->
				<!--begin::Items-->
				<div class="mb-4">
					<!--begin::Item-->
					<div class="d-flex flex-stack mb-5">
						<span class="text-gray-400 fs-4 fw-bold">Sales Office</span>
						<a href="#" class="text-gray-700 text-hover-primary fs-4 fw-bold">sales@good.com</a>
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<span class="text-gray-400 fs-4 fw-bold">Support</span>
						<a href="#" class="text-gray-700 text-hover-primary fs-4 fw-bold">help@good.com</a>
					</div>
					<!--end::Item-->
				</div>
				<!--end::Items-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Support-->
		<!--begin::Connected-->
		<div class="card card-flush bg-body">
			<!--begin::Card header-->
			<div class="card-header">
				<h4 class="card-title fw-bold text-">Stay Connected</h4>
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body pt-2">
				<!--begin::Items-->
				<div class="mb-6">
					<!--begin::Link-->
					<a href="#" class="mb-6">
						<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt=""/>
						<span class="text-gray-700 text-hover-primary fs-5 mb-6">Facebook</span>
					</a>
					<!--end::Link-->
				</div>
				<!--begin::Items-->
				<!--begin::Items-->
				<div class="mb-6">
					<!--begin::Link-->
					<a href="#" class="mb-6">
						<img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt=""/>
						<span class="text-gray-700 text-hover-primary fs-5 mb-6">Github</span>
					</a>
					<!--end::Link-->
				</div>
				<!--begin::Items-->
				<!--begin::Items-->
				<div class="mb-6">
					<!--begin::Link-->
					<a href="#" class="mb-6">
						<img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt=""/>
						<span class="text-gray-700 text-hover-primary fs-5 mb-6">Twitter</span>
					</a>
					<!--end::Link-->
				</div>
				<!--begin::Items-->
				<!--begin::Items-->
				<div class="mb-6">
					<!--begin::Link-->
					<a href="#" class="mb-6">
						<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt=""/>
						<span class="text-gray-700 text-hover-primary fs-5 mb-6">Dribbble</span>
					</a>
					<!--end::Link-->
				</div>
				<!--begin::Items-->
				<!--begin::Items-->
				<div class="">
					<!--begin::Link-->
					<a href="#" class="mb-6">
						<img src="assets/media/svg/brand-logos/instagram-2016.svg" class="h-20px me-2" alt=""/>
						<span class="text-gray-700 text-hover-primary fs-5 mb-6">Instagram</span>
					</a>
					<!--end::Link-->
				</div>
				<!--begin::Items-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Connected-->
	</div>
	<!--end::Sidebar-->
</div>
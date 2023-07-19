<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
	<!--begin::Content container-->
	<div id="kt_app_content_container" class="app-container">
		<!--begin::Products-->
		<div class="card card-flush">
			<!--begin::Card header-->
			<div class="card-header align-items-center py-5 gap-2 gap-md-5">
				<!--begin::Card title-->
				<div class="card-title">
					<!--begin::Search-->
					<div class="d-flex align-items-center position-relative my-1">
						<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
						<span class="svg-icon svg-icon-1 position-absolute ms-4">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
								      transform="rotate(45 17.0365 15.1223)" fill="currentColor"/>
								<path
									d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
									fill="currentColor"/>
							</svg>
						</span>
						<!--end::Svg Icon-->
						<input type="text" data-kt-ecommerce-order-filter="search"
						       class="form-control form-control-solid w-250px ps-14" placeholder="Search Report"/>
					</div>
					<!--end::Search-->
					<!--begin::Export buttons-->
					<div id="kt_ecommerce_report_views_export" class="d-none"></div>
					<!--end::Export buttons-->
				</div>
				<!--end::Card title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
					<!--begin::Daterangepicker-->
					<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range"
					       id="kt_ecommerce_report_views_daterangepicker"/>
					<!--end::Daterangepicker-->
					<!--begin::Filter-->
					<div class="w-150px">
						<!--begin::Select2-->
						<select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
						        data-placeholder="Rating" data-kt-ecommerce-order-filter="rating">
							<option></option>
							<option value="all">All</option>
							<option value="rating-5">5 Stars</option>
							<option value="rating-4">4 Stars</option>
							<option value="rating-3">3 Stars</option>
							<option value="rating-2">2 Stars</option>
							<option value="rating-1">1 Stars</option>
						</select>
						<!--end::Select2-->
					</div>
					<!--end::Filter-->
					<!--begin::Export dropdown-->
					<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
					        data-kt-menu-placement="bottom-end">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
						<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
													     xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2"
														      rx="1" transform="rotate(90 12.75 4.25)"
														      fill="currentColor"/>
														<path
															d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
															fill="currentColor"/>
														<path opacity="0.3"
														      d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
														      fill="currentColor"/>
													</svg>
												</span>
						<!--end::Svg Icon-->Export Report
					</button>
					<!--begin::Menu-->
					<div id="kt_ecommerce_report_views_export_menu"
					     class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
					     data-kt-menu="true">
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu-->
					<!--end::Export dropdown-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body pt-0">
				<!--begin::Table-->
				<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_views_table">
					<!--begin::Table head-->
					<thead>
					<!--begin::Table row-->
					<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
						<th class="min-w-150px">Product</th>
						<th class="text-end min-w-100px">SKU</th>
						<th class="text-end min-w-100px">Rating</th>
						<th class="text-end min-w-100px">Price</th>
						<th class="text-end min-w-70px">Viewed</th>
						<th class="text-end min-w-100px">Percent</th>
					</tr>
					<!--end::Table row-->
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody class="fw-semibold text-gray-600">
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/9.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 9</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01771002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$134.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>238000</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">23.8%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/15.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 15</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02234001</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$26.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>167000</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">16.7%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/33.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 33</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04691005</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$90.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>178200</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">17.82%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/27.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 27</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02118002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$132.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>150660</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">15.066%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/7.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 7</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03794002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$261.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>53228</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">5.3228%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/24.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 24</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03711009</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$93.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>42582</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">4.25824%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/18.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 18</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01421002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$192.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>34066</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">3.40659%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/42.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 42</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03712005</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$228.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>27253</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">2.72527%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/12.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 12</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04694004</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$107.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>21802</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">2.18022%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/29.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 29</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03135008</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$225.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>17442</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">1.74418%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/22.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 22</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04695001</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$213.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>13953</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">1.39534%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/28.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 28</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01323002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$79.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>11163</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">1.11627%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/30.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 30</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01294004</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$25.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>8930</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.89302%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/36.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 36</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02413004</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$108.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>7144</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.71441%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/2.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 2</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02557009</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$45.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>5715</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.57153%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/43.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 43</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02881004</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$23.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>4572</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.45723%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/35.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 35</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03391007</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$276.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>3658</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.36578%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/46.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 46</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04123006</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$73.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>2926</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.29262%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/5.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 5</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04649006</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$226.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>2341</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.2341%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/31.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 31</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04642002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$274.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>1873</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.18728%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/45.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 45</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04285005</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$77.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>1498</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.14982%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/21.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 21</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04192002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$50.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>1199</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.11986%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/20.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 20</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01412003</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$194.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>959</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.09589%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/48.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 48</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02662007</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$62.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>767</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.07671%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/4.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 4</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02361002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$106.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>614</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.06137%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/10.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 10</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03332004</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$48.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>491</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.04909%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/44.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 44</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02573009</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$166.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>393</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.03928%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/49.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 49</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02268004</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$55.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>314</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.03142%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/40.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 40</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03980008</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$197.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>251</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.02514%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/8.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 8</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04543001</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$254.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>201</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.02011%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/25.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 25</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04751001</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$118.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>161</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.01609%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/47.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 47</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01519007</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$296.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>129</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.01287%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/39.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 39</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03649001</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$89.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>103</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.0103%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/32.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 32</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01949008</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$244.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>82</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00824%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/13.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 13</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04275006</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$92.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>66</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00659%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/26.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 26</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03876009</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$102.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>53</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00527%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/16.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 16</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01601002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$144.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>42</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00422%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/3.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 3</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03318003</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$159.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>34</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00337%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/38.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 38</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04588004</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$54.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>27</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.0027%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/19.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 19</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01446001</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$77.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>22</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00216%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/1.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 1</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04161006</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$292.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>17</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00173%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/14.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 14</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04481009</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$253.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>14</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00138%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/11.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 11</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01519002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$121.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>11</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00111%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/41.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 41</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01777009</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$139.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>9</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00088%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/23.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 23</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01412009</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$183.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>7</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00071%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/50.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 50</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04599005</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$171.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>6</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00057%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/6.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 6</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01905008</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$204.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>5</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00045%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/37.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 37</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04559004</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$162.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>4</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00036%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/17.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 17</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03389003</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$36.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>3</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00029%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Product=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(content/themes/keen/assets/media/stock/ecommerce/34.gif);"></span>
								</a>
								<!--end::Thumbnail-->
								<div class="ms-5">
									<!--begin::Title-->
									<a href="/admin/ecommerce/catalog/edit-product"
									   class="text-gray-800 text-hover-primary fs-5 fw-bold"
									   data-kt-ecommerce-product-filter="product_name">Product 34</a>
									<!--end::Title-->
								</div>
							</div>
						</td>
						<!--end::Product=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02396002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
							<div class="rating justify-content-end">
								<div class="rating-label checked">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										     xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
												fill="currentColor"/>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
								<div class="rating-label">
									<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
									<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																		     fill="none"
																		     xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
																				fill="currentColor"/>
																		</svg>
																	</span>
									<!--end::Svg Icon-->
								</div>
							</div>
						</td>
						<!--end::Rating-->
						<!--begin::Price=-->
						<td class="text-end pe-0">
							<span>$39.00</span>
						</td>
						<!--end::Price=-->
						<!--begin::Viewed=-->
						<td class="text-end pe-0">
							<span>2</span>
						</td>
						<!--end::Viewed=-->
						<!--begin::Percent=-->
						<td class="text-end pe-0">0.00023%</td>
						<!--end::Percent=-->
					</tr>
					<!--end::Table row-->
					</tbody>
					<!--end::Table body-->
				</table>
				<!--end::Table-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Products-->
	</div>
	<!--end::Content container-->
</div>
<!--end::Content-->
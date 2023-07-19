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
						<input type="text" data-kt-ecommerce-product-filter="search"
						       class="form-control form-control-solid w-250px ps-14" placeholder="Search Product"/>
					</div>
					<!--end::Search-->
				</div>
				<!--end::Card title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
					<div class="w-100 mw-150px">
						<!--begin::Select2-->
						<select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
						        data-placeholder="Status" data-kt-ecommerce-product-filter="status">
							<option></option>
							<option value="all">All</option>
							<option value="published">Published</option>
							<option value="scheduled">Scheduled</option>
							<option value="inactive">Inactive</option>
						</select>
						<!--end::Select2-->
					</div>
					<!--begin::Add product-->
					<a href="/admin/ecommerce/catalog/add-product" class="btn btn-primary">Add Product</a>
					<!--end::Add product-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body pt-0">
				<!--begin::Table-->
				<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
					<!--begin::Table head-->
					<thead>
					<!--begin::Table row-->
					<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
						<th class="w-10px pe-2">
							<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
								<input class="form-check-input" type="checkbox" data-kt-check="true"
								       data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1"/>
							</div>
						</th>
						<th class="min-w-200px">Product</th>
						<th class="text-end min-w-100px">SKU</th>
						<th class="text-end min-w-70px">Qty</th>
						<th class="text-end min-w-100px">Price</th>
						<th class="text-end min-w-100px">Rating</th>
						<th class="text-end min-w-100px">Status</th>
						<th class="text-end min-w-70px">Actions</th>
					</tr>
					<!--end::Table row-->
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody class="fw-semibold text-gray-600">
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03520008</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="14">
							<span class="fw-bold ms-3">14</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">173</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/2.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03749003</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="29">
							<span class="fw-bold ms-3">29</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">246</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/3.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04301009</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="38">
							<span class="fw-bold ms-3">38</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">158</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/4.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01720001</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="23">
							<span class="fw-bold ms-3">23</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">215</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/5.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01419003</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="19">
							<span class="fw-bold ms-3">19</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">122</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/6.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04956004</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="33">
							<span class="fw-bold ms-3">33</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">54</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/7.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01234009</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="29">
							<span class="fw-bold ms-3">29</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">219</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/8.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02319005</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="31">
							<span class="fw-bold ms-3">31</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">92</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/9.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01634003</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="33">
							<span class="fw-bold ms-3">33</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">199</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/10.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02316005</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="42">
							<span class="fw-bold ms-3">42</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">173</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/11.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02314006</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="37">
							<span class="fw-bold ms-3">37</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">63</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/12.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02221001</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="18">
							<span class="fw-bold ms-3">18</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">107</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/13.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04904007</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="31">
							<span class="fw-bold ms-3">31</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">298</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/14.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04601005</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="44">
							<span class="fw-bold ms-3">44</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">16</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/15.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02642002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="17">
							<span class="fw-bold ms-3">17</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">76</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/16.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01826006</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="3">
							<span class="badge badge-light-warning">Low stock</span>
							<span class="fw-bold text-warning ms-3">3</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">86</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/17.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04645009</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="13">
							<span class="fw-bold ms-3">13</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">83</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/18.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03792002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="17">
							<span class="fw-bold ms-3">17</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">247</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/19.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02916006</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="25">
							<span class="fw-bold ms-3">25</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">26</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/20.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03442006</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="48">
							<span class="fw-bold ms-3">48</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">159</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/21.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04826007</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="11">
							<span class="fw-bold ms-3">11</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">160</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/22.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01833001</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="7">
							<span class="badge badge-light-warning">Low stock</span>
							<span class="fw-bold text-warning ms-3">7</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">95</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/23.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03444003</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="4">
							<span class="badge badge-light-warning">Low stock</span>
							<span class="fw-bold text-warning ms-3">4</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">261</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/24.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02542001</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="45">
							<span class="fw-bold ms-3">45</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">248</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/25.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01941002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="21">
							<span class="fw-bold ms-3">21</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">91</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/26.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02102006</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="0">
							<span class="badge badge-light-danger">Sold out</span>
							<span class="fw-bold text-danger ms-3">0</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">236</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/27.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04944005</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="42">
							<span class="fw-bold ms-3">42</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">119</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/28.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04436003</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="6">
							<span class="badge badge-light-warning">Low stock</span>
							<span class="fw-bold text-warning ms-3">6</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">45</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/29.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01143009</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="31">
							<span class="fw-bold ms-3">31</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">27</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/30.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02493002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="38">
							<span class="fw-bold ms-3">38</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">157</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/31.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01326006</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="5">
							<span class="badge badge-light-warning">Low stock</span>
							<span class="fw-bold text-warning ms-3">5</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">290</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/32.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03329003</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="12">
							<span class="fw-bold ms-3">12</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">260</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/33.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02804002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="10">
							<span class="fw-bold ms-3">10</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">61</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/34.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02800007</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="30">
							<span class="fw-bold ms-3">30</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">299</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/35.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03440004</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="19">
							<span class="fw-bold ms-3">19</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">148</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/36.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02706002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="19">
							<span class="fw-bold ms-3">19</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">197</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/37.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01524005</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="35">
							<span class="fw-bold ms-3">35</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">85</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/38.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04474007</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="49">
							<span class="fw-bold ms-3">49</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">185</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/39.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01688004</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="28">
							<span class="fw-bold ms-3">28</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">86</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Scheduled">
							<!--begin::Badges-->
							<div class="badge badge-light-primary">Scheduled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/40.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04695006</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="2">
							<span class="badge badge-light-warning">Low stock</span>
							<span class="fw-bold text-warning ms-3">2</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">182</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/41.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02895007</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="38">
							<span class="fw-bold ms-3">38</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">245</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/42.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03867002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="16">
							<span class="fw-bold ms-3">16</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">282</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/43.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02548001</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="49">
							<span class="fw-bold ms-3">49</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">130</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/44.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02750001</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="22">
							<span class="fw-bold ms-3">22</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">186</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/45.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01949005</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="30">
							<span class="fw-bold ms-3">30</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">223</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-4">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/46.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">02606002</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="40">
							<span class="fw-bold ms-3">40</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">203</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/47.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03854004</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="29">
							<span class="fw-bold ms-3">29</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">31</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/48.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">01130003</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="45">
							<span class="fw-bold ms-3">45</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">262</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/49.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">03595008</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="6">
							<span class="badge badge-light-warning">Low stock</span>
							<span class="fw-bold text-warning ms-3">6</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">45</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-5">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Published">
							<!--begin::Badges-->
							<div class="badge badge-light-success">Published</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Checkbox-->
						<td>
							<div class="form-check form-check-sm form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1"/>
							</div>
						</td>
						<!--end::Checkbox-->
						<!--begin::Category=-->
						<td>
							<div class="d-flex align-items-center">
								<!--begin::Thumbnail-->
								<a href="/admin/ecommerce/catalog/edit-product" class="symbol symbol-50px">
									<span class="symbol-label"
									      style="background-image:url(assets/media//stock/ecommerce/50.gif);"></span>
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
						<!--end::Category=-->
						<!--begin::SKU=-->
						<td class="text-end pe-0">
							<span class="fw-bold">04948005</span>
						</td>
						<!--end::SKU=-->
						<!--begin::Qty=-->
						<td class="text-end pe-0" data-order="24">
							<span class="fw-bold ms-3">24</span>
						</td>
						<!--end::Qty=-->
						<!--begin::Price=-->
						<td class="text-end pe-0">204</td>
						<!--end::Price=-->
						<!--begin::Rating-->
						<td class="text-end pe-0" data-order="rating-3">
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
						<!--begin::Status=-->
						<td class="text-end pe-0" data-order="Inactive">
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Inactive</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::Action=-->
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
							   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
																     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="currentColor"/>
																</svg>
															</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div
								class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
								data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="/admin/ecommerce/catalog/edit-product" class="menu-link px-3">Edit</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</td>
						<!--end::Action=-->
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
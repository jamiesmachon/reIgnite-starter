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
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
															      height="2" rx="1"
															      transform="rotate(45 17.0365 15.1223)"
															      fill="currentColor"/>
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
					<div id="kt_ecommerce_report_shipping_export" class="d-none"></div>
					<!--end::Export buttons-->
				</div>
				<!--end::Card title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
					<!--begin::Daterangepicker-->
					<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range"
					       id="kt_ecommerce_report_shipping_daterangepicker"/>
					<!--end::Daterangepicker-->
					<!--begin::Filter-->
					<div class="w-150px">
						<!--begin::Select2-->
						<select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
						        data-placeholder="Status" data-kt-ecommerce-order-filter="status">
							<option></option>
							<option value="all">All</option>
							<option value="Completed">Completed</option>
							<option value="In Transit">In Transit</option>
							<option value="Pending">Pending</option>
							<option value="Cancelled">Cancelled</option>
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
					<div id="kt_ecommerce_report_shipping_export_menu"
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
				<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
					<!--begin::Table head-->
					<thead>
					<!--begin::Table row-->
					<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
						<th class="min-w-100px">Date</th>
						<th class="min-w-100px">Shipping Type</th>
						<th class="min-w-100px">Shipping ID</th>
						<th class="min-w-100px">Status</th>
						<th class="text-end min-w-75px">No. Orders</th>
						<th class="text-end min-w-100px">Total</th>
					</tr>
					<!--end::Table row-->
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody class="fw-semibold text-gray-600">
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Feb 21, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0049529</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">14</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$327.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Apr 15, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0034580</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">1</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$79.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Jun 24, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0066251</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">14</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$347.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Feb 21, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0053705</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">3</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$496.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Nov 10, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0033443</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">2</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$170.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Feb 21, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0040541</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-warning">Pending</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">10</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$186.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Jul 25, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0061804</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-primary">In Transit</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">5</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$570.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Feb 21, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0043435</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Cancelled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">10</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$42.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Mar 10, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0054804</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">20</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$41.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>May 05, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0050627</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Cancelled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">1</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$254.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Oct 25, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0033694</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">19</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$387.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Jun 24, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0027915</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">14</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$90.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Nov 10, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0069836</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">13</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$222.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>May 05, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0048729</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">15</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$574.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Jun 24, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0029299</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">9</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$529.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Feb 21, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0040759</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">12</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$142.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Aug 19, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0051103</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-warning">Pending</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">16</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$316.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Oct 25, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0064967</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Cancelled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">2</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$149.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Feb 21, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0034437</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-warning">Pending</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">10</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$225.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Jun 20, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0044029</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-primary">In Transit</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">7</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$293.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Apr 15, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0036443</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">6</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$189.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Jun 20, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0038882</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">11</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$521.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Jul 25, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0050429</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">18</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$85.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Aug 19, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0036276</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">8</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$151.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Apr 15, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0036745</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">19</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$347.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Sep 22, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0038699</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Cancelled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">11</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$130.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Feb 21, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0032271</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Cancelled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">6</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$48.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Mar 10, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0038771</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">12</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$342.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Jul 25, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0062975</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">19</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$208.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Feb 21, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0068041</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">4</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$342.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Jun 20, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0030810</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">12</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$522.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Sep 22, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0041641</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">14</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$310.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Jun 24, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0044842</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-primary">In Transit</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">4</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$109.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Jun 20, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0043392</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">20</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$237.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Mar 10, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0046166</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">15</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$70.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Mar 10, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0031062</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-primary">In Transit</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">9</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$341.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Apr 15, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0055767</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Cancelled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">2</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$370.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Sep 22, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0046610</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">12</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$275.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Feb 21, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0030042</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">11</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$24.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Nov 10, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0053322</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">6</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$125.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Aug 19, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0069866</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">7</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$267.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Nov 10, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0033485</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">12</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$447.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>May 05, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0027742</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">16</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$303.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Mar 10, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0038305</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">15</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$400.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Nov 10, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0046878</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">15</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$446.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Dec 20, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0048267</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-danger">Cancelled</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">12</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$195.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Nov 10, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0026410</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">3</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$304.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Mar 10, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0030271</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-primary">In Transit</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">4</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$409.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Apr 15, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0038619</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">16</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$100.00</td>
						<!--end::Total=-->
					</tr>
					<!--end::Table row-->
					<!--begin::Table row-->
					<tr>
						<!--begin::Date=-->
						<td>Jul 25, 2022</td>
						<!--end::Date=-->
						<!--begin::Shipping Type=-->
						<td>Flat Shipping Rate</td>
						<!--end::Shipping Type=-->
						<!--begin::Shipping ID=-->
						<td>
							<a href="/admin/ecommerce/sales/details"
							   class="text-dark text-hover-primary">#SHP-0063364</a>
						</td>
						<!--end::Shipping ID=-->
						<!--begin::Status=-->
						<td>
							<!--begin::Badges-->
							<div class="badge badge-light-success">Completed</div>
							<!--end::Badges-->
						</td>
						<!--end::Status=-->
						<!--begin::No orders=-->
						<td class="text-end pe-0">16</td>
						<!--end::No orders=-->
						<!--begin::Total=-->
						<td class="text-end">$160.00</td>
						<!--end::Total=-->
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
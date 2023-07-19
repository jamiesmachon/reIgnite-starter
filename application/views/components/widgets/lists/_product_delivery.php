<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<div class="card card-flush h-xl-100">
	<!--begin::Header-->
	<div class="card-header pt-7">
		<!--begin::Title-->
		<h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-dark">Product Delivery</span>
			<span class="text-gray-400 mt-1 fw-semibold fs-6">1M Products Shipped so far</span>
		</h3>
		<!--end::Title-->
		<!--begin::Toolbar-->
		<div class="card-toolbar">
			<a href="<?php echo base_url( 'admin/ecommerce/sales/details' ); ?>" class="btn btn-sm btn-light">Order
				Details</a>
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header-->
	<!--begin::Body-->
	<div class="card-body">
		<!--begin::Scroll-->
		<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
			<!--begin::Item-->
			<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
				<!--begin::Info-->
				<div class="d-flex flex-stack mb-3">
					<!--begin::Wrapper-->
					<div class="me-3">
						<!--begin::Icon-->
						<img src="<?php echo get_media_url( 'stock/ecommerce/210.gif' ); ?>"
						     class="w-50px ms-n1 me-1" alt=""/>
						<!--end::Icon-->
						<!--begin::Title-->
						<a href="<?php echo base_url( 'admin/ecommerce/catalog/edit-product' ); ?>"
						   class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
						<!--end::Title-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Action-->
					<div class="m-0">
						<!--begin::Menu-->
						<button
							class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
							data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
							data-kt-menu-overflow="true">
							<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
							<span class="svg-icon svg-icon-1">
																			<svg width="24" height="24"
																			     viewBox="0 0 24 24" fill="none"
																			     xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2"
																				      width="20" height="20" rx="4"
																				      fill="currentColor"/>
																				<rect x="11" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																				<rect x="15" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																				<rect x="7" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																			</svg>
																		</span>
							<!--end::Svg Icon-->
						</button>
						<!--begin::Menu 2-->
						<div
							class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
							data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick
									Actions
								</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mb-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Ticket</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Customer</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover"
							     data-kt-menu-placement="right-start">
								<!--begin::Menu item-->
								<a href="#" class="menu-link px-3">
									<span class="menu-title">New Group</span>
									<span class="menu-arrow"></span>
								</a>
								<!--end::Menu item-->
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Admin Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Staff Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Member Group</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mt-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content px-3 py-3">
									<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
								</div>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 2-->
						<!--end::Menu-->
					</div>
					<!--end::Action-->
				</div>
				<!--end::Info-->
				<!--begin::Customer-->
				<div class="d-flex flex-stack">
					<!--begin::Name-->
					<span class="text-gray-400 fw-bold">To:
																<a href="<?php echo base_url( 'admin/ecommerce/sales/details' ); ?>"
																   class="text-gray-800 text-hover-primary fw-bold">Jason Bourne</a></span>
					<!--end::Name-->
					<!--begin::Label-->
					<span class="badge badge-light-success">Delivered</span>
					<!--end::Label-->
				</div>
				<!--end::Customer-->
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
				<!--begin::Info-->
				<div class="d-flex flex-stack mb-3">
					<!--begin::Wrapper-->
					<div class="me-3">
						<!--begin::Icon-->
						<img src="<?php echo get_media_url( 'stock/ecommerce/209.gif' ); ?>"
						     class="w-50px ms-n1 me-1" alt=""/>
						<!--end::Icon-->
						<!--begin::Title-->
						<a href="<?php echo base_url( 'admin/ecommerce/catalog/edit-product' ); ?>"
						   class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
						<!--end::Title-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Action-->
					<div class="m-0">
						<!--begin::Menu-->
						<button
							class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
							data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
							data-kt-menu-overflow="true">
							<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
							<span class="svg-icon svg-icon-1">
																			<svg width="24" height="24"
																			     viewBox="0 0 24 24" fill="none"
																			     xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2"
																				      width="20" height="20" rx="4"
																				      fill="currentColor"/>
																				<rect x="11" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																				<rect x="15" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																				<rect x="7" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																			</svg>
																		</span>
							<!--end::Svg Icon-->
						</button>
						<!--begin::Menu 2-->
						<div
							class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
							data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick
									Actions
								</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mb-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Ticket</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Customer</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover"
							     data-kt-menu-placement="right-start">
								<!--begin::Menu item-->
								<a href="#" class="menu-link px-3">
									<span class="menu-title">New Group</span>
									<span class="menu-arrow"></span>
								</a>
								<!--end::Menu item-->
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Admin Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Staff Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Member Group</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mt-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content px-3 py-3">
									<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
								</div>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 2-->
						<!--end::Menu-->
					</div>
					<!--end::Action-->
				</div>
				<!--end::Info-->
				<!--begin::Customer-->
				<div class="d-flex flex-stack">
					<!--begin::Name-->
					<span class="text-gray-400 fw-bold">To:
																<a href="<?php echo base_url( 'admin/ecommerce/sales/details' ); ?>"
																   class="text-gray-800 text-hover-primary fw-bold">Marie Durant</a></span>
					<!--end::Name-->
					<!--begin::Label-->
					<span class="badge badge-light-primary">Shipping</span>
					<!--end::Label-->
				</div>
				<!--end::Customer-->
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
				<!--begin::Info-->
				<div class="d-flex flex-stack mb-3">
					<!--begin::Wrapper-->
					<div class="me-3">
						<!--begin::Icon-->
						<img src="<?php echo get_media_url( 'stock/ecommerce/214.gif' ); ?>"
						     class="w-50px ms-n1 me-1" alt=""/>
						<!--end::Icon-->
						<!--begin::Title-->
						<a href="<?php echo base_url( 'admin/ecommerce/catalog/edit-product' ); ?>"
						   class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
						<!--end::Title-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Action-->
					<div class="m-0">
						<!--begin::Menu-->
						<button
							class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
							data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
							data-kt-menu-overflow="true">
							<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
							<span class="svg-icon svg-icon-1">
																			<svg width="24" height="24"
																			     viewBox="0 0 24 24" fill="none"
																			     xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2"
																				      width="20" height="20" rx="4"
																				      fill="currentColor"/>
																				<rect x="11" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																				<rect x="15" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																				<rect x="7" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																			</svg>
																		</span>
							<!--end::Svg Icon-->
						</button>
						<!--begin::Menu 2-->
						<div
							class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
							data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick
									Actions
								</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mb-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Ticket</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Customer</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover"
							     data-kt-menu-placement="right-start">
								<!--begin::Menu item-->
								<a href="#" class="menu-link px-3">
									<span class="menu-title">New Group</span>
									<span class="menu-arrow"></span>
								</a>
								<!--end::Menu item-->
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Admin Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Staff Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Member Group</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mt-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content px-3 py-3">
									<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
								</div>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 2-->
						<!--end::Menu-->
					</div>
					<!--end::Action-->
				</div>
				<!--end::Info-->
				<!--begin::Customer-->
				<div class="d-flex flex-stack">
					<!--begin::Name-->
					<span class="text-gray-400 fw-bold">To:
																<a href="<?php echo base_url( 'admin/ecommerce/sales/details' ); ?>"
																   class="text-gray-800 text-hover-primary fw-bold">Dan Wilson</a></span>
					<!--end::Name-->
					<!--begin::Label-->
					<span class="badge badge-light-danger">Confirmed</span>
					<!--end::Label-->
				</div>
				<!--end::Customer-->
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
				<!--begin::Info-->
				<div class="d-flex flex-stack mb-3">
					<!--begin::Wrapper-->
					<div class="me-3">
						<!--begin::Icon-->
						<img src="<?php echo get_media_url( 'stock/ecommerce/211.gif' ); ?>"
						     class="w-50px ms-n1 me-1" alt=""/>
						<!--end::Icon-->
						<!--begin::Title-->
						<a href="<?php echo base_url( 'admin/ecommerce/catalog/edit-product' ); ?>"
						   class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
						<!--end::Title-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Action-->
					<div class="m-0">
						<!--begin::Menu-->
						<button
							class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
							data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
							data-kt-menu-overflow="true">
							<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
							<span class="svg-icon svg-icon-1">
																			<svg width="24" height="24"
																			     viewBox="0 0 24 24" fill="none"
																			     xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2"
																				      width="20" height="20" rx="4"
																				      fill="currentColor"/>
																				<rect x="11" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																				<rect x="15" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																				<rect x="7" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																			</svg>
																		</span>
							<!--end::Svg Icon-->
						</button>
						<!--begin::Menu 2-->
						<div
							class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
							data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick
									Actions
								</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mb-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Ticket</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Customer</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover"
							     data-kt-menu-placement="right-start">
								<!--begin::Menu item-->
								<a href="#" class="menu-link px-3">
									<span class="menu-title">New Group</span>
									<span class="menu-arrow"></span>
								</a>
								<!--end::Menu item-->
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Admin Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Staff Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Member Group</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mt-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content px-3 py-3">
									<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
								</div>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 2-->
						<!--end::Menu-->
					</div>
					<!--end::Action-->
				</div>
				<!--end::Info-->
				<!--begin::Customer-->
				<div class="d-flex flex-stack">
					<!--begin::Name-->
					<span class="text-gray-400 fw-bold">To:
																<a href="<?php echo base_url( 'admin/ecommerce/sales/details' ); ?>"
																   class="text-gray-800 text-hover-primary fw-bold">Lebron Wayde</a></span>
					<!--end::Name-->
					<!--begin::Label-->
					<span class="badge badge-light-success">Delivered</span>
					<!--end::Label-->
				</div>
				<!--end::Customer-->
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
				<!--begin::Info-->
				<div class="d-flex flex-stack mb-3">
					<!--begin::Wrapper-->
					<div class="me-3">
						<!--begin::Icon-->
						<img src="<?php echo get_media_url( 'stock/ecommerce/215.gif' ); ?>"
						     class="w-50px ms-n1 me-1" alt=""/>
						<!--end::Icon-->
						<!--begin::Title-->
						<a href="<?php echo base_url( 'admin/ecommerce/catalog/edit-product' ); ?>"
						   class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
						<!--end::Title-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Action-->
					<div class="m-0">
						<!--begin::Menu-->
						<button
							class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
							data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
							data-kt-menu-overflow="true">
							<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
							<span class="svg-icon svg-icon-1">
																			<svg width="24" height="24"
																			     viewBox="0 0 24 24" fill="none"
																			     xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2"
																				      width="20" height="20" rx="4"
																				      fill="currentColor"/>
																				<rect x="11" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																				<rect x="15" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																				<rect x="7" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																			</svg>
																		</span>
							<!--end::Svg Icon-->
						</button>
						<!--begin::Menu 2-->
						<div
							class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
							data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick
									Actions
								</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mb-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Ticket</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Customer</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover"
							     data-kt-menu-placement="right-start">
								<!--begin::Menu item-->
								<a href="#" class="menu-link px-3">
									<span class="menu-title">New Group</span>
									<span class="menu-arrow"></span>
								</a>
								<!--end::Menu item-->
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Admin Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Staff Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Member Group</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mt-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content px-3 py-3">
									<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
								</div>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 2-->
						<!--end::Menu-->
					</div>
					<!--end::Action-->
				</div>
				<!--end::Info-->
				<!--begin::Customer-->
				<div class="d-flex flex-stack">
					<!--begin::Name-->
					<span class="text-gray-400 fw-bold">To:
																<a href="<?php echo base_url( 'admin/ecommerce/sales/details' ); ?>"
																   class="text-gray-800 text-hover-primary fw-bold">Ana Simmons</a></span>
					<!--end::Name-->
					<!--begin::Label-->
					<span class="badge badge-light-primary">Shipping</span>
					<!--end::Label-->
				</div>
				<!--end::Customer-->
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="border border-dashed border-gray-300 rounded px-7 py-3">
				<!--begin::Info-->
				<div class="d-flex flex-stack mb-3">
					<!--begin::Wrapper-->
					<div class="me-3">
						<!--begin::Icon-->
						<img src="<?php echo get_media_url( 'stock/ecommerce/192.gif' ); ?>"
						     class="w-50px ms-n1 me-1" alt=""/>
						<!--end::Icon-->
						<!--begin::Title-->
						<a href="<?php echo base_url( 'admin/ecommerce/catalog/edit-product' ); ?>"
						   class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
						<!--end::Title-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Action-->
					<div class="m-0">
						<!--begin::Menu-->
						<button
							class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
							data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
							data-kt-menu-overflow="true">
							<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
							<span class="svg-icon svg-icon-1">
																			<svg width="24" height="24"
																			     viewBox="0 0 24 24" fill="none"
																			     xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2"
																				      width="20" height="20" rx="4"
																				      fill="currentColor"/>
																				<rect x="11" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																				<rect x="15" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																				<rect x="7" y="11" width="2.6"
																				      height="2.6" rx="1.3"
																				      fill="currentColor"/>
																			</svg>
																		</span>
							<!--end::Svg Icon-->
						</button>
						<!--begin::Menu 2-->
						<div
							class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
							data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick
									Actions
								</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mb-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Ticket</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Customer</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover"
							     data-kt-menu-placement="right-start">
								<!--begin::Menu item-->
								<a href="#" class="menu-link px-3">
									<span class="menu-title">New Group</span>
									<span class="menu-arrow"></span>
								</a>
								<!--end::Menu item-->
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Admin Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Staff Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">Member Group</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">New Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator mt-3 opacity-75"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content px-3 py-3">
									<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
								</div>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 2-->
						<!--end::Menu-->
					</div>
					<!--end::Action-->
				</div>
				<!--end::Info-->
				<!--begin::Customer-->
				<div class="d-flex flex-stack">
					<!--begin::Name-->
					<span class="text-gray-400 fw-bold">To:
																<a href="<?php echo base_url( 'admin/ecommerce/sales/details' ); ?>"
																   class="text-gray-800 text-hover-primary fw-bold">Kevin Leonard</a></span>
					<!--end::Name-->
					<!--begin::Label-->
					<span class="badge badge-light-danger">Confirmed</span>
					<!--end::Label-->
				</div>
				<!--end::Customer-->
			</div>
			<!--end::Item-->
		</div>
		<!--end::Scroll-->
	</div>
	<!--end::Body-->
</div>
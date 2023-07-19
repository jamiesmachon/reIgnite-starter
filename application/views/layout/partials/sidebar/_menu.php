<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
	<!--begin::Menu wrapper-->
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true"
	     data-kt-scroll-activate="true" data-kt-scroll-height="auto"
	     data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
	     data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
		<!--begin::Menu-->
		<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
			<!--begin:Menu item-->
			<div class="menu-item">
				<!--begin:Menu link-->
				<a class="menu-link<?php echo ( uri_string() === 'admin' ) ? ' active' : ''; ?>" href="/admin">
					<span class="menu-icon">
						<i class="bi bi-grid fs-3"></i>
					</span>
					<span class="menu-title"><?php _e( 'Dashboard', 'suppliers-portal' ); ?></span>
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div class="menu-item">
				<!--begin:Menu link-->
				<a class="menu-link<?php echo ( uri_string() === 'admin/settings' ) ? ' active' : ''; ?>" href="/admin/settings">
					<span class="menu-icon">
						<i class="bi bi-gear fs-3"></i>
					</span>
					<span class="menu-title"><?php _e( 'Settings', 'suppliers-portal' ); ?></span>
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div class="menu-item pt-5">
				<!--begin:Menu content-->
				<div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7"><?php _e( 'Apps', 'suppliers-portal' ); ?></span>
				</div>
				<!--end:Menu content-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item inbox app-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion<?php echo ( strpos( uri_string(), 'admin/inbox' ) !== FALSE ) ? ' hover show' : ''; ?>">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">
						<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
						<span class="svg-icon svg-icon-2">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"/>
								<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"/>
							</svg>
						</span>
						<!--end::Svg Icon-->
					</span>
					<span class="menu-title"><?php _e( 'Inbox', 'suppliers-portal' ); ?></span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link<?php echo ( uri_string() === 'admin/inbox' ) ? ' active' : ''; ?>" href="admin/inbox">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"><?php _e( 'Messages', 'suppliers-portal' ); ?></span>
							<span class="menu-badge">
								<span class="badge badge-success">3</span>
							</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link<?php echo ( uri_string() === 'admin/inbox/compose' ) ? ' active' : ''; ?>" href="admin/inbox/compose">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"><?php _e( 'Compose', 'suppliers-portal' ); ?></span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link<?php echo ( uri_string() === 'admin/inbox/reply' ) ? ' active' : ''; ?>" href="admin/inbox/reply">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"><?php _e( 'View & Reply', 'suppliers-portal' ); ?></span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item inbox app-->
			<!--begin:Menu item customers-->
			<div class="menu-item">
				<!--begin:Menu link-->
				<a class="menu-link<?php echo ( uri_string() === 'admin/customers' ) ? ' active' : ''; ?>" href="/admin/customers">
					<span class="menu-icon">
						<i class="bi bi-printer fs-3"></i>
					</span>
					<span class="menu-title"><?php _e( 'Customers', 'suppliers-portal' ); ?></span>
				</a>
				<!--end:Menu link-->
			</div>
			<!--end:Menu item customers-->
			<!--begin:Menu item ecommerce app-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion<?php echo ( strpos( uri_string(), 'admin/ecommerce' ) !== FALSE ) ? ' hover show' : ''; ?>">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-cart fs-3"></i>
					</span>
					<span class="menu-title"><?php _e('eCommerce', 'suppliers-portal'); ?></span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion<?php echo ( strpos( uri_string(), 'admin/ecommerce/catalog' ) !== FALSE ) ? ' hover show' : ''; ?>">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"><?php _e('Catalog', 'suppliers-portal'); ?></span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link<?php echo ( uri_string() === 'admin/ecommerce/catalog' ) ? ' active' : ''; ?>" href="/admin/ecommerce/catalog">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title"><?php _e('Products', 'suppliers-portal'); ?></span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link<?php echo ( uri_string() === 'admin/ecommerce/catalog/add-product' ) ? ' active' : ''; ?>" href="/admin/ecommerce/catalog/add-product">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title"><?php _e('Add Product', 'suppliers-portal'); ?></span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link<?php echo ( uri_string() === 'admin/ecommerce/catalog/categories' ) ? ' active' : ''; ?>" href="/admin/ecommerce/catalog/categories">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title"><?php _e('Categories', 'suppliers-portal'); ?></span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link<?php echo ( uri_string() === 'admin/ecommerce/catalog/add-category' ) ? ' active' : ''; ?>" href="/admin/ecommerce/catalog/add-category">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title"><?php _e('Add Category', 'suppliers-portal'); ?></span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion<?php echo ( strpos( uri_string(), 'admin/ecommerce/sales' ) !== FALSE ) ? ' hover show' : ''; ?>">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"><?php _e('Sales', 'suppliers-portal'); ?></span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link<?php echo ( uri_string() === 'admin/ecommerce/sales' ) ? ' active' : ''; ?>" href="/admin/ecommerce/sales">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title"><?php _e('Orders', 'suppliers-portal'); ?></span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link<?php echo ( uri_string() === 'admin/ecommerce/sales/add-order' ) ? ' active' : ''; ?>" href="/admin/ecommerce/sales/add-order">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title"><?php _e('Add Order', 'suppliers-portal'); ?></span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion<?php echo ( strpos( uri_string(), 'admin/ecommerce/reports' ) !== FALSE ) ? ' hover show' : ''; ?>">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"><?php _e('Reports', 'suppliers-portal'); ?></span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link<?php echo ( uri_string() === 'admin/ecommerce/reports/view' ) ? ' active' : ''; ?>" href="/admin/ecommerce/reports/view">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title"><?php _e('Products Viewed', 'suppliers-portal'); ?></span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link<?php echo ( uri_string() === 'admin/ecommerce/reports/sales' ) ? ' active' : ''; ?>" href="/admin/ecommerce/reports/sales">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title"><?php _e('Sales', 'suppliers-portal'); ?></span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link<?php echo ( uri_string() === 'admin/ecommerce/reports/returns' ) ? ' active' : ''; ?>" href="/admin/ecommerce/reports/returns">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title"><?php _e('Returns', 'suppliers-portal'); ?></span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link<?php echo ( uri_string() === 'admin/ecommerce/reports/orders' ) ? ' active' : ''; ?>" href="/admin/ecommerce/reports/orders">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title"><?php _e('Customer Orders', 'suppliers-portal'); ?></span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link<?php echo ( uri_string() === 'admin/ecommerce/reports/shipping' ) ? ' active' : ''; ?>" href="/admin/ecommerce/reports/shipping">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title"><?php _e('Shipping', 'suppliers-portal'); ?></span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item ecommerce app-->
			<!--begin:Menu item invoice management-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion<?php echo ( strpos( uri_string(), 'admin/invoices' ) !== FALSE ) ? ' hover show' : ''; ?>">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-hr fs-3"></i>
					</span>
					<span class="menu-title"><?php _e('Invoice Manager', 'suppliers-portal'); ?></span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link<?php echo ( uri_string() === 'admin/invoices' ) ? ' active' : ''; ?>" href="/admin/invoices">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"><?php _e('Invoices', 'suppliers-portal'); ?></span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link<?php echo ( uri_string() === 'admin/invoices/create' ) ? ' active' : ''; ?>" href="/admin/invoices/create">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"><?php _e('Create Invoice', 'suppliers-portal'); ?></span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item invoice management-->
			<!--begin:Menu item file management-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-card-checklist fs-3"></i>
					</span>
					<span class="menu-title">File Manager</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="/admin/file-manager/folders">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Folders</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="/admin/file-manager/files">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Files</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="/admin/file-manager/blank">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Blank Directory</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="/admin/file-manager/settings">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Settings</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item file management-->
			<!--begin:Menu item user management-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-people fs-3"></i>
					</span>
					<span class="menu-title">User Management</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Users</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link" href="/admin/user-management/users/list">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Users List</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link" href="/admin/user-management/users/view">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">View User</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Roles</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link" href="/admin/user-management/roles/list">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Roles List</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item">
								<!--begin:Menu link-->
								<a class="menu-link" href="/admin/user-management/roles/view">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">View Role</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="/admin/user-management/permissions">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Permissions</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item user management-->
		</div>
		<!--end::Menu-->
	</div>
	<!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' ); ?>
<!DOCTYPE html>
<html lang="<?php echo get_option( 'doc_lang' ); ?>">
<!--begin::Head-->
<head>
	<base href="<?php echo base_url(); ?>"/>

	<title><?php echo $this->_page_title; ?></title>
	<meta charset="utf-8"/>
	<meta name="description" content="<?php echo get_option( 'meta_description' ); ?>">
	<meta name="keywords" content="<?php echo get_option( 'meta_keywords' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<meta property="og:locale" content="en_GB"/>
	<meta property="og:type" content="article"/>
	<meta property="og:title" content="<?php echo get_option( 'meta_description' ); ?>"/>
	<meta property="og:url" content="https://suppliers.giftsite.co.uk"/>
	<meta property="og:site_name" content="<?php echo get_option( 'site_name' ); ?>"/>
	<link rel="canonical" href="https://suppliers.giftsite.co.uk"/>
	<link rel="shortcut icon" href="<?php echo get_media_url( 'logos/favicon.ico' ); ?>"/>
	
	<?php // CSS files ?>
	<?php if ( isset( $css_files ) && is_array( $css_files ) ) : ?>
		<?php foreach ( $css_files as $css ) : ?>
			<?php if ( $css !== NULL ) : ?>
				<link rel="stylesheet"
				      href="<?php echo $css; ?><?php echo( ENVIRONMENT === 'development' ? '' : "?v=" . config_item( 'site_version' ) ); ?>"><?php echo "\n"; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
	
	<?php // JavaScript Localizations ?>
	<?php if ( isset( $js_locatizations ) && is_array( $js_locatizations ) ) : ?>
		<?php foreach ( $js_locatizations as $handle => $js ) : ?>
			<?php if ( $js !== NULL ) : ?>
				<?php echo "\n"; ?>
				<script type="text/javascript" id="<?php echo $handle; ?>"><?php echo "\n" . $js . "\n"; ?></script>
				<?php echo "\n"; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on"
      data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true"
      data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
      data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
      class="app-default">

<!--begin::Root-->
<?php echo $_content; ?>
<!--end::Root-->

<?php // Javascript files ?>
<?php if ( isset( $js_files ) && is_array( $js_files ) ) : ?>
	<?php foreach ( $js_files as $js ) : ?>
		<?php if ( $js !== NULL ) : ?>
			<?php echo "\n"; ?>
			<script type="text/javascript"
			        src="<?php echo $js; ?><?php echo( ENVIRONMENT === 'development' ? '' : "?v=" . config_item( 'site_version' ) ); ?>"></script><?php echo "\n"; ?>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>

<?php // Javascript files ?>
<?php if ( isset( $js_files_i18n ) && is_array( $js_files_i18n ) ) : ?>
	<?php foreach ( $js_files_i18n as $js ) : ?>
		<?php if ( $js !== NULL ) : ?>
			<?php echo "\n"; ?>
			<script type="text/javascript"><?php echo "\n" . $js . "\n"; ?></script><?php echo "\n"; ?>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>
</body>
<!--end::Body-->
</html>
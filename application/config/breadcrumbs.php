<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );
/*
| -------------------------------------------------------------------
| BREADCRUMB CONFIG
| -------------------------------------------------------------------
| This file will contain some breadcrumbs' settings.
|
| $config['crumb_divider']		The string used to divide the crumbs
| $config['tag_open'] 			The opening tag for breadcrumb's holder.
| $config['tag_close'] 			The closing tag for breadcrumb's holder.
| $config['crumb_open'] 		The opening tag for breadcrumb's holder.
| $config['crumb_close'] 		The closing tag for breadcrumb's holder.
|
| Defaults provided for twitter bootstrap 2.0
*/
$config[ 'crumb_divider' ] = '<span class="bullet bg-gray-400 w-5px h-2px"></span>';
$config[ 'tag_open' ] = '<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">';
$config[ 'tag_close' ] = '</ul>';
$config[ 'crumb_open' ] = '<li class="breadcrumb-item">';
$config[ 'crumb_last_open' ] = '<li class="breadcrumb-item text-muted">';
$config[ 'crumb_close' ] = '</li>';

/* End of file breadcrumbs.php */
/* Location: ./application/config/breadcrumbs.php */
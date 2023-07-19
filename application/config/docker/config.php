<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );
/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|   http://example.com/
|
| WARNING: You MUST set this value!
|
| If it is not set, then CodeIgniter will try guess the protocol and path
| your installation, but due to security concerns the hostname will be set
| to $_SERVER['SERVER_ADDR'] if available, or localhost otherwise.
| The auto-detection mechanism exists only for convenience during
| development and MUST NOT be used in production!
|
| If you need to allow multiple domains, remember that this file is still
| a PHP script and you can easily do that on your own.
|
*/
$config[ 'base_url' ] = 'http://soros.local';
$config[ 'dev_url' ] = 'http://soros.local';
$config[ 'live_url' ] = 'http://soros.local';
if ( $_SERVER[ 'HTTPS' ] == 'on' )
{
	$config[ 'base_url' ] = 'https://soros.local';
	$config[ 'dev_url' ] = 'https://soros.local';
	$config[ 'live_url' ] = 'https://soros.local';
}
$config[ 'log_threshold' ] = 4;
$config[ 'profiler' ] = TRUE;
$config[ 'migration_enabled' ] = TRUE;

<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );
/*
|--------------------------------------------------------------------------
| Core Configuration File
|--------------------------------------------------------------------------
|*/
// Site Details
$config[ 'site_version' ] = "1.0.0";     // version number

// global content and theming directories
$config[ 'content_folder' ] = "content";  // folder containing your media and themes directories
$config[ 'media_folder' ] = 'media';  // folder containing your media
$config[ 'themes_folder' ] = "themes";  // folder containing your themes

// theme name
$config[ 'theme' ] = "keen";        // folder containing your current theme

// Login Attempts
$config[ 'login_max_time' ] = 300;        // in seconds
$config[ 'login_max_attempts' ] = 10;
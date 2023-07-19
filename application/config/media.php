<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );
/*
|--------------------------------------------------------------------------
| Image Preset Sizes
|--------------------------------------------------------------------------
|
| Specify the preset sizes you want to use in your code. Only these preset 
| will be accepted by the controller for security.
|
| Each preset exists of a width and height. If one of the dimensions are 
| equal to 0, it will automatically calculate a matching width or height 
| to maintain the original ratio.
|
| If both dimensions are specified it will automatically crop the 
| resulting image so that it fits those dimensions.
|
*/
$config[ 'image_sizes' ][ 'thumbnail' ] = [ 150, 150 ];
$config[ 'image_sizes' ][ 'medium' ] = [ 300, 300 ];
$config[ 'image_sizes' ][ 'medium_large' ] = [ 768, 0 ];
$config[ 'image_sizes' ][ 'large' ] = [ 1024, 1024 ];

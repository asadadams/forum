<?php

/*
|--------------------------------------------------------------------------
| Application Directory
|--------------------------------------------------------------------------
|
| This is the root directory of your application
|
*/

define( 'APPROOT', dirname( dirname( __FILE__ ) ) );

/*
|--------------------------------------------------------------------------
| Application URL
|--------------------------------------------------------------------------
|
| This URL is the application's URL. This should be set to the root
| root of your application
|
*/

define( 'URLROOT', $_SERVER['HTTP_HOST'].'/forum' );

/*
|--------------------------------------------------------------------------
| Application Public Directory
|--------------------------------------------------------------------------
|
| This is the public directory of your application
|
*/

define( 'PUBLIC_URL', URLROOT."/public");

/*
|--------------------------------------------------------------------------
| Application Name
|--------------------------------------------------------------------------
|
| This value is the name of your application. This value can be used if
| the application name is to be used somewhere in the application
|
*/

define( 'APPNAME', 'Forum' );

?>
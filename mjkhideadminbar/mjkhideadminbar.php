<?php
/**
* Plugin Name: 				mjk-hide-admin-bar
* Plugin URI: 				https://www.wpsitework.com/plugin
* Description: 				Hide the admin bar from the front end
* Version: 					  1.0.0
* Requires at least: 	5.2
* Requires PHP: 			7.2
* Author: 					  Michael Kiger
* Author URI: 				https://www.wpsitework.com/#about
* License: 				   	GPL v2 or later
* License URI: 				https://www.gnu.org/licenses/gpl-2.0-html
* Text Domain: 				mjk-hide-admin-bar-features
* Domain Path: 				/languages
*/

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

// define variable for path to plugin file.
define( 'MJK_HB_LOCATION', dirname( __FILE__ ) );
define( 'MJK_HB_LOCATION_URL', plugins_url( '', __FILE__ ) );

/** hide the admin bar */
add_filter( 'show_admin_bar', '__return_false' );

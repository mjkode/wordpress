<?php
/**
* Plugin Name: 				mjk-simple-contact-form
* Plugin URI: 				https://www.wpsitework.com/plugin
* Description: 				Simple contact form
* Version: 					1.0.0
* Requires at least: 		5.2
* Requires PHP: 			7.2
* Author: 					Michael Kiger
* Author URI: 				https://www.wpsitework.com/#about
* License: 				   	GPL v2 or later
* License URI: 				https://www.gnu.org/licenses/gpl-2.0-html
* Text Domain: 				mjk-simple-contact-form-features
* Domain Path: 				/languages
*/

// SECURITY exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) 
{
	die;
}

// define variable for path to plugin file.
define( 'HDESPW_LOCATION', dirname( __FILE__ ) );
define( 'HDESPW_LOCATION_URL', plugins_url('',__FILE__ ) );




Class SimpleContactForm{
	
//	public function _construct()
//	{
		
		//create custom post type
		//add_action('init', array($this, 'create_custom_post_type'));
		

		//add assets (js, css, etc)
	//	echo "<script>alert('IT LOADED')</script>";
		//add_action(wp_enqueue_scripts, array($this, 'load_assets'));
//	} 

	
	//public function create_custom_post_type()
	//{
		
	//	$args = array(
	//		
	//		'public' => true,
	//		'has_archive' => true,
	//		'supports' => array('title'),
	//		'exclude_from_search' => true,
	//		'publickly_queryable' => false,
	//		'capability' => 'manage_options',
	//		'labels' => array(
	//			'name' => 'Contact Form', 
	//			'singular_name' => 'Contact Form Entry'
	//		),
	//		'menu_icon' => 'dashicons-media-text',
	//	);	

	//	register_post_type('simple_contact_form', $args); 
			
	//}
	

//	public function load_assets(); 
//	{
//		wp_enqueue_style(
//			'simple_contact_form',
//			plugin_dir_url( __FILE__ ) . '/css/simple_contact_form.css',
//			array(),
//			1,
//			'all' 
//		);
	
//	}

}






New SimpleContactForm;

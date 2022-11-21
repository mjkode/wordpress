<?php
/**
***** Add Menu Item
*/
/**
* Plugin Name:		 		mjk-add-menu-item
* Plugin URI:			 	https://www.wpsitework.com/plugin
* Description: 				Add admin menu item
* Version: 				1.0.0
* Requires at least: 			5.2
* Requires PHP: 			7.2
* Author: 				Michael Kiger
* Author URI: 				https://www.wpsitework.com/#about
* License: 				GPL v3 or later
* License URI: 				https://www.gnu.org/licenses/gpl-3.0-html
* Text Domain: 				mjk-add-menu-item-features
* Domain Path: 				/languages
*/

function mjk_add_menu_item()
	{
		add_menu_page('Forms','MY NEW Items','manage_options','mjk_add_menu_item','mjk_add_menu_item_main','dashicons-info', 4);
		add_submenu_page('mjk_add_menu_item', 'MY NEW SUBMenu', 'Archieve', 'manage_options','mjk_admin_menu_sub_archieve', 'mjk_admin_menu_sub_archieve');
	
	}

add_action('admin_menu', 'mjk_add_menu_item');

function mjk_add_menu_item_main()
{
	echo '<div class="wrap">This is my menu</div>';
}

function mjk_admin_menu_sub_archieve()
{
	echo '<div class="wrap">This is my SUBmenu</div>';
}


 ?>

<?php

namespace Roots\Sage\Custom;

use Roots\Sage\Assets;

if( function_exists('acf_add_options_page') ) {
 
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));

	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title' 	=> 'Header Settings',
		'menu_slug' 	=> 'theme-header-settings',
		'parent_slug'	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));

	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title' 	=> 'Footer Settings',
		'menu_slug' 	=> 'theme-footer-settings',
		'parent_slug'	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));
 
}
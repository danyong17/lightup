<?php

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

//** Set save location of ACF **/
add_filter( 'acf/settings/save_json', 'acf_json_save' );
function acf_json_save( $path ) {
  $path = get_stylesheet_directory( ) . '/lib/acf_json';
  return $path;
}
add_filter( 'acf/settings/load_json', 'acf_json_load' );
function acf_json_load( $paths ) {
  unset( $paths[0] );
  $paths[ ] = get_stylesheet_directory( ) . '/lib/acf_json';
  return $paths;
}
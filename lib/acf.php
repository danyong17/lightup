<?php

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
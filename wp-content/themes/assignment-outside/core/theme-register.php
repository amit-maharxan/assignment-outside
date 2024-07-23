<?php
/**
 * OUTSIDE post-type register functions and definitions
 *
 * @package OUTSIDE
 */

function theme_prefix_setup() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

/* custom options for additional data */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page( array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings'
	) );

	acf_add_options_sub_page( array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header Settings',
		'parent_slug'	=> 'theme-general-settings',
	) );

	acf_add_options_sub_page( array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer Settings',
		'parent_slug'	=> 'theme-general-settings',
	) );

	acf_add_options_sub_page( array(
		'page_title' 	=> 'Social Settings',
		'menu_title'	=> 'Social Settings',
		'parent_slug'	=> 'theme-general-settings',
	) );

}

/* custom navigation menus for header and footer */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu'     => __( 'Header Menu' ),
      'footer-menu-1'   => __( 'Footer Menu 1' ),
      'footer-menu-2'   => __( 'Footer Menu 2' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
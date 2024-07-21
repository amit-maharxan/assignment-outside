<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package OUTSIDE
 */


if( !function_exists( 'outside_add_meta' ) ) :
   /**
	* Add meta tags.
	*/
	function outside_add_meta() { ?>
		<meta charset="utf-8">
  		<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<?php }
endif;

if ( !function_exists( 'outside_add_links' ) ) :
	/*
	* Add Google fonts, Pingback url, etc.
	*/
	function outside_add_links() { ?> 
		<link href="https://fonts.googleapis.com" rel="preconnect">
		<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php }
endif;

function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return 'ASSIGNMENT OUTSIDE';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );
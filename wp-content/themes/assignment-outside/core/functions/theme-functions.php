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
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php }
endif;

if ( !function_exists( 'outside_add_links' ) ) :
	/*
	* Add Google fonts, Pingback url, etc.
	*/
	function outside_add_links() { ?> 
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
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
	return 'OUTSIDE';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );
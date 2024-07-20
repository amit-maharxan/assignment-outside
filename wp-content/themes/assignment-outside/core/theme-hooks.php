<?php
/**
 * Outside Template Hooks
 *
 * Action/filter hooks used for Outside functions/templates
 *
 * @package 	Outside
 *
 * @since     	Outside 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*==================================================================================================
  Functions
  ==================================================================================================*/

if (!function_exists('outside_output_header')){
	function outside_output_header(){
		get_header();
	}
}

if (!function_exists('outside_output_header_content')){
	function outside_output_header_content(){
		get_template_part('template-parts/header/content', 'header');
	}
}

if (!function_exists('outside_output_footer')){
	function outside_output_footer(){
		get_footer();
	}
}

if (!function_exists('outside_output_footer_content')){
	function outside_output_footer_content(){
		get_template_part('template-parts/footer/content', 'footer');
	}
}

// Outside Homepage Content Hooks
if (!function_exists('outside_homepage_banner')){
	function outside_homepage_banner(){
		get_template_part('template-parts/pages/homepage/page', 'banner');
	}
}

if (!function_exists('outside_homepage_events')){
	function outside_homepage_events(){
		get_template_part('template-parts/pages/homepage/page', 'events');
	}
}

if (!function_exists('outside_homepage_search')){
	function outside_homepage_search(){
		get_template_part('template-parts/pages/homepage/page', 'search');
	}
}

/*==================================================================================================
  Hooks
  ==================================================================================================*/


/**
 * Metas and Links
 * @see  outside_add_meta()
 * @see  outside_add_links()
 */
add_action( 'outside_meta', 'outside_add_meta' );
add_action( 'outside_links', 'outside_add_links' );

/**
* Header / Footer Content
* @see outside_output_header_content()
* @see outside_output_footer_content()
*/
 add_action('outside_header_content', 'outside_output_header_content', 10);
 add_action('outside_footer_content', 'outside_output_footer_content', 10);

/**
 * Header / Footer  
 */
add_action( 'outside_header', 'outside_output_header');
add_action( 'outside_footer', 'outside_output_footer');

/**
 * Homepage Hook
 */
add_action( 'outside_homepage_content', 'outside_homepage_banner', 10 );
add_action( 'outside_homepage_content', 'outside_homepage_events', 20 );
add_action( 'outside_homepage_content', 'outside_homepage_search', 30 );
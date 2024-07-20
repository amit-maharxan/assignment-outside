<?php
/**
 * OUTSIDE enqueue functions and definitions
 *
 * @package OUTSIDE
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Enqueue scripts and styles.
 */
function outside_scripts() {
	wp_enqueue_style('outside-splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.8/dist/css/splide.min.css');
	wp_enqueue_style('outside-custom-css', OUTSIDE_CSS . '/custom.css');

	// Enqueue script starts
	// Remove default jQuery.
	wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.1.js', array(), 'v3.6.1', false );
	wp_enqueue_script( 'outside-splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.8/dist/js/splide.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'outside-custom-js', OUTSIDE_JS . '/custom.js', array( 'jquery' ), 'null', true );
}
add_action( 'wp_enqueue_scripts', 'outside_scripts' );
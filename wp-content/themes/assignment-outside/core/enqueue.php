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
	wp_enqueue_style('outside-bootstrap-css', OUTSIDE_VENDOR . '/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('outside-bootstrap-icons-css', OUTSIDE_VENDOR . '/bootstrap-icons/bootstrap-icons.css');
	wp_enqueue_style('outside-aos-css', OUTSIDE_VENDOR . '/aos/aos.css');
	wp_enqueue_style('outside-glightbox-css', OUTSIDE_VENDOR . '/glightbox/css/glightbox.min.css');
	wp_enqueue_style('outside-swiper-css', OUTSIDE_VENDOR . '/swiper/swiper-bundle.min.css');
	wp_enqueue_style('outside-main-css', OUTSIDE_CSS . '/main.css');
	wp_enqueue_style('outside-custom-css', OUTSIDE_CSS . '/custom.css');

	// Enqueue script starts
	// Remove default jQuery.
	wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.1.js', array(), 'v3.6.1', false );
	wp_enqueue_script( 'outside-bootstrap-js', OUTSIDE_VENDOR . '/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), 'null', true );
	wp_enqueue_script( 'outside-validate-js', OUTSIDE_VENDOR . '/php-email-form/validate.js', array( 'jquery' ), 'null', true );
	wp_enqueue_script( 'outside-aos-js', OUTSIDE_VENDOR . '/aos/aos.js', array( 'jquery' ), 'null', true );
	wp_enqueue_script( 'outside-glightbox-js', OUTSIDE_VENDOR . '/glightbox/js/glightbox.min.js', array( 'jquery' ), 'null', true );
	wp_enqueue_script( 'outside-swiper-js', OUTSIDE_VENDOR . '/swiper/swiper-bundle.min.js', array( 'jquery' ), 'null', true );
	wp_enqueue_script( 'outside-main-js', OUTSIDE_JS . '/main.js', array( 'jquery' ), 'null', true );
	
	wp_enqueue_script( 'outside-custom-js', OUTSIDE_JS . '/custom.js', array( 'jquery' ), 'null', true );
}
add_action( 'wp_enqueue_scripts', 'outside_scripts' );
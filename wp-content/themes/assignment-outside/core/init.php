<?php
/**
 * OUTSIDE functions and definitions
 *
 * @package OUTSIDE
 * 
 * @since OUTSIDE 1.0
 *
 */

if ( ! defined( 'ABSPATH' ) ) { 
 	exit; // disable direct access 
 }

/*
 * Load theme constants
 */
require trailingslashit( get_template_directory() ) . 'core/theme-constants.php';

/**
 * Theme setup functions
 */
require_once ( OUTSIDE_CORE.'/theme-setup.php' );

/**
 * Register widget area and nav.
 */
require_once ( OUTSIDE_CORE.'/theme-register.php' );

/**
 * Enqueue scripts and styles.
 */
require_once ( OUTSIDE_CORE.'/enqueue.php' );

/**
 * Theme functions
 */
require_once ( OUTSIDE_FUNCTION.'/theme-functions.php' );

/**
 * Custom functions that act independently of the theme templates.
 */
require_once ( OUTSIDE_FUNCTION.'/extras.php' );
require_once ( OUTSIDE_FUNCTION.'/ajax-functions.php' );


require_once ( OUTSIDE_CORE.'/post_types/events.php' );

/**
 * Theme Hooks
 */
require_once ( OUTSIDE_CORE.'/theme-hooks.php' );

/**
 * Aqua Resizer
 */
require_once ( OUTSIDE_CORE.'/lib/aq_resizer.php' );

/**
 * Customizer additions.
 */
require_once ( OUTSIDE_CORE.'/lib/bs4navwalker.php');
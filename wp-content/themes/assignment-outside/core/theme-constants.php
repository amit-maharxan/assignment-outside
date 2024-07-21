<?php
/**
 * OUTSIDE
 *
 * @package OUTSIDE
 * 
 * @since OUTSIDE 1.0
 *
 */

$get_theme = wp_get_theme();

define('OUTSIDE_THEME_NAME', $get_theme);
define('OUTSIDE_THEME_VERSION', '1.0.0');
define('OUTSIDE_THEME_SLUG', 'OUTSIDE');
define('OUTSIDE_PREFIX', 'OUTSIDE_');

define('OUTSIDE_BASE_URL', get_template_directory_uri() );
define('OUTSIDE_BASE', wp_normalize_path ( get_template_directory() ) );

define('OUTSIDE_CORE', OUTSIDE_BASE . '/core');
define('OUTSIDE_FUNCTION', OUTSIDE_BASE . '/core/functions');
define('OUTSIDE_ADMIN_DIR', OUTSIDE_CORE. '/admin' );

define('OUTSIDE_THEME_ADMIN_URL', OUTSIDE_BASE_URL . '/core/admin');
define('OUTSIDE_THEME_LIBS_URL' , OUTSIDE_BASE_URL . '/core/lib' );

define('OUTSIDE_ASSEST_URI', OUTSIDE_BASE_URL . '/assets');
define('OUTSIDE_VENDOR', OUTSIDE_BASE_URL . '/assets/vendor');
define('OUTSIDE_JS', OUTSIDE_BASE_URL . '/assets/js');
define('OUTSIDE_CSS', OUTSIDE_BASE_URL . '/assets/css');
define('OUTSIDE_DIST_CSS', OUTSIDE_BASE_URL . '/assets/dist/css');
define('OUTSIDE_IMG', OUTSIDE_BASE_URL . '/assets/images');
define('OUTSIDE_FILE', OUTSIDE_BASE_URL . '/assets/files');
<?php
/**
 * Header Template
 * 
 * @package OUTSIDE
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<?php 
		/**
		 * outside_meta hook
		 *
		 * @hooked outside_add_meta
		 */
		do_action('outside_meta');

		/**
		 * outside_links hook
		 *
		 * @hooked outside_add_links
		 */
		do_action('outside_links');

		// Keep it for plugins.
		wp_head(); ?> 

	</head>

	<body>
	<main>

		<?php

			/**
			 * outside_header_content hook
			 *
			 * @hooked outside_output_header_content()
			 *
			 */
			do_action( 'outside_header_content' );

		?>
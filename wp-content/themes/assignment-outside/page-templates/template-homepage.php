<?php
/**
 * Template Name: Homepage Layout
 */

do_action('outside_header'); ?>

	<?php 
        /**
         * outside_homepage_content hook
         *
         */
        do_action( 'outside_homepage_content' );
    ?>

<?php do_action('outside_footer'); ?>
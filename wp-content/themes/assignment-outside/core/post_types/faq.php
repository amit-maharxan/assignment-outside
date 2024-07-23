<?php

class outside_faq_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'faq_init' ) );
	}

	/**
	 * Register a custom post type called "faq".
	 * @return void
	 */
	function faq_init() {
	    $labels = array(
	        'name'                  => _x( 'Faqs', 'Post type general name', 'outside_faq' ),
	        'singular_name'         => _x( 'Faq', 'Post type singular name', 'outside_faq' ),
	        'menu_name'             => _x( 'Faqs', 'Admin Menu text', 'outside_faq' ),
	        'name_admin_bar'        => _x( 'Faqs', 'Add New on Toolbar', 'outside_faq' ),
	        'add_new'               => __( 'Add New', 'outside_faq' ),
	        'add_new_item'          => __( 'Add New Faq', 'outside_faq' ),
	        'new_item'              => __( 'New Faq', 'outside_faq' ),
	        'edit_item'             => __( 'Edit Faq', 'outside_faq' ),
	        'view_item'             => __( 'View Faqs', 'outside_faq' ),
	        'all_items'             => __( 'All Faqs', 'outside_faq' ),
	        'search_items'          => __( 'Search Faq', 'outside_faq' ),
	        'parent_item_colon'     => __( 'Parent Faqs:', 'outside_faq' ),
	        'not_found'             => __( 'No Faq found.', 'outside_faq' ),
	        'not_found_in_trash'    => __( 'No Faq found in Trash.', 'outside_faq' ),
	        'featured_image'        => _x( 'Faq Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'outside_faq' ),
	        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'outside_faq' ),
	        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'outside_faq' ),
	        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'outside_faq' ),
	    );

	    $args = array(
	        'labels'             	=> $labels,
	        'public'             	=> true,
	        'publicly_queryable' 	=> true,
	        'show_ui'            	=> true,
	        'show_in_menu'       	=> true,
	        'query_var'          	=> true,
	        'rewrite'            	=> array( 'slug' => 'faq' ),
	        'capability_type'    	=> 'post',
	        'has_archive'        	=> true,
	        'hierarchical'       	=> true,
	        'menu_position'      	=> null,
	        'supports'           	=> array( 'title', 'editor' ),
	        'menu_icon'      		=> 'dashicons-screenoptions',
	    );

	    register_post_type( 'faq', $args );
	}

}
new outside_faq_post_type();
<?php

class outside_events_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'events_init' ) );
	}

	/**
	 * Register a custom post type called "events".
	 * @return void
	 */
	function events_init() {
	    $labels = array(
	        'name'                  => _x( 'Events', 'Post type general name', 'outside_events' ),
	        'singular_name'         => _x( 'Event', 'Post type singular name', 'outside_events' ),
	        'menu_name'             => _x( 'Events', 'Admin Menu text', 'outside_events' ),
	        'name_admin_bar'        => _x( 'Events', 'Add New on Toolbar', 'outside_events' ),
	        'add_new'               => __( 'Add New', 'outside_events' ),
	        'add_new_item'          => __( 'Add New Event', 'outside_events' ),
	        'new_item'              => __( 'New Event', 'outside_events' ),
	        'edit_item'             => __( 'Edit Event', 'outside_events' ),
	        'view_item'             => __( 'View Events', 'outside_events' ),
	        'all_items'             => __( 'All Events', 'outside_events' ),
	        'search_items'          => __( 'Search Event', 'outside_events' ),
	        'parent_item_colon'     => __( 'Parent Events:', 'outside_events' ),
	        'not_found'             => __( 'No Event found.', 'outside_events' ),
	        'not_found_in_trash'    => __( 'No Event found in Trash.', 'outside_events' ),
	        'featured_image'        => _x( 'Event Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'outside_events' ),
	        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'outside_events' ),
	        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'outside_events' ),
	        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'outside_events' ),
	    );

	    $args = array(
	        'labels'             	=> $labels,
	        'public'             	=> true,
	        'publicly_queryable' 	=> true,
	        'show_ui'            	=> true,
	        'show_in_menu'       	=> true,
	        'query_var'          	=> true,
	        'rewrite'            	=> array( 'slug' => 'events' ),
	        'capability_type'    	=> 'post',
	        'has_archive'        	=> true,
	        'hierarchical'       	=> true,
	        'menu_position'      	=> null,
	        'supports'           	=> array( 'title', 'editor', 'thumbnail' ),
	        'menu_icon'      		=> 'dashicons-screenoptions',
	    );

	    register_post_type( 'events', $args );
	}

}
new outside_events_post_type();
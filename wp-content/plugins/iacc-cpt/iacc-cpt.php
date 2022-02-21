<?php
/*
Plugin Name: IACC CPT
Description: Plugin to setup the Custom Post Types used on IACC site.
Version: 1.0
Author: Mirror
Author URI: https://www.mirrorprod.com/
*/

// Register Custom Post Type Event
function create_event_cpt() {

	$labels = array(
		'name' => _x( 'Events', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Event', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Events', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Event', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Event Archives', 'textdomain' ),
		'attributes' => __( 'Event Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Event:', 'textdomain' ),
		'all_items' => __( 'All Events', 'textdomain' ),
		'add_new_item' => __( 'Add New Event', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Event', 'textdomain' ),
		'edit_item' => __( 'Edit Event', 'textdomain' ),
		'update_item' => __( 'Update Event', 'textdomain' ),
		'view_item' => __( 'View Event', 'textdomain' ),
		'view_items' => __( 'View Events', 'textdomain' ),
		'search_items' => __( 'Search Event', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Event', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Event', 'textdomain' ),
		'items_list' => __( 'Events list', 'textdomain' ),
		'items_list_navigation' => __( 'Events list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Events list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Event', 'textdomain' ),
		'description' => __( 'IACC Event', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-calendar',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'post-attributes', 'custom-fields'),
		'taxonomies' => array( 'category'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'create_event_cpt', 0 );

// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Service Archives', 'textdomain' ),
		'attributes' => __( 'Service Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Service:', 'textdomain' ),
		'all_items' => __( 'All Services', 'textdomain' ),
		'add_new_item' => __( 'Add New Service', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Service', 'textdomain' ),
		'edit_item' => __( 'Edit Service', 'textdomain' ),
		'update_item' => __( 'Update Service', 'textdomain' ),
		'view_item' => __( 'View Service', 'textdomain' ),
		'view_items' => __( 'View Services', 'textdomain' ),
		'search_items' => __( 'Search Service', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Service', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'textdomain' ),
		'items_list' => __( 'Services list', 'textdomain' ),
		'items_list_navigation' => __( 'Services list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Services list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Service', 'textdomain' ),
		'description' => __( 'Service of IACC', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-portfolio',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );

// Register Custom Post Type Career & Visa
function create_careervisa_cpt() {

	$labels = array(
		'name' => _x( 'Career & Visa', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Career & Visa', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Career & Visa', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Career & Visa', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Career & Visa Archives', 'textdomain' ),
		'attributes' => __( 'Career & Visa Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Career & Visa:', 'textdomain' ),
		'all_items' => __( 'All Career & Visa', 'textdomain' ),
		'add_new_item' => __( 'Add New Career & Visa', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Career & Visa', 'textdomain' ),
		'edit_item' => __( 'Edit Career & Visa', 'textdomain' ),
		'update_item' => __( 'Update Career & Visa', 'textdomain' ),
		'view_item' => __( 'View Career & Visa', 'textdomain' ),
		'view_items' => __( 'View Career & Visa', 'textdomain' ),
		'search_items' => __( 'Search Career & Visa', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Career & Visa', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Career & Visa', 'textdomain' ),
		'items_list' => __( 'Career & Visa list', 'textdomain' ),
		'items_list_navigation' => __( 'Career & Visa list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Career & Visa list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Career & Visa', 'textdomain' ),
		'description' => __( 'Career & Visa of IACC', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-welcome-learn-more',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'careervisa', $args );

}
add_action( 'init', 'create_careervisa_cpt', 0 );


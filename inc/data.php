<?php
/**
 * custom data structures
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//fellow custom post type

// Register Custom Post Type fellow
// Post Type Key: fellow

function create_fellow_cpt() {

  $labels = array(
    'name' => __( 'Fellows', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Fellow', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Fellow', 'textdomain' ),
    'name_admin_bar' => __( 'Fellow', 'textdomain' ),
    'archives' => __( 'Fellow Archives', 'textdomain' ),
    'attributes' => __( 'Fellow Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Fellow:', 'textdomain' ),
    'all_items' => __( 'All Fellows', 'textdomain' ),
    'add_new_item' => __( 'Add New Fellow', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Fellow', 'textdomain' ),
    'edit_item' => __( 'Edit Fellow', 'textdomain' ),
    'update_item' => __( 'Update Fellow', 'textdomain' ),
    'view_item' => __( 'View Fellow', 'textdomain' ),
    'view_items' => __( 'View Fellows', 'textdomain' ),
    'search_items' => __( 'Search Fellows', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into fellow', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this fellow', 'textdomain' ),
    'items_list' => __( 'Fellow list', 'textdomain' ),
    'items_list_navigation' => __( 'Fellow list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Fellow list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'fellow', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
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
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'fellow', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_fellow_cpt', 0 );


//project custom post type

// Register Custom Post Type project
// Post Type Key: project

function create_project_cpt() {

  $labels = array(
    'name' => __( 'Projects', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Project', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Project', 'textdomain' ),
    'name_admin_bar' => __( 'Project', 'textdomain' ),
    'archives' => __( 'Project Archives', 'textdomain' ),
    'attributes' => __( 'Project Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Project:', 'textdomain' ),
    'all_items' => __( 'All Projects', 'textdomain' ),
    'add_new_item' => __( 'Add New Project', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Project', 'textdomain' ),
    'edit_item' => __( 'Edit Project', 'textdomain' ),
    'update_item' => __( 'Update Project', 'textdomain' ),
    'view_item' => __( 'View Project', 'textdomain' ),
    'view_items' => __( 'View Projects', 'textdomain' ),
    'search_items' => __( 'Search Projects', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into project', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this project', 'textdomain' ),
    'items_list' => __( 'Project list', 'textdomain' ),
    'items_list_navigation' => __( 'Project list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Project list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'project', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
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
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'project', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_project_cpt', 0 );


//partner custom post type

// Register Custom Post Type partner
// Post Type Key: partner

function create_partner_cpt() {

  $labels = array(
    'name' => __( 'Partners', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Partner', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Partner', 'textdomain' ),
    'name_admin_bar' => __( 'Partner', 'textdomain' ),
    'archives' => __( 'Partner Archives', 'textdomain' ),
    'attributes' => __( 'Partner Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Partner:', 'textdomain' ),
    'all_items' => __( 'All Partners', 'textdomain' ),
    'add_new_item' => __( 'Add New Partner', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Partner', 'textdomain' ),
    'edit_item' => __( 'Edit Partner', 'textdomain' ),
    'update_item' => __( 'Update Partner', 'textdomain' ),
    'view_item' => __( 'View Partner', 'textdomain' ),
    'view_items' => __( 'View Partners', 'textdomain' ),
    'search_items' => __( 'Search Partners', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into partner', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this partner', 'textdomain' ),
    'items_list' => __( 'Partner list', 'textdomain' ),
    'items_list_navigation' => __( 'Partner list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Partner list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'partner', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
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
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'partner', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_partner_cpt', 0 );
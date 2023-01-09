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
    'menu_icon' => 'dashicons-businesswoman',
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
    'menu_icon' => 'dashicons-welcome-widgets-menus',
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
    'menu_icon' => 'dashicons-thumbs-up',
  );
  register_post_type( 'partner', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_partner_cpt', 0 );


add_action( 'init', 'create_theme_taxonomies', 0 );
function create_theme_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Themes', 'taxonomy general name' ),
    'singular_name' => _x( 'theme', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Themes' ),
    'popular_items' => __( 'Popular Themes' ),
    'all_items' => __( 'All Themes' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Themes' ),
    'update_item' => __( 'Update theme' ),
    'add_new_item' => __( 'Add New theme' ),
    'new_item_name' => __( 'New theme' ),
    'add_or_remove_items' => __( 'Add or remove Themes' ),
    'choose_from_most_used' => __( 'Choose from the most used Themes' ),
    'menu_name' => __( 'Theme' ),
  );

//registers taxonomy specific post types - default is just post
  register_taxonomy('themes', array('project','fellow'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'theme' ),
    'show_in_rest'          => true,
    'rest_base'             => 'theme',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => true,    
  ));
}

add_action( 'init', 'create_year_taxonomies', 0 );
function create_year_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Years', 'taxonomy general name' ),
    'singular_name' => _x( 'year', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Years' ),
    'popular_items' => __( 'Popular Years' ),
    'all_items' => __( 'All Years' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Years' ),
    'update_item' => __( 'Update year' ),
    'add_new_item' => __( 'Add New year' ),
    'new_item_name' => __( 'New year' ),
    'add_or_remove_items' => __( 'Add or remove Years' ),
    'choose_from_most_used' => __( 'Choose from the most used Years' ),
    'menu_name' => __( 'Year' ),
  );

//registers taxonomy specific post types - default is just post
  register_taxonomy('years', array('fellow','project'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'year' ),
    'show_in_rest'          => true,
    'rest_base'             => 'year',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => true,    
  ));
}


add_action( 'init', 'create_degree_taxonomies', 0 );
function create_degree_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Degrees', 'taxonomy general name' ),
    'singular_name' => _x( 'degree', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Degrees' ),
    'popular_items' => __( 'Popular Degrees' ),
    'all_items' => __( 'All Degrees' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Degrees' ),
    'update_item' => __( 'Update degree' ),
    'add_new_item' => __( 'Add New degree' ),
    'new_item_name' => __( 'New degree' ),
    'add_or_remove_items' => __( 'Add or remove Degrees' ),
    'choose_from_most_used' => __( 'Choose from the most used Degrees' ),
    'menu_name' => __( 'Degree' ),
  );

//registers taxonomy specific post types - default is just post
  register_taxonomy('degrees', array('fellow'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'degree' ),
    'show_in_rest'          => true,
    'rest_base'             => 'degree',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => true,    
  ));
}


add_action( 'init', 'create_semester_taxonomies', 0 );
function create_semester_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Semesters', 'taxonomy general name' ),
    'singular_name' => _x( 'semester', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Semesters' ),
    'popular_items' => __( 'Popular Semesters' ),
    'all_items' => __( 'All Semesters' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Semesters' ),
    'update_item' => __( 'Update semester' ),
    'add_new_item' => __( 'Add New semester' ),
    'new_item_name' => __( 'New semester' ),
    'add_or_remove_items' => __( 'Add or remove Semesters' ),
    'choose_from_most_used' => __( 'Choose from the most used Semesters' ),
    'menu_name' => __( 'Semester' ),
  );

//registers taxonomy specific post types - default is just post
  register_taxonomy('semesters', array('fellow'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'semester' ),
    'show_in_rest'          => true,
    'rest_base'             => 'semester',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => true,    
  ));
}

//tie gform fields to custom taxonomies

add_filter('gform_pre_render_1', 'cftg_populate_fellow_semester');
function cftg_populate_fellow_semester($form){


    $terms = get_terms( array(
        'taxonomy' => 'semesters',
        'hide_empty' => false,
        'orderby'   =>'title',
        'order'   =>'ASC',
    ) );

    //Creating drop down item array.
    $items = array();

    //Adding initial blank value.
    $items[] = array("text" => "", "value" => "");

    //Adding post titles to the items array
    foreach($terms as $term)
        $items[] = array(
           "value" => $term->term_id, 
           "text" =>  $term->name
      );

    //Adding items to field id 6
    foreach($form["fields"] as &$field)
        if($field["id"] == 6){
            $field["type"] = "select";
            $field["choices"] = $items;
        }

    return $form;
}
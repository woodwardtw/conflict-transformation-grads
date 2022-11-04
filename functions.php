<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/acf.php',                             // Load ACF functions.
	'/data.php',                            // Load taxonomies and cpts functions.	
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}


/** add additional classes / id to the facetwp-template div generated by a facetwp 
 ** layout template
 **/
add_filter( 'facetwp_shortcode_html', function( $output, $atts) {
    if ( $atts['template'] = 'fellows' || $atts['template'] = 'projects' ) { // replace 'example' with name of your template
    /** modify replacement as needed, make sure you keep the facetwp-template class **/
        $output = str_replace( 'class="facetwp-template"', 'class="facetwp-template row"', $output );
    }
    return $output; 
}, 10, 2 );


function conflict_resource_image(){
	$id = get_the_ID();
	$thumb = get_the_post_thumbnail($id, 'thumbnail', ['class'=>'fellow-img img-fluid']);
	return $thumb;
}

function conflict_get_year($id){
	$terms = get_the_terms( $id, 'years');
	if($terms){
		echo $terms[0]->name;
	} else {
		echo '&nbsp;';
	}
}

set_post_thumbnail_size(200, 200, true);

add_image_size( 'fellow', 500, 500, true );

function conflict_show_years(){
	$id = get_the_ID();
	$terms = get_the_terms( $id, 'years');
	if($terms){
		foreach ($terms as $key => $term) {
			$name = $term->name;
			$term_id = $term->term_id;
			$link = get_term_link( $term_id, 'years' );
			echo "<div class='year-link'>
					<a href='{$link}'>{$name}</a>
				</div>";
		}
	} else {
		echo '&nbsp;';
	}
}



function conflict_show_themes(){
	$id = get_the_ID();
	$terms = get_the_terms( $id, 'themes');
	if($terms){
		foreach ($terms as $key => $term) {
			$name = $term->name;
			$term_id = $term->term_id;
			$link = get_term_link( $term_id, 'themes' );
			echo "<div class='theme-link'>
					<a href='{$link}'>{$name}</a>
				</div>";
		}
	} else {
		echo '&nbsp;';
	}
}
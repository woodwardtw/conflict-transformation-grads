<?php
/**
 * ACF Data
 *
 * @package WP-Bootstrap-Navwalker
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


function conflict_home_blocks(){
    $html = '';
   if( have_rows('add_blocks') ):

        // Loop through rows.
        while( have_rows('add_blocks') ) : the_row();

            // Load sub field value.
            $block = get_sub_field('add_a_page');
            // Do something...
            foreach ($block as $key => $item) {
                // code...                
                $title = $item->post_title;
                $link = get_permalink($item->ID);
                $html .= "
                    <div class='col-md-4'>
                        <div class='home-block position-relative'>
                            <a class='home-link stretched-link' href='{$link}'>{$title}</a>
                        </div>
                    </div>
                ";
            }
            
        // End loop.
        endwhile;
        echo $html;
        // No value.
        else :
            // Do something...
        endif;
}



//save acf json
add_filter('acf/settings/save_json', 'conflict_json_save_point');
 
function conflict_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory(__FILE__) . '/acf-json'; //replace w get_stylesheet_directory() for theme
    
    
    // return
    return $path;
    
}


// load acf json
add_filter('acf/settings/load_json', 'conflict_json_load_point');

function conflict_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory(__FILE__)  . '/acf-json';//replace w get_stylesheet_directory() for theme
    
    
    // return
    return $paths;
    
}
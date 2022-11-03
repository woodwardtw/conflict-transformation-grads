<?php
/**
 * ACF Data
 *
 * @package WP-Bootstrap-Navwalker
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function conflict_show_relationship($heading){
    if(get_field('fellow_relationship')){
        $relationship = get_field('fellow_relationship');
        echo "<h2 class='relationship-heading'>{$heading}</h2>";
        foreach ($relationship as $key => $relation) {
            // code...
            $id = $relation->ID;
            $title = $relation->post_title;
            $img = get_the_post_thumbnail($id, 'thumbnail', array('class'=>'relationship-img'));
            $link = get_permalink($relation->ID);
            echo "<div class='relation'>
                    {$img}
                        <a href='{$link}'>
                            {$title}
                        </a>
                    </div>";
        }

    }
}


function conflict_bidirectional_acf_update_value( $value, $post_id, $field  ) {
    
    // vars
    $field_name = $field['name'];
    $field_key = $field['key'];
    $global_name = 'is_updating_' . $field_name;
    
    
    // bail early if this filter was triggered from the update_field() function called within the loop below
    // - this prevents an inifinte loop
    if( !empty($GLOBALS[ $global_name ]) ) return $value;
    
    
    // set global variable to avoid inifite loop
    // - could also remove_filter() then add_filter() again, but this is simpler
    $GLOBALS[ $global_name ] = 1;
    
    
    // loop over selected posts and add this $post_id
    if( is_array($value) ) {
    
        foreach( $value as $post_id2 ) {
            
            // load existing related posts
            $value2 = get_field($field_name, $post_id2, false);
            
            
            // allow for selected posts to not contain a value
            if( empty($value2) ) {
                
                $value2 = array();
                
            }
            
            
            // bail early if the current $post_id is already found in selected post's $value2
            if( in_array($post_id, $value2) ) continue;
            
            
            // append the current $post_id to the selected post's 'related_posts' value
            $value2[] = $post_id;
            
            
            // update the selected post's value (use field's key for performance)
            update_field($field_key, $value2, $post_id2);
            
        }
    
    }
    
    
    // find posts which have been removed
    $old_value = get_field($field_name, $post_id, false);
    
    if( is_array($old_value) ) {
        
        foreach( $old_value as $post_id2 ) {
            
            // bail early if this value has not been removed
            if( is_array($value) && in_array($post_id2, $value) ) continue;
            
            
            // load existing related posts
            $value2 = get_field($field_name, $post_id2, false);
            
            
            // bail early if no value
            if( empty($value2) ) continue;
            
            
            // find the position of $post_id within $value2 so we can remove it
            $pos = array_search($post_id, $value2);
            
            
            // remove
            unset( $value2[ $pos] );
            
            
            // update the un-selected post's value (use field's key for performance)
            update_field($field_key, $value2, $post_id2);
            
        }
        
    }
    
    
    // reset global varibale to allow this filter to function as per normal
    $GLOBALS[ $global_name ] = 0;
    
    
    // return
    return $value;
    
}

add_filter('acf/update_value/name=fellow_relationship', 'conflict_bidirectional_acf_update_value', 10, 3);


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
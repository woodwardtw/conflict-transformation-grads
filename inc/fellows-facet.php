<?php
/**
 * facet layout for the fellows
 *
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

while ( have_posts() ): the_post(); ?>
    <div class="col-md-3 card-holder">
            <div class="card position-relative fellow-facet">
                    <div class="year"><?php conflict_get_year(get_the_id());?></div>
                    <?php echo conflict_resource_image();?>
              <div class="card-body">
                <a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a>        
              </div>
            </div>
    </div>
<?php endwhile;?> 
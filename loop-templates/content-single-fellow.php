<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		

	</header><!-- .entry-header -->


	<div class="entry-content">
		<div class="row">
			<div class="col-md-3">
				<?php 
					echo get_the_post_thumbnail( $post->ID, 'medium', array('class'=>'img-fluid') ); 
					conflict_show_years();	
					conflict_show_themes();
				?>
			</div>
			<div class="col-md-6">
				<?php
					the_content();
				?>
			</div>
			<div class="col-md-3">
				<?php 
					conflict_show_relationship('Project');
				?>
			</div>
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

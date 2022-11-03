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
			<div class="col-md-5">
					<?php echo get_the_post_thumbnail( $post->ID, 'medium', array('class'=>'img-fluid') ); ?>
			</div>
			<div class="col-md-7">
				<?php
				the_content();
				conflict_show_relationship('Project');
				?>
			</div>
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

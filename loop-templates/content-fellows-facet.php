<?php
/**
 * Partial template for content in fellows.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	


	<div class="entry-content">
		<div class="row facet-row">
			<div class="col-md-3">
				<div class="home-facet">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="home-facet">
					<h2>Search</h2>
					<?php echo facetwp_display( 'facet', 'search' );?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="home-facet">
					<h2>Fellowship topic</h2>
					<?php echo facetwp_display( 'facet', 'topic' );?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="home-facet">
					<h2>Fellowship year</h2>
					<?php echo facetwp_display( 'facet', 'year' );?>
				</div>
			</div>
		</div>
		<div class="row">
				<?php echo facetwp_display( 'template', 'fellows' );?>
		</div>
		<?php
		//the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

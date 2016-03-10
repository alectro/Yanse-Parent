<?php
/**
 * Template Name: Works
 *
 * @package Yanse
 * @since Yanse 1
 */

get_header(); ?>

	<div id="content" role="main">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'works' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- row end -->
	</div><!-- #content -->

<?php get_footer(); ?>

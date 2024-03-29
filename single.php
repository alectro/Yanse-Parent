<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Yanse
 * @since Yanse 0.1
 */

get_header(); ?>
		<div id="primary">
			<div id="content" role="main">

					<div class="row">
						
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'single' ); ?>
						<?php endwhile; // end of the loop. ?>

					</div><!-- row end -->
			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_footer(); ?>

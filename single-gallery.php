<?php
/**
 * Post format: gallery
 *
 * @package Yanse
 * @since Yanse 0.1
 */

get_header(); ?>
		<div id="primary">
			<div id="content" role="main">

					<div class="row">

						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'post', 'gallery' ); ?>
						<?php endwhile; // end of the loop. ?>

					</div><!-- row end -->
			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_footer(); ?>

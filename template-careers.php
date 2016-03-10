<?php
/**
 * Template Name: Careers
 *
 * @package Yanse
 * @since Yanse 0.1
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

					<div class="row">
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', 'careers' ); ?>

						<?php endwhile; // end of the loop. ?>

					</div><!-- row end -->
			</div><!-- #content -->
		</div><!-- #primary --><!-- Grid System .ninecol -->
<?php get_footer(); ?>

<?php
/**
 * Template Name: Sitemap
 * Description: Automatically list all pages and posts.
 *
 * @package Yanse
 * @since Yanse 0.1
 */

get_header(); ?>

	<div id="content" role="main">
		<div class="row">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'sitemap' ); ?>
				<?php endwhile; // end of the loop. ?>

		</div><!-- row end -->
	</div><!-- #content -->
<?php get_footer(); ?>

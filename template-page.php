<?php
/**
 * Template Name: Full page
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package Yanse
 * @since Yanse 0.1
 */

get_header(); ?>

	<div id="content" role="main">
		<div class="row">
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- row end -->
	</div><!-- #content -->
<?php get_footer(); ?>

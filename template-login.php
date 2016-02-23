<?php
/**
 * Template Name: Login
 *
 * @package Yanse
 * @since Yanse 1
 */

get_header(); ?>

	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'login' ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
<?php get_footer(); ?>
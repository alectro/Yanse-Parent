<?php
/**
 * Template Name: Blog
 * Description: Automatically add posts here
 *
 * @package Yanse
 * @since Yanse 0.9
 */

get_header(); ?>

			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'blog' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->

<?php get_footer(); ?>

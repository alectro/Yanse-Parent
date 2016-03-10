<?php
/**
 * The template used for displaying page content in template-blog.php
 *
 * @package Yanse
 * @since Yanse 0.1
 */
?>

	<div class="large-8 columns">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">


						<h1 class="entry-title"><?php the_title(); ?></h1>

				<nav class="header-nav">
					<?php if (function_exists('yanse_breadcrumbs')) yanse_breadcrumbs(); ?>
				</nav>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>

				<?php
					$allarticles_loop = new WP_Query( array('cat' => '0', 'posts_per_page' => '-1','post_type' => array('post')));
					while ($allarticles_loop->have_posts()) : $allarticles_loop->the_post();
				?>

			 <!-- Show loop content... -->
			<div class="gridblog post-<?php the_ID();?>">

					<div class="info">
				    <h2><a href="<?php if(get_post_meta($post->ID, "url", true)) echo get_post_meta($post->ID, "url", true); else the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?></small>

				<div>
										<?php if (has_post_thumbnail()) {

											the_post_thumbnail('thumb-small');

										} ?>
				</div>
			      <?php the_excerpt('Read the rest of this entry &raquo;'); ?>
			  	  </div><!-- .info -->



		    </div>

			<?php endwhile; ?>

			</div><!-- .entry-content -->
		</article><!-- #post-<?php the_ID(); ?> -->
	</div><!-- span_4 col -->
	<div class="large-4 columns">
		<?php get_sidebar(); ?>
	</div><!-- .large-4 End -->

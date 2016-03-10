<?php
/**
 * The template used for displaying page content in template-customposttypes.php
 *
 * @package Yanse
 * @since Yanse 1.0
 */
?>
	<article class="large-12 columns" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				<nav class="header-nav">
					<?php if (function_exists('yanse_breadcrumbs')) yanse_breadcrumbs(); ?>
				</nav>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>

			<ul class="medium-block-grid-2 large-block-grid-3">

			<?php $loop = new WP_Query( array('post_type' => 'works', 'posts_per_page' => -1, 'orderby' => 'ASC') ); while ( $loop->have_posts() ) : $loop->the_post(); ?>




				<li>
					<a href="<?php the_permalink(); ?>">

						<?php
						    if (has_post_thumbnail()) {
						    $thumbs = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb-small');
						    $thumbm = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb-medium');
						    $thumbl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb-large');

						    }
						?>
						<img data-interchange="[<?php echo $thumbs[0]; ?>, small],[<?php echo $thumbm[0]; ?>, medium], [<?php echo $thumbl[0]; ?>, large]" >

						<h2><?php the_title(); ?></h2>
					</a>
				</li>

			<?php endwhile; ?><!-- #loop-## -->
			</ul>


		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->

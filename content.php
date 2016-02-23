<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Yanse
 * @since Yanse 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php yanse_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<figure>
			<a href="<?php the_permalink(); ?>">


				<?php
						if (has_post_thumbnail()) {
						$thumbs = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb-small');
						$thumbm = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb-medium');
						$thumbl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb-large');

						}
				?>
				<img data-interchange="[<?php echo $thumbl[0]; // thumbnail url ?>, (small)],[<?php echo $thumbm[0]; // thumbnail url ?>, (medium)], [<?php echo $thumbs[0]; // thumbnail url ?>, (large)]">


			</a>
		</figure> <?php the_excerpt(); ?>
	</div>
</article>

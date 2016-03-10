<?php
/**
 * The template used for displaying page content in sitemap.php
 *
 * @package Yanse
 * @since Yanse 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="large-12 columns">
			<div id="featured-header">
				<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} ?>
			</div>
			<h1 class="entry-title"><?php the_title(); ?></h1>
				<nav class="header-nav">
					<?php if (function_exists('yanse_breadcrumbs')) yanse_breadcrumbs(); ?>
				</nav>
		</header><!-- .entry-header -->

			<div class="large-12 columns">
				<?php the_content(); ?>
				<?php /*get_search_form();*/ ?>

			</div>



			<!-- Pages -->
			<div class="large-4 columns">
				<h3><?php _e('Pages', 'yanse'); ?></h3>
				<ul>
				  <?php wp_list_pages('title_li'); ?>
				</ul>
			</div>

			<!-- Works -->
			<div class="large-4 columns">

				<h3><?php _e('Works', 'yanse'); ?></h3>
				<ul>
					<?php
						$additional_loop = new WP_Query("cat=0&paged=$paged&posts_per_page=0&post_type=works");
						while ($additional_loop->have_posts()) : $additional_loop->the_post();
					?>
					<!-- Show loop content... -->
					    <li>
					    	<a href="<?php if(get_post_meta($post->ID, "url", true)) echo get_post_meta($post->ID, "url", true); else the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					    </li>
					<?php endwhile; ?>
				</ul>
			</div>

			<!-- Posts -->
			<div class="large-4 columns">
				<h3><?php _e('Blog', 'yanse'); ?></h3>
				<ul>
				    <?php wp_get_archives('title_li=&type=postbypost'); ?>
				</ul>
			</div>

</article><!-- #post-<?php the_ID(); ?> -->

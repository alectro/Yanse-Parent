<?php
/**
 * The template used for displaying page content in page.php
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
  	  		<div class="span_9 col">
						<?php the_content(); ?>
								<!-- All Careers -->
								<?php
									$additional_loop = new WP_Query("cat=0&paged=$paged&posts_per_page=0&post_type=careers");
									while ($additional_loop->have_posts()) : $additional_loop->the_post();
								?>
								<!-- Show loop content... -->
								<div id="post-<?php the_ID();?>" class="all-news-block">
								    <h4>
								    	<a href="<?php if(get_post_meta($post->ID, "url", true)) echo get_post_meta($post->ID, "url", true); else the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php
												if ( strlen($post->post_title) > 32 ) {
													echo substr(the_title($before = '', $after = '', FALSE), 0, 32) . '...';
												}
												else {
													the_title();
												}
											?></a>

									<?php
									//	Open Positions
									    $jobvacancies = rwmb_meta( 'mb_vacancies');
									    if (isset($jobvacancies[0])) {
											  echo "<small>( <abbr title=\"" . __("Open positions", "yanse") . "\">" . $jobvacancies . "</abbr> )</small>";
										}
									?>
								    </h4>
									<small><?php the_time('F d, Y'); ?></small>


					    		</div><!-- all-news-block -->


							<?php endwhile; ?>

			</div><!-- span_9 -->

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

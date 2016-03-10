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

		<div>
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'yanse' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->

<?php
/**
 *
 * @package Yanse
 * @since Yanse 0.1
 */
?>

<div class="row">
	<article class="large-12 columns" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<nav class="header-nav">
				<?php previous_post_link('%link','&#60; Previous') ?>  <?php next_post_link('%link',' Next &#62;') ?>
			<?php if (function_exists('yanse_breadcrumbs')) yanse_breadcrumbs(); ?>
			</nav>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>

	<?php
		//	Images
	$worksimages = rwmb_meta("mb_items");
	?>


	<?php
	//	Nature of client
		$worksnature = rwmb_meta("mb_nature");
			if (isset($worksnature[0])) {
			  echo "<p>" . __($worksnature, 'yanse') . "</p>";
			}
	?>

	<?php
	//	Year
		$worksyear = rwmb_meta("mb_year");
			if (isset($worksyear[0])) {
			  echo "<p>" . __($worksyear, 'yanse') . "</p>";
			}
	?>


	<?php
	//	Countries
	    $workscountries = rwmb_meta( 'mb_countries' );
	    if (isset($workscountries[0])) {
				echo '<p>' . implode(__(', ', 'yanse'), array_map(function($wc) {return __($wc,'yanse');},$workscountries)) . '</p>';
		}

	?>


	<?php
	//	Clients
	    $worksclients = rwmb_meta( 'mb_clients' );
	    if (isset($worksclients[0])) {
				echo '<p>' . implode(__(', ', 'yanse'), array_map(function($wc) {return __($wc,'yanse');},$worksclients)) . '</p>';
		}

	?>


		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div><!-- .row End -->

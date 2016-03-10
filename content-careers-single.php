<?php
/**
 *
 * @package Yanse
 * @since Yanse 1.0
 */
?>

<div class="row">
	<article class="large-12 columns"id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
				<nav class="header-nav">
					<?php if (function_exists('yanse_breadcrumbs')) yanse_breadcrumbs(); ?>
				</nav>
	</header><!-- .entry-header -->

	<div class="entry-content">


<div id="job-details">
<div class="col-left">
	<?php
	//	Job ID
		$jodid = rwmb_meta("mb_id");
			if (isset($jodid[0])) {
			  echo "<p><strong>" . __('Job ID: ', 'yanse') . "</strong> " . $jodid . "</p>";
			}
	?>

	<p><strong><?php _e('Date: ', 'yanse'); ?></strong><?php the_time('F d, Y'); ?></p>

	<?php
	//	Location
		$joblocation = rwmb_meta("mb_location");
			if (isset($joblocation[0])) {
			  echo "<p><strong>" . __('Location: ', 'yanse') . "</strong> " . __($joblocation, 'yanse') . "</p>";
			}
	?>

	<?php
	//	Period
		$jobperiod_start = rwmb_meta("mb_period_start");
		$jobperiod_end = rwmb_meta("mb_period_end");
			if (isset($jobperiod_start[0]) or isset($jobperiod_end[0])) {
			  echo "<p><strong>" . __('Period: ', 'yanse') . "</strong> " . $jobperiod_start . " ~ " . $jobperiod_end . "</p>";
			}
	?>
</div>
<div class="col-right">

	<?php
	//	Type
	    $jobtype = rwmb_meta( 'mb_type', 'type=checkbox_list' );
	    if (isset($jobtype[0])) {
			//echo "<p><strong>" . __('Type:', 'yanse') . "</strong> " . implode( ' / ', $jobtype ) . "</p>";
			echo '<p><strong>' . __('Type: ', 'yanse') . '</strong> ' . implode(' / ', array_map(function($jt) {return __($jt,'yanse');},$jobtype)) . '</p>';
		}

	?>





	<?php
	//	Language
	    $joblanguages = rwmb_meta( 'mb_language', 'type=checkbox_list' );
	    if (isset($joblanguages[0])) {

		//echo "<p><strong>" . __('Languages:', 'yanse') . "</strong> " . implode( ', ', $joblanguages ) . "</p>";
		echo '<p><strong>' . __('Languages: ', 'yanse') . '</strong> ' . implode(__(', ', 'yanse'), array_map(function($jl) {return __($jl,'yanse');},$joblanguages)) . '</p>';

		}


	?>

	<?php
	//	Education
	    $jobeducation = rwmb_meta( 'mb_education', 'type=checkbox_list' );
	    if (isset($jobeducation[0])) {
			//echo "<p><strong>" . __('Education Level:', 'yanse') . "</strong> " . $jobeducation . "</p>";
			echo '<p><strong>' . __('Education Level: ', 'yanse') . '</strong> ' . implode(__(', ', 'yanse'), array_map(function($je) {return __($je,'yanse');},$jobeducation)) . '</p>';
		}

	?>

	<?php
	//	Open Positions
	    $jobvacancies = rwmb_meta( 'mb_vacancies');
	    if (isset($jobvacancies[0])) {
			  echo "<p><strong>" . __('Open Positions: ', 'yanse') . "</strong> " . $jobvacancies . "</p>";
		}

	?>
</div>
</div>
<?php _e('<h3>Job Description:</h3> ', 'yanse'); ?>
<?php the_content(); ?>

<?php
//	Responsibility
    /*$jobresponsibility = rwmb_meta( 'mb_responsibility');
    if (isset($jobresponsibility[0])) {
		  echo "<h3>" . __('Responsibility: ', 'yanse') . "</h3><p>" . $jobresponsibility . "</p>";
	}*/

?>
aaa
<?php
//	Requirements
    $jobrequirements = rwmb_meta( 'mb_requirements');
    if (isset($jobrequirements[0])) {
		  echo "<h3>" . __('Requirements:', 'yanse') . "</h3><p>" . $jobrequirements . "</p>";
	}

?>

<?php
//	Skills
    $jobskills = get_post_meta( get_the_ID(), 'mb_skills', true );

    if (isset($jobskills[0])) {

		echo "<h3>" . __('Skills: ', 'yanse') . "</h3>";
		    foreach ( $jobskills as $meta )
		    {
		    echo '<div class="skills">' . $meta . '</div>';
		    }
	}
?>

	<a href="mailto:<?php echo antispambot('nihao@colorale.com', 1); ?>?subject=<?php _e('Apply for ', 'yanse') . the_title(); ?>" class="button tiny">
		<?php _e('Apply', 'yanse'); ?>
	</a>

</div>

<!--
<div class="apply-button">
	<?php
	    $content = "nihao@colorale.com";


	    $args = array(		'text' => __('Apply', 'yanse'),
	                        'css_class' => '',
	                        'css_id' => '',
	                        'echo' => 1
					);
	    if (function_exists('encryptx')) {
	        encryptx($content, $args);
	    } else {
	        echo sprintf('<a href="mailto:%s' . '" id="%s" class="%s">%s</a>', $content, $args['css_id'], $args['css_class'], ($args['text'] != '' ? $args['text'] : $content));
	    }
	?>
</div>
-->
					<nav id="pr-menu" class="news-nav">
						<?php
						    previous_post_link('<span class="previous">&lt; %link</span>');
						    next_post_link('<span class="next">%link &gt;</span>');
						?>
					</nav>



	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
</div><!-- .row End -->

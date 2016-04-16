<?php
/**
 * The template used for displaying page content in contact.php
 *
 * @package WordPress
 * @subpackage Yanse
 * @since Yanse 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="large-12 columns entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
				<nav class="header-nav">
					<?php if (function_exists('yanse_breadcrumbs')) yanse_breadcrumbs(); ?>
				</nav>
	</header><!-- .entry-header -->




	<div class="entry-content">
			<div class="large-12 columns">
				<?php the_content(); ?>
			</div>

			<!-- Web Form -->
			<form action="<?php the_permalink(); ?>" id="contactForm" method="post" data-abide>

						<div class="contactform">

							<div id="contact-name" class="small-12 large-6 columns">
								<label for="contactName"><?php _e('Name', 'yanse'); ?>
									<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" required="" />
									<span class="form-error">Yo, you had better fill this out, it's required.</span>
								</label>

							</div>

							<div id="contact-email" class="small-12 large-6 columns">
								<label for="email"><?php _e('Email', 'yanse'); ?>
									<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>"  required="" a>
								</label>

							</div>


							<div id="contact-message" class="small-12 large-12 columns">
								<label for="commentsText"><?php _e('Message', 'yanse'); ?></label>
								<textarea name="comments" id="commentsText" rows="" cols="" required ><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
							</div>

							<div class="hide"><label for="checking" class="screenReader">If you want to submit this form, don't fill this field</label><input type="text" name="checking" id="checking" class="screenReader" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" /></div>
							<div  class="small-12 large-12 columns clearfix">
								<input type="hidden" name="submitted" id="submitted" value="true" />
								<div class="right">
									<input title="Send message" alt="Send message" id="submit" type="submit" value="<?php _e( 'Send message', 'yanse' ); ?>"class="button" />
								</div>
							</div>
						</div><!-- .contactform -->

					</form>


	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

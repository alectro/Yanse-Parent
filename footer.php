
<footer role="contentinfo">

	<div class="row">
		<div class="small-12 columns">
			<nav class="sub-nav" data-topbar>
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>

			</nav>
		</div>
	</div>


	<div class="row">

		<div class="large-2 columns">
			<p>&copy; <?php echo date('Y'); ?>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</p>
		</div>

		<div class="large-10 columns social">
			<ul>
				<?php if ( of_get_option('rss_url') ) { ?>
					<!-- RSS -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('rss_url', 'no entry'); ?>" title="<?php _e( 'Subscribe to ' . get_bloginfo( 'name', 'display' ) . ' RSS', 'yanse' ); ?>" target="_blank">
							<i class="fi-rss"></i>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('twitter_url') ) { ?>
					<!-- Twitter -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('twitter_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Twitter', 'yanse' ); ?>" target="_blank">
								<i class="fi-social-twitter"></i>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('facebook_url') ) { ?>
					<!-- Facebook -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('facebook_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Facebok', 'yanse' ); ?>" target="_blank">
							<i class="fi-social-facebook"></i>
						</a>
	        </li>
	       <?php } ?>

				<?php if ( of_get_option('googleplus_url') ) { ?>
					<!-- Google+ -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('googleplus_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Google+', 'yanse' ); ?>" target="_blank">
							<i class="fi-social-google-plus"></i>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('weixin_url') ) { ?>
					<!-- Weixin -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('weixin_url', 'no entry'); ?>" title="<?php _e( 'Friend ' . get_bloginfo( 'name', 'display' ) . ' on Weixin', 'yanse' ); ?>" target="_blank">
							<i class="fi-asterisk"></i>
						</a>
	        </li>
	            <?php } ?>

				<?php if ( of_get_option('weibo_url') ) { ?>
					<!-- Weibo -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('weibo_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Weibo', 'yanse' ); ?>" target="_blank">
							<i class="fi-asterisk"></i>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('douban_url') ) { ?>
					<!-- Douban -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('douban_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Douban', 'yanse' ); ?>" target="_blank">
							<i class="fi-asterisk"></i>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('mailchimp_url') ) { ?>
					<!-- Behance -->
	      	<li>
						<a class="tiny button" href="<?php echo of_get_option('mailchimp_url', 'no entry'); ?>" title="<?php _e( 'Subscribe to ' . get_bloginfo( 'name', 'display' ) . ' on MailChimp', 'yanse' ); ?>" target="_blank">
							<i class="fi-mail"></i>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('linkedin_url') ) { ?>
					<!-- LinkedIn -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('linkedin_url', 'no entry'); ?>" title="<?php _e( 'Connect with ' . get_bloginfo( 'name', 'display' ) . ' on LinkedIn', 'yanse' ); ?>" target="_blank">
							<i class="fi-social-linkedin"></i>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('behance_url') ) { ?>
					<!-- Behance -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('behance_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Behance', 'yanse' ); ?>" target="_blank">
							<i class="fi-social-behance"></i>
						</a>
	        </li>
	      <?php } ?>


				<?php if ( of_get_option('dribbble_url') ) { ?>
					<!-- Dribbble -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('dribbble_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Dribbble', 'yanse' ); ?>" target="_blank">
							<i class="fi-social-dribbble"></i>
						</a>
	        </li>
		    <?php } ?>

				<?php if ( of_get_option('instagram_url') ) { ?>
					<!-- Instagram -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('instagram_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Instagram', 'yanse' ); ?>" target="_blank">
							<i class="fi-social-instagram"></i>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('flickr_url') ) { ?>
					<!-- Flickr -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('flickr_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Flickr', 'yanse' ); ?>" target="_blank">
							<i class="fi-social-flickr"></i>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('youtube_url') ) { ?>
					<!-- Youtube -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('youtube_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Youtube', 'yanse' ); ?>" target="_blank">
							<i class="fi-social-youtube"></i>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('vimeo_url') ) { ?>
					<!-- Vimeo -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('vimeo_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Vimeo', 'yanse' ); ?>" target="_blank">
							<i class="fi-social-vimeo"></i>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('youku_url') ) { ?>
					<!-- Youku -->
	        <li>
						<a class="tiny button" href="<?php echo of_get_option('youku_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Youku', 'yanse' ); ?>" target="_blank">
							<i class="fi-asterisk"></i>
						</a>
	        </li>
	      <?php } ?>

			</ul>
		</div><!-- .social -->


	</div>

</footer>

<?php wp_footer(); ?>


</body>
</html>

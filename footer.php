
<footer role="contentinfo">

	<div class="row">
		<div class="small-12 columns">
			<nav class="sub-nav" data-topbar>
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>

			</nav>
		</div>
	</div>


	<div class="row">

		<div class="small-12 large-2 columns">
			<p>&copy; <?php echo date('Y'); ?>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</p>
		</div>

		<div class="small-12 large-10 columns social">
			<ul>
				<?php if ( of_get_option('rss_url') ) { ?>
					<!-- RSS -->
	        <li>
						<a class="button" href="<?php echo of_get_option('rss_url', 'no entry'); ?>" title="<?php _e( 'Subscribe to ' . get_bloginfo( 'name', 'display' ) . ' RSS', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-rss"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('twitter_url') ) { ?>
					<!-- Twitter -->
	        <li>
						<a class="button" href="<?php echo of_get_option('twitter_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Twitter', 'yanse' ); ?>" target="_blank">
								<div class="icon-social-twitter"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('facebook_url') ) { ?>
					<!-- Facebook -->
	        <li>
						<a class="button" href="<?php echo of_get_option('facebook_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Facebok', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-facebook"></div>
						</a>
	        </li>
	       <?php } ?>

				<?php if ( of_get_option('googleplus_url') ) { ?>
					<!-- Google+ -->
	        <li>
						<a class="button" href="<?php echo of_get_option('googleplus_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Google+', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-google-plus"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('wechat_url') ) { ?>
					<!-- Weixin -->
	        <li>
						<a class="button" title="<?php _e( 'Friend ' . get_bloginfo( 'name', 'display' ) . ' on WeChat', 'yanse' ); ?>" target="_blank" data-open="wechatModal">
							<div class="icon-social-wechat"></div>
						</a>
	        </li>
	      <?php } ?>
				<?php if ( of_get_option('weibo_url') ) { ?>
					<!-- Weibo -->
	        <li>
						<a class="button" href="<?php echo of_get_option('weibo_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Weibo', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-weibo"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('douban_url') ) { ?>
					<!-- Douban -->
	        <li>
						<a class="button" href="<?php echo of_get_option('douban_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Douban', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-douban"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('mailchimp_url') ) { ?>
					<!-- Behance -->
	      	<li>
						<a class="button" href="<?php echo of_get_option('mailchimp_url', 'no entry'); ?>" title="<?php _e( 'Subscribe to ' . get_bloginfo( 'name', 'display' ) . ' on MailChimp', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-mailchimp"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('linkedin_url') ) { ?>
					<!-- LinkedIn -->
	        <li>
						<a class="button" href="<?php echo of_get_option('linkedin_url', 'no entry'); ?>" title="<?php _e( 'Connect with ' . get_bloginfo( 'name', 'display' ) . ' on LinkedIn', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-linkedin"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('behance_url') ) { ?>
					<!-- Behance -->
	        <li>
						<a class="button" href="<?php echo of_get_option('behance_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Behance', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-behance"></div>
						</a>
	        </li>
	      <?php } ?>


				<?php if ( of_get_option('dribbble_url') ) { ?>
					<!-- Dribbble -->
	        <li>
						<a class="button" href="<?php echo of_get_option('dribbble_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Dribbble', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-dribbble"></div>
						</a>
	        </li>
		    <?php } ?>

				<?php if ( of_get_option('pinterest_url') ) { ?>
					<!-- Pinterest -->
	        <li>
						<a class="button" href="<?php echo of_get_option('pinterest_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Pinterest', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-pinterest"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('instagram_url') ) { ?>
					<!-- Instagram -->
	        <li>
						<a class="button" href="<?php echo of_get_option('instagram_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Instagram', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-instagram"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('flickr_url') ) { ?>
					<!-- Flickr -->
	        <li>
						<a class="button" href="<?php echo of_get_option('flickr_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Flickr', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-flickr"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('500px_url') ) { ?>
					<!-- 500px -->
	        <li>
						<a class="button" href="<?php echo of_get_option('500px_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on 500px', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-500px"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('github_url') ) { ?>
					<!-- Github -->
	        <li>
						<a class="button" href="<?php echo of_get_option('github_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Github', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-github"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('bitbucket_url') ) { ?>
					<!-- Bitbucket -->
	        <li>
						<a class="button" href="<?php echo of_get_option('bitbucket_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Bitbucket', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-bitbucket"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('stackoverflow_url') ) { ?>
					<!-- Bitbucket -->
	        <li>
						<a class="button" href="<?php echo of_get_option('stackoverflow_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Stack Overflow', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-stackoverflow"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('youtube_url') ) { ?>
					<!-- Youtube -->
	        <li>
						<a class="button" href="<?php echo of_get_option('youtube_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Youtube', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-youtube"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('vimeo_url') ) { ?>
					<!-- Vimeo -->
	        <li>
						<a class="button" href="<?php echo of_get_option('vimeo_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Vimeo', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-vimeo"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('youku_url') ) { ?>
					<!-- Youku -->
	        <li>
						<a class="button" href="<?php echo of_get_option('youku_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Youku', 'yanse' ); ?>" target="_blank">
							<div class="icon-social-youku"></div>
						</a>
	        </li>
	      <?php } ?>

			</ul>


			<?php if ( of_get_option('wechat_url') ) { ?>
				<!-- Weixin -->
					<div class="small reveal" id="wechatModal" data-reveal data-animation-in="fade-in" data-animation-out="fade-out">
						<img src="<?php echo of_get_option('wechat_url', 'no entry'); ?>" class="float-center"/>
						<button class="close-button" data-close aria-label="Close reveal" type="button">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
			<?php } ?>

		</div><!-- .social -->


	</div>

</footer>

<?php wp_footer(); ?>


</body>
</html>

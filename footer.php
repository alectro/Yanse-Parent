







<footer class="full-width" role="contentinfo">

	<div class="row">



		<div class="large-2 columns love-yanse">
			<p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		</div>

		<div class="large-7 columns social">
			<ul>
				<?php if ( of_get_option('rss_url') ) { ?>
				<!-- RSS -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('rss_url', 'no entry'); ?>" title="<?php _e( 'Subscribe to ' . get_bloginfo( 'name', 'display' ) . ' RSS', 'yanse' ); ?>" target="_blank">

						<!--<?php echo of_get_option('rss_url', 'no entry'); ?>" title="Subscribe to <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> Feed" target="_blank">-->
							<div class="rss"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('twitter_url') ) { ?>
				<!-- Twitter -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('twitter_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Twitter', 'yanse' ); ?>" target="_blank">
							<div class="twitter"></div>


						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('facebook_url') ) { ?>
				<!-- Facebook -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('facebook_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Facebok', 'yanse' ); ?>" target="_blank">
							<div class="facebook"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('googleplus_url') ) { ?>
				<!-- Google+ -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('googleplus_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Google+', 'yanse' ); ?>" target="_blank">
							<div class="googleplus"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('weixin_url') ) { ?>
				<!-- Weixin -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('weixin_url', 'no entry'); ?>" title="<?php _e( 'Friend ' . get_bloginfo( 'name', 'display' ) . ' on Weixin', 'yanse' ); ?>" target="_blank">
							<div class="weixin"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('weibo_url') ) { ?>
				<!-- Weibo -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('weibo_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Weibo', 'yanse' ); ?>" target="_blank">
							<div class="weibo"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('douban_url') ) { ?>
				<!-- Douban -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('douban_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Douban', 'yanse' ); ?>" target="_blank">
							<div class="douban"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('mailchimp_url') ) { ?>
				<!-- Behance -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('mailchimp_url', 'no entry'); ?>" title="<?php _e( 'Subscribe to ' . get_bloginfo( 'name', 'display' ) . ' on MailChimp', 'yanse' ); ?>" target="_blank">
							<div class="mailchimp"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('linkedin_url') ) { ?>
				<!-- LinkedIn -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('linkedin_url', 'no entry'); ?>" title="<?php _e( 'Connect with ' . get_bloginfo( 'name', 'display' ) . ' on LinkedIn', 'yanse' ); ?>" target="_blank">
							<div class="linkedin"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('behance_url') ) { ?>
				<!-- Behance -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('behance_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Behance', 'yanse' ); ?>" target="_blank">
							<div class="behance"><br /></div>
						</a>
	                </li>
	            <?php } ?>


				<?php if ( of_get_option('dribbble_url') ) { ?>
				<!-- Dribbble -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('dribbble_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Dribbble', 'yanse' ); ?>" target="_blank">
							<div class="dribbble"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('instagram_url') ) { ?>
				<!-- Instagram -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('instagram_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Instagram', 'yanse' ); ?>" target="_blank">
							<div class="instagram"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('flickr_url') ) { ?>
				<!-- Flickr -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('flickr_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Flickr', 'yanse' ); ?>" target="_blank">
							<div class="flickr"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('youtube_url') ) { ?>
				<!-- Youtube -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('youtube_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Youtube', 'yanse' ); ?>" target="_blank">
							<div class="youtube"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('vimeo_url') ) { ?>
				<!-- Vimeo -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('vimeo_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Vimeo', 'yanse' ); ?>" target="_blank">
							<div class="vimeo"><br /></div>
						</a>
	                </li>
	            <?php } ?>

				<?php if ( of_get_option('youku_url') ) { ?>
				<!-- Youku -->
	                <li>
						<a data-tooltip href="<?php echo of_get_option('youku_url', 'no entry'); ?>" title="<?php _e( 'Follow ' . get_bloginfo( 'name', 'display' ) . ' on Youku', 'yanse' ); ?>" target="_blank">
							<div class="youku"><br /></div>
						</a>
	                </li>
	            <?php } ?>

			</ul>
		</div><!-- .social -->

<div class="large-3 columns">
	<nav class="sub-nav" data-topbar>

	    <?php
					/*
	        wp_nav_menu( array(
	            'theme_location' => 'footer',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul class="right">%3$s</ul>',
	            'walker' => new yanse_walker( array(
	                'in_top_bar' => false,
	                'item_type' => 'li',
	                'menu_type' => ''
	            ) ),
	        ) );
					 */
	    ?>
	</nav>
</div>

	</div>

</footer>

	</div><!-- Row End -->
</div><!-- Container End -->

<?php wp_footer(); ?>


</body>
</html>

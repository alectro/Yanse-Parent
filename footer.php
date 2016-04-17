
<footer role="contentinfo">


	<div class="row">
		<div class="small-12 medium-6 columns">
			<p>&copy; <?php echo date('Y'); ?>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</p>
		</div>

		<div class="small-12 medium-6 columns">
			<nav class="sub-nav" data-topbar>
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>

			</nav>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>

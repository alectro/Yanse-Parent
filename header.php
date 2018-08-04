<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Feed RSS -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
	<!-- Favicon -->
	<!--  iPhone Web App Home Screen Icon	-->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-touch-icon-180x180.png">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/safari-pinned-tab.svg" color="#12B398">
	<!-- Android -->
	<link rel="icon" sizes="48x48" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/android-chrome-48x48.png">
	<link rel="icon" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/android-chrome-96x96.png">
	<link rel="icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/android-chrome-144x144.png">
	<link rel="icon" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/android-chrome-192x192.png">
	<link rel="icon" sizes="256x256" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/android-chrome-256x256.png">
	<link rel="icon" sizes="384x384" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/android-chrome-384x384.png">
	<link rel="icon" sizes="512x512" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/android-chrome-512x512.png">
	<!-- favicon -->
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/favicon-16x16.png">
	<!-- MS	-->
	<meta name="msapplication-TileColor" content="#12B398">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/mstile-70x70.png">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/mstile-144x144.png">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/mstile-150x150.png">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/mstile-310x150.png">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/mstile-310x310.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/manifest.json">


<?php wp_head(); ?>

</head>

<body <?php body_class('antialiased'); ?>>

<header class="contain-to-grid clearfix">

	<div class="title-bar" data-responsive-toggle="responsivehide" data-hide-for="medium">
	  <button class="menu-icon" type="button" data-toggle></button>
	  <div class="title-bar-title">
			<a href="<?php echo home_url(''); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>" rel="home">
				<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo get_stylesheet_directory_uri() . '/images/branding/logo-mobile.png'?>" width="100" height="38" />
			</a>
		</div>
	</div>
	<nav class="top-bar " id="responsivehide">
		<div class="row">

		  <ul class="vertical medium-horizontal menu" data-responsive-menu="accordion medium-dropdown">
				<li role="menuitem" class="divider"></li>
				<li  aria-label="Home" aria-expanded="false" aria-haspopup="true" role="menuitem" id="menu-item-0" class="menu-item menu-item-main-menu hide-for-small-only">
					<a href="<?php echo home_url(''); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>" rel="home">
						<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo get_stylesheet_directory_uri() . '/images/branding/logo.png'?>" width="100" height="38" />
					</a>
				</li>

				<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => '',
					'items_wrap'    => '%3$s',
					'depth' => 0,
					'walker' => new insertcart_walker( array(
						'in_top_bar' => true,
						'item_type' => 'li',
						'menu_type' => 'main-menu'
					)
				),
				)
			); ?>
			</ul>
		</div>
	</nav>
</header>

<!-- Start the main container -->
<div class="container" role="document">

<!doctype html>
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


	<!-- Favicon and Feed -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png">

	<!--  iPhone Web App Home Screen Icon
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-180x180.png">
	-->
	<!-- MS
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	-->
<?php wp_head(); ?>

</head>

<body <?php body_class('antialiased'); ?> style='background:<?php $workscolor = rwmb_meta("mb_color"); if (isset($workscolor[0])) { echo __($workscolor, 'yanse'); } ?>'>

<header class="contain-to-grid clearfix">

	<div class="title-bar" data-responsive-toggle="responsivehide" data-hide-for="medium">
	  <button class="menu-icon" type="button" data-toggle></button>
	  <div class="title-bar-title">
			<a href="<?php echo home_url(''); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>" rel="home">
				<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo of_get_option('main_logo_mobile'); ?>" width="<?php echo of_get_option('main_logo_width', 'no entry'); ?>" height="<?php echo of_get_option('main_logo_heigth', 'no entry'); ?>" />
			</a>
		</div>
	</div>
	<nav class="top-bar " id="responsivehide">
		<div class="row">

		  <ul class="vertical medium-horizontal menu" data-responsive-menu="accordion medium-dropdown">
				<li role="menuitem" class="divider"></li>
				<li  aria-label="Home" aria-expanded="false" aria-haspopup="true" role="menuitem" id="menu-item-0" class="menu-item menu-item-main-menu hide-for-small-only">
					<a href="<?php echo home_url(''); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>" rel="home">
						<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo of_get_option('main_logo'); ?>" width="<?php echo of_get_option('main_logo_width', 'no entry'); ?>" height="<?php echo of_get_option('main_logo_heigth', 'no entry'); ?>" />
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

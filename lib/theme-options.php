<?php

/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/lib/admin/options/' );
require_once dirname( __FILE__ ) . '/admin/options/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );



/*
 * Turns off the default options panel from Twenty Eleven
add_action('after_setup_theme','remove_twentyeleven_options', 100);

function remove_twentyeleven_options() {
	remove_action( 'admin_menu', 'twentyeleven_theme_options_add_page' );
}
 */


/**
 *	Theme Customizer
 *	@since	yanse 1.0
 *	Source:	wordpress functions ( http://bit.ly/MCoiqZ )
 *
 */
add_theme_support( 'custom-background' );

add_theme_support( 'custom-header', $defaults = array(
	'default-image' => '',
	'random-default' => false,
	'width' => 0,
	'height' => 0,
	'flex-height' => false,
	'flex-width' => false,
	'default-text-color' => '',
	'header-text' => true,
	'uploads' => true,
	'wp-head-callback' => '',
	'admin-head-callback' => '',
	'admin-preview-callback' => '',
	)
);


/**
 *	Admin Styles
 *	@since	yanse 0.1
 *
 */
function yanse_admin_head() {
	// Dasboard favicon
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.of_get_option('dashboard_favicon').'" />';

	// Admin Styles
	echo '<style type="text/css">
/*	Option framework grid*/
.grouped {
	display: inline-block;
}
.section {
}
#wpfooter {
	padding: 10px 0px 20px 110px;
	background-image: url('.of_get_option('dashboard_logo').');
	background-position: left top;
	background-repeat: no-repeat;
}
.section-info h4 {
    font-size: 15px;
}
.section-info p {
    color: #797979;
    font-size: 15px;
    font-style: italic;
}
.clear {
	padding-bottom: 35px!important;
}
</style>';
	}
add_action('admin_head', 'yanse_admin_head');

/**
 *	Custom Login
 *	@since	yanse 0.1
 *
 */
function my_custom_login_logo() {

$login_back = of_get_option('login_back');
	// Login favicon
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.of_get_option('dashboard_favicon').'" />';

	// Login Styles
    echo '<style type="text/css">
body.login {
	background:'.$login_back['color'].' url('.$login_back['image'].') '.$login_back['repeat'].' '.$login_back['position'].' '.$login_back['attachment'].';
}
#login form,
#wp-submit {
	border-radius: '.of_get_option('loginboxes_radius').'px !important;
}
#login form {
	padding-top: 100px;
	background-color: '.of_get_option('loginbox_back').';
	background-image: url('.of_get_option('login_logo').');
	background-repeat:no-repeat;
	background-position:top center;
	border: none;
}
.login form {
	box-shadow: 0 0px 0 rgba(0, 0, 0, 0) !important;
}
#login h1 {
	display: none;
}
label {
	color: '.of_get_option('login_labels').' !important;
}
input {
	background-color: '.of_get_option('input_back').' !important;
}
#wp-submit {
	background: none;
	border: none;
	text-shadow: 0 0px 0 rgba(0, 0, 0, 0);
	background-color: '.of_get_option('submit_back').' !important;
	width: auto;
}
#wp-submit:hover {
	background-color: '.of_get_option('submit_hover_back').' !important;
}
.login #nav,
.login #backtoblog {
    text-shadow: none;
}
.login #nav a,
.login #backtoblog a {
	color: '.of_get_option('login_links_color').' !important;
}
.login #nav a:hover,
.login #backtoblog a:hover {
	color: '.of_get_option('login_links_hover_color').' !important;
}
</style>';

}
add_action('login_head', 'my_custom_login_logo');

/**
 *	Favicon
 *	@since	yanse 0.1
 *
 */
function yanse_favicon() {
	// Website favicon
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.of_get_option('favicon').'" />';
}
add_action('wp_head', 'yanse_favicon');

/**
 *	Admin Footer Credits
 *	@since	yanse 0.1
 *
 */
function yanse_footer_admin () {
    echo 'Powered by <a href="http://www.wordpress.org" title="WordPress" target="_blank">WordPress</a> &#124; Design and Code by <a href="http://www.colorale.com/" title="colorale" target="_blank">colorale</a></p>';
}
add_filter('admin_footer_text', 'yanse_footer_admin');


/**
 *	Dashboard RSS Feed
 *	@since	yanse 0.2
 *	Source:	wpinsite ( http://bit.ly/zC1wG3 )
 *
 */
function tip_feed_dashboard_widgets() {
    global $wp_meta_boxes;
    // remove unnecessary widgets
    // var_dump( $wp_meta_boxes['dashboard'] ); // use to get all the widget IDs
    unset(
    $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'],
    $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'],
    $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']
);

// Add a custom dashboard widget
wp_add_dashboard_widget(
	'dashboard_custom_feed',
	of_get_option('widget_title'),
	'dashboard_custom_feed_output' );
}

function dashboard_custom_feed_output() {
    echo '<div class="rss-widget">';
    wp_widget_rss_output(
    	array (
	        'url' => of_get_option('widget_feed'),
	        'items' => of_get_option('widget_items'),
	        'show_summary' => of_get_option('widget_summary'),
	        'show_author' => of_get_option('widget_author'),
	        'show_date' => of_get_option('widget_date')
    		)
		);
    echo "</div>";
}
add_action('wp_dashboard_setup', 'tip_feed_dashboard_widgets');

/**
 *	Welcome message
 *	@since	yanse 0.9
 *	Source:	ayudawordpress ( http://bit.ly/H6oIZq )
 *
 */

function welcome_message( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Howdy,', 'Welcome back,', $my_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'welcome_message',25 );


?>

<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'yanse';
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Background Defaults
	$body_background_defaults = array(
	"color" => "#f5f5f5",
	"repeat" => "repeat",
	"image" => get_stylesheet_directory_uri() . "/images/branding/login-back.png",
	"position" => "top center",
	"attachment"=>"scroll");

	// Dashboard Widget amount selector
	$widget_amount = array( "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10" );

	// Dashboard Widget Yes or No selector
	$widget_yes_no = array("1" => "Yes","0" => "No");
	// Dashboard Widget Yes or No selector
	$widget_feed_url = array( home_url('/feed')  => get_bloginfo('site_name'), "http://www.colorale.com/feed/" => "Colorale");

	// If using image radio buttons, define a directory path
	$imagepath =  get_stylesheet_directory_uri() . '/images/';

	$options = array();


	/*	Dashboard Widgets	*/
	$options[] = array( "name" => "Dashboard" ,
						"type" => "heading");

	$options[] = array( "name" => "General information",
						"desc" => "This feature will work as a very simple Feed Reader for your favourite Website.",
						"type" => "info");

	$options[] = array( "name" => "Widget Title Feed",
						"id" => "widget_title",
						"std" => "News from " . get_bloginfo('site_name'),
						"class" => "normal", //mini, tiny, small, normal
						"type" => "text");

	$options[] = array( "name" => "Widget URL Feed",
						"id" => "widget_feed",
						"std" => home_url('/feed'),
						"options" => $widget_feed_url,
						"type" => "select");

	$options[] = array( "name" => "Widget Items",
						"id" => "widget_items",
						"desc" => "How many items do you want to show on the dashboard?",
						"std" => "5",
						"type" => "select",
						"class" => "mini grouped",
						"options" => $widget_amount);

	$options[] = array( "name" => "Summary",
						"desc" => "Show summary?",
						"id" => "widget_summary",
						"std" => "1",
						"type" => "select",
						"class" => "mini grouped",
						"options" => $widget_yes_no);

	$options[] = array( "name" => "Author",
						"desc" => "Show author?",
						"id" => "widget_author",
						"std" => "0",
						"type" => "select",
						"class" => "mini grouped",
						"options" => $widget_yes_no);

	$options[] = array( "name" => "Date",
						"desc" => "Show date?",
						"id" => "widget_date",
						"std" => "1",
						"type" => "select",
						"class" => "mini grouped",
						"options" => $widget_yes_no);

	/*	Social	*/
	$options[] = array( "name" => "Social",
						"type" => "heading");

	$options[] = array( "name" => "General information",
						"desc" => "Add your Social service profile URL (E.g.: <a href=\"https://twitter.com/#!/alectro\">https://twitter.com/alectro</a>).",
						"type" => "info");

	$options[] = array( "name" => "RSS Feed",
						"id" => "rss_url",
						"std" => home_url( '/feed/' ),
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Twitter",
						"id" => "twitter_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Facebook",
						"id" => "facebook_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Google+",
						"id" => "googleplus_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "LinkedIn",
						"id" => "linkedin_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Behance",
						"id" => "behance_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Dribbble",
						"id" => "dribbble_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Instagram",
						"id" => "instagram_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Pinterest",
						"id" => "pinterest_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "MailChimp",
						"id" => "mailchimp_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Flickr",
						"id" => "flickr_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "500px",
						"id" => "500px_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Github",
						"id" => "github_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Bitbucket",
						"id" => "bitbucket_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Stack Overflow",
						"id" => "stackoverflow_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Youtube",
						"id" => "youtube_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Vimeo",
						"id" => "vimeo_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Weibo",
						"id" => "weibo_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "WeChat",
						"id" => "wechat_url",
						"desc" => "Upload your QR code here.",
						"class" => "small grouped",
						"type" => "upload");

	$options[] = array( "name" => "Douban Station",
						"class" => "normal",
						"id" => "douban_url",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Youku",
						"id" => "youku_url",
						"class" => "small grouped",
						"type" => "text");


	/*	Logo	*/
	$options[] = array( "name" => "Logo",
						"type" => "heading");

	$options[] = array( "name" => "Website's main logo",
						"desc" => "Upload a logo for Tablet and Desktop.",
						"id" => "main_logo",
						"std" => $imagepath . 'branding/logo.png',
						"type" => "upload");

	$options[] = array( "name" => "Website's mobile logo",
						"desc" => "Upload a logo for mobile.",
						"id" => "main_logo_mobile",
						"std" => $imagepath . 'branding/logo-mobile.png',
						"type" => "upload");

	$options[] = array( "name" => "Logo width",
						"id" => "main_logo_width",
						"std" => "90",
						"class" => "mini grouped",
						"type" => "text");

	$options[] = array( "name" => "Logo height",
						"id" => "main_logo_heigth",
						"std" => "34",
						"class" => "mini grouped",
						"type" => "text");

	/*	Branding	*/
	$options[] = array( "name" => "Branding",
						"type" => "heading");

	$options[] = array( "name" => "General information",
						"desc" => "Change the look and feel for your Website's back-end. Default values provided.",
						"type" => "info");

	$options[] = array( "name" => "Dashboard logo",
						"desc" => "Replace the default Dashboard logo, placed in the footer. 105 x 45 pixels image (.jpg, .png or .gif). Consider the margins on the image itself.",
						"id" => "dashboard_logo",
						"std" => $imagepath . 'branding/dashboard-logo.png',
						"type" => "upload");

	$options[] = array( "name" => "Favicon for your Website",
						"desc" => "Replace the default icon to your web browser URL navigation bar for your Website. Please upload .ico or .gif files (16 x 16 pixels).",
						"id" => "favicon",
						"std" => $imagepath . 'favicon.ico',
						"type" => "upload");

	$options[] = array( "name" => "Favicon for your Dashboard",
						"desc" => "Replace the default icon to your web browser URL navigation bar for your Dashboard. Please upload .ico or .gif files (16 x 16 pixels).",
						"id" => "dashboard_favicon",
						"std" => $imagepath . 'branding/favicon.ico',
						"type" => "upload");

	/*	Login */
	$options[] = array( "name" => "Login Screen style",
						"desc" => "Change the login screen style.",
						"type" => "info");

	$options[] = array( "name" => "Login Logo",
						"desc" => "310 x 100 pixels image (.jpg, .png or .gif). Consider the margins on the image itself and transparency if you are using the \"Login box background color\" option. Alternatively you can upload a bigger image to fill all the background.",
						"id" => "login_logo",
						"std" => $imagepath . 'branding/login-logo.png',
						"type" => "upload");


	$options[] = array( "name" => "Login Body Background",
						"desc" => "Change the background CSS.",
						"id" => "login_back",
						"std" => $body_background_defaults,
						"type" => "background");

	$options[] = array( "name" => "Border Radius",
						"id" => "loginboxes_radius",
						"desc" => "Set roundness for the Login Box and Submit Button.",
						"std" => "3",
						"class" => "small grouped",
						"type" => "text");

	$options[] = array( "name" => "Login box background color",
						"id" => "loginbox_back",
						"std" => "#ffffff",
						"class" => "small grouped",
						"type" => "color");

	$options[] = array( "name" => "Labels",
						"id" => "login_labels",
						"std" => "#333333",
						"class" => "small grouped",
						"type" => "color");

	$options[] = array( "name" => "User & Password background color",
						"id" => "input_back",
						"std" => "#ededed",
						"class" => "small grouped",
						"type" => "color");

	$options[] = array( "name" => "Submit background color",
						"id" => "submit_back",
						"std" => "#333333",
						"class" => "small grouped",
						"type" => "color");

	$options[] = array( "name" => "Submit:hover background color",
						"id" => "submit_hover_back",
						"std" => "#797979",
						"class" => "small grouped",
						"type" => "color");

	$options[] = array( "name" => "Login page link's color",
						"id" => "login_links_color",
						"std" => "#797979",
						"class" => "small grouped",
						"type" => "color");

	$options[] = array( "name" => "Login page link's :hover color",
						"id" => "login_links_hover_color",
						"std" => "#333333",
						"class" => "small grouped",
						"type" => "color");


	/*	SEO	*/
	$options[] = array( "name" => "SEO",
						"type" => "heading");

	$options[] = array( "name" => "General information",
						"desc" => "Add some basic SEO functionalities to your Website.",
						"type" => "info");

	$options[] = array( "name" => "Google Analytics",
						"desc" => "Place your <a href=\"http://www.google.com/analytics/\">Google Analytics</a> tracking code (E.g.: UA-2577708-1) here.",
						"id" => "google_analytics_code",
						"class" => "normal",
						"type" => "text");

	$options[] = array( "name" => "Google Webmaster Tools",
						"desc" => "Place your <a href=\"https://www.google.com/webmasters/tools/\">Google Site Verification</a> code (E.g.: NU0E79CDsrcLt3u7iQWVBGCqqfNgzPjg-vVmLr7OIKs) here.",
						"id" => "google_verification_code",
						"class" => "normal",
						"type" => "text");

	$options[] = array( "name" => "Bing Webmaster Tools",
						"desc" => "Place your <a href=\"http://www.bing.com/webmaster/\">Bing Webmaster Tools</a> meta tag value (E.g.: CE134D71FC17544A13939C48D03C3D0C) here.",
						"id" => "bing_webmaster_code",
						"class" => "normal",
						"type" => "text");



	$options[] = array( "name" => "Baidu",
						"desc" => "Place your <a href=\"http://union.baidu.com\">Baidu</a> verifying code (E.g.: jwqfyxAYVhlYBpAW) here.",
						"id" => "baidu-site-verification",
						"type" => "text");

	$options[] = array( "name" => "Alexa Page Rank",
						"desc" => "Place your <a href=\"http://www.alexa.com/\">Alexa Page Rank</a> ID value (E.g.: ObTjYmNfBPZVs6Ebtncj7CenHUZ) here.",
						"id" => "alexa_code",
						"type" => "text");

	$options[] = array( "name" => "Sitemap",
						"desc" => "Create sitemap.xml file on your installation root folder? Remember to add it manually to your <a href=\"https://www.google.com/webmasters/tools/\">Google</a> and <a href=\"http://www.bing.com/webmaster/\">Bing</a> Webmaster Tools accounts.",
						"id" => "sitemap_xml",
						"std" => "0",
						"type" => "select",
						"options" => $widget_yes_no);


	/*	Maintenance Mode Enabler	*/
	/*$options[] = array( "name" => "Maintenance" ,
						"type" => "heading");

	$options[] = array(
						"name" => "Warning! Checking the checkbox below will enable 'Maintenance Mode', remember to uncheck after Maintenance is done.",
						"id" => "maintenance_enabler",
						"desc" => "Enable/Disable",
						"type" => "checkbox");




	$options[] = array( "name" => "Maintenance logo",
						"desc" => "Upload a logo for Maintenance screen.",
						"id" => "maintenance_logo",
						"std" => $imagepath . 'branding/dashboard-logo.jpg',
						"type" => "upload",
						"class" => "hidden");

	$wp_editor_config = array(
		"wpautop" => true, // Default
		"textarea_rows" => 15,
		"tinymce" => array( "plugins" => "wordpress" )
	);

	$options[] = array( "name" => "Maintenance mode Editor",
						"desc" => "Add your customized maintenance message.",
						"std" => "<h1>" . get_bloginfo(site_name) . " Website Under Maintenance</h1><p>Our Website is currently undergoing scheduled maintenance. Please check back very soon.</p><p><strong>Sorry for the inconvenience!</strong>
You can contact us by writing an <a href='mailto:" . antispambot('nihao@colorale.com', 1) . "'>email</a>.</p>",
						"id" => "mntnceditor",
						"type" => "editor",
						"class" => "hidden",
						"settings" => $wp_editor_config );

*/




	return $options;
}
/*
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
*/

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function($) {

	$('#maintenance_enabler').click(function() {
  		$('#section-mntnceditor').fadeToggle(400);
  		$('#section-maintenance_logo').fadeToggle(400);
	});

	if ($('#maintenance_enabler:checked').val() !== undefined) {
		$('#section-mntnceditor').show();
		$('#section-maintenance_logo').show();
	}

});
</script>
<?php
}

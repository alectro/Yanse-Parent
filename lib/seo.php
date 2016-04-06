<?php

/**
 *	Google Analytics
 *	@since	yanse 0.8
 *	Source:	wpbeginner ( http://bit.ly/ziO6Sn )
 *
 */
function add_googleanalytics() {
	if ( of_get_option('google_analytics_code') ) {
	echo '<script type="text/javascript">';
  	 echo 'var _gaq = _gaq || [];';
	  echo '_gaq.push([\'_setAccount\', \'' . of_get_option('google_analytics_code') . '\']);';
	  echo '_gaq.push([\'_trackPageview\']);';

	  echo '(function() {';
	    echo 'var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;';
	    echo 'ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';';
	    echo 'var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);';
	  echo '})();';
	echo '</script>';
	}
}
add_action('wp_footer', 'add_googleanalytics');

/**
 *	Google Webmaster Tools
 *	@since	yanse 0.8
 *	Source:	wpbeginner ( http://bit.ly/ziO6Sn )
 *
 */
function add_googlewebmaster() {
	if ( of_get_option('google_verification_code') ) {
		echo '<meta name="google-site-verification" content="';
	    	echo of_get_option('google_verification_code');
		echo '" />';
	}
}
add_action('wp_head', 'add_googlewebmaster');






/**
 *	Bing Webmaster Tools
 *	@since	yanse 0.8
 *	Source:	wpbeginner ( http://bit.ly/ziO6Sn )
 *
 */
function add_bingwebmaster() {
	if ( of_get_option('bing_webmaster_code') ) {
		echo '<meta name="msvalidate.01" content="';
	    	echo of_get_option('bing_webmaster_code');
		echo '" />';
	}
}
add_action('wp_head', 'add_bingwebmaster');


/**
 *	Sitemap.xml
 *	@since	yanse 0.8
 *	Source:	emrahgunduz ( http://bit.ly/zYmXky )
 *
 */


function eg_create_sitemap() {

	if ( of_get_option('sitemap_xml') ) {

	  $postsForSitemap = get_posts(array(
	    'numberposts' => -1,
	    'orderby'		=> 'modified',
			'post_type' => array('post', 'page', 'works', 'careers'),
	    'order'			=> 'DESC'
	  ));

	  $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
	  $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

	  foreach($postsForSitemap as $post) {
	    setup_postdata($post);

	    $postdate = explode(" ", $post->post_modified);

	    $sitemap .= '<url>'.
	      '<loc>'. get_permalink($post->ID) .'</loc>'.
	      '<lastmod>'. $postdate[0] .'</lastmod>'.
	      '<changefreq>monthly</changefreq>'.
	    '</url>';
	  }

	  $sitemap .= '</urlset>';

	  $fp = fopen(ABSPATH . "sitemap.xml", 'w');
	  fwrite($fp, $sitemap);
	  fclose($fp);

	}
}
add_action('publish_post', 'eg_create_sitemap');
add_action('publish_page', 'eg_create_sitemap');
add_action('publish_works', 'eg_create_sitemap');
add_action('publish_careers', 'eg_create_sitemap');


?>

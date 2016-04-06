<?php
/*********************
Enqueue the proper JS
*********************/
function yanse_enqueue_scripts()
{
    if ( !is_admin() )
    {
		wp_deregister_script('jquery');
    ///foundation/bower_components/jquery/dist
		wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-min.js', true, '2.1.4', false);
		wp_enqueue_script('jquery');

		// Foundation
    ///foundation/bower_components/foundation-sites/dist
		wp_enqueue_script('foundation', get_stylesheet_directory_uri() . '/js/foundation.js', array('jquery'), '6.1.2', true);
		// app Foundation
		wp_enqueue_script('app', get_stylesheet_directory_uri() . '/js/app.js', array('jquery'), '1', true);
		}
}
add_action( 'wp_print_scripts', 'yanse_enqueue_scripts');

?>

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
		wp_register_script('jquery', get_template_directory_uri('template_url') . '/js/jquery-min.js', true, '2.1.4', false);
		wp_enqueue_script('jquery');

		// Foundation
    ///foundation/bower_components/foundation-sites/dist
		wp_enqueue_script('foundation', get_template_directory_uri('template_url') . '/js/foundation.js', array('jquery'), '6.1.2', true);
		// app Foundation
		wp_enqueue_script('app', get_template_directory_uri('template_url') . '/js/app.js', array('jquery'), '1', true);
		}
}
add_action( 'wp_print_scripts', 'yanse_enqueue_scripts');



?>

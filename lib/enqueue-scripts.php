<?php
/*********************
Enqueue the proper JS
*********************/
if ( ! is_admin() ) {
    add_action( 'wp_enqueue_scripts', function(){

		wp_deregister_script('jquery');
		wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-min.js', true, '2.1.4', false);
		wp_enqueue_script('jquery');

		// Foundation
		wp_enqueue_script('foundation', get_stylesheet_directory_uri() . '/js/foundation.js', array('jquery'), '6.1.2', true);
		// app Foundation
		wp_enqueue_script('app', get_stylesheet_directory_uri() . '/js/app.js', array('jquery'), '1', true);
    });
}

if ( !is_admin() )
{
}
?>

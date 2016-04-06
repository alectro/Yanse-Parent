<?php
/**
 *	Custom Post Types
 *	@since	yanse 0.8
 *
 */

// Works


if ( ! function_exists('works_register_cpt') ) {

// Register Custom Post Type
function works_register_cpt() {

	$labels = array(
		'name'                => _x( 'Works', 'Post Type General Name', 'yanse' ),
		'singular_name'       => _x( 'Work', 'Post Type Singular Name', 'yanse' ),
		'menu_name'           => __( 'Work', 'yanse' ),
		'parent_item_colon'   => __( 'Parent Work:', 'yanse' ),
		'all_items'           => __( 'All Works', 'yanse' ),
		'view_item'           => __( 'View Work', 'yanse' ),
		'add_new_item'        => __( 'Add New Work', 'yanse' ),
		'add_new'             => __( 'New Work', 'yanse' ),
		'edit_item'           => __( 'Edit Work', 'yanse' ),
		'update_item'         => __( 'Update Work', 'yanse' ),
		'search_items'        => __( 'Search works', 'yanse' ),
		'not_found'           => __( 'No works found', 'yanse' ),
		'not_found_in_trash'  => __( 'No works found in Trash', 'yanse' ),
	);
	$args = array(
		'label'               => __( 'work', 'yanse' ),
		'description'         => __( 'Work information pages', 'yanse' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'works', $args );

}

// Hook into the 'init' action
add_action( 'init', 'works_register_cpt', 0 );

}


// Careers


if ( ! function_exists('careers_register_cpt') ) {

// Register Custom Post Type
function careers_register_cpt() {

	$labels = array(
		'name'                => _x( 'Careers', 'Post Type General Name', 'yanse' ),
		'singular_name'       => _x( 'Career', 'Post Type Singular Name', 'yanse' ),
		'menu_name'           => __( 'Career', 'yanse' ),
		'parent_item_colon'   => __( 'Parent Career:', 'yanse' ),
		'all_items'           => __( 'All Careers', 'yanse' ),
		'view_item'           => __( 'View Career', 'yanse' ),
		'add_new_item'        => __( 'Add New Career', 'yanse' ),
		'add_new'             => __( 'New Career', 'yanse' ),
		'edit_item'           => __( 'Edit Career', 'yanse' ),
		'update_item'         => __( 'Update Career', 'yanse' ),
		'search_items'        => __( 'Search careers', 'yanse' ),
		'not_found'           => __( 'No careers found', 'yanse' ),
		'not_found_in_trash'  => __( 'No careers found in Trash', 'yanse' ),
	);
	$args = array(
		'label'               => __( 'career', 'yanse' ),
		'description'         => __( 'Carrer information pages', 'yanse' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'careers', $args );

}

// Hook into the 'init' action
add_action( 'init', 'careers_register_cpt', 0 );

}


/**
 *	Add Custom Post Types to Feed
 *	@since	yanse 1
 *	Source:	wpbeginner ( http://bit.ly/J3XMos )
 *
 */

function myfeed_request($qv) {
	if (isset($qv['feed']) && !isset($qv['post_type']))
		$qv['post_type'] = array('post', 'page', 'works', 'careers');
	return $qv;
}
add_filter('request', 'myfeed_request');
?>

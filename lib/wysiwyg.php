<?php

/*
//add a button to the content editor, next to the media button
//this button will show a popup that contains inline content
add_action('media_buttons_context', 'add_my_custom_button');

//add some content to the bottom of the page
//This will be shown in the inline modal
add_action('admin_footer', 'add_inline_popup_content');

//action to add a custom button to the content editor
function add_my_custom_button($context) {

  //path to my icon
  $img = plugins_url( 'penguin.png' , __FILE__ );

  //the id of the container I want to show in the popup
  $container_id = 'popup_container';

  //our popup's title
  $title = 'An Inline Popup!';

  //append the icon
  $context .= "<a class='thickbox' title='{$title}'
    href='#TB_inline?width=400&inlineId={$container_id}'>
    <img src='{$img}' /></a>";

  return $context;
}

function add_inline_popup_content() {
?>
<div id="popup_container" style="display:none;">
  <h2>Hello from my custom button!</h2>
</div>
<?php
}

*/





function my_mce_buttons_2($buttons) {
	/**
	 * Add in a core button that's disabled by default
	 */
	$buttons[] = 'sup';
	$buttons[] = 'sub';

	return $buttons;
}
add_filter('mce_buttons', 'my_mce_buttons_2');

/*
Plugin Name: Custom Editor Styles
Plugin URI: http://alisothegeek.com/2011/05/tinymce-styles-dropdown-wordpress-visual-editor/
Description: Make a custom styles dropdown menu for the visual editor in WordPress.
Author: Alison Barrett
Version: 1.1
Author URI: http://alisothegeek.com/

Copyright 2012 Alison Barrett (email: alison@brts.us)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Custom Editor Styles main plugin class
 *
 * @author Neville Longbottom <nlongbottom@gryffindor.hogwarts.edu>
 * @author Alison Barrett <alison@brts.us>
 */
class Custom_Editor_Styles {

	/**
	 * Server path to the plugin folder
	 *
	 * @var string
	 */
	public $plugin_dir;

	/**
	 * URL to the plugin folder
	 *
	 * @var string
	 */
	public $plugin_url;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->plugin_dir = dirname( __FILE__ );
		$this->plugin_url = plugins_url( basename( dirname( __FILE__ ) ) );

		add_filter( 'tiny_mce_before_init', array( $this, 'tiny_mce_before_init' ) );
		add_filter( 'mce_buttons_2', array( $this, 'mce_buttons_2' ) );
		add_action( 'admin_init', array( $this, 'add_editor_style' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_custom_styles' ) );
	}

	/**
	 * Define custom styles for the dropdown menu
	 *
	 * @param array $settings Existing custom styles in TinyMCE
	 * @return array
	 */
	public function tiny_mce_before_init( $settings ) {
		$style_formats = array(

			// Small

			array( 'title' => 'Small' ),
			array(
				'title'   => 'Small 1',
				'block'   => 'div',
				'classes' => 'small-1 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Small 2',
				'block'   => 'div',
				'classes' => 'small-2 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Small 3',
				'block'   => 'div',
				'classes' => 'small-3 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Small 4',
				'block'   => 'div',
				'classes' => 'small-4 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Small 5',
				'block'   => 'div',
				'classes' => 'small-5 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Small 6',
				'block'   => 'div',
				'classes' => 'small-6 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Small 7',
				'block'   => 'div',
				'classes' => 'small-7 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Small 8',
				'block'   => 'div',
				'classes' => 'small-8 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Small 9',
				'block'   => 'div',
				'classes' => 'small-9 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Small 10',
				'block'   => 'div',
				'classes' => 'small-10 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Small 11',
				'block'   => 'div',
				'classes' => 'small-11 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Small 12',
				'block'   => 'div',
				'classes' => 'small-12 columns',
				'wrapper' => true
			),

			// Medium

			array( 'title' => 'Medium' ),
			array(
				'title'   => 'Medium 1',
				'block'   => 'div',
				'classes' => 'medium-1 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Medium 2',
				'block'   => 'div',
				'classes' => 'medium-12 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Medium 3',
				'block'   => 'div',
				'classes' => 'medium-3 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Medium 4',
				'block'   => 'div',
				'classes' => 'medium-4 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Medium 5',
				'block'   => 'div',
				'classes' => 'medium-5 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Medium 6',
				'block'   => 'div',
				'classes' => 'medium-6 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Medium 7',
				'block'   => 'div',
				'classes' => 'medium-7 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Medium 8',
				'block'   => 'div',
				'classes' => 'medium-8 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Medium 9',
				'block'   => 'div',
				'classes' => 'medium-9 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Medium 10',
				'block'   => 'div',
				'classes' => 'medium-10 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Medium 11',
				'block'   => 'div',
				'classes' => 'medium-11 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Medium 12',
				'block'   => 'div',
				'classes' => 'medium-12 columns',
				'wrapper' => true
			),

			// Large

			array( 'title' => 'Large' ),

			array(
				'title'   => 'Large 1',
				'block'   => 'div',
				'classes' => 'large-1 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Large 2',
				'block'   => 'div',
				'classes' => 'large-2 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Large 3',
				'block'   => 'div',
				'classes' => 'large-3 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Large 4',
				'block'   => 'div',
				'classes' => 'large-4 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Large 5',
				'block'   => 'div',
				'classes' => 'large-5 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Large 6',
				'block'   => 'div',
				'classes' => 'large-6 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Large 7',
				'block'   => 'div',
				'classes' => 'large-7 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Large 8',
				'block'   => 'div',
				'classes' => 'large-8 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Large 9',
				'block'   => 'div',
				'classes' => 'large-9 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Large 10',
				'block'   => 'div',
				'classes' => 'large-10 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Large 11',
				'block'   => 'div',
				'classes' => 'large-11 columns',
				'wrapper' => true
			),
			array(
				'title'   => 'Large 12',
				'block'   => 'div',
				'classes' => 'large-12 columns',
				'wrapper' => true
			)
		);

		$settings['style_formats'] = json_encode( $style_formats );

		return $settings;
	}

	/**
	 * Add the Styles dropdown to the visual editor
	 *
	 * @param array $buttons Array of buttons already registered
	 * @return array
	 */
	public function mce_buttons_2( $buttons ) {
		array_unshift( $buttons, 'styleselect' );
		return $buttons;
	}


}

// Developers, start your engines.
$Custom_Editor_Styles = new Custom_Editor_Styles();

add_action( 'admin_init', 'add_my_editor_style' );

function add_my_editor_style() {
	add_editor_style();
}

/*
Style Format Options

=========================================================================================
Array Key                     Meaning
=========================================================================================
title [required]              label for this dropdown item
-----------------------------------------------------------------------------------------
selector|block|inline         "selector" limits the style to a specific HTML
[required]                    tag, and will apply the style to an existing tag
                              instead of creating one

                              "block" creates a new block-level element with the
                              style applied, and will replace the existing block
                              element around the cursor

                              "inline" creates a new inline element with the style
                              applied, and will wrap whatever is selected in the
                              editor, not replacing any tags
-----------------------------------------------------------------------------------------
classes [optional]            space-separated list of classes to apply to the
                              element
-----------------------------------------------------------------------------------------
styles [optional]             array of inline styles to apply to the element
                              (two-word attributes, like font-weight, are written
                              in Javascript-friendly camel case: fontWeight)
-----------------------------------------------------------------------------------------
attributes [optional]         assigns attributes to the element (same syntax as styles)
-----------------------------------------------------------------------------------------
wrapper [optional,            if set to true, creates a new block-level element
default = false]              around any selected block-level elements
-----------------------------------------------------------------------------------------
exact [optional,              disables the "merge similar styles" feature, needed
default = false]              for some CSS inheritance issues
=========================================================================================

See this blog post for more details: http://alisothegeek.com/2011/05/tinymce-styles-dropdown-wordpress-visual-editor/

*/
?>

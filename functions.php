<?php

//require_once('lib/clean.php');

require_once('lib/enqueue-scripts.php');

require_once('lib/enqueue-style.php');

//require_once('lib/foundation.php');

require_once('lib/breadcrumbs.php');

require_once('lib/menu.php');

require_once('lib/theme-options.php');

require get_template_directory() . '/lib/admin/meta-box/meta-box.php'; // Path to the plugin's main file

require_once('lib/metaboxes.php'); //Copy again on CHild Theme

require_once('lib/cpt.php');

require_once('lib/welcome.php');

require_once('lib/seo.php');

require_once('lib/wysiwyg.php');

/**********************
Add theme supports
 **********************/

function yanse_theme_support() {	// Change names for your convinience

  /**
   *	WordPress Theme support
   *	@since	yanse 1
   *
   */
  add_theme_support( 'title-tag' );
  // content width
  if ( ! isset( $content_width ) ) $content_width = 1440;
  // Feeds
  add_theme_support('automatic-feed-links');
  // Add HTML5 Support
  add_theme_support( 'html5',
           array(
            'comment-list',
            'comment-form',
            'search-form',
           )
  );

  // Localization
    load_theme_textdomain('yanse', get_template_directory() . '/languages');
  	$locale = get_locale();
  	$locale_file = get_template_directory() . "/languages/$locale.php";
  	if ( is_readable( $locale_file ) )
  		require_once( $locale_file );
  	/* <?php _e( 'zzz', 'yanse' ); ?> */
  	/* <?php __( 'xxx', 'yanse' ); ?> */
  }

  // Post Thumbnails

  add_theme_support('post-thumbnails');
  // set_post_thumbnail_size(150, 150, false);
  add_image_size( 'thumb-large', 1024, 99999);
  add_image_size( 'thumb-medium', 768, 99999);
  add_image_size( 'thumb-small', 320, 9999);


  //	Post Formats
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video' , 'audio', 'chat' ) );

  function yanse_post_formats( $template ) {
      if ( is_single() && has_post_format() ) {
          $post_format_template = locate_template( 'single-' . get_post_format() . '.php' );
          if ( $post_format_template ) {
              $template = $post_format_template;
          }
      }

      return $template;
  }
  add_filter( 'template_include', 'yanse_post_formats' );



add_action('after_setup_theme', 'yanse_theme_support');

/* end theme support */
// Sidebars and Widgets
function yanse_widgets_init() {
  $sidebars = array('Sidebar');
  foreach ($sidebars as $sidebar) {
      register_sidebar(array('name'=> $sidebar,
        'id' => 'Sidebar',
          'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
          'after_widget' => '</article>',
          'before_title' => '<h4>',
          'after_title' => '</h4>'
      ));
  }

  $sidebars = array('Footer');
  foreach ($sidebars as $sidebar) {
      register_sidebar(array('name'=> $sidebar,
        'id' => 'Footer',
          'before_widget' => '<div class="large-3 columns"><article id="%1$s" class="panel widget %2$s">',
          'after_widget' => '</article></div>',
          'before_title' => '<h4>',
          'after_title' => '</h4>'
      ));
  }
}
add_action( 'widgets_init', 'yanse_widgets_init' );


// return entry meta information for posts, used by multiple loops.
if(!function_exists('yanse_entry_meta')) :
    function yanse_entry_meta() {
        echo '<span class="byline author">'. __('Written by', 'yanse') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .', </a></span>';
        echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. get_the_time('F jS, Y') .'</time>';
    }
endif;
?>

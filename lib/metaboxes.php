<?php
/**
 *	Meta Boxes
 *	@since	yanse 0.1
 *	Source:	rilwis ( http://bit.ly/yjVAEw )
 *
 */
//require_once('lib/metaboxes.php');

// Re-define meta box path and URL
define( 'RWMB_DIR', get_template_directory() . '/lib/admin/meta-box/' );
define( 'RWMB_URL', get_template_directory_uri() . '/lib/admin/meta-box/' );

// Include the meta box script
require_once RWMB_DIR . 'meta-box.php';


// Include the meta box definition (This is the file where you define meta boxes, see `demo/demo.php`)
include get_template_directory().'/lib/admin/meta-box/config.php';
?>

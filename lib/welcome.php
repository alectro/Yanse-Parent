<?php
/**
 *	Welcome to users
 *	@since	yanse 0.1
 *	Source:	rilwis ( http://bit.ly/yjVAEw )
 *
 */
/**
 *	Client's Welcome Pointer
 *	@since	yanse 0.9
 *	Source:	WP Engineer ( http://bit.ly/HDLV2a )
 *
 */

function get_content_in_wp_pointer() {
	global $user_identity;
	wp_get_current_user();
	$pointer_content = '<h3>Hello ' . $user_identity . ', welcome to ' . get_bloginfo('name') . '</h3>';
	$pointer_content .= '<p>Remember that you can edit your <strong>social service accounts</strong>, your <strong>login and dashboard appearance</strong> and some other options at the <a href="' . home_url( '/' ) . 'wp-admin/themes.php?page=options-framework" title="' . get_bloginfo('name') . ' Theme Options">Theme Options</a> page at your own convinience.</p><p><small>* Once you dismiss this help pointer will never appear again.</small></p>';
	?>
		<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready( function($) {
		$('#menu-appearance').pointer({
		content: '<?php echo $pointer_content; ?>',
		position: {
		my: 'left top',
		at: 'left top',
		offset: '20 30'
		},
		close: function() {
		setUserSetting( 'p1', '1' );
		}
		}).pointer('open');
		});
		//]]>
		</script>
	<?php
	}
	function fb_enqueue_wp_pointer( $hook_suffix ) {
		$enqueue = FALSE;
		$admin_bar = get_user_setting( 'p1', 0 ); // check settings on user
	// check if admin bar is active and default filter for wp pointer is true
	if ( ! $admin_bar && apply_filters( 'show_wp_pointer_admin_bar', TRUE ) ) {
		$enqueue = TRUE;
		add_action( 'admin_print_footer_scripts', 'get_content_in_wp_pointer' );
	}
	// in true, include the scripts
	if ( $enqueue ) {
		wp_enqueue_style( 'wp-pointer' );
		wp_enqueue_script( 'wp-pointer' );
		wp_enqueue_script( 'utils' ); // for user settings
	}
}
add_action( 'admin_enqueue_scripts', 'fb_enqueue_wp_pointer' );

?>

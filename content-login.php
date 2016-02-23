<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Yanse
 * @since Yanse 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div id="featured-header">
				<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} ?>
			</div>
			<h1 class="entry-title"><?php the_title(); ?></h1>
				<nav class="header-nav">
					<?php if (function_exists('yanse_breadcrumbs')) yanse_breadcrumbs(); ?>
				</nav>
		</header><!-- .entry-header -->
	
	<div class="entry-content">
		<div class="row">

			


<?php global $current_user; get_currentuserinfo(); ?>
		<?php
			if ( is_user_logged_in() ) { 
			 	echo '<div class="alert-box info radius">' . __( 'Welcome ', 'yanse' )  . '<a href="' . home_url('/wp-admin/profile.php') . '" title="' . __( 'Profile', 'yanse' ) . '">' . $current_user->display_name . '</a>' . 
		
			 	' | <span id="logout"><a href="' . wp_logout_url(home_url()) . '" title="' . __( 'Logout', 'yanse' ) . '">Logout</a></span>' .
			 	'</div>'; 
				?>
				
			<?php
			} 
			else {
				?>
		
				<?php the_content(); ?>
		
		<form name="loginform" id="loginform" action="<?php echo home_url(''); ?>/wp-login.php" method="post">

				<div class="large-6 columns">
					
					<input type="text" name="log" id="user_login" placeholder="<?php _e( 'Username', 'yanse' ); ?>"/>
				</div>
				<div class="large-6 columns">
					<input type="password" name="pwd" id="user_pass" placeholder="<?php _e( 'Password', 'yanse' ); ?>"/>
				</div>
				
				<div class="large-6 columns">
					<input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /><label for="rememberme"><?php _e( 'Remember Me', 'yanse' ); ?></label>
				</div>
				
				<div class="large-6 columns">	
					<p>
						<a href="<?php echo home_url(''); ?>/wp-login.php?action=lostpassword" title="<?php _e( 'Lost your password?', 'yanse' ); ?>"><?php _e( 'Lost your password?', 'yanse' ); ?></a>
					</p>
				</div>

			<div class="large-1 columns">
				<input type="submit" name="wp-submit" id="wp-submit" class="button" value="<?php _e( 'Log In', 'yanse' ); ?>"/>
				<input type="hidden" name="redirect_to" value="<?php echo home_url(''); ?>?page_id=19" />
				<input type="hidden" name="testcookie" value="1" />
			</div>
		</form>
		<?php		
				 } 
		?>
		
		
		
		
		
		
		
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'yanse' ), 'after' => '</div>' ) ); ?>

	</div><!-- row -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package mtportofolio
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function mtportofolio_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'mtportofolio_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mtportofolio_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() )
		$classes[] = 'group-blog';

	return $classes;
}
add_filter( 'body_class', 'mtportofolio_body_classes' );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function mtportofolio_wp_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	// Add the blog name
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $sep $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $sep " . sprintf( __( 'Page %s', 'mtportofolio' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'mtportofolio_wp_title', 10, 2 );

function mtportofolio_settings() {
	?>
<div id="wrap">
	<h2><?php echo __('mtportofolio Settings'); ?></h2>
	
	<?php if( isset($_GET['settings-updated']) ) { ?>
		<div id="message" class="updated">
			<p><strong><?php _e('Settings saved.') ?></strong></p>
		</div>
	<?php } ?>
<form method="post" action="options.php">
	 
	<p>
		<strong><label for="mtportofolio_sns_twitter">twitter</label></strong>
		<input type="text" name="mtportofolio_sns_twitter" value="<?php echo get_option( 'mtportofolio_sns_twitter', '' );  ?>" />
	</p>

	<p>
		<strong><label for="mtportofolio_sns_facebook">facebook</label></strong>
		<input type="text" name="mtportofolio_sns_facebook" value="<?php echo get_option( 'mtportofolio_sns_facebook', '' );  ?>" />
	</p>

	<p>
		<strong><label for="mtportofolio_sns_pinterest">pinterest</label></strong>
		<input type="text" name="mtportofolio_sns_pinterest" value="<?php echo get_option( 'mtportofolio_sns_pinterest', '' );  ?>" />
	</p>

	<p>
		<strong><label for="mtportofolio_sns_tumblr">tumblr</label></strong>
		<input type="text" name="mtportofolio_sns_tumblr" value="<?php echo get_option( 'mtportofolio_sns_tumblr', '' );  ?>" />
	</p>
	
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="mtportofolio_sns_twitter,mtportofolio_sns_facebook,mtportofolio_sns_pinterest,mtportofolio_sns_tumblr" />
	<?php wp_nonce_field( 'update-options' ); ?>
	<?php submit_button() ?>
</form>	
</div>
	<?php
}

function mtportofolio_admin_menu() {
	add_submenu_page( 'themes.php', 'mtportofolio', 'mtportofolio', 'edit_theme_options', 'mtportofolio', 'mtportofolio_settings' );
}
add_action( 'admin_menu', 'mtportofolio_admin_menu' );
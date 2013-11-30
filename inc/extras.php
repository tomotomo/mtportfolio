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

/**
 * Get SNS Option Array
 *
 * @return array SNS Option Array.
 */
function mtportofolio_sns_options() {
	return array(
		
		'twitter' => array(
			'key' => 'mtportofolio_sns_twitter',
			'url' => 'http://twitter.com/',
			'css' => 'sns-twitter',
		),

		'facebook' => array(
			'key' => 'mtportofolio_sns_facebook',
			'url' => 'https://www.facebook.com/',
			'css' => 'sns-facebook',
		),

		'pinterest' => array(
			'key' => 'mtportofolio_sns_pinterest',
			'url' => 'http://www.pinterest.com/',
			'css' => 'sns-pinterest',
		),

		'tumblr' => array(
			'key' => 'mtportofolio_sns_tumblr',
			'url' => 'http://www.tumblr.com/follow/',
			'css' => 'sns-tumblr',
		),
		
	);
}

/**
 * Get SNS Option Keys
 *
 * @return array SNS Option Keys.
 */
function mtportofolio_sns_option_keys() {
	$options = mtportofolio_sns_options();
	if ( !$options )
		return '';
	$keys = array();
	foreach ( $options as $option ){
		$keys[] = $option['key'];
	}
	return $keys;
}

/**
 * mtportofolio setting
 *
 * @return none
 */
function mtportofolio_settings() {
	?>
<div class="wrap">
    <?php screen_icon( 'themes' ); ?>
	<h2><?php _e( 'mtportofolio Settings' ); ?></h2>
	
	<?php if( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] == 'true' ) { ?>
		<div id="message" class="updated">
			<p><strong><?php _e( 'Settings saved.' ) ?></strong></p>
		</div>
	<?php } ?>
	
<form method="post" action="options.php">
<table class="form-table">
<tbody>    
	<?php
		$sns_options = mtportofolio_sns_options();
		foreach ( $sns_options as $option_label => $option ) : ?>
	<tr valign="top">
        <th scope="row"><label for="<?php echo $option['key']; ?>"><?php echo $option_label; ?></label></th>
        <td><input type="text" name="<?php echo $option['key']; ?>" value="<?php echo get_option( $option['key'], '' ); ?>" /></td>
	</tr>
	<?php endforeach; ?>
</tbody>
</table>
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="<?php echo implode( ',', mtportofolio_sns_option_keys() ); ?>" />
	<?php wp_nonce_field( 'update-options' ); ?>
	<?php submit_button() ?>    
</form>	
</div>
	<?php
}

/**
 * Get SNS List
 *
 * @param bool $output_service_name = false
 * @param bool $echo = true
 * @return none or string list tag.
 */
function mtportofolio_list_sns( $output_service_name = false, $echo = true ) {
	$html = '';
	$li = '';
	$options = mtportofolio_sns_options();
	if ( !$options )
		return '';
	foreach ( $options as $key => $val ) {
		$option = get_option( $val['key'], '');
		if ( ! $option )
			continue;
		
		if ( $output_service_name ){
			$li .= "<li><a href=\"{$val['url']}{$option}\" class=\"{$val['css']}\">{$key}</a></li>\n";			
		}else{
			$li .= "<li><a href=\"{$val['url']}{$option}\" class=\"{$val['css']}\"></a></li>\n";			
		}
		
	}
	if ( $li ){
		$html = "<ul>{$li}</ul>";
	}
	if ( $echo ){
		echo $html;
	}else{
		return $html;		
	}
}

/**
 * Add submenu page
 *
 * @return none
 */
function mtportofolio_admin_menu() {
	add_submenu_page( 'themes.php', 'mtportofolio', 'mtportofolio', 'edit_theme_options', 'mtportofolio', 'mtportofolio_settings' );
}
add_action( 'admin_menu', 'mtportofolio_admin_menu' );

/**
 * deactive theme
 *
 * @return none
 */
function mtportofolio_switch_theme( $newname, $newtheme ) {
	
	//delete sns options
	$option_keys = mtportofolio_sns_option_keys();
	foreach ( $option_keys as $key ){
		delete_option( $key );
	}
	
}
add_action( 'switch_theme', 'mtportofolio_switch_theme' );

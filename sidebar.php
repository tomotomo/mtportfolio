<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package mtportfolio
 */
?>
	<div id="main-navigation" class="main-navigation-area">
		
		<?php if ( false) dynamic_sidebar(); ?>
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'mtportfolio' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mtportfolio' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<p class="button-login"><a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-login.php">Login</a></p>
		</nav><!-- #site-navigation -->
	</div><!-- .main-navigation-area -->
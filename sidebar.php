<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package mtportofolio
 */
?>
	<div class="main-navigation-area">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'mtportofolio' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mtportofolio' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<p class="button-login"><a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-login.php">Login</a></p>
		</nav><!-- #site-navigation -->
	</div><!-- .main-navigation-area -->
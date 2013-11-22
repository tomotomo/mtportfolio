<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package mtportofolio
 */
?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'mtportofolio' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mtportofolio' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<p class="button-login"><a href="http://wo.mt8.biz/wp-login.php">Login</a></p>
		</nav><!-- #site-navigation -->

<!-- 	<div id="secondary" class="widget-area" role="complementary">
		<?php //do_action( 'before_sidebar' ); ?>
		<?php //if ( false && !dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php //_e( 'Archives', 'mtportofolio' ); ?></h1>
				<ul>
					<?php //wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _//e( 'Meta', 'mtportofolio' ); ?></h1>
				<ul>
					<?php //wp_register(); ?>
					<li><?php //wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php //endif; // end sidebar widget area ?>
	</div> --><!-- #secondary -->

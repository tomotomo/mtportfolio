<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package mtportofolio
 */
?>

	</div><!-- .nav_content -->

	<div class="footer-widget-area" role="complementary">


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
    
    <div class="nav-dummy"><img src="http://wo.mt8.biz/wp-content/uploads/2013/11//wbo_footer01.png" /></div>
    <div class="nav-dummy"><img src="http://wo.mt8.biz/wp-content/uploads/2013/11//wbo_footer02.png" /></div>
    <div class="nav-dummy"><img src="http://wo.mt8.biz/wp-content/uploads/2013/11//wbo_footer03.png" /></div>
    <div class="nav-dummy"><img src="http://wo.mt8.biz/wp-content/uploads/2013/11/wbo_footer04.png" /></div>
	</div><!-- #secondary -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    		<div class="site-info">Copyright(c)mtportfolio</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<!-- <footer id="colophon" class="site-footer" role="contentinfo"> -->
		<!-- <div class="site-info">
			<?php do_action( 'mtportofolio_credits' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'mtportofolio' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'mtportofolio' ), 'mtportofolio', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div> --><!-- .site-info -->
	<!-- </footer> --><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
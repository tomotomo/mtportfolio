<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package mtportofolio
 */
?>
	</div><!-- #content -->

	<div class="footer-widget-area">
		<aside class="widget footer-widget-category">
			<h1><a href="#">Categories</a></h1>
			<ul><?php wp_list_categories('title_li=');?></ul>
		</aside>
		<aside class="widget footer-widget-tag">
			<h1><a href="#">Tags</a></h1>
			<div class="tags-links">
				<a href="#">tag01</a>
				<a href="#">tag02</a>
				<a href="#">tag03</a>
			</div>
		</aside>
		<aside class="widget footer-widget-page">
			<ul><?php wp_list_pages('title_li='); ?></ul>
		</aside>
		<aside class="widget footer-widget-sns">
			<nav class="footer-sns">
				<ul>
	            <li><a href="#" class="sns-twitter">twitter</a></li>
	            <li><a href="#" class="sns-facebook">facebook</a></li>
	            <li><a href="#" class="sns-pinterest">pinterest</a></li>
	            <li><a href="#" class="sns-tumblr">tumblr</a></li>
				</ul>
        	</nav>
		</aside>
	</div><!-- .footer-widget-area -->

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
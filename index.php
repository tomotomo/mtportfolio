<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mtportfolio
 */

// Use CDN
// @link http://cdnjs.com/libraries/masonry/
// @link http://cdnjs.com/libraries/jquery.imagesloaded/
wp_enqueue_script(
	'custom-script',
	'//cdnjs.cloudflare.com/ajax/libs/masonry/2.1.08/jquery.masonry.min.js',
	array( 'jquery' )
);
wp_enqueue_script(
	'custom-script',
	'//cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.0.4/jquery.imagesloaded.min.js',
	array( 'jquery' )
);

get_header(); ?>
<?php get_sidebar(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php mtportfolio_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<script type="text/javascript">
(function($){
$(function(){
	
	// ISSUE #8
	var spW = 480;
	var pcW = 1024;

	var masonry_run = 'none';
	var container = $('#main');
	container.css('with', '100%');

	if (get_mode() !== 'sp') {
		masonry_on();
		masonry_run = get_mode();
		console.log('init success:'+masonry_run);
	}
	container.imagesLoaded(function(){
		if (get_mode() !== 'sp') {
			masonry_on(true);
		}
	});

	$(window).resize(function () {
		var screen = get_mode();
		if (screen !== 'sp') {
			if (screen !== masonry_run) {
				masonry_on(true);
				masonry_run = screen;
			}
		} else {
			masonry_off();
			masonry_run = 'none';
		}
	});
	
	function get_mode () {
		var mode;
		var htmlWidth = $('html').width();
		if (pcW < htmlWidth) {
			mode = 'pc';
		} else if (htmlWidth <= spW) {
			mode = 'sp';
		} else {
			mode = 'tb';
		}
		return mode;
	}
	
	function masonry_on (reload) {
		if (reload) {
			console.log('masonry reload:'+masonry_run+' to '+get_mode());
			masonry_off();
		}
		container.masonry({
			itemSelector: '.post-area',
//			isFitWidth: true,
			isAnimated: true
		});
		console.log('masonry on');
	}
	function masonry_off () {
		if (masonry_run==='none') return;
		container.masonry('destroy');
		console.log('masonry off');
	}

});
})(jQuery);
</script>
<?php get_footer(); ?>

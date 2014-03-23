<?php
/**
 * @package mtportfolio
 */
?>
<div class="post-area">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">		    
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php mtportfolio_the_thumbnail(); ?></a>			
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'mtportfolio' ) );
					if ( $categories_list && mtportfolio_categorized_blog() ) :
				?>
				<span class="cat-links">
					<?php printf( __( '%1$s', 'mtportfolio' ), $categories_list ); ?>
				</span>
				<?php endif; // End if categories ?>

				<?php
					/* translators: used between list items, there is a space after the comma */
					$tags_list = get_the_tag_list( '', __( ' ', 'mtportfolio' ) );
					if ( $tags_list ) :
				?>
				<span class="tags-links">
					<?php printf( __( '%1$s', 'mtportfolio' ), $tags_list ); ?>
				</span>
				<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>

			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post-## -->
</div><!-- .post-area -->

<?php
/**
 * The template for displaying all pages.
 *
 * @package Beyond The Conversation
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-find-us" role="main">
		
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			<?php get_sidebar(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

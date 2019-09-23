<?php
/**
 * The template for displaying search results pages.
 *
 * @package Beyond The Conversation
 */

get_header('search'); ?>

	<section id="primary" class="content-area">
		<main id="main" class="search-main" role="main">

			<?php if ( get_search_query() ) : ?>

				<?php if ( have_posts() ) : ?>

					<?php echo get_search_form(); ?>

					<?php $allsearch = new WP_Query("s=$s&showposts=0"); ?>
					<div class="search-numbers">
						<?php echo 'About '.$allsearch ->found_posts.' result(s) for ' . '"' . '<span class="search-query">' . get_search_query() . '</span>' . '"'; ?>
					</div>

					<h1 class="search-section-title">Top Results</h1>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'search' ); ?>

					<?php endwhile; ?>

					<?php red_starter_numbered_pagination(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

				<!-- Area when search icon clicked -->
				<?php else : ?>

					<?php echo get_search_form(); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>

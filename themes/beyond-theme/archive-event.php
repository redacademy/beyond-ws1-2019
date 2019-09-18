<?php
/**
 * The template for displaying archive pages.
 *
 * @package Beyond The Conversation
 */

get_header(); ?>

	<div id="primary" class="events-content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
					<h1 class="page-title">Upcoming Events</h1>
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>


			<a href="#" id="loadMore">Load More</a>

			<p>We also host weekly meet-ups in your local area.</p>
			<a href="<?php echo get_permalink( get_page_by_path( 'find-us' ) ) ?>">See your nearest locations --></a>

			<h1 class="page-title">Past Events</h1>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
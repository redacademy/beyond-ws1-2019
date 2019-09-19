<?php
/**
 * The template for displaying archive pages.
 *
 * @package Beyond The Conversation
 */

get_header(); ?>

			<div id="primary" class="events-content-area">
				<main id="main" class="site-main" role="main">

				<?php $query = new WP_Query( array(
					'post_type'  => 'event',
					'posts_per_page' => 2,
				) ); ?>

		<?php if ( $query->have_posts() ) : ?>

			<header class="page-header">
				
					<h1 class="page-title">Upcoming Events</h1>
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				
					<h2 class="cfs-title"><?php echo CFS()->get( 'title' ); ?></h2>
					<p class="cfs-description"><?php echo CFS()->get( 'description' ); ?></p>
				

			<?php endwhile; ?>


			<a href="#" id="loadMore">Load More</a>

			<p class="meet-ups">We also host weekly meet-ups in your local area.</p>
			<a class="link-find-us" href="<?php echo get_permalink( get_page_by_path( 'find-us' ) ) ?>">See your nearest locations<i class="fas fa-arrow-right"></i></a>

			<h1 class="page-title">Past Events</h1>



			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
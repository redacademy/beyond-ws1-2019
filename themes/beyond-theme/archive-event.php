<?php
/**
 * The template for displaying archive pages.
 *
 * @package Beyond The Conversation
 */

get_header('events'); ?>

			<div id="primary" class="events-content-area">
				<main id="main" class="site-main" role="main">

				<?php $query_upcoming = new WP_Query( array(
					'post_type'  => 'event',
					'posts_per_page' => 2,
					'meta_query' => array (
						array(
						'key' => 'date',
						'value' => date('d/m/Y', strtotime("today")),
						'type' => 'DATE',
						'compare' => '>='
						)
					)
				) ); ?>

		<?php if ( $query_upcoming->have_posts() ) : ?>

			<header class="page-header">
				
					<h1 class="page-title">Upcoming Events</h1>
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( $query_upcoming->have_posts() ) : $query_upcoming->the_post(); ?>

					<h2 class="event-title"><?php echo $query_upcoming->post->post_title; ?></h2>
					<p class="event-description"><?php echo $query_upcoming->post->post_description; ?></p>
					<p class="event-date"><?php echo get_post_meta($query_upcoming->post->ID, 'date', true ); ?></p>
					<p class="event-time"><?php echo get_post_meta($query_upcoming->post->ID, 'time', true ); ?></p>
					<p class="event-location"><?php echo get_post_meta($query_upcoming->post->ID, 'location', true ); ?></p>
					<p class="event-type"><?php echo get_post_meta($query_upcoming->post->ID, 'event_type', true ); ?></p>
					<a class="rsvp" href="<?php echo get_post_meta($query_upcoming->post->ID, 'rsvp', true )['url']; ?>" target="<?php echo get_post_meta($query_upcoming->post->ID, 'rsvp', true )['target']; ?>"><?php echo get_post_meta($query_upcoming->post->ID, 'rsvp', true )['text']; ?></a>
					<img src="<?php echo get_post_meta($query_upcoming->post->ID, 'image', true ); ?>" class="event-image">



			<?php endwhile; ?>


			<a href="#" id="loadMore">Load More</a>

			<p class="meet-ups">We also host weekly meet-ups in your local area.</p>
			<a class="link-find-us" href="<?php echo get_permalink( get_page_by_path( 'find-us' ) ) ?>">See your nearest locations<i class="fas fa-arrow-right"></i></a>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		


			<?php $query_past = new WP_Query( array(
					'post_type'  => 'event',
					'posts_per_page' => 2,
					'meta_query' => array (
						array(
							'key' => 'date',
							'value' => date('Y-m-d', strtotime("today")),
							'type' => 'DATETIME',
							'compare' => '<='
						)
					)
				) ); ?>

		<?php if ( $query_past->have_posts() ) : ?>

			<header class="page-header">
				
					<h1 class="page-title">Past Events</h1>
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( $query_past->have_posts() ) : $query_past->the_post(); ?>

					<h2 class="event-title"><?php echo $query_past->post->post_title; ?></h2>
					<p class="event-description"><?php echo $query_past->post->post_description; ?></p>
					<p class="event-date"><?php echo get_post_meta($query_past->post->ID, 'date', true ); ?></p>
					<p class="event-time"><?php echo get_post_meta($query_past->post->ID, 'time', true ); ?></p>
					<p class="event-location"><?php echo get_post_meta($query_past->post->ID, 'location', true ); ?></p>
					<p class="event-type"><?php echo get_post_meta($query_past->post->ID, 'event_type', true ); ?></p>
					<a class="rsvp" href="<?php echo get_post_meta($query_past->post->ID, 'rsvp', true )['url']; ?>" target="<?php echo get_post_meta($query_past->post->ID, 'rsvp', true )['target']; ?>"><?php echo get_post_meta($query_past->post->ID, 'rsvp', true )['text']; ?></a>
					
					<?php
						$image_id = get_post_meta($query_past->post->ID, 'image', true );
					?>
					<img src="<?php echo wp_get_attachment_url( $image_id ) ; ?>" class="event-image">
			<?php endwhile; ?>



			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
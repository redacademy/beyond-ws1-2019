<?php
/**
 * Template name: front-page
 * The main template file.
 *
 * @package Beyond The Conversation
 */

get_header(); ?>

	<div id="primary" class="content-area-front">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?> 

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
		
			<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'home' ); ?>

			<?php endif; ?>
			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>
			
			<?php the_posts_navigation(); ?>
			
			<a href="<?php echo get_permalink( get_page_by_path( 'who-we-are' ) ) ?>"><button class="who-we-btn"> Who we are ></button></a>
			<h2 class="title-front"> <?php echo CFS()->get('title'); ?></h2>
			<p class="description-front"> <?php echo CFS()->get('description'); ?></p>

			<?php $args = array(
  			 'order' => 'ASC',
   			'posts_per_page' => 3,
   			'post_type' => array('post'),
			);
			$query = new WP_Query( $args ); ?>


			<?php $query = new WP_Query( $args ); /* $args set above*/ ?>
			<?php if ( $query->have_posts() ) : ?>
  			 <?php while ( $query->have_posts() ) : $query->the_post(); ?><div class="front-wrap-container">
			  <div class="front-post-container"> <?php the_post_thumbnail(); ?></div>
	 		 <div class="post-info">
	 		 <div class="front-comments"> <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?></div>
	 		 <div class="front-post-title"><?php the_title(sprintf( '<h2 class="frontpost"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>'); ?>
	 		 </div>
	 		 <div class="buttonfront">
	  		<a href="<?php echo esc_url( get_permalink() )?>"> Read more → </a></span>
			</div>
				</div>
			</div>
   			<?php endwhile; ?>
  			 <?php wp_reset_postdata(); ?>
			<?php else : ?>
      		<h2>Nothing found!</h2>
			<?php endif; ?>

			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
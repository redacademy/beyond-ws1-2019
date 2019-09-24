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
			<div class="who-btn">
			<a href="<?php echo get_permalink( get_page_by_path( 'who-we-are' ) ) ?>"><button class="who-we-btn"> Who we are ></button></a>
			</div>
			<h2 class="title-front"> <?php echo CFS()->get('title'); ?></h2>
			<p class="description-front"> <?php echo CFS()->get('description'); ?></p>

			<div class="hideclass"><a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ) ?>"> <h2>See our blog</h2></a></div>
			<h3 class="article-title">Recent Article</h3>


			<div class="cards-content">
						<?php
							$fpblog_loop = new WP_Query( array(
								'post_type' => 'post',
								'order' => 'DESC',
								'posts_per_page' => 2,
							)); 
							?>

							<?php if ( $fpblog_loop->have_posts() ) : ?>
							<?php while ( $fpblog_loop->have_posts() ) : $fpblog_loop->the_post(); ?>
								
								<?php get_template_part( 'template-parts/content-home' ); ?>

							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>

							<?php else : ?>
							<p><?php __('No post found'); ?></p>
						<?php endif; ?>
			</div>



			<div class="main-carousel" data-flickity='{ "cellAlign": "right", "contain": true, "wrapAround": true, "prevNextButtons": true, "autoPlay": true}'>
			
			<?php $loop = CFS()->get( 'testimonial' ); ?>
			<?php foreach ( $loop as $row ) { ?> 
				
				<div class="carousel-cell"> 
					
					
					<p class="cfs-quote-test"><?php echo $row['quote']; ?></p>
					
				</div>	
			<?php }	?>
			</div>
			

			<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
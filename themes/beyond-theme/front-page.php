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

			<h3 class="article-title">Recent Article</h3>
			<div class="cards-content">
			<?php $args = array(
  			 'order' => 'ASC',
   			'posts_per_page' => 2,
   			'post_type' => array('post'),
			);
			$query = new WP_Query( $args ); ?>


			<?php $query = new WP_Query( $args ); /* $args set above*/ ?>
			<?php if ( $query->have_posts() ) : ?>
			   <?php while ( $query->have_posts() ) : $query->the_post(); ?>
			
			
			<div class="resources-card">
			<div class="imgs"> <?php the_post_thumbnail(); ?></div>
			  <div class="class-content">
			  <h1 class="blog-title"><a href='<?php echo esc_url( get_permalink() ) ?>'><?php echo wp_trim_words(get_the_title(), 4, null); ?></a></h1>

	 		 <div class="card-info"> <div class="blog-meta">
					<span class="posted-on"><?php red_starter_posted_on(); ?></span><span class="posted-by"><?php red_starter_posted_by(); ?></span></div>
					
			  <div class="comment-card">
					<i class="fa fa-comment"></i><span class="comment-number"><?php comments_number( '0', '1', '%' ); ?></span>
				</div>
	 		 </div>
	 		 <div class="read-more">
			  <?php echo sprintf( '<div class="read-more"><a href="%s" rel="bookmark"><div class="button">', esc_url( get_permalink() )).'Read more <span class="arrow">&gt;</span></div></a></div>'; ?>
			</div>
				</div>
			</div>
		
   			<?php endwhile; ?>
  			 <?php wp_reset_postdata(); ?>
			<?php else : ?>
      		<h2>Nothing found!</h2>
			<?php endif; ?>
			</div>
			<div class="main-carousel" data-flickity='{ "cellAlign": "right", "contain": true, "wrapAround": true, "prevNextButtons": false, "autoPlay": true}'>
			
			<?php $loop = CFS()->get( 'testimonial' ); ?>
			<?php foreach ( $loop as $row ) { ?> 
				
				<div class="carousel-cell"> 
					
					<?php echo '<img class="cfs-photo-testimonial" src="'.$row["photo"].'"/>'; ?>
					<p class="cfs-quote-test"><?php echo $row['quote']; ?></p>
					
				</div>	
			<?php }	?>
			</div>
			

			<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
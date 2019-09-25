<?php
/**
 * Template name: page-news
 * The template for displaying all pages.
 *
 * @package Beyond The Conversation
 */

get_header(); ?>

	<div id="primary" class="content-area-news">
		<main id="main" class="site-main" role="main">

		<div class="news-container">
		<div class="news-card">
		<?php $loop = CFS()->get( 'news' ); ?>
			<?php foreach ( $loop as $row ) { ?> 
					<div class="cfs-news">
					<?php echo '<img class="cfs-photo-news" src="'.$row["photo"].'"/>'; ?>
					<div class="card-content">
							<p class="cfs-source-news"><?php echo $row['source']; ?></p>
							<p class="cfs-title-news"><?php echo $row['title']; ?></p>
							<p class="cfs-date-news"><?php echo $row['date']; ?></p>
							<p class="cfs-url-news"><?php echo $row['url']; ?></p>
			</div>
						</div>	
					<?php }	?>
				</div>	
			</div>
			<!-- <button class="news">news</button>
			<li class="style">
				<a></a>
				<div class="image"></div>
			</li> -->
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>

			<?php red_starter_numbered_pagination(); ?> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

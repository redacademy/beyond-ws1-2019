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
							<p class="cfs-source-news"><?php echo $row['source']; ?></p>
							<p class="cfs-title-news"><?php echo $row['title']; ?></p>
							<p class="cfs-date-news"><?php echo $row['date']; ?></p>
							<p class="cfs-url-news"><?php echo $row['url']; ?></p>
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

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

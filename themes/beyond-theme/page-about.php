<?php
/** 
 * Template Name: About
 * The template for displaying all pages.
 *
 * @package Beyond The Conversation
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="about-content">
		
	<h2 class="cfs-title"><?php echo CFS()->get( 'title' ); ?></h2>
	<p class="cfs-description"><?php echo CFS()->get( 'description' ); ?></p>
	
		<?php $loop = CFS()->get( 'member' ); ?>
			<?php foreach ( $loop as $row ) { ?> 
				<div class="cfs-member">
					<?php echo '<img class="cfs-photo" src="'.$row["photo"].'"/>'; ?>
					<div class="cfs-info">
						<p class="cfs-name"><?php echo $row['name']; ?></p>
						<p class="cfs-role"><?php echo $row['role']; ?></p>
						<p class="cfs-quote"><?php echo $row['quote']; ?></p>
					</div>	
				</div>
			<?php }	?>
		
			<a href="#" id="loadMore">Load More</a>


				
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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
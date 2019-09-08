<?php
/**
 * Template part for displaying single posts.
 *
 * @package Beyond The Conversation
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="singleblog-header">


		<?php the_title( '<h1 class="singleblog-title">', '</h1>' ); ?>

		<div class="singleblog-entry-meta">
			<?php echo get_avatar( $comment, 25 ); ?>
			<?php single_post_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="singlepost-entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

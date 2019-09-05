<?php
/**
 * Template part for displaying posts.
 *
 * @package Beyond The Conversation
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="resources-card">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		
		<h1 class="blog-title"><a href='<?php echo esc_url( get_permalink() ) ?>'><?php echo wp_trim_words(get_the_title(), 4, null); ?></a></h1>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="blog-meta">
			<?php red_starter_posted_on(); ?><?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
			
		<i class="fa fa-comment"></i> <?php comments_number( '0', '1', '%' ); ?>
		
		<?php endif; ?>
		<?php echo sprintf( '<div class="read-more"><a href="%s" rel="bookmark"><div class="button">', esc_url( get_permalink() )).'Read More &gt;</div></a></div>'; ?>
	</div><!-- .entry-header -->
</article><!-- #post-## -->

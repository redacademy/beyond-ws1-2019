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
		<div class="class-content">
			<h1 class="blog-title"><a href='<?php echo esc_url( get_permalink() ) ?>'><?php echo wp_trim_words(get_the_title(), 4, null); ?></a></h1>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="blog-meta">
				<span class="posted-on"><?php red_starter_posted_on(); ?></span><span class="posted-by"><?php red_starter_posted_by(); ?></span>
			</div><!-- .entry-meta -->
			
			<div class="comment-card">
				<i class="fa fa-comment"></i><span class="comment-number"><?php comments_number( '0', '1', '%' ); ?></span>
			</div>
		
			<?php endif; ?>
			<?php echo sprintf( '<div class="read-more"><a href="%s" rel="bookmark"><div class="button">', esc_url( get_permalink() )).'Read more <span class="arrow">&gt;</span></div></a></div>'; ?>
		</div>
	</div><!-- .entry-header -->
</article><!-- #post-## -->

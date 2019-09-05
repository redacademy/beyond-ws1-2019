<?php
/**
 * Template part for displaying posts.
 *
 * @package Beyond The Conversation
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="resources-card">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
			<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
		<?php endif; ?>
		<?php echo sprintf( '<div class="read-more"><a href="%s" rel="bookmark"><div class="button">', esc_url( get_permalink() )).'Read More &gt;</div></a></div>'; ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->

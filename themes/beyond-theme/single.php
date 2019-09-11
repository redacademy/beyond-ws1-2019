<?php
/**
 * The template for displaying all single posts.
 *
 * @package Beyond The Conversation
 */

get_header('single'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="single-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		<div class="posts-links">
			<?php previous_post_link('%link', '< Previous'); ?>
			<?php next_post_link('%link', 'Next >'); ?>
		</div>
		<div class="go-back-btn"><?php echo "<a href=\"javascript:history.go(-1)\">< Back to Blog</a>"; ?></div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
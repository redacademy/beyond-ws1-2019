<?php
/**
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
		
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
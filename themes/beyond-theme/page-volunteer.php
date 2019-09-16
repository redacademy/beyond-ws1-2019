<?php
/**
 * The template for displaying all pages.
 *
 * @package Beyond The Conversation
 */

get_header(); ?>

	<div id="primary" class="content-area-volunteer">
		<main id="main" class="site-main-volunteer" role="main">
			<div class="title-vol">
			<h1>Join our team</h1>
			<h2>We're looking for exceptional volunteers like you</h2>
			</div>
			<div class="grid-vol">
			<div class="grid-container">
			<img src="<?php echo get_stylesheet_directory_uri();?>/Media/icon/icon-volunteer-fundraising-team-box.svg" alt="fundraising team">
			<p>Join the fundraising team</p>
			</div>
			<div class="grid-container">
			<img src="<?php echo get_stylesheet_directory_uri();?>/Media/icon/icon-volunteer-fundraising-team.svg" alt="fundraising team">
			<p>Become a mental health facilitator</p>
			</div>
			<div class="grid-container">
			<img src="<?php echo get_stylesheet_directory_uri();?>/Media/icon/icon-volunteer-directors-team.svg" alt="fundraising team">
			<p>Join the director's team</p>
			</div>
			<div class="grid-container">
			<img src="<?php echo get_stylesheet_directory_uri();?>/Media/icon/icon-volunteer-organizer-team.svg" alt="fundraising team">
			<p>Join the event organizer team</p>
			</div>
			<div class="grid-container">
			<img src="<?php echo get_stylesheet_directory_uri();?>/Media/icon/icon-volunteer-social-media-coordinators-team.svg" alt="fundraising team">
			<p>Join the social media coordinator's team</p>
			</div>
			<div class="grid-container">
			<img src="<?php echo get_stylesheet_directory_uri();?>/Media/icon/icon-volunteer-facilitator.svg" alt="fundraising team">
			<p>Become a lead facilitator or co-facilitator</p>
			</div>
			</div>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'volunteer' ); ?>

		<?php endwhile; ?>	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

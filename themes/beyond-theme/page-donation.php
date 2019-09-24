<?php
/**
 * The template for displaying all pages.
 *
 * @package Beyond The Conversation
 */

get_header(); ?>

	<div id="primary" class="content-area-donation">
		<main id="main" class="site-main" role="main">
<h1>Help the cause</h1>
<div class="content">
	<h3>Your donation builds stronger, safer, healthier and resilent communities
	</h3>
	<p>Your donation builds stronger, safer , healthier and more resilent communities. Develop and sustain a growing, inclusive, volunteer-led commununity, dedicated to understanding and reducing social insolation's negative impact on individuals and society through effective communication and action</p>
</div>


<div class="img-links">
<div class="donation-links">
<a href="https://www.paypal.com/donate/?token=7fvInfjpn1nfIqFmAVEwXlzvHlnRPGSAqLbY3CftKgkeqkaSZsmd38Vi8YfkRNbNVfRQ2m&country.x=CA&locale.x=CA"> <div class="img-donation">
<img src="<?php echo get_stylesheet_directory_uri();?>/Media/icon/icon-donation.svg" alt="fundraising team">
<p>Contribute to donation</p> 
</div></a>
</div>

<div class="donation-links">
<a href="<?php echo get_permalink( get_page_by_path( 'volunteer' ) ) ?>"><div class="img-volunteer">
<img src="<?php echo get_stylesheet_directory_uri();?>/Media/icon/support-as-volunteer.svg" alt="fundraising team">
<p>Support as a volunteer</p> 
</div></a>
</div>
</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying the footer.
 *
 * @package Beyond The Conversation
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="footer">
						<h1>Let's Talk</h1>
						
						<div class="footer-desktop">
							<?php dynamic_sidebar( 'footer-1' ); ?>
							<div class="logo-social-footer">
								<div class="footer-logo">
									<?php echo '<style type="text/css">
												.footer-logo {
													margin: 0 auto;
													background-image: url('.get_stylesheet_directory_uri().'/Media/logo/svg/logo-footer.svg) !important;
													width: 300px;
													height: 200px;
													background-position: center;
													background-repeat: no-repeat;
												}
									</style>';?>
								</div>

								
							</div>
					</div>
					<div class="footer-author">
							<p>© 2019 Amie Peacock.</p>
							<p>All materials are copyright protected and may not be distributed without the author's express written permission.</p>
						</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

<?php
/**
 * The header for our theme.
 *
 * @package Beyond The Conversation
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		


	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			
				<?php if( is_home() ): ?>
					<h1 class=text-header-blog><?php echo esc_html( 'Blog' ); ?></h1>
				<?php elseif( is_post_type_archive() ): ?>
					<h1 class="text-header">What's On</h1>
				<?php else: ?>
					<?php the_title( sprintf( '<h1 class="text-header">', esc_url( get_permalink() ) ), '</h1>' ); ?>
				<?php endif ?>


				<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>

				<style>
					.site-header {
						background: linear-gradient(180deg, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .5)), url('<?php echo $background[0]; ?>');
						background-position: center;
						background-size: 100%;
						background-repeat: no-repeat;
						width: 100%;
					}
				</style>

				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<a class="logo-container" href='<?php echo esc_url(home_url('/')); ?>'>
						<?php echo '<style type="text/css">
							// .logo-container {
							// 	order: 1;
							// }
							</style>'; ?>
						<div class="white-icon">
							<?php echo '<style type="text/css">
								.white-icon {
									background-image: url('.get_stylesheet_directory_uri().'/Media/logo/logo-white.svg) !important;
									width: 110px;
									height: 31px;
									background-size: 100% !important;
									background-position: center;
									background-repeat: no-repeat;
								}
									@media (min-width: 850px) {
										.white-icon {
											width: 200px;
											height: 80px;
											transition: all 0.25s ease-in-out 0.25s;
									}
									@media (min-width: 1200px) {
										.white-icon {
											width: 350px;
											height: 110px;
											transition: all 0.25s ease-in-out 0.25s;
										}
									}
								</style>';?>			
						</div>
					</a>
					<button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<?php echo '<style type="text/css">
							.menu-toggle {
								background-image: url('.get_stylesheet_directory_uri().'/Media/icon/menu.svg) !important;
								width: 36px !important;
								height: 50% !important;
								background-size: 100% !important;
								background-position: center;
								background-repeat: no-repeat;
								margin-right: 20px;
								order: 3;
							}
							</style>';?>			
					</button>
					<div class="dynamic-nav">
						<a class="search-icon" href="<?= site_url( '?s=' ); ?>"></a>
					</div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			</header><!-- #masthead -->

			<div id="content" class="site-content">

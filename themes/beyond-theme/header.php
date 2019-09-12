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
					<?php the_title( sprintf( '<h1 class="text-header-blog">', esc_url( get_permalink() ) ), '</h1>' ); ?>
					<?php else: ?>
					<?php the_title( sprintf( '<h1 class="text-header">', esc_url( get_permalink() ) ), '</h1>' ); ?>
				<?php endif ?>

				<?php if( is_front_page() ): ?>
						<?php echo '<style type="text/css"> .site-header { background-image:url('.get_stylesheet_directory_uri().'/Media/Images/Homepage/heroimage-homepage@2x.jpg) !important; width: 100% !important; background-size: 100% !important; background-position: center; background-repeat: no-repeat;}</style>';?>
				<?php else: ?>
						<?php echo '<style type="text/css"> .site-header { background-image:url('.get_stylesheet_directory_uri().'/Media/Images/Event/event-courselimage@2x.jpg) !important; width: 100% !important; background-size: 100% !important; background-position: center; background-repeat: no-repeat;}</style>';?>			
				<?php endif ?>

				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="white-icon">
					<?php echo '<style type="text/css"> .white-icon { background-image:url('.get_stylesheet_directory_uri().'/Media/logo/logo-white.svg) !important; width: 110px !important; height: 31px !important; background-size: 100% !important; background-position: center; background-repeat: no-repeat;}</style>';?>			
					</div>
					<button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<?php echo '<style type="text/css"> .menu-toggle { background-image:url('.get_stylesheet_directory_uri().'/Media/icon/menu.svg) !important; width: 36px !important; height: 50% !important; background-size: 100% !important; background-position: center; background-repeat: no-repeat;}</style>';?>			
					</button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			</header><!-- #masthead -->

			<div id="content" class="site-content">

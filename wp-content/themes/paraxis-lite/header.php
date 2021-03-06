<?php
/**
 *	The header for our theme.
 *
 *	This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *	@link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 *	@package WordPress
 *	@subpackage paraxis-lite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.0.26/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
			<?php if ( get_theme_mod('site_favicon') ) : ?>
				<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
			<?php endif; ?>
		<?php endif; ?>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'paraxis-lite' ); ?></a>

			<?php $menu_text = get_theme_mod('menu_text'); ?>
			<div class="sidebar-toggle">
			<?php if (!$menu_text) : ?>
				<i class="fa fa-bars"></i>
			<?php else : ?>
				<?php echo esc_html($menu_text); ?>
			<?php endif; ?>
			</div>

			<div class="top-bar container">
				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation clearfix">
						<?php wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'menu_class' => 'menu clearfix', 'fallback_cb' => false ) ); ?>
					</nav>
				<?php endif; ?>
				<?php if ( get_theme_mod('search_toggle') ) : ?>
				<div class="header-search">
					<?php get_search_form(); ?>
				</div>
				<?php endif; ?>
			</div>

			<div class="svg-container nav-svg svg-block">
				<?php oblique_svg_3(); ?>
			</div>
			<header id="masthead" class="site-header" role="banner">
				<div class="overlay"></div>
				<div class="container">
					<div class="site-branding">

		        <?php if ( get_theme_mod('site_logo') && get_theme_mod('logo_style', 'hide-title') == 'show-title' ) : //Show logo, site-title, site-description ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
						<img class="site-logo show-title" src="<?php echo esc_url(get_theme_mod('site_logo', get_stylesheet_directory_uri() . '/assets/images/header-logo.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
					</a>
				<?php elseif ( get_theme_mod('site_logo') && get_theme_mod('logo_style', 'hide-title') == 'hide-title' ) : //Show only logo ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo', get_stylesheet_directory_uri() . '/assets/images/header-logo.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" /></a>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php else : //Show only site title and description ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="svg-container header-svg svg-block">
					<?php oblique_svg_1(); ?>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
				<div class="container content-wrapper">

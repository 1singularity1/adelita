<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Superhero
 * @since Superhero 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<div id="masthead-wrap">
	<header id="masthead" class="site-header" role="banner">
		<div id="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<!-- img src="<?php echo get_template_directory_uri(); ?>/images/logo_adelitas_tampon_mexican_pink_incline_avec_fond.png"-->
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_adelitas_tampon_mexican_pink_incline_fond_blanc.png">
				</a>
		</div>
		<hgroup>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
	
		<div class="clearfix"></div>
	</header><!-- #masthead .site-header -->
	</div><!-- #masthead-wrap -->

	<?php if ( is_front_page() ) : ?>
		<?php get_template_part( 'slider' ); ?>
	<?php endif; ?>

	<div id="main" class="site-main">
		<nav role="navigation" class="site-navigation main-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', 'superhero' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'superhero' ); ?>"><?php _e( 'Skip to content', 'superhero' ); ?></a></div>
	
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
	
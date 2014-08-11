<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mitm
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mitm' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<!-- Contact form -->
		<div class="contact-info hide" style="display:none">
			<div class="contact-left">
				<div class="text">
					<?php echo get_field( 'contact_text', 'option' ) ?>
				</div>
				<div class="email">
					you can right me at: <span><?php echo get_field( 'contact_email', 'option' ) ?></span>
				</div>
				<div class="phone">
					call at: <span><?php echo get_field( 'contact_phone', 'option' ) ?></span>
				</div>
				<div class="social-links">
					<a href="#">Facebook</a>
					<a href="#">Twitter</a>
					<a href="#">Pinterest</a>
				</div>
			</div>
			<div class="contact-right">
				<form>
					<div>Or drop a line here</div>
					<input name="name" type="text">
					<input name="email" type="text">
					<textarea name="content"></textarea>
					<button name="Send">Send</button>
				</form>
			</div>
		</div>
		<!-- end contact form -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'mitm' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

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
			<!--<link rel="profile" href="http://gmpg.org/xfn/11">-->
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
			<script>
			
			</script>
			<?php wp_head(); ?>
		</head>
		<body <?php body_class(); ?>>
			<?php if( is_page_template( 'page-homepage.php' ) ) { ?>
				<div id="welcome-screen">
					<h1 class="logo">&nbsp;</h1>
					<a href="" id="go_btn">&nbsp;</a>
				</div>
			<?php } ?>
			<div id="page" class="hfeed site">
				<header id="masthead" class="site-header" role="banner">
					
					<!-- Contact form -->
					<div class="contact-info" style="display:none">
						<a href="" class="close-box"></a>
						<div class="col-sm-6 col-md-6 col-lg-6 left">
							<p>
							<?php echo get_field( 'contact_text', 'option' ) ?>
							</p>
							<p class="email">
							you can right me at: <span><a href="mailto:<?php echo get_field( 'contact_email', 'option' ) ?>" target="_blank"> <?php echo get_field( 'contact_email', 'option' ) ?></a></span>
							</p>
							<p class="phone">
							call at: <span><?php echo get_field( 'contact_phone', 'option' ) ?></span>
							</p>
							<div class="social-links">
								<a href="#" class="facebook">Facebook</a>
								<a href="#" class="twitter">Twitter</a>
								<a href="#" class="pinterest">Pinterest</a>
							</div>
						</div>
						
						<div class="col-sm-6 col-md-6 col-lg-6 right">
							<div class="contact">
								<div class="title-section">
									drop a line here
								</div>
								<p class="error"></p>
								<form class="contact-info-form" name="contact-form">
									<div class="form">
										<input name="name" type="text" class="name input-text" placeholder="name">
										<input name="email" type="text" class="email input-text" placeholder="email id">
										<textarea name="message" class="input-text" placeholder="Hello! Your message."></textarea>
										<input type="submit" class="button orange" value="send">
									</div>
								</form>
								
								<div class="success" style="display:none;">
									Thank you for contacting us. we will get back to you soon.
								</div>
								
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="container header-section">
						<div class="row">
							<div class="site-branding">
								<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								
							</div>
							<!-- end contact form -->
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
								</nav><!-- #site-navigation -->
							</div>
						</div>
						</header><!-- #masthead -->
						<div id="content" class="site-content">
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package mitm
 */
?>

	</div><!-- #content -->
	<?php if ( ! is_page_template( 'page-homepage.php' ) && ! is_page_template( 'page-about.php' ) ) { ?>
		<div class="subscribe-form-wrapper">
			<div class="page-section ">
				<form class="subscribe-form" name="newlsetter-form">
					<input type="text" name="email" placeholder="YOUR EMAIL ADDRESS HERE" >
					<!--<button type="submit">Know More</button>-->
					<button type="submit">SUBSCRIBE</button>
				</form>
				<div class="success message" style="display:none">Thank for subscribing us!</div>
			</div>
		</div>
	<?php } ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="social-links">
				<a class="facebook" href="<?php echo get_field( 'facebook_url', 'option' ) ?>">Facebook</a>
				<a class="twitter" href="<?php echo get_field( 'twitter_url', 'option' ) ?>">Twitter</a>
				<a class="pinterest" href="<?php echo get_field( 'pinterest_url', 'option' ) ?>">Pinterest</a>
			</div>
			<div class="copy-right">
			<?php echo get_field( 'copyright', 'option' ) ?>
			</div><!-- .site-info -->
			
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

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
					<button type="submit">Know More</button>
				</form>
				<div class="success message" style="display:none">Thank for subscribing us!</div>
			</div>
		</div>
	<?php } ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="copy-right">
			<?php echo get_field( 'copyright', 'option' ) ?>
			</div><!-- .site-info -->
			<div class="social-links">
				<a class="facebook" href="#">Facebook</a>
				<a class="twitter" href="#">Twitter</a>
				<a class="pinterest" href="#">Pinterest</a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="copy-right">
			<?php echo get_field( 'copyright', 'option' ) ?>
		</div><!-- .site-info -->
		<div class="social-links">
			<a href="#">Facebook</a>
			<a href="#">Twitter</a>
			<a href="#">Pinterest</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

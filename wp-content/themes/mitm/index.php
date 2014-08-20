<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mitm
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title() ?></h1>
				<div class="social-links">
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Pinterest</a></li>
					</ul>
				</div>
				<div class="read-more">
					<a href="<?php the_permalink() ?>">Read More</a>
				</div>
				<div class="post-excerpt">
					<?php the_excerpt() ; wp_link_pages()?>
				</div>
			<?php endwhile; ?>

			<?php wp_paginate(); ?>

		<?php else : ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<script type="text/javascript">
  $(document).ready(function(){
  		$('.bxslider').bxSlider({
		  mode: 'fade',
		  captions: true
		});
  });
</script>

<?php get_footer(); ?>

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
	<div id="primary" class="blog-page">
		<div class="banner-img">
			<figure class="studio-page-banner " style="background-image:url(<?php the_field( 'banner' ) ?>)"></figure>
		</div>
		<div id="main" class="container" role="main">
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="post-section">
					<section>
						<div class="post-title"><?php the_title() ?></div>
						<div class="post-image"><?php the_post_thumbnail() ?></div>
					<div class="post-detail">
						<?php the_excerpt() ; wp_link_pages()?>
					</div>
					</section>
				<div class="social-links">
					<ul>
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="pinterest"><a href="#">Pinterest</a></li>
					</ul>
				</div>
				<div class="read-more">
					<a href="<?php the_permalink() ?>">Read More</a>
				</div>

				</div>
			<?php endwhile; ?>
			
			

		<?php else : ?>

		<?php endif; ?>

		</div><!-- #main -->
		<div class="container blog-paging">
				<?php wp_paginate(); ?>
			</div>
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

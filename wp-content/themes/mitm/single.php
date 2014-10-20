<?php
/**
* The template for displaying all single posts.
*
* @package mitm
*/
get_header(); ?>
<div id="primary" class="blog-page blog-details"><div class="banner-img">
	<figure style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/blog-hero.jpg)">
		<!--<img src="<?php //echo get_template_directory_uri(); ?>/assets/images/blog-hero.jpg"  />-->
	</figure>
</div>
<div id="main" class="container" role="main">
	
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="post-section">
		<section>
			<div class="post-title"><?php the_title() ?></div>
			<div class="post-image"><?php the_post_thumbnail() ?></div>
			<div class="post-detail">
				<?php the_content() ?>
			</div>
		</section>
		<!--
		<h1><?php the_title() ?></h1>
		<div class="post-content">
			<?php the_content() ?>
		</div>
		<div class="social-links">
			<ul>
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Pinterest</a></li>
			</ul>
		</div>-->
		<div class="social-links">
			<ul>
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="twitter"><a href="#">Twitter</a></li>
				<li class="pinterest"><a href="#">Pinterest</a></li>
			</ul>
		</div>
		
		
	</div>
	
	<?php endwhile; // end of the loop. ?>
	</div><!-- #main -->
	<div class="post-pagination">
		<div class="container">
			<div class="left"><?php next_post_link( '%link', 'Previous Post') ?></div>
			<div class="right"><?php previous_post_link( '%link', 'Next Post' ) ?></div>
		</div>
		
	</div>
	</div><!-- #primary -->
	<?php get_footer() ?>
	<?php get_footer(); ?>
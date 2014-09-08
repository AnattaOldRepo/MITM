<?php
/*
Template Name: About Us
*/

get_header();
?>
<div class="about-page">
	<div class="banner-img">
		<figure>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-hero.jpg"  />
		</figure>
	</div>
	<div class="container header-section">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
<?php get_footer(); ?>



<?php
/*
Template Name: Studio Page
*/
get_header();
?>
<div class="studio-page">
	<div class="banner-img ">
		<figure class="studio-page-banner ">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/studio-hero.jpg"  />
		</figure>
	</div>
	<div class="">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			<?php //the_content(); ?>
		</div>
	</div>
<?php get_footer(); ?>

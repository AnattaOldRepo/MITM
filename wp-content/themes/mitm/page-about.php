<?php
/*
Template Name: About Us
*/

get_header();
?>
<div class="about-page">
	<div class="banner-img">
		<figure class="studio-page-banner " style="background-image:url(<?php the_field( 'banner' ) ?>)"></figure>
	</div>
	<div class="container header-section">
		<div class="row">
			<div class="page-section">
				<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_field( 'heading' ) ?></h2>
					<?php foreach( get_field( 'sections' ) as $section ) : ?>
						<div class="roman-no desktop_view"><?php echo $section['section_number'] ?></div>
						<?php echo $section['content'] ?>
					<?php endforeach; ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>



<?php
/*
Template Name: Request A Quote
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
					<?php the_field( 'text_before_form' ) ?>
					<?php the_content() ?>
					<?php the_field( 'text_after_form' ) ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>



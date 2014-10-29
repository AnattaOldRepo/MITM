<?php
/*
Template Name: Studio Page
*/
get_header();
?>
<div class="studio-page">
	<div class="banner-img ">
		<figure class="studio-page-banner " style="background-image:url(<?php the_field( 'banner' ) ?>)">
		</figure>
	</div>
	<div class="">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<div class="page-section">
					<!-- my tool section -->
					<h4><?php the_field( 'my_tool_heading' ) ?></h4>
					<p><?php  the_field( 'my_tool_description' ) ?></p>
					<h4 class="toolheading"><?php the_field( 'my_tool_table_heading' ) ?></h4>
					<div class="desktop-tools">
						<div class="tools-list">
							<?php the_field( 'my_tool_table' ) ?>
						</div>
						<?php foreach ( get_field('my_tool_images_with_description') as $sections ) : ?>
							<?php if ( !empty( $sections['heading'] ) ) : ?>
								<h2><?php echo $sections['heading'] ?></h2>
							<?php endif; ?>
							<?php if ( !empty( $sections['subheading'] ) ) : ?>
								<h4><?php echo $sections['subheading'] ?></h4>
							<?php endif; ?>
							<?php foreach( $sections['images_and_description'] as $image ) : ?>
								<section class="tool-index">
									<div class="roman-no2" id="<?php echo strtolower( str_replace( ' ', '_', $image['title'] ) )?>"><?php echo $image['image_number'] ?></div>
									<figure>
										<img class="alignnone wp-image-166 size-full" src="<?php echo $image['image'] ?>" width="658" height="266">
									</figure>
									<h4><?php echo $image['title'] ?></h4>
									<div class="article">
										<?php echo $image['description'] ?>
									</div>
								</section>
							<?php endforeach; ?>
						<?php endforeach; ?>
					</div>
					<div class="bottom-content">
						<h4><?php the_field( 'bottom_title' ) ?></h4>
						<p><?php the_field( 'bottom_description' ) ?></p>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div>
		</div>
	</div>
<?php get_footer(); ?>

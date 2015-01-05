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
	<div>
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="page-section">
					<div class="wp-content-section">
						<?php the_content(); ?>
					</div>
				</div>
				
				<div class="page-section">
					<div class="wp-content-section tool-mantra">
					<!-- my tool section -->
					<h4><?php the_field( 'my_tool_heading' ) ?></h4>
					<p><?php  the_field( 'my_tool_description' ) ?></p>
					<h4 class="toolheading"><?php the_field( 'my_tool_table_heading' ) ?></h4>
					<div class="desktop-tools mobile-tools">
						<div class="tools-list">
							<?php foreach( get_field( 'my_tool_table_rows' ) as $row ) : ?>
								<ul>
									<li><a href="#<?php echo strtolower( str_replace( ' ', '_', $row['first_column_label'] ) )?>"><?php echo $row['first_column_label'] ?></a></li>
									<li><a href="#<?php echo strtolower( str_replace( ' ', '_', $row['second_column_label'] ) )?>"><?php echo $row['second_column_label'] ?></a></li>
									<li><a href="#<?php echo strtolower( str_replace( ' ', '_', $row['third_column_label'] ) )?>"><?php echo $row['third_column_label'] ?></a></li>
									<li><a href="#<?php echo strtolower( str_replace( ' ', '_', $row['fourth_column_label'] ) )?>"><?php echo $row['fourth_column_label'] ?></a></li>
								</ul>
							<?php endforeach; ?>
						</div>
						<?php foreach ( get_field('my_tool_images_with_description') as $sections ) : ?>
							<?php if ( !empty( $sections['heading'] ) ) : ?>
								<h3 class="gray-patterns"><?php echo $sections['heading'] ?></h3>
							<?php endif; ?>
							<?php if ( !empty( $sections['subheading'] ) ) : ?>
								<h4><?php echo $sections['subheading'] ?></h4>
							<?php endif; ?>
							<?php foreach( $sections['images_and_description'] as $image ) : ?>
								<section class="tool-index">
									<div class="roman-no" id="<?php echo strtolower( str_replace( ' ', '_', $image['title'] ) )?>"><?php echo $image['image_number'] ?></div>
									<div class="toolbox-list">
										<div class="toolboox-title"><?php echo $image['title'] ?></div>
										<div class="toolboox-content">
									<figure>
										<img class="alignnone wp-image-166 size-full" src="<?php echo $image['image'] ?>" width="658" height="266">
									<figcaption class="toolboox-caption"><?php echo $image['title'] ?></figcaption></figure>
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
				</div>
			<?php endwhile; // end of the loop. ?>
		</div>
		</div>
	</div>
<?php get_footer(); ?>

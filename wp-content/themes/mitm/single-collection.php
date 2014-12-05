<?php
/**
* The template for displaying all single collection posts.
*
* @package mitm
*/
get_header(); ?>
<div class="home-detail">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="post-section">
			<div class="post-pagination">
				<div class="left"><?php next_post_link( '%link', 'PREVIOUS PRODUCT') ?></div>
				<div class="right"><?php previous_post_link( '%link', 'NEXT PRODUCT' ) ?></div>
				<div class="post-title"><span class="post-no">No. <?php the_field( 'collection_post_number' ) ?></span><span><?php the_title() ?></span></div>
			</div>
			<section>
				<div class="post-detail">
					<?php the_content() ?>
				</div>
			</section>
		</div>
		<?php endwhile; // end of the loop. ?>
		<div class="bottom-section">
			<a href="#" class="button orange gaq">get a quote</a>
			<?php if ( get_field( 'related_collections' ) ) { ?>
			<section class=" clearfix collection-post">
				<div class="gallery-title-row">
					<div class="gallery-title">
						<span><span class="mob_view">Others</span> from the collection</span>
					</div>
				</div>
				<!--desktop version-->
				<div class="desktop-collection-post">
					<?php foreach ( get_field( 'related_collections' ) as $collection ) : ?>
					<article class="col-sm-4 col-md-4 col-lg-4 post_thumbnail">
						<a href="<?php echo get_the_permalink( $collection->ID ) ?>">
							<figure>
								<span class="collection-number"><?php echo get_field( 'collection_post_number', $collection->ID );  ?></span>
								<?php echo get_the_post_thumbnail( $collection->ID ) ?>
							</figure>
							<div class="post-title"><?php echo get_the_title( $collection->ID ) ?></div>
						</a>
					</article>
					<?php endforeach; ?>
				</div>
				<!--desktop version end-->
			</section>
			<?php } ?>
		</div>
	</div>
	<!--Mobile version-->
	<div class="mobile-collection-post">
		<section class=" clearfix collection-post">
			<div id="owl-carousel" class="owl-carousel owl-theme">
				<?php foreach ( get_field( 'related_collections' ) as $collection ) : ?>
				<article class="post_thumbnail">
					<a href="<?php echo get_the_permalink( $collection->ID ) ?>">
						<figure>
							<span class="collection-number"><?php echo get_field( 'collection_post_number', $collection->ID );  ?></span>
							<?php echo get_the_post_thumbnail( $collection->ID ) ?>
						</figure>
						<div class="post-title"><?php echo get_the_title( $collection->ID ) ?></div>
					</a>
				</article>
				<?php endforeach; ?>
			</div>
			
		</section>
	</div>
	<!--Mobile version end-->
</div>
<?php get_footer(); ?>
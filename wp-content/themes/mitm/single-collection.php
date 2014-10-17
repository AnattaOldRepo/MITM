<?php
/**
* The template for displaying all single collection posts.
*
* @package mitm
*/
get_header(); ?>
<div id="main" class="container" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="post-section">
		<div class="post-pagination">
			<div class="container">
				<div class="left"><?php next_post_link( '%link', 'Previous Post') ?></div>
				<div class="post-title"><span>N0. <?php the_field( 'collection_post_number' ) ?></span><?php the_title() ?></div>
				<div class="right"><?php previous_post_link( '%link', 'Next Post' ) ?></div>
			</div>
		</div>
		<section>
			<div class="post-detail">
				<?php the_content() ?>
			</div>
		</section>
	</div>
	<?php endwhile; // end of the loop. ?>
	<div class="bottom-section">
		<?php if ( get_field( 'related_collections' ) ) { ?>
			<section class=" clearfix collection-post">
				<div class="gallery-title-row">
					<div class="gallery-title">
						<span>Other From The Collections</span>
					</div>
				</div>
					<?php foreach ( get_field( 'related_collections' ) as $collection ) : ?>
						<article class="col-sm-4 col-md-4 col-lg-4 post_thumbnail">
							<figure>
								<span class="collection-number"><?php echo get_field( 'collection_post_number', $collection->ID );  ?></span>
								<?php echo get_the_post_thumbnail( $collection->ID ) ?>
							</figure>
							<div class="post-title"><a href="<?php echo get_the_permalink( $collection->ID ) ?>"><?php echo get_the_title( $collection->ID ) ?></a></div>
						</article>
					<?php endforeach; ?>
			</section>
		<?php } ?>
	</div>
</div>
<?php get_footer() ?>
<div class="container">
	<?php $_acf_data = $field; ?>
	<section class=" clearfix hero-caption">
		<?php if ( isset( $_acf_data['text'] )  && ! empty( $_acf_data['text'] ) ) { ?>
		 <?php echo $_acf_data['text'] ?>
		<?php } ?>
	</section>
	<section class=" clearfix collection-post">
		<div class="gallery-title-row">
			<div class="gallery-title">
				<span class="left"></span>
				<p><span>Crafting since 2010</span></p>
				<span class="right"></span>
			</div>
		</div>
		<?php if ( isset( $_acf_data['collection_heading'] )  && ! empty( $_acf_data['collection_heading'] ) ) { ?>
		<div class="heading">
			<?php echo $_acf_data['collection_heading'] ?>
		</div>
		<?php } ?>
		<?php if( isset( $_acf_data['collections_post'] ) && is_array( $_acf_data['collections_post'] ) ): ?>
			<?php foreach($_acf_data['collections_post'] as $collection) : ?>
				<article class="col-sm-4 col-md-4 col-lg-4 post_thumbnail">
					<a href="<?php echo get_the_permalink( $collection['collection']->ID ) ?>"><figure>
						<span class="collection-number"><?php echo get_field( 'collection_post_number', $collection['collection']->ID )  ?></span>
						<?php echo get_the_post_thumbnail( $collection['collection']->ID ) ?>
					</figure>
					<div class="post-title"><?php echo get_the_title( $collection['collection']->ID ) ?></div>
					</a>
				</article>
			<?php endforeach; ?>
		<?php endif; ?>
	</section>

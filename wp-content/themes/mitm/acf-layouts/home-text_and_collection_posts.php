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
		<?php if( isset( $_acf_data['collections'] ) && is_array( $_acf_data['collections'] ) ): ?>
		
		<?php foreach($_acf_data['collections'] as $post) : ?>
		<?php setup_postdata($post); ?>
		<article class="col-sm-4 col-md-4 col-lg-4 post_thumbnail">
			<figure>
				<span class="collection-number"><?php the_field( 'collection_post_number' )  ?></span>
				<?php the_post_thumbnail() ?>
			</figure>
			<div class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
		</article>
		<?php endforeach; ?>
		
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</section>

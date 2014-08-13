<?php $_acf_data = $field; ?>
<div class="home-main-text">
	<?php if ( isset( $_acf_data['text'] )  && ! empty( $_acf_data['text'] ) ) { ?>
		<div class="text-section">
			<?php echo $_acf_data['text'] ?>
		</div>
	<?php } ?>
</div>
<div class="collection-post">
	<?php if ( isset( $_acf_data['collection_heading'] )  && ! empty( $_acf_data['collection_heading'] ) ) { ?>
		<div class="heading">
			<?php echo $_acf_data['collection_heading'] ?>
		</div>
	<?php } ?>
	<?php if( isset( $_acf_data['collections'] ) && is_array( $_acf_data['collections'] ) ): ?>
		<div class="posts-list">
			<?php foreach($_acf_data['collections'] as $post) : ?>
				<?php setup_postdata($post); ?>
				<?php the_post_thumbnail() ?>
				<div class="post-title"><?php the_title() ?></div>sss
			<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</div>
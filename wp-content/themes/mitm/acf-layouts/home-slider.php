<?php $_acf_data = $field; ?>
<div id="owl-carousel" class="owl-carousel owl-theme">
	<?php if ( is_array( $_acf_data['slides'] ) ) { ?>
		<?php foreach ( $_acf_data['slides'] as $slides ) { ?>
			<?php if ( isset( $slides['image'] )  && ! empty( $slides['image'] ) ) { ?>
				<div class="item">
					
					<?php if ( isset( $slides['title'] )  && ! empty( $slides['title'] ) ) { ?>
						<div class="title">
							<span>~</span><?php echo $slides['title'] ?>
						</div>
					<?php } ?>
					<figure>
						<img src="<?php echo $slides['image'] ?>" alt="" />
					</figure>
				</div>
			<?php } ?>
		<?php } ?>
	<?php } ?>
</div>

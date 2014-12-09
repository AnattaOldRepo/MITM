<?php $_acf_data = $field; ?>
<div class="slider-title"><span>~</span>Custom Built Furniture, That Makes A Statement</div>
<div id="owl-carousel" class="owl-carousel owl-theme">
	<?php if ( is_array( $_acf_data['slides'] ) ) { ?>
		<?php foreach ( $_acf_data['slides'] as $slides ) { ?>
			<?php if ( isset( $slides['image'] )  && ! empty( $slides['image'] ) ) { ?>
				<div class="item">
					<?php if ( ! empty( $slides['link'] ) ): ?>
						<a href="<?php echo $slides['link'] ?>">
							<figure>
								<img src="<?php echo $slides['image'] ?>" alt="" />
							</figure>
						</a>
					<?php else: ?>
						<figure>
							<img src="<?php echo $slides['image'] ?>" alt="" />
						</figure>
					<?php endif; ?>
				</div>
			<?php } ?>
		<?php } ?>
	<?php } ?>
</div>

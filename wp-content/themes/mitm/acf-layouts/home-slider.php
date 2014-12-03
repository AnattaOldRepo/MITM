<?php $_acf_data = $field; ?>
<div id="owl-carousel" class="owl-carousel owl-theme">
	<?php if ( is_array( $_acf_data['slides'] ) ) { ?>
		<?php foreach ( $_acf_data['slides'] as $slides ) { ?>
			<?php if ( isset( $slides['image'] )  && ! empty( $slides['image'] ) ) { ?>
				<div class="item">
					<?php if ( isset( $slides['title'] )  && ! empty( $slides['title'] ) ) { ?>
						<div class="title">
							<?php if ( ! empty( $slides['link'] ) ): ?>
								<a href="<?php echo $slides['link'] ?>"><span>~</span><?php echo $slides['title'] ?></a>
							<?php else: ?>
								<span>~</span><?php echo $slides['title'] ?>
							<?php endif; ?>
						</div>
					<?php } ?>
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

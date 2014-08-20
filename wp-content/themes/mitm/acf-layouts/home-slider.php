<?php $_acf_data = $field; ?>
<ul class="bxslider">
	<?php if ( is_array( $_acf_data['slides'] ) ) { ?>
		<?php foreach ( $_acf_data['slides'] as $slides ) { ?>
			<?php if ( isset( $slides['image'] )  && ! empty( $slides['image'] ) ) { ?>
				<li class="image">
					
					<?php if ( isset( $slides['title'] )  && ! empty( $slides['title'] ) ) { ?>
						<div class="title">
							<span>~</span><?php echo $slides['title'] ?>
						</div>
					<?php } ?>
					<figure>
						<img src="<?php echo $slides['image'] ?>" alt="" />
					</figure>
				</li>
			<?php } ?>
		<?php } ?>
	<?php } ?>
</ul>

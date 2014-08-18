<?php $_acf_data = $field; ?>
<ul class="bxslider">
	<?php if ( is_array( $_acf_data['slides'] ) ) { ?>
		<?php foreach ( $_acf_data['slides'] as $slides ) { ?>
			<?php if ( isset( $slides['image'] )  && ! empty( $slides['image'] ) ) { ?>
				<li class="image">
					<img src="<?php echo $slides['image'] ?>" alt="" />
					<?php if ( isset( $slides['title'] )  && ! empty( $slides['title'] ) ) { ?>
						<div class="title">
							<?php echo $slides['title'] ?>
						</div>
					<?php } ?>
				</li>
			<?php } ?>
		<?php } ?>
	<?php } ?>
</ul>

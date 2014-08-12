<?php $_acf_data = $field; ?>
<div class="slider">
	<?php if ( is_array( $_acf_data['slides'] ) ) { ?>
		<?php foreach ( $_acf_data['slides'] as $slides ) { ?>
			<?php if ( isset( $slides['title'] )  && ! empty( $slides['title'] ) ) { ?>
			<div class="title">
				<?php echo $slides['title'] ?>
			</div>
			<?php } ?>
			<?php if ( isset( $slides['image'] )  && ! empty( $slides['image'] ) ) { ?>
				<div class="image">
					<img src="<?php echo $slides['image'] ?>" alt="" />
				</div>
			<?php } ?>
		<?php } ?>
	<?php } ?>
</div>

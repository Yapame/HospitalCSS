<div class="<?php echo esc_attr( $item_classes ); ?>">
	<div class="qodef-e-inner">
		<?php if ( 'yes' === $enable_popup ) { ?>
			<a class="qodef-popup-item" itemprop="image" href="<?php echo esc_url( wp_get_attachment_image_url( $image_id, 'full' ) ); ?>" data-type="image" data-fslightbox="gallery-<?php echo esc_attr( $unique ); ?>">
		<?php } ?>
			<?php echo qi_addons_for_elementor_get_list_shortcode_item_image( $image_size, $image_id ); ?>
		<?php if ( 'yes' === $enable_popup ) { ?>
			</a>
		<?php } ?>
	</div>
</div>
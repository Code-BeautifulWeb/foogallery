<?php
/**
 * FooGallery polaroid gallery template
 */
global $current_foogallery;
global $current_foogallery_arguments;

$lightbox = foogallery_gallery_template_setting( 'lightbox', 'unknown' );
if ( 'none' == foogallery_gallery_template_setting( 'caption_title_source' ) && 'none' == foogallery_gallery_template_setting( 'caption_desc_source' ) ) {
	$current_foogallery_arguments['caption_preset'] = 'none';
}
$foogallery_portfolio_classes = foogallery_build_class_attribute_safe( $current_foogallery, 'fg-simple_portfolio fg-caption-always', 'foogallery-lightbox-' . $lightbox );
$foogallery_portfolio_attributes = foogallery_build_container_attributes_safe( $current_foogallery, array( 'class' => $foogallery_portfolio_classes ) );

?><div <?php echo $foogallery_portfolio_attributes; ?>>
	<?php foreach ( foogallery_current_gallery_attachments_for_rendering() as $attachment ) {
		echo foogallery_attachment_html( $attachment );
	} ?>
</div>
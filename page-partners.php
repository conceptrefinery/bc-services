<?php
/* Template Name: Partners */

remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

add_filter( 'body_class', function( $classes ) {
    $classes[] = 'partner-page';
    return $classes;
} );

add_action( 'genesis_before_content', 'partner_top' );
function partner_top() {
	$partner = get_post_meta( get_the_id(), 'partner_logo', true );
	$partner_url = get_post_meta( get_the_id(), 'partner_url', true );
	if ( !$partner_url ) $partner_url = '#';
	?>
	<div class="partner-top">
		<a href="/">
			<img src="/wp-content/themes/bc-theme/images/logo.png">
		</a>
		<?php if ( $partner ) :
			$logo = wp_get_attachment_image_src($partner['ID'], 'full');
		?>
		<a href="<?php echo $partner_url; ?>">
			<img src="<?php echo $logo[0]; ?>">
		</a>
		<?php endif; ?>
	</div>
	<?php
}

add_action( 'genesis_after_content', 'partners_form' );

add_action( 'genesis_after_content', 'partner_bottom' );
function partner_bottom() {
	$partner = get_post_meta( get_the_id(), 'partner_logo', true );
	$partner_url = get_post_meta( get_the_id(), 'partner_url', true );
	if ( !$partner_url ) $partner_url = '#';
	?>
	<div class="partner-bottom">
		<?php if ( $partner ) :
			$logo = wp_get_attachment_image_src($partner['ID'], 'full');
		?>
		<a href="<?php echo $partner_url; ?>">
			<img src="<?php echo $logo[0]; ?>">
		</a>
		<?php endif; ?>
	</div>
	<?php
}




genesis();
<?php
/* Template Name: Experiences Child*/

add_filter( 'body_class', function( $classes ) {
    $classes[] = 'experience-page';
    return $classes;
} );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

add_action( 'genesis_after_header', 'bc_action_call' );
function bc_action_call() {
	global $post;
	?>
	<div id="action-call">
		<div class="wrap">
			<div class="logo-container">
				<a href="/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png">
				</a>
			</div>
			<div class="bc-page-title">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="experience-message">
				<?php echo get_post_meta($post->ID, 'experience_subheading', true ) ?>
			</div>
		</div>
	</div>
	
	<?php
}
add_action( 'genesis_entry_header', 'experience_featured' );
function experience_featured() {
	$feat = get_post_meta( get_the_id(), 'experience_side_image', true );
	// print_r($feat);
	$feat = wp_get_attachment_image_src( $feat['ID'], 'full' );
	?>
	<div class="experience-featured">
		<img src="<?php echo $feat[0]; ?>">
	</div>
	<?php
}

add_action( 'genesis_entry_content', 'experience_form' );
genesis();
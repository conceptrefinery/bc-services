<?php
/* Template Name: Thank you */

add_action( 'genesis_after_header', 'bc_thank_you' );
function bc_thank_you() {
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
			<div class="thank-you-message">
				<?php echo $post->post_content; ?>
			</div>
		</div>
	</div>
	
	<?php
}

remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

genesis();
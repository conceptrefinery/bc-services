<?php

add_action( 'genesis_after_header', 'bc_page_title' );
function bc_page_title() {
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
		</div>
	</div>
	
	<?php
}

remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

genesis();
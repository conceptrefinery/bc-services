<?php
/* Template Name: Experiences */
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

add_action( 'genesis_after_header', 'add_experiences' );
function add_experiences() {
	global $post;
	$exp = new WP_Query(
		array(
			'post_type' => 'page',
			'posts_per_page' => -1,
			'post_parent' => 80
			)
		);
	if ( $exp->have_posts() ){
		?>
		<div class="experiences clearfix">
		<?php
		while ($exp->have_posts()) {
			$exp->the_post();
			?>
			<div class="experience">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'full' );?>
					<div class="overlay"><?php the_title(); ?></div>
				</a>	
			</div>
			<?php
		}
		?>
		</div>
		<?php		
	}
}

genesis();
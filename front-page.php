<?php

// Action call
add_action( 'genesis_after_header', 'bc_action_call' );
function bc_action_call() {
	?>
	<div id="action-call">
		<div class="wrap">
			<div class="logo-container">
				<a href="/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png">
				</a>
			</div>
			<?php genesis_widget_area( 'action-call' ); ?>
		</div>
	</div>
	<?php
}

// Hexagon
add_action( 'genesis_after_header', 'bc_hexagon_area' );
function bc_hexagon_area() {
	?>
	<div id="hexagon-area">
		<div class="wrap">
			<div class="hex-row">
				<?php genesis_widget_area( 'hexagons-top' ); ?>
			</div>
			<div class="hex-row even">
				<?php genesis_widget_area( 'hexagons-middle' ); ?>
			</div>
			<div class="hex-row third">
				<?php genesis_widget_area( 'hexagons-bottom' ); ?>
			</div>
		</div>
	</div>
	<?php
}
// About area
add_action( 'genesis_before_footer', 'bc_area_area' );
function bc_area_area() {
	?>
	<div id="about-area">
		<div class="wrap">
			<?php genesis_widget_area( 'about-area' ); ?>
		</div>
	</div>
	<?php
}

// Testimonials area
add_action( 'genesis_before_footer', 'bc_testimonials_area' );
function bc_testimonials_area() {
	$slides = get_post_meta( 15, '_cycloneslider_metas', true );

	if ( !$slides || count($slides) < 1 )
		return;
	?>
	<div id="testimonials-area" class="flexslider">
		<ul class="slides">
		<?php foreach ($slides as $slide) { ?>
			<li>
				<div class="right-side">
					<?php if ( isset($slide['description']) ): ?>
						<p><?php echo $slide['description']; ?></p>
					<?php endif; ?>
					<?php if ( isset($slide['title']) ): ?>
						<h6><?php echo $slide['title']; ?></h6>
					<?php endif; ?>
				</div>
			</li>
		<?php } ?>
		</ul>
	</div>
	<?php
}


// Contact area
add_action( 'genesis_before_footer', 'bc_contact_area' );
function bc_contact_area() {
	?>
	<div id="contact-area">
		<div class="wrap">
			<div class="contact-left">
				<h6>Fast, quick and reliable.</h6>
				<h3 id="contact-anchor" >Contact Us</h3>
				<div class="br-line"></div>
				<?php //echo do_shortcode( '[contact-form-7 id="13" title="Contact us"]' ); ?>
				<?php bc_contact_form(); ?>
			</div>
			<div class="contact-right">
				<h6>We’re here for you...</h6>
				<h3>Contact Information</h3>
				<div class="br-line"></div>
				<?php genesis_widget_area( 'contact-info' ); ?>
			</div>
		</div>
		<div class="wrap insta-section">
			<h3><a target="_new" href="https://www.instagram.com/bespoke_concierge/">@bespoke_concierge</a></h3>
			<?php echo do_shortcode('[enjoyinstagram_mb]') ?>
		</div>
	</div>
	<?php
}


// Popups
add_action( 'genesis_after', 'bc_popups' );
function bc_popups() {
	$popups = new WP_Query(
		array(
			'post_type' => 'popup',
			'posts_per_page' => -1
			)
		);
	if ( $popups->have_posts() ) {
		while ( $popups->have_posts() ) {
			$popups->the_post();
			?>
			<div class="popup-wrapper" id="<?php echo sanitize_title(get_the_title()); ?>">
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
				<h3>GET IN TOUCH</h3>
				<p class="contact-notification">Fill out the form below and we will promptly reply within the next business day.</p>
				<div class="popup-contact">
					<?php bc_contact_form(); ?>
					<p style="text-align:center; font-size:14px;">By submitting this form you agree to our <a href="/privacy-policy">Privacy Policy</a>.</p>
				</div>
			</div>
			<?php
		}
	}
}

genesis();
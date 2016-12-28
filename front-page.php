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

//why us section

add_action('genesis_before_footer','bc_why_us');
    function bc_why_us() {
        ?>
        
                <div id="benefits-text" class="col-sm-12 benefits-text">
        
         <div class="column-title lead">Why Choose Us?</div>
        
            <div id="column-text" class="col-sm-4">
                
                <p class="column-lead"><span class="fa fa-clock-o"></span> <br> Convenience | Save Time</p>
                <p>We offer one point of contact for all of our clients. Simply call, email or text your own personal concierge who will take care of everything for you, allowing you to carry on with your day, without disturbance. We are here to give you back your most valuable asset: “Time”. </p>
            </div><!--/colsm4-->
            
           <div id="column-text" class="col-sm-4">
                <p class="column-lead"><span class="fa fa-glass"></span> <br>Expertise | Access | Knowledge</p>
                <p>We are Sydney’s experts and we know our city inside out. Our clients rely on us to keep them on the pulse of what’s hot and happening in Sydney and beyond. We have the knowledge, expertise and contacts to secure exclusive access for you. </p>
            </div><!--/colsm4-->
            
            <div id="column-text" class="col-sm-4">
                <p class="column-lead"><span class="fa  fa-diamond"></span> <br>Personal Service</p>
                <p>Our clients receive a highly tailored service that is proactive and pre-empts their lifestyle needs. Each recommendation and booking is specific to each individual client. The make sure we find the right solution for you.

</p>
            </div><!--/colsm4-->
            
        
            
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
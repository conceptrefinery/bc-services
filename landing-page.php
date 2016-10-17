<?php 

/* Template Name: Landing-Page */


add_action( 'genesis_after_header', 'bc_action_call' );
function bc_action_call() {
	?>
	<div class="action-call">
		<div class="wrapBlog">
            <div class="logo-container">
				<a href="/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png">
				</a>
			</div>
		
			
		</div>
	</div>
	<?php
}

add_action('genesis_loop','landing_page_section1');
function landing_page_section1() {
    ?>
    
    
        <div class="ldg-bg-img">
                <p class="intro-title">Jets & Helicopters</p>
                <p>Start thinking about your destination while we take care of the journey</p>
        </div><!--/ldg-bg-img-->


        <div class="col-sm-12 benefits-text">
        
            <div id="column-text" class="col-sm-4">
                
                <p class="column-lead"><span class="fa fa-clock-o"></span> <br> Depart & arrive when you decide</p>
                <p>With your own personal aircraft solution you are in the drivers seat. You decide what time and which destination suits you.</p>
            </div><!--/colsm4-->
            
           <div id="column-text" class="col-sm-4">
                <p class="column-lead"><span class="fa fa-clock-o"></span> <br>Depart & arrive when you decide</p>
                <p>With your own personal aircraft solution you are in the drivers seat. You decide what time and which destination suits you.</p>
            </div><!--/colsm4-->
            
            <div id="column-text" class="col-sm-4">
                <p class="column-lead"><span class="fa fa-clock-o"></span> <br>Depart & arrive when you decide</p>
                <p>With your own personal aircraft solution you are in the drivers seat. You decide what time and which destination suits you.</p>
            </div><!--/colsm4-->
            
            <div class="col-sm-12 scroll-btn">
            <a href="#bg-map"><span class="fa fa-chevron-circle-down"></span></a>
            </div>
            
       </div>
        
      
          <div id="bg-map" class="col-sm-12">
          <div class="col-sm-5 map-text">
              <p class="column-lead">
                  We will be the only number you need for all your aviation requirements
              </p>
                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map-line.jpg" alt="">
              <p>Initial consultation to understand your requirements</p>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map-line.jpg" alt="">
              <p>You decide when & where</p>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map-line.jpg" alt="">
              <p>We will take care of the rest, the plane, the crew, the catering, immigration, trasnport to & from the airport</p>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map-line.jpg" alt="">
              <p>You arrive rested & relaxed after a stress free travel experience</p>
          </div>
           
          </div>
          <div class="col-sm-12 scroll-btn" style="margin-top:-40px;" >
            <a href="#review-content"><span class="fa fa-chevron-circle-down"></span></a>
            </div>
     
          
        
            <div class="col-sm-12 client-reviews">
              <div id="review-content" class="review-content">
                  <p class="lead">What Our Clients Say</p>
                  <p>Health goth listicle everyday carry, chambray kombucha flexitarian banjo quinoa paleo artisan plaid. Four dollar toast 3 wolf moon bespoke butcher, skateboard meh leggings actually shoreditch cornhole.</p>
              </div>
            </div>
            
            
            <div class="col-sm-12 contact-btn">
                <button class="btn btn-large">Get In Touch Now</button>
            </div>

    
    
    
    <?php 
    
}
remove_action('genesis_loop','genesis_do_loop');    
remove_action('genesis_entry_content','genesis_do_post_content');

    genesis();

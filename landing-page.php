<?php 

/* Template Name: Landing-Page */


add_action( 'genesis_after_header', 'bc_action_call' );
function bc_action_call() {
    
     $category_image         = get_field('category_image');
     $category_image_large   =  get_field('category_image_large');
     $category_image_medium   =  get_field('category_image_medium');
     $category_image_small   =  get_field('category_image_small');
     $sub_heading            = get_field('sub_heading');

	?>
	
	
	
	
	
	<div class="action-call">
	
	<div class="action-call-header" style="position:absolute; " >
	     
                <img src="http://localhost:8888/bc-services-copy/wp-content/uploads/2016/10/logo.png" alt="">   
                <p class="lead-title"><?php the_title(); ?></p>
                <p class="sub-heading"><?php echo $sub_heading ?></p>
                
	</div>
	
	  <div class="scroll-btn-header">
            <a href="#benefits-text"><span class="fa fa-chevron-circle-down"></span></a>
            </div>

</div>

<script>
    
    (function($){
      $size = $(window).width();  
        
        $(".action-call").css({"background":"url(<?php echo $category_image['url']; ?>) no-repeat","background-size":"cover", "background-position":"center","height":"90vh", "position":"relative"})
        
         if($size<=1024 && $size>=769) {
        $(".action-call").css({"background-image":"url(<?php echo $category_image_large['url']; ?>) no-repeat", "background-size":"cover", "background-position":"center","height":"100vh", "position":"relative"})
     }
     
     else if($size<=768) {
          $(".action-call").css({"background":"url(<?php echo $category_image_medium['url']; ?>) no-repeat", "background-size":"cover", "background-position":"center","height":"100vh", "position":"relative"})
     }
        
     else if($size<=414) {
         $(".action-call").css({"background":"url(<?php echo $category_image_small['url']; ?>) no-repeat", "background-size":"cover", "background-position":"center","height":"100vh", "position":"relative"})
     }    
        
        
    }) (jQuery);
    
    (function($) {  
 $(window).resize(function() {
     
     $size = $(window).width();  
//  $( ".action-call-header" ).html($size);
     
     $(".action-call").css({"background":"url(<?php echo $category_image['url']; ?>) no-repeat","background-size":"cover", "background-position":"center","height":"100vh", "position":"relative"})
     
     if($size<=1024 && $size>=769) {
        $(".action-call").css({"background":"url(<?php echo $category_image_large['url']; ?>) no-repeat", "background-size":"cover", "background-position":"center","height":"100vh", "position":"relative"})
     }
     
     else if($size<=768) {
          $(".action-call").css({"background":"url(<?php echo $category_image_medium['url']; ?>) no-repeat", "background-size":"cover", "background-position":"center","height":"100vh", "position":"relative"})
     }
    
     
});
    
})  (jQuery);    
</script>



	
	<?php
}

add_action('genesis_after_header','landing_page_section1');
function landing_page_section1() {
    
    $category_image         = get_field('category_image');
    $column_1_font_icon     = get_field('column_1_font_icon');
    $column_1_title         = get_field('column_1_title');
    $column_1_content       = get_field('column_1_content');
    $column_2_font_icon     = get_field('column_2_font_icon');
    $column_2_title         = get_field('column_2_title');
    $column_2_content       = get_field('column_2_content');
    $column_3_font_icon     = get_field('column_3_font_icon');
    $column_3_title         = get_field('column_3_title');
    $column_3_content       = get_field('column_3_content');
    $process_image          = get_field('process_image');
    $process_text           = get_field('process_text');
    $client_review          = get_field('client_review');
    
    ?>
    
      <section class="benefits-process">

        <div id="benefits-text" class="col-sm-12 benefits-text">
        
         <div class="column-title lead">Why Choose Us?</div>
        
            <div id="column-text" class="col-sm-4">
                
                <p class="column-lead"><span class="fa <?php echo $column_1_font_icon ?>"></span> <br> <?php echo $column_1_title ?></p>
                <p><?php echo $column_1_content ?></p>
            </div><!--/colsm4-->
            
           <div id="column-text" class="col-sm-4">
                <p class="column-lead"><span class="fa <?php echo $column_2_font_icon ?>"></span> <br><?php echo $column_2_title ?></p>
                <p><?php echo $column_2_content ?></p>
            </div><!--/colsm4-->
            
            <div id="column-text" class="col-sm-4">
                <p class="column-lead"><span class="fa <?php echo $column_3_font_icon ?>"></span> <br><?php echo $column_3_title  ?></p>
                <p><?php echo $column_3_content ?></p>
            </div><!--/colsm4-->
            
        
            
       </div>
        
      
          <div id="bg-map" class="col-sm-12" style="background-image: url(<?php echo $process_image ?>); background-repeat:no-repeat;background-size:cover; background-position:cover;" >
          <div class="map-text">
             <p  class="process-title">Learn About Our Process</p>
              <?php echo $process_text ?>
          </div>
           
          <div class="scroll-btn-process" >
            <a href="#review-content"><span class="fa fa-chevron-circle-down"></span></a>
            </div>
          </div>
     
          </section>
        
            <div class="col-sm-12 client-reviews">
              <div id="review-content" class="review-content">
                  <p class="lead">What Our Clients Say</p>
                  <p><?php echo $client_review ?></p>
              </div>
            </div>
            
            
            <div class="col-sm-12 contact-btn">
               <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal">Get In Touch Now</button></a> 
            </div>

          
                
               
    
    <?php 
    
}

add_action('genesis_before_footer','modal');
    function modal() { ?>
    <!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Get In Touch</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="13" title="Contact us"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        
                <?php
    }



remove_action('genesis_loop','genesis_do_loop');    
remove_action('genesis_entry_content','genesis_do_post_content');


    genesis();

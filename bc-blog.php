<?php 

/* Template Name: BC - Blog */


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
   

add_action('genesis_loop','add_post');
    function add_post() {
        	if ( 1 >= get_query_var( 'paged' ) ) {
		add_action( 'genesis_loop', 'genesis_standard_loop', 5 );
	}
	global $post;
	// arguments, adjust as needed
	$args = wp_parse_args(
		genesis_get_custom_field( 'query_args' ),
		array(
		'post_type'   => 'post',
		'post_status' => 'publish',
        'posts_per_page' => 20,
        'order'      => 'DESC',
        'cat'         => '-16', 
		'paged'       => get_query_var( 'paged' ),
        'meta_query'  => array (
        'meta-key'          => 'featured_post',
            'meta-value'        => '0',
            'compare'           => '=='    
        
        ))
	);
	global $wp_query;
        //Must use $wp_query for paginationn to work
	$wp_query = new WP_Query( $args );?>
    
           <div class="container-slider">
               <?php putRevSlider('featurePost'); ?>
           </div><!--/container-->
               
               
         <div class="container1">
             
             
               <?php 
                if(have_posts()) :
                    while(have_posts()) : the_post(); 
               echo '<div class="block">';
        
                    //Title Controls
                     the_title('<h1><a href=" ' . esc_url( get_permalink() ) . ' ">','</a></h1>'); ?>
                  
                  <!--Thumbnail-->
                  <a href="<?php the_permalink(); ?>">
                  <div class="postThumb effect">
                  <?php the_post_thumbnail(); ?>
                      <div class="imgMask"><span class="thumbContent"></span></div>
                  </div>
                    </a><br>
                    <?php the_category(); ?>
                    
                    <hr> 
                
                    
                    <!--Excerpt-->
                    <?php the_excerpt(); ?>
                   
                  <p class="date">
                    By <?php the_author_posts_link(); ?><br>
                    <?php the_time('F j, Y'); ?><br>
                    <?php the_tags('# '); ?>
                    </p>
                   
             
                </div>
                 
                   
                    <?php endwhile;  ?>
          <?php 
                    do_action( 'genesis_after_endwhile' );
                endif;
        wp_reset_query();?>
            </div>         
      <?php           
    }



remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action('genesis_loop','genesis_do_loop');    




genesis();

?>





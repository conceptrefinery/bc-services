<?php
/**
 * Template Name: Testimonial Archives
 * Description: Used as a page template to show page contents, followed by a loop through a CPT archive  
 */

add_action('genesis_before_loop','archiveSidebar');
        function archiveSidebar() {
          
        }


    

add_action('genesis_loop','cr_archive_loop');
    function cr_archive_loop() { ?>
        <div class="container">
           <div class="row">
            <main id="archive-content" class="col-sm-8">
                <?php 
                    if(have_posts()):
                        while(have_posts()): the_post();?>
                            <div class="row archiveContent">
                                <div class="col-sm-4">
                                   <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(['small']); ?>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                       <a href="<?php the_permalink(); ?>" class="archivePostTitle">
                                        <?php the_title(); ?>
                                        </a>
                                    </div><!--/row-->
                                    <div class="row">
                                        <?php the_excerpt(); ?>
                                    </div><!--/row-->
                                </div>
                            </div><!--/row-->
                            <hr>
                            
                            
                        <?php endwhile;
                    endif;
                
                ?>
            </main>  
            
                        
            
           </div><!--/row-->
        </div><!--/container-->
        
          
        <?php 
    }


remove_action('genesis_loop','genesis_do_loop');
        

genesis();
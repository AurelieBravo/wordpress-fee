
<?php
get_header();
 echo get_the_content();?>

     <!-- //echo the_post_thumbnail('thumbnail'); -->

    
      
      
      
     
      <?php if(have_posts()):
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=4');// limiter au 4 dernier post 

        while($recentPosts->have_posts()): $recentPosts->the_post(); ?>
            <div class="card  " style="width: 18rem;">
                <div class="card-body ">
                    <h5 class="card-title text-capitalize text-center"><?php the_title() ;?></h5>
                    <p><?php echo " de ".get_the_author()." le ".get_the_date();?></p>
                  </div>

                  <div class="card-img-top  justify-content-center " alt="<?= get_the_title()?>">
                      <?= get_the_post_thumbnail(); ?>
                </div>

                  <div class="card-body d-flex flex-wrap justify-content-beetween align-items-center">                        
                    <p class="card-text extrait"><?php echo get_the_excerpt();?></p>
                    <a href="<?php the_permalink();?> " class="btn btn-info text-light d-flex justify-content-center col-12">voir plus</a>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item "><?php the_category(' / ');?></li>
                  </ul>
            </div>
            
       <?php 
    endwhile;
    
endif;
     

    



   
 
 
 





 wp_footer() ?>


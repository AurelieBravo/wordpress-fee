<?php
get_header();
 echo get_the_content();?>

     <!-- //echo the_post_thumbnail('thumbnail'); -->

    
      
      
      <div class="single">
     
      <?php if(have_posts()):
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=4');

        while($recentPosts->have_posts()): $recentPosts->the_post(); ?>
            <div class="card d-flex " style="width: 18rem;">
                <div class="card-body position-relative" style=" left: 15 ">
                    <h5 class="card-title text-capitalize text-center"><?php the_title() ;?></h5>
                    <p><?php echo " de ".get_the_author()." le ".get_the_date();?></p>
                  </div>

                  <div class="card-img-top d-flex align-items-center justify-content-center " alt="<?= get_the_title()?>">
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
            </div>
       <?php 
    endwhile;
    
endif;
     

 wp_footer() ?>


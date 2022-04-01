<?php
get_header();?>

 <div class="container">
<div class="box">
<div class="box-row mx-auto text-center  ">
<h5 class="card-title"><?php the_title() ?></h5>
<img class="card-img-top" src=><?php the_post_thumbnail()?>
  <div class="card-body">
    
    <p class="card-text"><?php excerpt_remove_blocks('$pst')?></p>
    
    
  </div> 
  <p>
        <strong>categorie :<?php the_category() ?>
    </strong> 
    
        <?php echo get_post_meta( get_the_ID(), 'category', true ); ?>
    </p>

    <p>
        <strong>age :<?php the_title() ?>
    </strong> 
        <?php echo get_post_meta( get_the_ID(), 'age', true ); ?>
    </p>
    
    <p>
        <strong>race :</strong>
        <?php echo get_post_meta( get_the_ID(), 'race', true ); ?> 
    </p>
    
    <div class="side">
     
<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
    if ( has_post_thumbnail() ) {
        

    }
    
 
    
      //  echo ' <a href="'.get_the_permalink().'">'.get_the_title()."</a>";
       
        the_content();
        
        

        
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;?>

 <div class="site__navigation">
	<div class="site__navigation__prev">
		<?php previous_post_link( 'Article Précédent<br>%link' ); ?>
    </div>
    <div class="site__navigation__next">
        <?php next_post_link( 'Article Suivant<br>%link' ); ?> 
    </div>
</div>

<!-- <php get_sidebar('sidebar');?> -->

</div>
</div>
<div class="box-cell box2">
<div class="sidebar">
  <?php dynamic_sidebar('Sidebar');?>
</div>
</div>
</div>
</div>
</div>
<?php 
get_footer();
?>

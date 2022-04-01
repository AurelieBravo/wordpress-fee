<?php
get_header();

echo "<h1>archive.php</h1>";
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        echo '<hr><h2>Titre : <a href="'.get_the_permalink('small').'">'.get_the_title()."</a></h2>";
        echo "<h3>Contenu :</h3>";
        the_content();
        echo "<h3>Catégories :</h3>";
        the_category();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;?>
<div class="pagination">
<div class="pagination_prev">
<?php previous_posts_link('Page précédente'); ?>
    </div>
    <div class="pagination_next">
        <?php next_posts_link('Page suivante'); ?>
    </div>
</div>
<php get_sidebar();
get_footer();
?>
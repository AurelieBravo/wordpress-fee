<?php
get_header();

echo "<h1>page-contact.php</h1>";

 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        echo '<hr><h2>Titre : <a href="'.get_the_permalink().'">'.get_the_title()."</a></h2>";
        echo "<h3>Contenu :</h3>";
        the_content();
        
        echo "<h3>Catégories :</h3>";
        the_category();?>
        <div class="container">
             <h1>Formulaires</h1>
             <form>
               <fieldset>
                
                 
                 <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control" id="nom" placeholder="Pierre GIRAUD">
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control" id="email" placeholder="pierre.giraud@edhec.com">
                 </div>

                 <div class="form-group">
                   <label for="bio">Messages</label>
                   <textarea class="form-control" id="bio" rows="3"></textarea>
                 </div>
                 <a href="" class="btn btn-success">envoyer</a>
               </fieldset>
             </form>
         </div>
   <?php endwhile;
else :
    
endif;
 

get_footer();
?>
<?php

function aurelie_supports()
{
    add_theme_support('title-tag');
    // pour supporter les images
    add_theme_support( 'post-thumbnails', array( 'post' ) ); 
    // add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
    add_theme_support('menus');
    register_nav_menu('header','En tete du menu');
    register_nav_menu('footer','Pied de page ');

    add_action('widgets_init','monplugin_add_sidebar');
    function monplugin_add_sidebar()
    {
        register_sidebar(array(
        'id' => 'my_sidebar',
        'name' => 'Sidebar',
        'description' => 'Apparait en haut du site',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
        ));
    }


}



function aurelie_register_assets()
{
    wp_register_style('boostrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_register_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js", ['popper', 'jquery'], false, true);
    // systeme qui permet de faire les petite pop up
    wp_register_script('popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js", [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', "https://code.jquery.com/ui/1.13.1/jquery-ui.min.js", [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
  
}



function aurelie_menu_class($classes){
    $classes[] = 'nav-item';
    return $classes;
}
function aurelie_menu_link_class($attrs){
    $attrs['class'] = 'nav-link';
    return $attrs;
}
// function aurelie_pagination (){
//     echo '<nav aria-label="Pagination">';
//     $pages = paginate_links(['type' => 'array']);
//     foreach($pages as $page){
//         echo'<li class="page-item">';
//         echo $page;
//         echo'</li>';
        
//     }
//     echo '</nav>';

function your_aurelie_pagination(){
    global $wp_query; 
    echo paginate_links();
}

    
    function add_styles() {
        //va chercher style.css
        wp_enqueue_style( 'style', get_stylesheet_uri() ); 
    }
    function aurelie_register_widget(){
        register_sidebar([
            'id' => 'homepage',
            'name' => 'Sidebar Acceuil', 
        ]);
    }
add_action('widgets_init','aurelie_register_widget');
add_action('after_setup_theme', 'aurelie_supports');
add_action('wp_enqueue_scripts', 'aurelie_register_assets');
add_filter('nav_menu_css_class','aurelie_menu_class');
add_filter('nav_menu_link_attributes', 'aurelie_menu_link_class');
add_action('init', 'monplugin_add_menu');
function monplugin_add_menu()
{
 register_nav_menu('main_menu', ' principal');
}


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <title>Document</title>

    <?php wp_head(); 
    if(function_exists('the_custom_logo')){
    the_custom_logo();
}
?>
</head>

<body <?php body_class(); ?>>

<div class="container">
<div class="top-bar">
    <div class="top-bar-left">

</div>
<h3> <span class="textemulticolore">Aurélie</span></h3>
<?php wp_nav_menu(array('montheme' => 'premier'));?>
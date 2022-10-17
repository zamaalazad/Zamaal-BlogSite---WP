<?php

//Basic theme setup Information
function zamaal_basic(){

    //title tag
    add_theme_support('title-tag');

    //automatic feed links
    add_theme_support( 'automatic-feed-links' );

    //post thumbnails
    add_theme_support('post-thumbnails');


}
add_action('after_setup_theme', 'zamaal_basic');


//Enqueue Scripts Here
function zamaal_scripts(){
    //Main Stylesheet Importing
    wp_enqueue_style('main', get_stylesheet_uri(), null,microtime());
}


add_action('wp_enqueue_scripts', 'zamaal_scripts');


?>
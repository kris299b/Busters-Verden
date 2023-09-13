<?php

function my_theme_styles() {
  // Replace 'my-style' with a unique handle for your stylesheet
  // Replace 'my-style.css' with the name of your stylesheet file
  // The last parameter is the version number, which you can change to bust the cache
  wp_enqueue_style( 'style-sheet', get_stylesheet_directory_uri() . '/style.css', array(), '1.0' );
  wp_enqueue_style("theme-style", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"); 
}
// Hook your custom function to the wp_enqueue_scripts action
add_action( 'wp_enqueue_scripts', 'my_theme_styles' );


?>


<?php

function customtheme_scripts() {
    // Register the style like this for a theme:
    wp_register_style( 'custom-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
 
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style' );
}
add_action( 'wp_enqueue_scripts', 'customtheme_scripts' );

function enqueue_animation_script() {
  wp_enqueue_script('animations', get_template_directory_uri() . '/animations.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_animation_script');
?>


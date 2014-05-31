<?php

// Enqueue CSS

function theme_name_scripts() {
  wp_enqueue_style( 'style-name', get_template_directory_uri().'/css/screen.css' );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );




// Enqueue JS

?>
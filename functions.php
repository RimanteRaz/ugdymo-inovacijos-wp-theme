<?php

function ugdino_register_styles() {
    wp_enqueue_style('ugdino-style', get_template_directory_uri()."/style.css", array(), rand(111,9999), 'all');
    wp_enqueue_style('google-icons', 'https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined', array(), null);
}

add_action('wp_enqueue_scripts', 'ugdino_register_styles');


function ugdino_register_scripts() {
    wp_enqueue_script('ugdino-script', get_template_directory_uri().'/assets/js/app.js', array(), rand(111,9999), true);
    wp_enqueue_script('masonry-js', get_template_directory_uri().'/assets/js/masonry.js', array(), rand(111,9999), true);
}

add_action('wp_enqueue_scripts', 'ugdino_register_scripts');

?>
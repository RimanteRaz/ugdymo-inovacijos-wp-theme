<?php
function ugdino_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ugdino_theme_support');

// Function for the menu: 
function ugdino_menus(){
    $locations = array(
        'primary' => "Mobile primary, desktop left",
        'secondary' => "Mobile secondary, desktop right"
    );

    register_nav_menus($locations);
}

add_action('init', 'ugdino_menus');
    

function ugdino_register_styles() {
    wp_enqueue_style('ugdino-style', get_template_directory_uri()."/style.css", array(), rand(111,9999), 'all');
    wp_enqueue_style('google-icons', 'https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined', array(), null);
}

add_action('wp_enqueue_scripts', 'ugdino_register_styles');


function ugdino_register_scripts() {
    wp_enqueue_script('magic-grid-cdn', 'https://unpkg.com/magic-grid/dist/magic-grid.cjs.js', array(), '3.2.4', true);
    wp_enqueue_script('masonry', get_template_directory_uri().'/assets/js/masonry.js', array(), rand(111,9999), true);
    wp_enqueue_script('ugdino-script', get_template_directory_uri().'/assets/js/app.js', array(), rand(111,9999), true);
}

add_action('wp_enqueue_scripts', 'ugdino_register_scripts');


// Add widget areas:
// function footer_widget_init() {
//     register_sidebar(array(
//         'name' => 'Footer Widget Area',
//         'id' => "footer_1",
//         'before_widget' => '<div class = "footerWidget">',
//         'after_widget' => '</div>',
//         'before_title' => '<h6>',
//         'after_title' => '</h6>',
//     ));
// }
// 
// add_action( 'widgets_init', 'footer_widget_init');

?>
<?php

function openmindtutoring_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'openmindtutoring_resources');

function load_js_assets() {
        wp_enqueue_script('index.js', "http://localhost/wordpress/wp-content/themes/openmindtutoring/index.js", array('jquery'), '', false);
}
 
add_action('wp_enqueue_scripts', 'load_js_assets');

function openmindtutoring_custom_logo() {
  $defaults = array(
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
  );
  add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'openmindtutoring_custom_logo' );


// function admin_bar(){
//   if(is_user_logged_in()){
//     add_filter( 'show_admin_bar', '__return_true' , 1000 );
//   }
// }
// add_action('init', 'admin_bar' );

// theme setup
function openmindtutoring_setup() {
    // Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
        'subPrimary' => __('Submenu'),
    ));

    // add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 300, 300, true);
}

add_action('after_setup_theme', 'openmindtutoring_setup');
<?php

function load_stylesheets(){

wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
wp_enqueue_style('stylesheet');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// function loadjs(){
//
//   wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
//   wp_enqueue_script('customjs');
//
// }
// add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');

add_theme_support('post-thumbnails');

function wpb_custom_new_menu() {
  register_nav_menu('beautiful-theme-top-menu',__( 'Beautiful Theme Top Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);



?>

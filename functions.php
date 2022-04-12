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

register_nav_menus(

  array(

    'top_menu' => __('Top Menu', 'ugly-theme'),
    'footer-menu' => __('Footer Menu', 'ugly-theme')

  )


);

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);



?>

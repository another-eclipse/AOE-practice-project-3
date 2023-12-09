<?php

function MAS_theme_support(){
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

};

add_action('after_setup_theme', 'MAS_theme_support');

function MAS_menus() {
    $locations = array(
        'primary' => "Main Menu",
        'footer' => "Footer Menu" 
    ); 
    register_nav_menus($locations);
}; 

add_action('init', 'MAS_menus');

function MAS_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('mascladding-style', get_template_directory_uri() . "/style.css", array('mascladding-bootstrap'), $version, 'all');
    wp_enqueue_style('swiper-style', get_template_directory_uri() . "/assets/swiper-master/dist/swiper-bundle.css", 'all');
    wp_enqueue_style('lightbox-style', get_template_directory_uri() . "/assets/css/lsb.css", 'all');
    wp_enqueue_style('mascladding-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', '5.3.0', 'all');
  
    
}

add_action('wp_enqueue_scripts', 'MAS_register_styles');

function MAS_register_script(){
    // wp_enqueue_script('jquery');
   wp_enqueue_script('mascladding-boot', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', '5.3.0', true);
   wp_enqueue_script('swiper-script', get_template_directory_uri() . "/assets/swiper-master/dist/swiper-bundle.css", true);
   wp_enqueue_script('mascladding-js', get_template_directory_uri().'/assets/js/main.js', '1.0', true);
   wp_enqueue_script('lightbox-js', get_template_directory_uri().'/assets/js/lsb.min.js',array('jquery'), '1.0', true);
   
}

add_action('wp_enqueue_scripts', 'MAS_register_script');

if (function_exists('acf_add_options_page')){
    acf_add_options_page(
        array(
            'page_title' => 'Footer Options Page',
            'menu_title' => 'Footer Options'
        )
    );
}

if (function_exists('acf_add_options_page')){
    acf_add_options_page(
        array(
            'page_title' => 'Home Page Options',
            'menu_title' => 'Home Page Options'
        )
    );
}


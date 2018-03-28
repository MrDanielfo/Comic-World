<?php

// se crea la primera función para las post-thumbnails

function comic_setup() {
    add_theme_support('post-thumbnails');
    add_image_size('principales_index', 1400, 500, true);
    add_image_size('proximos_estrenos', 200, 330, true);
    add_image_size('catalogo', 150, 280, true);
    add_image_size('adictos', 120, 120, true); 
    add_image_size('comic24fps', 350, 600, true); 
    add_image_size('noticias_blog', 300, 300, true);
    add_image_size('noticias', 800, 430, true); 
}

add_action('after_setup_theme', 'comic_setup'); 

function comic_styles() {
    wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0' );
    wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Crimson+Text:400,700|Fjalla+One', array(), '1.0.0');
    wp_register_style( 'fontAwesome', get_template_directory_uri() . '/css/fontawesome.min.css', array('normalize'), '5.0.8' );
    wp_register_style( 'style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' ); //'normalize'

    // get option
    $apikey = esc_html(get_option('comic_gmap_apikey'));

   // registro de JS
    wp_register_script('maps', 'https://maps.googleapis.com/maps/api/js?key='. $apikey .'&callback=initMap', array(), '', true); 
    /* Todo register_script necesita al menos cinco parámetros */ 
    wp_register_script('scriptuno', get_template_directory_uri() . '/js/scriptuno.js', array('jquery'), '1.0', true); 
    // el jquery se llama sólo con enqueue script

    wp_enqueue_style('normalize'); 
    wp_enqueue_style('fontAwesome');
    wp_enqueue_style('style');
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('scriptuno');
    wp_enqueue_script('maps');

    // Pasar variables de PHP a javascript
    wp_localize_script(
        'scriptuno',
        'opciones',
        array(
            'latitud' => get_option('comic_gmap_latitud'),
            'longitud' => get_option('comic_gmap_longitud'),
            'zoom'    => get_option('comic_gmap_zoom')
        )
    );
      
}

add_action('wp_enqueue_scripts', 'comic_styles'); 

/* Función para Async y defer */ 

function agregar_async_defer($tag, $handle){
    if('maps' != $handle)
    return $tag;
    return str_replace(' src', ' async="async defer="defer" src', $tag); 
}

add_filter('script_loader_tag', 'agregar_async_defer', 10, 2); 

// Creación de menús 

function comic_menus(){
    register_nav_menus(
        array(
            'desktop-menu' => __('Desktop Menu', 'comicWorld'),
            'mobile-menu'  => __('Mobile Menu', 'comicWorld'),
            'social-menu'  => __('Social Menu', 'comicWorld'),
            'footer-menu'  => __('Footer Menu', 'comicWorld')
        ));  
}

add_action('init', 'comic_menus'); 



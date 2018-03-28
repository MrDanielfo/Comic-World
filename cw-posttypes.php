<?php

/*
Plugin Name: Comic World Post Types
Plugin URI:
Description: Agrega Custom PostTypes al sitio de Comic World
Version: 1.0
Author: Josué Daniel Flores Morales
Author URI:
License: GLP2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

*/ 

function post_type_comics24fps() {
   $labels = array(
        'name'                  => _x('Reseñas', 'Post Type General Name', 'comic-world'),
        'singular_name'         => _x('Reseña', 'Post Type Singular Name', 'comic-world'),
        'menu_name'             => __('Reseñas', 'comic-world'),
        'parent_item_colon'     => __('Reseña Padre', 'comic-world'),
        'all_items'             => __('Todas las Reseñas', 'comic-world'),
        'view_items'            => __('Ver Reseña', 'comic-world'),
        'add_new_item'          => __('Agregar Nueva Reseña', 'comic-world'),
        'add_new'               => __('Agregar Nueva Reseña', 'comic-world'),
        'edit_item'             => __('Editar Reseña', 'comic-world'),
        'update_item'           => __('Actualizar Reseña', 'comic-world'),
        'search_items'          => __('Buscar Reseña', 'comic-world'),
        'not_found'             => __('No encontrado', 'comic-world'),
        'not_found_in_trash'    => __('No encontrado en la papepelera', 'comic-world')
   );

   $args = array(
        'label'                 => __('reseñas', 'comic-world'),
        'description'           => __('Reseñas de Cómic 24fps', 'comic-world'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions' ),
        'hierarchichal'         => false,
        'public'                => true,
        'show_ui'               => true,
        'show_ui_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-video-alt2',
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rest_base'             => 'resenas_api'
   );

   // Registrar PostType

   register_post_type('resenas', $args); 

}

add_action('init', 'post_type_comics24fps', 6); 

function post_type_eventos() {
    $labels = array(
         'name'                  => _x('Eventos', 'Post Type General Name', 'comic-world'),
         'singular_name'         => _x('Evento', 'Post Type Singular Name', 'comic-world'),
         'menu_name'             => __('Eventos', 'comic-world'),
         'parent_item_colon'     => __('Evento Padre', 'comic-world'),
         'all_items'             => __('Todos los Eventos', 'comic-world'),
         'view_items'            => __('Ver Eventos', 'comic-world'),
         'add_new_item'          => __('Agregar Nuevo Evento', 'comic-world'),
         'add_new'               => __('Agregar Nuevo Evento', 'comic-world'),
         'edit_item'             => __('Editar Evento', 'comic-world'),
         'update_item'           => __('Actualizar Evento', 'comic-world'),
         'search_items'          => __('Buscar Evento', 'comic-world'),
         'not_found'             => __('No encontrado', 'comic-world'),
         'not_found_in_trash'    => __('No encontrado en la papepelera', 'comic-world')
    );
 
    $args = array(
         'label'                 => __('eventos', 'comic-world'),
         'description'           => __('Eventos', 'comic-world'),
         'labels'                => $labels,
         'supports'              => array('title', 'editor', 'thumbnail', 'revisions' ),
         'hierarchichal'         => false,
         'public'                => true,
         'show_ui'               => true,
         'show_ui_menu'          => true,
         'show_in_admin_bar'     => true,
         'menu_position'         => 7,
         'menu_icon'             => 'dashicons-calendar-alt',
         'can_export'            => true,
         'has_archive'           => true,
         'exclude_from_search'   => false,
         'capability_type'       => 'post',
         'show_in_rest'          => true,
         'rest_base'             => 'eventos_api'
    );
 
    // Registrar PostType
 
    register_post_type('eventos', $args); 
 
 }
 
 add_action('init', 'post_type_eventos', 7); 

 function post_type_adictos() {
    $labels = array(
         'name'                  => _x('Adictos', 'Post Type General Name', 'comic-world'),
         'singular_name'         => _x('Adicto', 'Post Type Singular Name', 'comic-world'),
         'menu_name'             => __('Adictos', 'comic-world'),
         'parent_item_colon'     => __('Adicto Padre', 'comic-world'),
         'all_items'             => __('Todos los Adictos', 'comic-world'),
         'view_items'            => __('Ver Adictos', 'comic-world'),
         'add_new_item'          => __('Agregar Nuevo Adicto', 'comic-world'),
         'add_new'               => __('Agregar Nuevo Adicto', 'comic-world'),
         'edit_item'             => __('Editar Adicto', 'comic-world'),
         'update_item'           => __('Actualizar Adicto', 'comic-world'),
         'search_items'          => __('Buscar Adicto', 'comic-world'),
         'not_found'             => __('No encontrado', 'comic-world'),
         'not_found_in_trash'    => __('No encontrado en la papepelera', 'comic-world')
    );
 
    $args = array(
         'label'                 => __('adictos', 'comic-world'),
         'description'           => __('Adictos', 'comic-world'),
         'labels'                => $labels,
         'supports'              => array('title', 'editor', 'thumbnail', 'revisions' ),
         'hierarchichal'         => false,
         'public'                => true,
         'show_ui'               => true,
         'show_ui_menu'          => true,
         'show_in_admin_bar'     => true,
         'menu_position'         => 8,
         'menu_icon'             => 'dashicons-id',
         'can_export'            => true,
         'has_archive'           => true,
         'exclude_from_search'   => false,
         'capability_type'       => 'post',
         'show_in_rest'          => true,
         'rest_base'             => 'adictos_api'
    );
 
    // Registrar PostType
 
    register_post_type('adictos', $args); 
 
 }
 
 add_action('init', 'post_type_adictos', 8); 

 //

 function post_type_noticias() {
    $labels = array(
         'name'                  => _x('Noticias', 'Post Type General Name', 'comic-world'),
         'singular_name'         => _x('Noticia', 'Post Type Singular Name', 'comic-world'),
         'menu_name'             => __('Noticias', 'comic-world'),
         'parent_item_colon'     => __('Noticia Padre', 'comic-world'),
         'all_items'             => __('Todas las Noticias', 'comic-world'),
         'view_items'            => __('Ver Noticias', 'comic-world'),
         'add_new_item'          => __('Agregar Nueva Noticia', 'comic-world'),
         'add_new'               => __('Agregar Nueva Noticia', 'comic-world'),
         'edit_item'             => __('Editar Noticia', 'comic-world'),
         'update_item'           => __('Actualizar Noticia', 'comic-world'),
         'search_items'          => __('Buscar Noticia', 'comic-world'),
         'not_found'             => __('No encontrada', 'comic-world'),
         'not_found_in_trash'    => __('No encontrada en la papepelera', 'comic-world')
    );
 
    $args = array(
         'label'                 => __('noticias', 'comic-world'),
         'description'           => __('Noticias', 'comic-world'),
         'labels'                => $labels,
         'supports'              => array('title', 'editor', 'thumbnail', 'revisions' ),
         'hierarchichal'         => false,
         'public'                => true,
         'show_ui'               => true,
         'show_ui_menu'          => true,
         'show_in_admin_bar'     => true,
         'menu_position'         => 9,
         'menu_icon'             => 'dashicons-media-text',
         'can_export'            => true,
         'has_archive'           => true,
         'exclude_from_search'   => false,
         'capability_type'       => 'post',
         'show_in_rest'          => true,
         'rest_base'             => 'noticias_api'
    );
 
    // Registrar PostType
 
    register_post_type('noticias', $args); 
 
 }
 
 add_action('init', 'post_type_noticias', 9); 

 function post_type_productos() {
    $labels = array(
         'name'                  => _x('Productos', 'Post Type General Name', 'comic-world'),
         'singular_name'         => _x('Producto', 'Post Type Singular Name', 'comic-world'),
         'menu_name'             => __('Productos', 'comic-world'),
         'parent_item_colon'     => __('Producto Padre', 'comic-world'),
         'all_items'             => __('Todos los Productos', 'comic-world'),
         'view_items'            => __('Ver Productos', 'comic-world'),
         'add_new_item'          => __('Agregar Nuevo Producto', 'comic-world'),
         'add_new'               => __('Agregar Nuevo Producto', 'comic-world'),
         'edit_item'             => __('Editar Producto', 'comic-world'),
         'update_item'           => __('Actualizar Producto', 'comic-world'),
         'search_items'          => __('Buscar Producto', 'comic-world'),
         'not_found'             => __('No encontrado', 'comic-world'),
         'not_found_in_trash'    => __('No encontrado en la papepelera', 'comic-world')
    );
 
    $args = array(
         'label'                 => __('productos', 'comic-world'),
         'description'           => __('Productos', 'comic-world'),
         'labels'                => $labels,
         'supports'              => array('title', 'thumbnail'),
         'taxonomies'            => array('taxonomy'),
         'hierarchichal'         => false,
         'public'                => true,
         'show_ui'               => true,
         'show_ui_menu'          => true,
         'show_in_admin_bar'     => true,
         'menu_position'         => 10,
         'menu_icon'             => 'dashicons-products',
         'can_export'            => true,
         'has_archive'           => true,
         'exclude_from_search'   => false,
         'capability_type'       => 'post',
         'show_in_rest'          => true,
         'rest_base'             => 'productos_api'
    );
 
    // Registrar PostType
 
    register_post_type('productos', $args); 
 
 }
 
 add_action('init', 'post_type_productos', 10);
 
 function post_type_estrenos() {
    $labels = array(
         'name'                  => _x('Estrenos', 'Post Type General Name', 'comic-world'),
         'singular_name'         => _x('Estreno', 'Post Type Singular Name', 'comic-world'),
         'menu_name'             => __('Estrenos', 'comic-world'),
         'parent_item_colon'     => __('Estreno Padre', 'comic-world'),
         'all_items'             => __('Todos los Estrenos', 'comic-world'),
         'view_items'            => __('Ver Estrenos', 'comic-world'),
         'add_new_item'          => __('Agregar Nuevo Estreno', 'comic-world'),
         'add_new'               => __('Agregar Nuevo Estreno', 'comic-world'),
         'edit_item'             => __('Editar Estreno', 'comic-world'),
         'update_item'           => __('Actualizar Estreno', 'comic-world'),
         'search_items'          => __('Buscar Estreno', 'comic-world'),
         'not_found'             => __('No encontrado', 'comic-world'),
         'not_found_in_trash'    => __('No encontrado en la papepelera', 'comic-world')
    );
 
    $args = array(
         'label'                 => __('estrenos', 'comic-world'),
         'description'           => __('Estrenos', 'comic-world'),
         'labels'                => $labels,
         'supports'              => array('title','thumbnail', 'revisions' ),
         'hierarchichal'         => false,
         'public'                => true,
         'show_ui'               => true,
         'show_ui_menu'          => true,
         'show_in_admin_bar'     => true,
         'menu_position'         => 11,
         'menu_icon'             => 'dashicons-megaphone',
         'can_export'            => true,
         'has_archive'           => true,
         'exclude_from_search'   => false,
         'capability_type'       => 'post',
         'show_in_rest'          => true,
         'rest_base'             => 'estrenos_api'
    );
 
    // Registrar PostType
 
    register_post_type('estrenos', $args); 
 
 }
 
 add_action('init', 'post_type_estrenos', 11); 

 function taxonomia_origen_productos() {
    $labels = array(
        'name'                  => _x('Origen de Productos', 'Taxonomy General Name'),
        'singular_name'         => _x('Origen de Producto', 'Taxonomy Singular Name'),
        'search_items'          => __('Buscar Origen de Producto'),
        'all_items'             => __('Todos los Orígenes de Productos'),
        'parent_item'           => __('Origen de Producto Padre'),
        'parent_item_colon'     => __('Origen de Producto Padre:'),
        'edit_item'             => __('Editar Origen de Producto'),
        'update_item'           => __('Actualizar Origen de Producto'),     
        'add_new_item'          => __('Agregar Nuevo Origen de Producto'),
        'new_item_name'         => __('Nuevo Origen Producto'), 
        'menu_name'             => __('Origen de Producto')
   );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => 'origen-productos', 
        'rewrite'   => array('slug' => 'origen-productos'),
        'public' => true,
    ); 

    register_taxonomy('origen-productos', array('productos'), $args ); 
    /* el segundo parámetro es el nombre de custom post type al que se agregará */
 }

 add_action('init', 'taxonomia_origen_productos'); 

 function taxonomia_estado_productos() {
    $labels = array(
        'name'                  => _x('Estado de Productos', 'Taxonomy General Name'),
        'singular_name'         => _x('Estado de Producto', 'Taxonomy Singular Name'),
        'search_items'          => __('Buscar Estado de Producto'),
        'all_items'             => __('Todos los Estados de Productos'),
        'parent_item'           => __('Estado de Producto Padre'),
        'parent_item_colon'     => __('Estado de Producto Padre:'),
        'edit_item'             => __('Editar Estado de Producto'),
        'update_item'           => __('Actualizar Estado de Producto'),     
        'add_new_item'          => __('Agregar Nuevo Estado de Producto'),
        'new_item_name'         => __('Nuevo Estado Producto'), 
        'menu_name'             => __('Estado de Producto')
   );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => 'estado-productos', 
        'rewrite'   => array('slug' => 'estado-productos'),
		'public' => true,
    ); 

    register_taxonomy('estado-productos', array('productos'), $args ); 
    /* el segundo parámetro es el nombre de custom post type al que se agregará */

 }

 add_action('init', 'taxonomia_estado_productos'); 

 function taxonomia_precio_productos() {
    $labels = array(
        'name'                  => _x('Precio de Productos', 'Taxonomy General Name'),
        'singular_name'         => _x('Precio de Producto', 'Taxonomy Singular Name'),
        'search_items'          => __('Buscar Precio de Producto'),
        'all_items'             => __('Todos los Precios de Productos'),
        'parent_item'           => __('Precio de Producto Padre'),
        'parent_item_colon'     => __('Precio de Producto Padre:'),
        'edit_item'             => __('Editar Precio de Producto'),
        'update_item'           => __('Actualizar Precio de Producto'),     
        'add_new_item'          => __('Agregar Nuevo Precio de Producto'),
        'new_item_name'         => __('Nuevo Precio Producto'), 
        'menu_name'             => __('Precio de Producto')
   );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => 'precio-productos', 
        'rewrite'   => array('slug' => 'precio-productos'),
		'public' => true,
    ); 

    register_taxonomy('precio-productos', array('productos'), $args ); 
    /* el segundo parámetro es el nombre de custom post type al que se agregará */

 }

 add_action('init', 'taxonomia_precio_productos'); 

 function taxonomia_genero_pelicula() {
    $labels = array(
        'name'                  => _x('Género de Películas', 'Taxonomy General Name'),
        'singular_name'         => _x('Género de Película', 'Taxonomy Singular Name'),
        'search_items'          => __('Buscar Género de Película'),
        'all_items'             => __('Todos los Géneros de Películas'),
        'parent_item'           => __('Género de Película Padre'),
        'parent_item_colon'     => __('Género de Película Padre:'),
        'edit_item'             => __('Editar Género de Película'),
        'update_item'           => __('Actualizar Género de Película'),     
        'add_new_item'          => __('Agregar Nuevo Género de Película'),
        'new_item_name'         => __('Nuevo Género de Película'), 
        'menu_name'             => __('Género de Película')
   );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => 'genero-peliculas', 
        'rewrite'   => array('slug' => 'genero-peliculas'),
		'public' => true,
    ); 

    register_taxonomy('genero-peliculas', array('resenas'), $args ); 
    /* el segundo parámetro es el nombre de custom post type al que se agregará */

 }

 add_action('init', 'taxonomia_genero_pelicula');

 function taxonomia_tema_opinion() {
    $labels = array(
        'name'                  => _x('Temas de Opinión', 'Taxonomy General Name'),
        'singular_name'         => _x('Tema de Opinión', 'Taxonomy Singular Name'),
        'search_items'          => __('Buscar Tema de Opinión'),
        'all_items'             => __('Todos los Temas de Opinión'),
        'parent_item'           => __('Tema de Opinión Padre'),
        'parent_item_colon'     => __('Tema de Opinión Padre:'),
        'edit_item'             => __('Editar Tema de Opinión'),
        'update_item'           => __('Actualizar Tema de Opinión'),     
        'add_new_item'          => __('Agregar Nuevo Tema de Opinión'),
        'new_item_name'         => __('Nuevo Tema de Opinión'), 
        'menu_name'             => __('Tema de Opinión')
   );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => 'tema-opinion', 
        'rewrite'   => array('slug' => 'tema-opinion'),
		'public' => true,
    ); 

    register_taxonomy('tema-opinion', array('adictos'), $args ); 
    /* el segundo parámetro es el nombre de custom post type al que se agregará */

 }

 add_action('init', 'taxonomia_tema_opinion');

 function taxonomia_tipo_noticias() {
    $labels = array(
        'name'                  => _x('Tipos de Noticias', 'Taxonomy General Name'),
        'singular_name'         => _x('Tipo de Noticia', 'Taxonomy Singular Name'),
        'search_items'          => __('Buscar Tipo de Noticia '),
        'all_items'             => __('Todos laos Tipos de Noticias'),
        'parent_item'           => __('Tipo de Noticia Padre'),
        'parent_item_colon'     => __('Tipo de Noticia Padre:'),
        'edit_item'             => __('Editar Tipo de Noticia '),
        'update_item'           => __('Actualizar Tipo de Noticia '),     
        'add_new_item'          => __('Agregar Nuevo Tipo de Noticia '),
        'new_item_name'         => __('Nuevo Tipo de Noticia '), 
        'menu_name'             => __('Tipo de Noticia ')
   );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => 'tipo-noticias', 
        'rewrite'   => array('slug' => 'tipo-noticias'),
		'public' => true,
    ); 

    register_taxonomy('tipo-noticias', array('noticias'), $args ); 
    /* el segundo parámetro es el nombre de custom post type al que se agregará */

 }

 add_action('init', 'taxonomia_tipo_noticias');

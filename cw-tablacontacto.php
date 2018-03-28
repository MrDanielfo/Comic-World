<?php

/*
Plugin Name: Comic World Tabla de Contacto
Plugin URI:
Description: Agrega Base de datos adicional al sitio de Comic World para la sección de Newsletter
Version: 1.0
Author: Josué Daniel Flores Morales
Author URI:
License: GLP2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

*/ 

/* Añade la función para guardar los datos del formulario de newsletter en la base de datos */ 

require_once plugin_dir_path(__FILE__) . 'includes/newsletter.php';
require_once plugin_dir_path(__FILE__) . 'includes/frontal.php';  


// inicializar la función para base de datos 
function comic_database() {
    global $wpdb;
    global $comicworld_dbversion;

    $comicworld_dbversion = "1.0"; 
    $tabla = $wpdb->prefix . 'newsletter'; 
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $tabla (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(50) NOT NULL,
        email varchar(50) DEFAULT '' NOT NULL,
        message longtext NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate; "; 

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php'); 
    dbDelta($sql); 
    add_option('comicworld_dbversion', $comicworld_dbversion);
    
    // actualizar en caso de ser necesario 
    $version_actual = get_option('comicworld_dbversion'); 

    if($comicworld_dbversion != $version_actual ) {
        $tabla = $wpdb->prefix . 'newsletter';  
        $sql = "CREATE TABLE $tabla (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name varchar(50) NOT NULL,
            email varchar(50) DEFAULT '' NOT NULL,
            message longtext NOT NULL,
            PRIMARY KEY (id)
        ) $charset_collate; "; 
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php'); 
        dbDelta($sql); 
        
        update_option('comicworld_dbversion', $comicworld_dbversion); 
    }
}

add_action('after_setup_theme', 'comic_database'); 

// función para comprobar que la versión instalada es igual a la de la base de datos 

function comicdb_revisar(){
    global $comicworld_dbversion;
    if(get_site_option('comicworld_dbversion') != $comicworld_dbversion) {
        comic_database(); 
    }
}

add_action('plugins_loaded', 'comicdb_revisar'); 


// función para la suscripción al newsletter podría adaptarse a un archivo include

// se corta y se pega en newsletter.php

/* Aquí termina la función */ 


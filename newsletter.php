<?php

function comic_guardar(){
    global $wpdb;
    

    if(isset($_POST['enviar']) && $_POST['oculto'] == "1") :
        $name = sanitize_text_field($_POST['nombre']); 
        $email = sanitize_email($_POST['correo']); 
        $message = sanitize_text_field($_POST['mensaje']); 

        $tabla = $wpdb->prefix . 'newsletter';
        $datos = array(
            'name' => $name,
            'email' => $email,
            'message' => $message
        ); 
    
        $formato = array(
            '%s',
            '%s',
            '%s'
        );
    
        $wpdb->insert($tabla, $datos, $formato);

        $url = get_page_by_title('Newsletter'); 
        wp_redirect(get_permalink( $url->ID )); 
        exit(); 
    endif;
}

add_action('init', 'comic_guardar'); 
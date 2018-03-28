<?php

function comic_ajustes(){
    add_menu_page('Comic World', 'Newsletter', 'administrator', 'comic_newsletter', 'comic_opciones', 'dashicons-email', 20); 
    add_submenu_page('comic_newsletter', 'Suscriptores', 'Suscriptores', 'administrator', 'comic_suscriptores', 'comic_suscriptores');
    
    // llamar al registro de las opciones
    add_action('admin_init', 'comic_registrar_opciones'); 
}

add_action('admin_menu', 'comic_ajustes');

function comic_registrar_opciones(){
    // Registrar opciones, una por campo 
    register_setting('comic_opciones_grupo', 'comic_direccion');
    register_setting('comic_opciones_grupo', 'comic_telefono');

    register_setting('comic_opciones_gmaps', 'comic_gmap_latitud');
    register_setting('comic_opciones_gmaps', 'comic_gmap_longitud');
    register_setting('comic_opciones_gmaps', 'comic_gmap_zoom');
    register_setting('comic_opciones_gmaps', 'comic_gmap_apikey');

}

function comic_opciones(){
    ?>
        <div class="wrap">
            <h1>Ajustes de Comic World</h1>
            <?php
                if(isset($_GET['tab'])):
                    $active_tab = $_GET['tab'];
                endif;
            ?>

            <h2 class="nav-tab-wrapper">
                <a href="?page=comic_newsletter&tab=tema" class="nav-tab <?php echo $active_tab == 'tema' ? 'nav-tab-active' : ''  ?> ">Ajustes</a>
                <a href="?page=comic_newsletter&tab=gmaps" class="nav-tab <?php echo $active_tab == 'gmaps' ? 'nav-tab-active' : ''  ?> ">Google Maps</a>
            </h2>


            <form action="options.php" method="post">

            <?php if( $active_tab == 'tema' ) :  ?>

                <?php settings_fields('comic_opciones_grupo'); ?>
                <?php do_settings_sections('comic_opciones_grupo'); ?>

                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row">Dirección</th>
                            <td><input type="text" name="comic_direccion" value="<?php echo esc_attr( get_option('comic_direccion'));  ?>"></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">Teléfono</th>
                            <td><input type="text" name="comic_telefono" value="<?php echo esc_attr( get_option('comic_telefono'));  ?>"></td>
                        </tr>
                    </table>
            <?php else:  ?>

                <?php settings_fields('comic_opciones_gmaps'); ?>
                <?php do_settings_sections('comic_opciones_gmaps'); ?>

                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row">Latitud: </th>
                            <td><input type="text" name="comic_gmap_latitud" value="<?php echo esc_attr( get_option('comic_gmap_latitud'));  ?>"></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">Longitud: </th>
                            <td><input type="text" name="comic_gmap_longitud" value="<?php echo esc_attr( get_option('comic_gmap_longitud'));  ?>"></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">Zoom: </th>
                            <td><input type="number" name="comic_gmap_zoom" value="<?php echo esc_attr( get_option('comic_gmap_zoom'));  ?>"></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">API Key: </th>
                            <td><input type="text" name="comic_gmap_apikey" value="<?php echo esc_attr( get_option('comic_gmap_apikey'));  ?>"></td>
                        </tr>
                        
                    </table>

            <?php endif;  ?>
            
                <?php submit_button();  ?>
            </form>
        </div>
    <?php
}

function comic_suscriptores(){
    /* a continuación se escribirá el código en html para obtener los datos del formulario */
    ?>

        <div class="wrap">
            <h1>Suscriptores</h1>

            <table class="wp-list-table widefat striped">
                <thead>
                    <tr>
                        <th class="manage-column">ID</th>
                        <th class="manage-column">Nombre</th>
                        <th class="manage-column">E-mail</th>
                        <th class="manage-column">Mensaje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php global $wpdb;
                          $suscriptores = $wpdb->prefix . 'newsletter';
                          $registros = $wpdb->get_results("SELECT * FROM $suscriptores", ARRAY_A);
                          foreach($registros as $registro) { ?>
                          <tr>
                                <td><?php echo $registro['id'];  ?></td>
                                <td><?php echo $registro['name'];  ?></td>
                                <td><?php echo $registro['email'];  ?></td>
                                <td><?php echo $registro['message'];  ?></td>
                          </tr>
                    <?php }
                    ?>
                </tbody>
            </table>

        </div>

    <?php 
}
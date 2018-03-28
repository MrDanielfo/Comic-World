<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cómic World</title>
    <?php wp_head();  ?>
</head>
<body>
    <header class="principal-index">
        <div class="container-header"> <!-- este div guardará los elementos como el logo y menú -->
            <div class="logo">
                <a href="<?php echo esc_url( home_url('/') ); ?>">
                    <img src="<?php echo get_template_directory_uri() ;?>/img/logo_blanco.png" alt="logo_comic" class="logo_comic"> 
                    <!-- no olvidar que la ruta a la imagen se pone por fuera del llamado de php -->
                </a>
            </div> <!-- .logo -->
            <div class="redes-sociales">
                <?php
                    $args = array(
                        'theme_location'    => 'social-menu',
                        'container'         => 'nav',
                        'container_class'   => 'menu-social',
                        'container_id'      => 'menu-social',
                        'link_before'       => '<span class="sr-text">',
                        'link_after'        => '</span>'
                    );

                    wp_nav_menu($args); 

                ?>
            </div>
            <div class="desktop-header">
                <?php
                    $args = array(
                        'theme_location'        => 'desktop-menu',
                        'container'             => 'nav',
                        'container_class'       => 'menu-desktop'
                    );

                    wp_nav_menu($args);
                ?>
            </div>
            
        </div> <!-- container-header -->
        <div class="hamburger-menu">
            <a href="#" class="hamburger"><i class="icono-barra"></i></a>
        </div>
        <div class="mobile-header"> 
            <!-- se tuvo que sacar el mobile-menu, para que tomara el 100% de width, esto puede deberse a la restricción, del 90 % de container header -->
            <?php
                $args = array(
                    'theme_location'    => 'mobile-menu',
                    'container'         => 'nav',
                    'container_class'   => 'menu-mobile'
                );

                wp_nav_menu($args); 
            ?>
        </div><!-- .mobile-header -->
    </header>
   
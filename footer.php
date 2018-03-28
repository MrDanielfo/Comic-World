
    <footer class="footer-index">
        <div class="container-footer">
            <div class="footer-logo">
                <a href="<?php echo esc_url( home_url('/') ); ?>">
                        <img src="<?php echo get_template_directory_uri() ;?>/img/logo_blanco.png" alt="logo_comic_footer" class="logo_comic"> 
                        <!-- no olvidar que la ruta a la imagen se pone por fuera del llamado de php -->
                </a>
            </div>
            <div class="direccion">
                <p>Comic World S.A de C.V</p>
                <p><?php echo esc_html( get_option('comic_direccion') ); ?></p>
                <p><?php echo esc_html( get_option('comic_telefono') ); ?></p>
            </div>
            <div class="menu-footer">
            <?php
                    $args = array(
                        'theme_location'        => 'footer-menu',
                        'container'             => 'nav',
                        'container_class'       => 'menu-footer'
                    );

                    wp_nav_menu($args);
                ?>
            </div>   
        </div>

    </footer>

<?php wp_footer();  ?>
</body>
</html>
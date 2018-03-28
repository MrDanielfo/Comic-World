<?php get_header();    ?>
    <div class="contenedor-wide">

        <h1 class="titulo-index"><?php echo esc_html(get_option('blogdescription')); ?></h1>

        <?php
            $args = array(
                'post_type' => 'productos',
                'posts_per_page' => 4,
                'orderby'       => 'rand'
            );

            $productos = new WP_Query($args); ?>

        <div class="contenedor-medium">
            <?php while($productos->have_posts()): $productos->the_post(); ?>
                <div class="cajacatalogo">
                    <h2 class="titulo-producto"><?php  the_title(); ?></h2>
                    <span class="estado"><?php the_field('estado'); ?></span>
                    <div class="imagen-producto">
                        <?php the_post_thumbnail('catalogo'); ?>
                    </div>
                    <span class="origen"><?php the_field('origen'); ?></span>
                    <div class="precio-catalogo">
                        <span class="precio"><?php the_field('precio'); ?></span>
                    </div>
                    <div class="descripcion-lanzamiento">
                        <h3 class="descripcion"><?php the_field('descripcion'); ?></h3>
                    </div>             
                </div>       
            <?php endwhile; ?>
                <?php $url = get_page_by_title('Catálogo');    ?>

                <a href="<?php echo get_permalink($url->ID);  ?>" class="enlace">Ver todos los productos</a>

            <?php wp_reset_postdata();  ?>


            <!-- PRÓXIMOS LANZAMIENTOS -->
            <div class="contenedor-mitad">

                <h2 class="subtitulos">Próximos Lanzamientos</h2>

                <?php
                $args = array(
                    'post_type' => 'lanzamiento',
                    'posts_per_page' => 3,
                    'orderby'       => 'date',
                    'order'         => 'ASC',
                );

                $lanzamientos = new WP_Query($args); ?>
                    <?php while($lanzamientos->have_posts()): $lanzamientos->the_post(); ?>
                        <div class="cajalanzamiento index">
                            <h2 class="lanzamiento"><?php  the_title(); ?></h2>
                            <div class="imagen-lanzamiento index">
                                <?php the_post_thumbnail('catalogo'); ?>
                            </div>
                            <div class="fecha-lanzamiento">
                                <span class="fecha"><?php the_field('fecha_lanzamiento'); ?></span>
                            </div>
            
                        </div>      
                    <?php endwhile; ?> 

                        <?php $url = get_page_by_title('Próximos Lanzamientos');    ?>

                        <a href="<?php echo get_permalink($url->ID);  ?>" class="enlace estrenos">Ver todos</a>

                    <?php wp_reset_postdata();  ?>

            </div> <!-- contenedor-mitad -->

                <!-- Estrenos recientes -->

            <div class="contenedor-mitad">

                <h2 class="subtitulos estrenos">Estrenos</h2>

                <?php
                $args = array(
                    'post_type' => 'estrenos',
                    'posts_per_page' => 3,
                    'orderby'       => 'date',
                    'order'         => 'DESC'
                );

                $estrenos = new WP_Query($args); ?>

                <?php while($estrenos->have_posts()): $estrenos->the_post(); ?>
                    <div class="cajalanzamiento index">
                        <h2 class="lanzamiento"><?php  the_title(); ?></h2>
                        <div class="imagen-lanzamiento index">
                            <?php the_post_thumbnail('catalogo'); ?>
                        </div>
                        <div class="fecha-lanzamiento">
                            <span class="fecha"><?php the_field('precio'); ?></span>
                        </div>           
                    </div>      
                <?php endwhile; ?> 

                    <?php $url = get_page_by_title('Estrenos');    ?>

                    <a href="<?php echo get_permalink($url->ID);  ?>" class="enlace estrenos">Ver todos</a>

                <?php wp_reset_postdata();  ?>
            </div>

            <!-- Adictos al Cómic -->

            <div class="contenedor-mitad">

                <h2 class="subtitulos adictos">Adictos al Cómic</h2>

                <?php
                    $args = array(
                        'post_type' => 'adictos',
                        'posts_per_page' => 3,
                        'orderby'       => 'date',
                        'order'         => 'DESC'
                    );

                $adictos = new WP_Query($args); ?>

                <?php while($adictos->have_posts()): $adictos->the_post();  ?>
                    <div class="cajaadictos index">
                        <div class="imagen-adictos">
                            <a href="<?php the_permalink() ?>" class="enlace-resena">
                                <?php the_post_thumbnail('adictos'); ?>
                            </a>
                        </div>             
                            <a href="<?php the_permalink() ?>" class="enlace-resena">
                                <h2 class="adictos"><?php  the_title();  ?></h2>
                            </a>
                    </div>    
                    
                <?php endwhile; ?>
                
                    <?php $url = get_page_by_title('Adictos al Cómic');    ?>

                    <a href="<?php echo get_permalink($url->ID);  ?>" class="enlace estrenos">Ir a Adictos...</a>

                <?php wp_reset_postdata();    ?> 

            </div>
            
            <!-- Noticias -->

            <div class="contenedor-mitad noticias">
                <h2 class="subtitulos noticias">Noticias</h2>

                <?php
                $args = array(
                    'post_type' => 'noticias',
                    'posts_per_page' => 3,
                    'orderby'       => 'date',
                    'order'         => 'DESC'
                );

                $noticias = new WP_Query($args); ?>

                <?php while($noticias->have_posts()): $noticias->the_post();  ?>
                    <div class="cajanoticias index">
                    <?php the_post_thumbnail('noticias_blog') ?>

                        <div class="titulo-noticia">
                            <a href="<?php the_permalink() ?>" class="enlace-resena">
                                <h2 class="noticia"><?php  the_title();  ?></h2>
                            </a>
                        </div>

                    </div>    

                <?php endwhile; ?>

                    <?php $url = get_page_by_title('Noticias');    ?>

                    <a href="<?php echo get_permalink($url->ID);  ?>" class="enlace estrenos">Ver todas las noticias</a>

                <?php wp_reset_postdata(); ?>
            </div>   
        </div> <!-- .contenedor-medium -->

        <!-- Cómic en 24fps -->
        <h2 class="subtitulos comic">Cómic en 24fps</h2>
            <?php
                $args = array(
                    'post_type' => 'resenas',
                    'posts_per_page' => 2,
                    'orderby'       => 'rand'
                );

                $resenas = new WP_Query($args); ?>

            <?php while($resenas->have_posts()): $resenas->the_post();  ?>
                <div class="caja24fps index">
                   <?php the_post_thumbnail('principales_index'); ?>

                    <div class="titulo-resena">
                        <a href="<?php the_permalink() ?>" class="enlace-resena">
                            <h2 class="resena"><?php  the_title();  ?></h2>
                        </a>
                    </div>

                </div>    
                 
            <?php endwhile; ?> 

            <?php wp_reset_postdata();    ?> 
            
            <!-- Google Maps -->
            <h2 class="subtitulos maps">Encuéntranos en Google Maps</h2>

            <div id="mapa"></div>
            

            <!-- final de Google Maps -->

            <div class="contenedor-medium">
                <!-- formulario de contacto -->
                <h2 class="subtitulo-formulario">Suscríbete a nuestro Newsletter</h2>
                    <div class="formulario-pagina">
                        <form method="post" class="formulario">
                            <div class="campo">
                                <span class="nombre">Nombre</span>
                                <input type="text" name="nombre" required>
                            </div>
                            <div class="campo">
                                <span class="email">E-Mail</span>
                                <input type="email" name="correo" required>
                            </div>
                            <div class="campo">
                                <span class="mensaje">Mensaje</span>
                                <textarea name="mensaje"></textarea>
                            </div>

                            <input type="submit" name="enviar" class="enviar-mensaje">
                            <input type="hidden" name="oculto" value="1">
                        </form>
                    </div>

            </div> <!-- contenedor-medium -->

    </div> <!--.contenedor-wide -->

<?php get_footer();  ?>
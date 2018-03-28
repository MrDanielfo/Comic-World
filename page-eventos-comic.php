<?php 
/* 
Template Name: Eventos Cómic 
*/
get_header();  ?>
    <div class="contenedor-wide">
        <?php  while(have_posts()): the_post(); ?>



        <div class="hero-nosotros" style="background-image:url(<?php echo get_the_post_thumbnail_url();  ?>);">
            <div class="contenido-hero">
                <div class="texto-hero">
                    <h1 class="titulo-pagina"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>

        <div class="informacion">
            <main class="texto-centrado contenido-paginas">
                <?php the_content();   ?>
            </main>
        </div>
       
        <?php  endwhile;  ?>

        <div class="contenedor-medium">

            <h2 class="subtitulo-formulario">Lista de Eventos Primavera 2018</h2>

            <?php
                $args = array(
                    'post_type' => 'eventos',
                    'posts_per_page' => -1,
                    'orderby'       => 'date',
                    'order'         => 'ASC'
                );

            $eventos = new WP_Query($args); ?>

            <?php while($eventos->have_posts()): $eventos->the_post(); ?>
            <div class="eventos-programados">
                <h3 class="evento"><?php the_field('nombre');   ?></h3>
                <span class="lugar"><?php the_field('lugar');   ?></span>
                <?php
                        $formato = 'd F, Y';
                        $finicio = strtotime(get_field('fecha_inicio'));
                        $fsalida = strtotime(get_field('fecha_clausura'));

                        $fechainicio = date_i18n($formato, $finicio);
                        $fechasalida = date_i18n($formato, $fsalida);

                    ?>
                <span class="inicio">Fecha de Inicio: <?php echo $fechainicio; ?></span>

                <span class="inicio">Fecha de Clausura: <?php echo $fechasalida; ?></span>
                <div class="descripcion-evento">
                    <?php the_field('descripcion');  ?>
                </div>

            </div>
            <?php endwhile; 
            wp_reset_postdata(); ?>
        </div>

    </div>

<?php get_footer();  ?>
    

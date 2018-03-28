<?php get_header();    ?>
    <div class="contenedor-wide">

        <div class="caja24fps index single">
            <?php the_post_thumbnail('principales_index'); ?>

            <div class="titulo-resena">
                <h2 class="resena"><?php  the_title();  ?></h2>
            </div>
        </div>

        <span class="fechaestreno">Fecha de Estreno: <?php the_field('fecha_de_estreno'); ?></span>
        <span class="fechaestreno calificacion">Calificación: <?php the_field('calificacion'); ?></span>
        <span class="fechaestreno duracion">Duración: <?php the_field('duracion'); ?></span>
        <span class="fechaestreno director">Director: <?php the_field('director'); ?></span>
        <span class="fechaestreno actores">Actúan: <?php the_field('actores'); ?></span>

        <div class="contenido-review">
            <?php the_field('contenido'); ?>

        </div>
        
        

        
        
        


    </div>
    
<?php get_footer();  ?>
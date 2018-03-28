<?php 
/* 
Template Name: Estrenos Cómic 
*/
get_header();  ?>

     <div class="contenedor-wide">

        <h1 class="titulo-noticias"><?php the_title();   ?></h1>

        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ?>

        <?php
            $args = array(
                'post_type' => 'estrenos',
                'posts_per_page' => 3,
                'orderby'       => 'date',
                'order'         => 'DESC',
                'paged'       => $paged
            );

            $estrenos = new WP_Query($args); ?>

        <div class="contenedor-medium">
            <?php while($estrenos->have_posts()): $estrenos->the_post(); ?>
                <div class="cajalanzamiento">
                    <h2 class="lanzamiento"><?php  the_title(); ?></h2>
                    <div class="imagen-lanzamiento">
                        <?php the_post_thumbnail('proximos_estrenos'); ?>
                    </div>
                    <div class="fecha-lanzamiento">
                        <span class="precio"><?php the_field('precio'); ?></span>
                    </div>
                    <div class="descripcion-lanzamiento">
                        <h3 class="descripcion"><?php the_field('descripcion'); ?></h3>
                    </div>             
                </div>      
            <?php endwhile; ?> 

                <?php if ($paged == 1) { ?>
                    <ul class="paginacion">
                        <li class="siguientes"><?php next_posts_link('Siguientes &raquo;', $estrenos->max_num_pages); ?></li>
                    </ul>
                <?php } else { ?>
                    <ul class="paginacion">
                        <li class="anteriores"><?php previous_posts_link('&laquo; Anteriores', $estrenos->max_num_pages); ?></li>
                        <li class="siguientes"><?php next_posts_link('Siguientes &raquo;', $estrenos->max_num_pages); ?></li>
                    </ul>
                <?php } ?>
            <?php wp_reset_postdata();  ?>   
        </div>
    </div>

<?php get_footer();  ?>
    

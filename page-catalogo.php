<?php 
/* 
Template Name: Catálogo
*/
get_header();  ?>

    <div class="contenedor-wide">

        <h1 class="titulo-noticias"><?php the_title();   ?></h1>

        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ?>

        <?php
            $args = array(
                'post_type' => 'productos',
                'posts_per_page' => 4,
                'orderby'       => 'date',
                'order'         => 'DESC',
                'paged'         => $paged
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

                <?php if ($paged == 1) { ?>
                    <ul class="paginacion">
                        <li class="siguientes"><?php next_posts_link('Siguientes &raquo;', $productos->max_num_pages); ?></li>
                    </ul>
                <?php } else { ?>
                    <ul class="paginacion">
                        <li class="anteriores"><?php previous_posts_link('&laquo; Anteriores', $productos->max_num_pages); ?></li>
                        <li class="siguientes"><?php next_posts_link('Siguientes &raquo;', $productos->max_num_pages); ?></li>
                    </ul>
                <?php } ?>

            <?php wp_reset_postdata();  ?> 
        </div>
    </div>

<?php get_footer();  ?>
    

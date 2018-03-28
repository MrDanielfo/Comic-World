<?php 
/* 
Template Name: Noticias
*/
get_header();  ?>
    <div class="contenedor-wide">

        <h1 class="titulo-noticias"><?php the_title();   ?></h1>

        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ?>

        <?php
            $args = array(
                'post_type' => 'noticias',
                'posts_per_page' => 3,
                'orderby'       => 'date',
                'order'         => 'DESC',
                'paged'         => $paged
            );

            $noticias = new WP_Query($args); ?>

        <div class="contenedor-medium">
            <?php while($noticias->have_posts()): $noticias->the_post();  ?>
                <div class="cajanoticias" >
                <?php the_post_thumbnail('noticias_blog') ?>

                    <div class="titulo-noticia">
                        <a href="<?php the_permalink() ?>" class="enlace-resena">
                            <h2 class="noticia"><?php  the_title();  ?></h2>
                        </a>
                    </div>

                </div>    
                
                
            <?php endwhile; ?>
            
            <?php if ($paged == 1) { ?>
                <ul class="paginacion">
                    <li class="siguientes"><?php next_posts_link('Siguientes &raquo;', $noticias->max_num_pages); ?></li>
                </ul>
            <?php } else { ?>
                <ul class="paginacion">
                    <li class="anteriores"><?php previous_posts_link('&laquo; Anteriores', $noticias->max_num_pages); ?></li>
                    <li class="siguientes"><?php next_posts_link('Siguientes &raquo;', $noticias->max_num_pages); ?></li>
                </ul>
            <?php } ?>

            <?php wp_reset_postdata(); ?>   
        </div>
    </div>

<?php get_footer();  ?>
    

<?php 
/* 
Template Name: Cómic en 24fps
*/
get_header();  ?>
    <div class="contenedor-wide">

        <h1 class="titulo-custompages"><?php the_title();   ?></h1>

        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ?>
        <?php
            $args = array(
                'post_type' => 'resenas',
                'posts_per_page' => 2,
                'orderby'       => 'date',
                'order'         => 'DESC',
                'paged'         => $paged 
            );

            $resenas = new WP_Query($args); ?>

        <div class="contenedor-medium">
            <?php while($resenas->have_posts()): $resenas->the_post();  ?>
                <div class="caja24fps" >
                   <?php the_post_thumbnail('comic24fps') ?>

                    <div class="calificacion-resena">
                        <a href="<?php the_permalink() ?>" class="enlace-resena">
                            <span><?php the_field('calificacion'); ?></span>
                        </a> 
                    </div>
                    <div class="titulo-resena">
                        <a href="<?php the_permalink() ?>" class="enlace-resena">
                            <h2 class="resena"><?php  the_title();  ?></h2>
                        </a>
                    </div>

                </div>    
                
                
            <?php endwhile; ?> 

            <?php if ($paged == 1) { ?>
                <ul class="paginacion">
                    <li class="siguientes"><?php next_posts_link('Siguientes &raquo;', $resenas->max_num_pages); ?></li>
                </ul>
            <?php } else { ?>
                <ul class="paginacion">
                    <li class="anteriores"><?php previous_posts_link('&laquo; Anteriores', $resenas->max_num_pages); ?></li>
                    <li class="siguientes"><?php next_posts_link('Siguientes &raquo;', $resenas->max_num_pages); ?></li>
                </ul>
            <?php } ?>
            
            <?php wp_reset_postdata();    ?>   
        </div>
    </div>
    
<?php get_footer();  ?>
    

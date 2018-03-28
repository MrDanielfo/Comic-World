<?php 
/* 
Template Name: Adictos al Cómic
*/
get_header();  ?>
    <div class="contenedor-wide">

    <h1 class="titulo-custompages"><?php the_title();   ?></h1>

    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ?>

    <?php
        $args = array(
            'post_type' => 'adictos',
            'posts_per_page' => 2,
            'orderby'       => 'date',
            'order'         => 'DESC',
            'paged'         => $paged
        );

        $adictos = new WP_Query($args); ?>

        <div class="contenedor-medium">
            <?php while($adictos->have_posts()): $adictos->the_post();  ?>
                <div class="cajaadictos">
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

            <?php if ($paged == 1) { ?>
                <ul class="paginacion">
                    <li class="siguientes"><?php next_posts_link('Siguientes &raquo;', $adictos->max_num_pages); ?></li>
                </ul>
            <?php } else { ?>
                <ul class="paginacion">
                    <li class="anteriores"><?php previous_posts_link('&laquo; Anteriores', $adictos->max_num_pages); ?></li>
                    <li class="siguientes"><?php next_posts_link('Siguientes &raquo;', $adictos->max_num_pages); ?></li>
                </ul>
            <?php } ?>

            <?php wp_reset_postdata();    ?>   
        </div>
    </div>
<?php get_footer();  ?>
    

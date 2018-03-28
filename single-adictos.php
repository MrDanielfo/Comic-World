<?php get_header();    ?>

    <div class="contenedor-wide">

        <div class="contenedor-adictos">

            <div class="cajaadictos single">
                <div class="imagen-adictos">
                        <?php the_post_thumbnail('adictos'); ?>
                </div>             
                    <?php the_field('titulo');  ?>
            </div>    
                    
            <?php the_field('autor');   ?>
            <?php the_field('contenido_historia');  ?>

        </div>

        <?php
            $args = array(
                'post_type' => 'productos',
                'posts_per_page' => 4,
                'orderby'       => 'rand'
            );

            $productos = new WP_Query($args); ?>

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
                </div>
            <?php endwhile; ?>

            <?php $url = get_page_by_title('Catálogo');    ?>

                <a href="<?php echo get_permalink($url->ID);  ?>" class="enlace single">Ver todos los productos</a>

            <?php wp_reset_postdata();  ?>
        

    </div>
    
    
<?php get_footer();  ?>
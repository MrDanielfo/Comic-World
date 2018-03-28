<?php get_header();    ?>
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

    </div>

<?php get_footer();  ?>
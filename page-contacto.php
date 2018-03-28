<?php 
/* 
Template Name: Contacto
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

        </div>

    </div>

<?php get_footer();  ?>
    

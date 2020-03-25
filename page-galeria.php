<?php
/*
* Template Name: Template para Galerias

*/

get_header(); ?>

    <main class = "Content pagina seccion">
        <div class = "contenido-principal">
                <?php while(have_posts() ): the_post(); ?>
                <h1 class = "text-center texto-primario"><?php the_title(); ?></h1>
                <?php
                    // Obtener galeria de la página actual //
                    $galeria = get_post_gallery( get_the_ID(), false);

                    // Obtener IDs //
                    $galeria_imagenes_ID = explode(',', $galeria['ids'] );
                ?>
                <ul class = "galeria-imagenes">
                    <?php
                        $i = 1;
                        foreach($galeria_imagenes_ID as $id):
                            $size = ($i == 4 || $i == 6) ? 'portrait' : 'square';
                            $imageThumb = wp_get_attachment_image_src( $id, 'square' )[0];
                            $imagen = wp_get_attachment_image_src( $id, 'full' )[0];

                    ?>
                        <li>
                            <a href="<?php echo $imagen; ?>" data-lightbox="galeria">
                                <img src="<?php echo $imageThumb; ?>" alt="imagen">
                            </a>
                        </li>
                    <?php $i++; endforeach; ?>
                </ul>
                <?php endwhile; ?>
              
        </div>
    </main>
    <?php get_footer(); ?>
<?php get_header(); ?>

    <main class = "Content pagina seccion con-sidebar">
        <div class = "contenido-principal">
        <?php get_template_part('template-parts/loops'); ?>        

        </div>
        <?php get_sidebar();?>
    </main>

<?php get_footer(); ?>
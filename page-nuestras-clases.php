<?php get_header(); ?>

    <main class = "Content pagina seccion no-sidebar">
        <div class = "text-center">
        <?php get_template_part('template-parts/loops'); ?>
        
        <?php gymfitness_lista_clases(); ?>

        </div>
    </main>

<?php get_footer(); ?>
<?php

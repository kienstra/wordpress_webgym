<?php get_header(); ?>
    <main class = "Content pagina seccion no-sidebar">
        <ul class = "listado-blog">
            <?php get_template_part('loop', 'blog'); ?>
        </ul>
    </main>
<?php get_footer(); ?>
<?php get_header(); ?>
    <main class = "Content pagina seccion no-sidebar">
        <div class = "categorias-blog">
        <?php $autor = get_queried_object(); ?>
            
            <h2 class = "text-center texto-primario">Autor: <?php echo $autor->data->display_name;?></h2>
            
        <ul class = "listado-blog">
            <?php get_template_part('loop', 'blog'); ?>
        </ul>
        </div>
    </main>
<?php get_footer(); ?>
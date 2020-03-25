<?php get_header(); ?>
    <main class = "Content pagina seccion no-sidebar">
        <div class = "categorias-blog">
        <?php $categoria = get_queried_object(); ?>
            
            <h2 class = "text-center texto-primario">Categoria: <?php echo $categoria->name;?></h2>
            
        <ul class = "listado-blog">
            <?php get_template_part('loop', 'blog'); ?>
        </ul>
        </div>
    </main>
<?php get_footer(); ?>
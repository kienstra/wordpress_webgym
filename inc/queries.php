 <?php

function gymfitness_lista_clases() { ?>
    <ul class = "lista-clases text-center">
        <?php
            $args = array(
                'post_type' => 'gymfitness_clases',
                'posts_per_page' => 10,
            );
            $clases = new WP_Query($args);
            while($clases->have_posts() ): $clases->the_post(); ?>      
            
            <li class = "card gradient">
                <?php the_post_thumbnail('blog'); ?>
                <div class = "contenido">
                    <a href="<?php the_permalink();?>">
                        <h3><?php the_title();?></h3>
                    </a>
                        <?php
                            $hora_inicio = get_field('hora_inicio');    
                            $hora_fin = get_field('hora_fin');    
                        ?>
                        <p><?php the_field('dias_clases');?> - <?php echo $hora_inicio . "  a  " . $hora_fin; ?></p>
                </div>
            </li>

           <?php endwhile; wp_reset_postdata(); ?>     

    </ul>
<?php
}
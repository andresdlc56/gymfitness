<?php
    /*
    *   Template Name: Listado de clases    
    */

    //Traer el archivo header.php
    get_header();
?>
        <main class="contenedor seccion">
            
            <?php
                //Traer el template personalizado
                get_template_part('template-parts/pagina');
            ?>
        
            <ul class="listado-grid">

                <!-- Consultando en la db de wordpress las clases -->
                <?php
                    $args = array(
                        'post_type' => 'gymfitness_clases'
                    );

                    //Consultando en la db de wordpress las clases
                    $clases = new WP_Query($args);
                
                    //Mientras existan datos (clases) en la consulta anterior, itera los resultados 
                    while($clases->have_posts()) {
                        $clases->the_post();
                ?>
                        <li class="card">
                            <?php the_post_thumbnail(); ?>
                            <div class="contenido">
                                <!--Enlace directo a cada clase-->
                                <a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                                </a>

                                <?php 
                                    $hora_inicio = get_field('hora_inicio'); 
                                    $hora_fin = get_field('hora_fin');
                                ?>

                                <p>
                                    <?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin; ?>
                                </p>
                            </div>
                        </li>

                <?php    
                    }

                    //Finaliza la consulta
                    wp_reset_postdata();
                ?>

            </ul>
        </main>

<?php 
    //Traer el archivo footer.php
    get_footer();
?>    
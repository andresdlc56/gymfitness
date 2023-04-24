<?php
    while( have_posts() ) : the_post(); 
        the_title('<h1 class="text-center text-primary">', '</h1>');

        //Validando si la pagina tiene img
        if(has_post_thumbnail()) {
            //Renderiza imagen
            the_post_thumbnail('full', array('class' => 'imagen-destacada'));
        }

        //Capturando los custom fields de las clases
        $hora_inicio = get_field('hora_inicio'); 
        $hora_fin = get_field('hora_fin');
?>
        <p class="informacion-clase">
            <?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin; ?>
        </p>
<?php
        the_content();
    endwhile;
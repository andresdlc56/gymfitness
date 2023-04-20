<?php
    while( have_posts() ) : the_post(); 
        the_title('<h1 class="text-center text-primary">', '</h1>');

        //Validando si la pagina tiene img
        if(has_post_thumbnail()) {
            //Renderiza imagen
            the_post_thumbnail('full', array('class' => 'imagen-destacada'));
        }

        the_content();
    endwhile;
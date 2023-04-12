<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body>
        <header class="header">
            <div class="contenedor barra-navegacion">
                <div class="logo">
                    <!--Traer la ruta donde esta ubicado este archivo (index.php)-->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
                </div>

                <nav>
                    <a href="/gymfitness/nosotros">Nosotros</a>
                    <a href="/gymfitness/contacto">Contacto</a>
                    <a href="/gymfitness/blog">Blog</a>
                </nav>
            </div>
        </header>

        <main>
            <?php
                while( have_posts() ) : the_post(); 
                    the_title();

                    the_content();
                endwhile;
            ?>
        </main>
    </body>
</html>
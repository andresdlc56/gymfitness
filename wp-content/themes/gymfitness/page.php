<?php
    //Traer el archivo header.php
    get_header();
?>
  
        <main class="contenedor seccion">
            <?php
                //Traer el template personalizado
                get_template_part('template-parts/pagina');
            ?>
        </main>
    </body>
</html>
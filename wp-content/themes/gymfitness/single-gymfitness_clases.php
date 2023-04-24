<?php
    //Traer el archivo header.php
    get_header();
?>
  
        <main class="contenedor seccion con-sidebar">
            <section class="contenido-principal">
                <?php
                    //Traer el template personalizado
                    get_template_part('template-parts/clase');
                ?>
            </section>
            
            <aside>
                <h2>Sidebar aqui</h2>
            </aside>
        </main>

<?php 
    //Traer el archivo footer.php
    get_footer();
?>
        <footer class="footer contenedor">
            <hr>

            <div class="contenido-footer">
                <?php
                    $args = array(
                        'theme_location' => 'menu-principal', 
                        'container' => 'nav',
                        'container_class' => 'menu-principal'
                    );

                    //Mostrando un menu
                    wp_nav_menu($args);
                ?>

                <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>
            </div>
        </footer>

        <!-- Permite mostrar la barra de wordpress -->
        <?php wp_footer(); ?>
    </body>
</html>
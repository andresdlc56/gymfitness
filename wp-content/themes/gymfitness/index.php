<?php
    //Traer el archivo header.php
    get_header();
?>

        <main>
            <?php
                while( have_posts() ) : the_post(); 
                    the_title();

                    the_content();
                endwhile;
            ?>
        </main>

<?php 
    //Traer el archivo footer.php
    get_footer();
?>
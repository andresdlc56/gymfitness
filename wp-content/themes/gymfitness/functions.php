<?php
    function gymfitness_menus() {
        //Registra menus en wordpress
        register_nav_menus(array(
            'menu-principal' => __('Menu Principal', 'gymfitness'),
        ));
    }

    //Ejecuta la funcion "gymfitness_menus" al cargar este tema
    add_action('init', 'gymfitness_menus');

    function gymfitness_scripts_styles() {
        //Agregando estilos
        wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    }

    //Ejecutando los estilos en este tema
    add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');
<?php
    function gymfitness_setup() {
        //Imagenes destacadas
        add_theme_support('post-thumbnails');

        //Titulos para SEO
        add_theme_support('title-tag');
    }

    //Ejecuta la funcion "gymfitness_setup" al cargar el tema
    add_action('after_setup_theme', 'gymfitness_setup');

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

    // Definir zona de widgets
    function gymfitness_widgets() {
        register_sidebar(array(
            'name' => 'Sidebar 1',
            'id' => 'sidebar_1',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-center text-primary">',
            'after_title' => '</h3>'
        ));

        register_sidebar(array(
            'name' => 'Sidebar 2',
            'id' => 'sidebar_2',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-center text-primary">',
            'after_title' => '</h3>'
        ));
    }

    //Agregando el widget a wordpress
    add_action('widgets_init', 'gymfitness_widgets');
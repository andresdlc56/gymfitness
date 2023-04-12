<?php
    function gymfitness_menus() {
        //Registra menus en wordpress
        register_nav_menus(array(
            'menu-principal' => __('Menu Principal', 'gymfitness'),
        ));
    }

    //Ejecuta la funcion "gymfitness_menus" al cargar este tema
    add_action('init', 'gymfitness_menus');
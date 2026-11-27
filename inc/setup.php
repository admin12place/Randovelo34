<?php

function trentequatre_setup() {

    // Gestion du titre
    add_theme_support('title-tag');

    // Images à la une
    add_theme_support('post-thumbnails');

    // HTML5
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    // Menus
    register_nav_menus([
        'primary' => 'Menu principal',
        'secondary' => 'Menu secondaire',
        'footer'  => 'Menu footer'
    ]);
}

add_action('after_setup_theme', 'trentequatre_setup');


// Chargement CSS et JS
function trentequatre_assets() {

    wp_enqueue_style(
        'style',
        get_stylesheet_uri()
    );

    wp_enqueue_style(
        'settings',
        get_template_directory_uri() . '/assets/css/_settings.scss',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/main-style.css',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'add-style',
        get_template_directory_uri() . '/assets/css/add-style.css',
        [],
        '1.0'
    );

    wp_enqueue_script(
        'scripts',
        get_template_directory_uri() . '/assets/scripts/main-js.js',
        [],
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'trentequatre_assets');
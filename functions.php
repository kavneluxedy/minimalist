<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

function minimalist_register_assets()
{
    // Déclarer le JS
    wp_enqueue_script(
        'minimalist',
        get_template_directory_uri() . '/js/script.js',
        array(),
        '1.0',
        true
    );

    wp_enqueue_style(
        'minimalist',
        get_template_directory_uri() . '/css/minimalist.css',
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'minimalist_register_assets');

register_nav_menus(array(
    'header' => 'Menu Principal',
    'footer' => 'Bas de page',
));

// register_sidebar(array(
//     'id' => 'sidebar',
//     'name' => 'RightSideBar',
//     'class' => 'menu__box',
//     'before_widget' => '<p class="li-separate-top"></p>',
//     'after_widget' => '<p class="li-separate-bottom"></p>',
// ));

function tuto_wp_register_post_types()
{
    // CPT Portfolio
    $labels = array(
        'name' => 'Portfolio',
        'menu_name' => 'Portfolio',
        // affiché dans le sous menu ->
        'all_items' => 'Tous les projets',
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'custom-fields', 'post-formats', 'comments', 'page-attributes', 'post-formats'),
        'menu_position' => 20,
        'menu_icon' => 'dashicons-admin-customizer',
        'custom-fields' => true,
    );

    register_post_type('portfolio', $args);

    // Déclaration de la Taxonomie
    $labels = array(
        'name' => 'Type de projets',
        'new_item_name' => 'Nom du nouveau Projet',
        'parent_item' => 'Type de projet parent',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => false,
    );

    register_taxonomy('type-projet', 'portfolio', $args);
}
add_action('init', 'tuto_wp_register_post_types');

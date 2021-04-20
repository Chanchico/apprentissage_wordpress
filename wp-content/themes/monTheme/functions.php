<?php 

function monTheme_support(){
    add_theme_support('title-tag');
}

function monTheme_register_assets(){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js',['popper','jquery'], null, true);
    wp_register_script('popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js',[], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js',[], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function monTheme_title_separator(){
    return '|';
}

add_action('after_setup_theme', 'monTheme_support');
add_action('wp_enqueue_scripts', 'monTheme_register_assets');
add_filter('document_title_separator', 'monTheme_title_separator');
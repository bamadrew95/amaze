<?php

function header_files() {

// Setup for serving bundled css and js files

wp_enqueue_style('font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
wp_enqueue_style('amaze-styles', get_theme_file_uri('./css/main.css'));
wp_enqueue_script('amaze-js', get_theme_file_uri('./js/scripts.js'), NULL, 1.0, true);

}

add_action('wp_enqueue_scripts', 'header_files');

// Theme supports

function amaze_features() {
    // Custom Logo Support
    $logoDefaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array(
            'site-title',
            'site-description'),
    );

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', $logoDefaults);

    // Custom Menu Locations
    register_nav_menu('header', 'Header Menu Location' );
    register_nav_menu('footer', 'Footer Menu Location' );

};

add_action('after_setup_theme', 'amaze_features');
?>
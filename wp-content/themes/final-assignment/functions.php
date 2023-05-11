<?php

function final_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'final_theme_support');

function final_menus()
{
    $navbar_locations = array(
        'primary' => 'navbar',
        'footer' => 'footer-navbar'
    );
    register_nav_menus($navbar_locations);
}
add_action('init', 'final_menus');


function final_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_register_style('final_style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_style('final_style');
    wp_enqueue_style('final_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'final_register_styles');


function final_register_scripts()
{
    wp_enqueue_script('final-jsscript', get_template_directory_uri() . "/assets/js/main.js", array(), '3.4.1', true);
}

add_action('wp_enqueue_scripts', 'final_register_scripts');

function custom_hero_block()
{
    wp_register_script(
        'custom-hero-block',
        get_stylesheet_directory_uri() . 'wp-content/themes/final-assignment/assets/js/custom-hero-block.js',
        array('wp-blocks', 'wp-element', 'wp-editor'),
        true
    );
    register_block_type(
        'custom/hero-block',
        array(
            'editor_script' => 'custom-hero-block',
            'render_callback' => 'custom_hero_block_render_callback',
        )
    );
}
add_action('init', 'custom_hero_block');

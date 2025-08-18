<?php

/**
 * Clever Core Functions
 */

$clever_theme = wp_get_theme();
define('CLEVER_THEME_VERSION', $clever_theme->get('Version'));

if (!function_exists('clever_theme_setup')) {
    function clever_theme_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        ]);
        register_nav_menus([
            'primary' => __('Primary Menu', 'clever'),
            'footer' => __('Footer Menu', 'clever')
        ]);
        add_theme_support('custom-logo', [
            'height' => 100,
            'width' => 300,
            'flex-height' => true,
            'flex-width' => true
        ]);
    }
}
add_action('after_setup_theme', 'clever_theme_setup');
function clever_theme_assets()
{
    $style_path = get_template_directory() . '/style.css';
    $script_path = get_template_directory() . '/assets/js/main.js';

    wp_enqueue_style(
        'clever-main-style',
        get_template_directory_uri() . '/style.css',
        [],
        file_exists($style_path) ? filemtime($style_path) : false
    );

    wp_enqueue_script(
        'clever-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        file_exists($script_path) ? filemtime($script_path) : false,
        true
    );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'clever_theme_assets');

// Custom helper functions
require get_template_directory() . '/includes/helpers.php';

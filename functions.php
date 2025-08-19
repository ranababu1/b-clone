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
    $template_dir = get_template_directory();
    $style_path = $template_dir . '/style.css';
    $script_path = $template_dir . '/assets/js/main.js';
    
    // Validate paths are within template directory
    if (strpos(realpath($style_path), realpath($template_dir)) !== 0) return;
    if (strpos(realpath($script_path), realpath($template_dir)) !== 0) return;

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

// Dequeue reCAPTCHA on homepage
function dequeue_recaptcha_homepage() {
    if (is_front_page() || is_home()) {
        wp_dequeue_script('google-recaptcha');
        wp_dequeue_script('wpcf7-recaptcha');
    }
}
add_action('wp_enqueue_scripts', 'dequeue_recaptcha_homepage', 100);

// Custom helper functions
require get_template_directory() . '/includes/helpers.php';

// Add lazy loading to images
function add_lazy_loading($attr, $attachment, $size) {
    if (!is_admin() && !wp_is_mobile()) {
        $attr['loading'] = 'lazy';
        $attr['decoding'] = 'async';
    }
    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'add_lazy_loading', 10, 3);

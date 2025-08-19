<?php
/**
 * Clever Theme Helper Functions
 */

if (!function_exists('clever_post_meta')) {
    function clever_post_meta() {
        echo '<div class="post-meta">';
        echo '<span class="post-date">' . get_the_date() . '</span>';
        echo '</div>';
    }
}

if (!function_exists('clever_read_more_link')) {
    function clever_read_more_link() {
        echo '<a href="' . esc_url(get_permalink()) . '" class="read-more">';
        echo esc_html__('Read More', 'clever');
        echo '</a>';
    }
}

function case_study_cpt() {
    register_post_type('case_study', array(
        'labels' => array(
            'name'               => 'Case Studies',
            'singular_name'      => 'Case Study',
            'add_new'            => 'Add New Case Study',
            'add_new_item'       => 'Add New Case Study',
            'edit_item'          => 'Edit Case Study',
            'new_item'           => 'New Case Study',
            'view_item'          => 'View Case Study',
            'search_items'       => 'Search Case Studies',
            'not_found'          => 'No Case Studies Found',
            'not_found_in_trash' => 'No Case Studies found in Trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Case Studies',
        ),
        'public'            => true,
        'has_archive'       => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true,
        'supports'          => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite'           => array('slug' => 'case-studies'),
        'hierarchical'      => false,
    ));
}
add_action('init', 'case_study_cpt');

function resources_cpt() {
    register_post_type('resource', array(
        'labels' => array(
            'name'               => 'Resources',
            'singular_name'      => 'Resource',
            'add_new'            => 'Add New Resource',
            'add_new_item'       => 'Add New Resource',
            'edit_item'          => 'Edit Resource',
            'new_item'           => 'New Resource',
            'view_item'          => 'View Resource',
            'search_items'       => 'Search Resources',
            'not_found'          => 'No Resources Found',
            'not_found_in_trash' => 'No Resources found in Trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Resources',
        ),
        'public'            => true,
        'has_archive'       => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true, 
        'supports'          => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite'           => array('slug' => 'resources'),
        'hierarchical'      => false,
        'taxonomies'        => array('resource_type', 'post_tag'), 
    ));

    $args = array(
        'hierarchical' => true, 
        'labels' => array(
            'name'              => 'Resource Types',
            'singular_name'     => 'Resource Type',
            'search_items'      => 'Search Resource Types',
            'all_items'         => 'All Resource Types',
            'parent_item'       => 'Parent Resource Type',
            'parent_item_colon' => 'Parent Resource Type:',
            'edit_item'         => 'Edit Resource Type',
            'update_item'       => 'Update Resource Type',
            'add_new_item'      => 'Add New Resource Type',
            'new_item_name'     => 'New Resource Type Name',
            'menu_name'         => 'Resource Type',
        ),
        'show_ui'          => true,
        'show_in_rest'     => true, 
        'query_var'        => true,
        'rewrite'          => array('slug' => 'resource-type'),
    );
    register_taxonomy('resource_type', 'resource', $args);
}
add_action('init', 'resources_cpt');


function partners_cpt() {
    register_post_type('partner', array(
        'labels' => array(
            'name'               => 'Partners',
            'singular_name'      => 'Partner',
            'add_new'            => 'Add New Partner',
            'add_new_item'       => 'Add New Partner',
            'edit_item'          => 'Edit Partner',
            'new_item'           => 'New Partner',
            'view_item'          => 'View Partner',
            'search_items'       => 'Search Partners',
            'not_found'          => 'No Partners Found',
            'not_found_in_trash' => 'No Partners found in Trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Partners',
        ),
        'public'            => true,
        'has_archive'       => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true, 
        'supports'          => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite'           => array('slug' => 'partners'),
        'hierarchical'      => false,
    ));
}
add_action('init', 'partners_cpt');

add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
add_filter('use_widgets_block_editor', '__return_false');
remove_action('wp_enqueue_scripts', 'wp_common_block_scripts_and_styles');
remove_action('wp_enqueue_scripts', 'wp_enqueue_editor');
remove_action('enqueue_block_assets', 'wp_common_block_scripts_and_styles');
remove_action('enqueue_block_editor_assets', 'wp_enqueue_editor');
add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('wp-block-library');  
    wp_dequeue_style('wp-block-library-theme'); 
    wp_dequeue_style('wc-blocks-style'); 
    wp_dequeue_script('wp-blocks');  
    wp_dequeue_script('wp-element');  
    wp_dequeue_script('wp-editor');  
}, 100);


function allow_svg($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';    
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg');

function sanitize_svg_upload($file) {
    if ($file['type'] === 'image/svg+xml') {
        if (function_exists('svg_sanitizer')) {
            $sanitized_file = svg_sanitizer($file['tmp_name']);
            if ($sanitized_file) {
                $file['tmp_name'] = $sanitized_file;
            } else {
                $file['error'] = 'Invalid SVG file.';
            }
        }
    }
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'sanitize_svg_upload');


if (!function_exists('acf_text')) {
  function acf_text($name, $default = 'Empty value') {
    $v = get_field($name);
    if (is_string($v)) { $v = trim($v); }
    return ($v !== null && $v !== '') ? esc_html($v) : esc_html($default);
  }
}

if (!function_exists('acf_html')) {
  function acf_html($name, $default = '') {
    $v = get_field($name);
    if (is_string($v)) { $v = trim($v); }
    return ($v !== null && $v !== '') ? wp_kses_post($v) : $default;
  }
}


if (!function_exists('acf_url')) {
  function acf_url($name, $default = '#') {
    $v = get_field($name);
    return $v ? esc_url($v) : esc_url($default);
  }
}

if (!function_exists('acf_img_src')) {
  function acf_img_src($name, $fallback_src = '') {
    $v = get_field($name);
    if ($v) {
      return esc_url($v);
    }
    return $fallback_src ? esc_url($fallback_src) : '';
  }
}

$fallback_img = get_template_directory_uri() . '/assets/images/fallback.webp';

remove_action('wp_head', 'wp_generator');
add_filter('xmlrpc_enabled', '__return_false');



// Implemented security measures via htaccess
// Enable XSS Protection
// Prevent MIME-type sniffing
// Referrer Policy (Improves privacy)
// Prevent Clickjacking
// Strict Transport Security (HSTS)
// HTTP/3
<?php
// Include function files
require_once( __DIR__ . '/functions/images.php');
require_once( __DIR__ . '/functions/theme-support.php');
require_once( __DIR__ . '/functions/menu.php');
require_once( __DIR__ . '/functions/admin.php');

// Include post types
require_once( __DIR__ . '/functions/post-types/local-biodiversity.php');



function enqueue_custom_assets() {
    // Enqueue your compiled CSS
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/build/main.css', array(), '1.0.0', 'all');

    // Enqueue your compiled JS
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/build/main.js', array(), false, false);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_assets');
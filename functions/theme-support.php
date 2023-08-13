<?php 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

function remove_version() {
    return '';
}
add_filter('the_generator', 'remove_version');

function no_wordpress_errors(){
    return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

add_action( 'init', function() {
    remove_post_type_support( 'post', 'editor' );
    remove_post_type_support( 'page', 'editor' );
}, 99);

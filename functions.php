<?php 
//h1.siteTitle of page
function newblog_theme_support() {

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    
}

add_action( 'after_setup_theme', 'newblog_theme_support' );

//top menu and a footer menu
function newblog_menus() {

    $locations = array(
        'primary' => "Top Primary Menu",
        'footer' => "Bottom Footer Menu"
    );

    register_nav_menus( $locations );
}   

add_action( 'init', 'newblog_menus' );

//add css and js
function newblog_register_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'newblog-style', get_template_directory_uri() . '/style.css', array('newblog-bootstrap','newblog-fontawesome'), $version, 'all' );
    wp_enqueue_style( 'newblog-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all' );
    wp_enqueue_style( 'newblog-fontawesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '5.15.4', 'all' );
}
//add jquery, popper, bootstrap, main.js
add_action( 'wp_enqueue_scripts', 'newblog_register_styles' );

function newblog_register_scripts() {

    wp_enqueue_script( 'newblog-jquery', 'https://code.jquery.com/jquery-3.6.0.slim.min.js', array(), '3.6.0', true );
    wp_enqueue_script( 'newblog-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js', array(), '2.9.2', true );
    wp_enqueue_script( 'newblog-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array(), '5.0.2', true );
    wp_enqueue_script( 'newblog-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'newblog_register_scripts' );

?>
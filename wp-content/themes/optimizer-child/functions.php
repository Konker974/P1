<?php

function enqueue_child_theme_styles() {

wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

function icone_mobile() {
  wp_enqueue_script('icone', get_stylesheet_directory_uri() . '/test_icone.js', array( 'jquery' ),  NULL, true);
}

add_action('wp_enqueue_scripts', 'icone_mobile', PHP_INT_MAX);

function act_retrieve(){
  return $_GET['activite'];
}

add_shortcode('activite', 'act_retrieve');


?>

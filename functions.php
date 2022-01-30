<?php
/**
 * Theme Functions.
 * 
 * @package Eureka
 */

if (! defined ( 'EUREKA_DIR_PATH')) {
    define( 'EUREKA_DIR_PATH', untrailingslashit( get_template_directory()));
}

require_once EUREKA_DIR_PATH . '/inc/helpers/autoloader.php';

function eureka_get_theme_instance() {
    \EUREKA_THEME\Inc\EUREKA_THEME::get_instance();
}

eureka_get_theme_instance(); 

 function eureka_enqueue_scripts() {

    //Register Styles. 
     wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() .'/style.css' ), 'all' );
     wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );

     //Register Scripts
     wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() .'/assets/main.js' ), true );
     wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false );

     //Enqueue Styles
     wp_enqueue_style('style-css');
     wp_enqueue_style('bootstrap-css');


     //Enqueue Scripts
     wp_enqueue_script('main-js');
     wp_enqueue_script('bootstrap-js');

 }

add_action( 'wp_enqueue_scripts', 'eureka_enqueue_scripts' );



 ?>
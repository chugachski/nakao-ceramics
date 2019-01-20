<?php
//*============================================
//Require necessary files
//=============================================*/
require_once('post-types/post-types.php');

//*============================================
//Enqueue child theme styles
//=============================================*/
function nakao_ceramics_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'nakao_ceramics_enqueue_styles' );

//*============================================
//Loading the Custom Module into child theme
//=============================================*/
function divi_child_theme_setup() {
    if ( ! class_exists('ET_Builder_Module') ) {
        return;
    }

    get_template_part( 'custom-modules/cbm' );
    $cbm = new Custom_ET_Builder_Module_Blog();
    remove_shortcode( 'et_pb_blog' );
    add_shortcode( 'et_pb_blog', array($cbm, '_shortcode_callback') );
}
add_action( 'wp', 'divi_child_theme_setup', 9999 );

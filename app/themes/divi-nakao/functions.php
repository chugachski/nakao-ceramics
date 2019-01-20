<?php

require_once('post-types/post-types.php');

function nakao_ceramics_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'nakao_ceramics_enqueue_styles' );

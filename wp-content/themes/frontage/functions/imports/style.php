<?php

function style() {
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/dist/css/style.min.css', array(), null, null);
} add_action( 'wp_enqueue_scripts', 'style' ); 

?>
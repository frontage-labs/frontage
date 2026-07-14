<?php 

function publications_posttype() {
    register_post_type( 'publicacao',
        array(
            'labels' => array(
                'name' => __('Publicações'),
                'singular_name' => __('Publicação')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'publicacao'),
            'show_in_rest' => true,
            'supports' => array(
                'title',
                'custom-fields'
            ),
			'menu_icon'           => 'dashicons-megaphone',
            'taxonomies'  => array(/*'area',*/ 'category'),
        )
    );
} add_action('init', 'publications_posttype');

?>
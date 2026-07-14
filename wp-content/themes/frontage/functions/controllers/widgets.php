<?php
function header_side()
{
    register_sidebar(
        array(
            'id' => 'header-side',
            'name' => esc_html__('Header | Lateral', 'theme-domain'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>'
        )
    );
}
add_action('widgets_init', 'header_side');

function footer_col_1()
{
    register_sidebar(
        array(
            'id' => 'footer-col-1',
            'name' => esc_html__('Footer | Coluna 1', 'theme-domain'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>'
        )
    );
}
add_action('widgets_init', 'footer_col_1');

function footer_col_2()
{
    register_sidebar(
        array(
            'id' => 'footer-col-2',
            'name' => esc_html__('Footer | Coluna 2', 'theme-domain'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>'
        )
    );
}
add_action('widgets_init', 'footer_col_2');

function footer_col_3()
{
    register_sidebar(
        array(
            'id' => 'footer-col-3',
            'name' => esc_html__('Footer | Coluna 3', 'theme-domain'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>'
        )
    );
}
add_action('widgets_init', 'footer_col_3');

function footer_col_4()
{
    register_sidebar(
        array(
            'id' => 'footer-col-4',
            'name' => esc_html__('Footer | Coluna 4', 'theme-domain'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>'
        )
    );
}
add_action('widgets_init', 'footer_col_4');

function footer_copy()
{
    register_sidebar(
        array(
            'id' => 'footer-copy',
            'name' => esc_html__('Footer | Copyright', 'theme-domain'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>'
        )
    );
}
add_action('widgets_init', 'footer_copy');

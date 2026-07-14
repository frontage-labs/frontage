<?php

    function wpse_modify_category_query( $query ) {
        if ( ! is_admin() && $query->is_main_query() ) {
            if ( $query->is_category() ) { 
                $query->set( 'posts_per_page', 12 ); 
            }
        }
    } add_action( 'pre_get_posts', 'wpse_modify_category_query' );

?>
<?php

function sidebar(){  
  // remove_menu_page( 'index.php' );                  //Dashboard  
  // remove_menu_page( 'edit.php' );                   //Posts  
  // remove_menu_page( 'upload.php' );                 //Media  
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages  
  // remove_menu_page( 'edit-comments.php' );          //Comments  
  // remove_menu_page( 'themes.php' );                 //Appearance  
  // remove_menu_page( 'plugins.php' );                //Plugins  
  // remove_menu_page( 'users.php' );                  //Users  
  // remove_menu_page( 'tools.php' );                  //Tools  
  // remove_menu_page( 'options-general.php' );        //Settings  
  // remove_menu_page('wpcf7');
  // remove_menu_page( 'edit.php?post_type=acf-field-group' );
  // remove_menu_page( 'admin.php?page=wpcf7' );

}  add_action( 'admin_menu', 'sidebar' );  

function plt_hide_wp_mail_smtp_menus() {
	remove_menu_page('wp-mail-smtp');
	remove_submenu_page('wp-mail-smtp', 'wp-mail-smtp');
	remove_submenu_page('wp-mail-smtp', 'wp-mail-smtp-logs');
	remove_submenu_page('wp-mail-smtp', 'wp-mail-smtp-about');
} add_action('admin_menu', 'plt_hide_wp_mail_smtp_menus', 11);


function remove_admin_bar() {
  show_admin_bar(false);
} add_action('after_setup_theme', 'remove_admin_bar');

?>
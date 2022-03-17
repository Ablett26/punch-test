<?php 

add_action( 'after_setup_theme', 'register_my_menus' );

function register_my_menus() {
  register_nav_menu( 'primary', __( 'Primary' ) );
  register_nav_menu( 'footer-one', __( 'Footer One' ) );
  register_nav_menu( 'footer-two', __( 'Footer Two' ) );
  register_nav_menu( 'footer-three', __( 'Footer Three' ) );

}
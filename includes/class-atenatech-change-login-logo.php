<?php
// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
  exit;
}

if ( ! class_exists( 'AtenaTech_Change_Login_Logo' ) ) :

  class AtenaTech_Change_Login_Logo {
    /**
     * Enqueue style that contains logo change CSS.
     */
    public static function init() {
      wp_enqueue_style( 'style-change-login-logo', plugins_url( 'assets/styles/change-logo.css', dirname(__FILE__) ) );      
    } // init()
  } // DL_Password_Protected

endif; // class exists check
?>
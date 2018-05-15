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
    public function init() {
      $this->changeLoginLogo();
    } // init()
    
    private function changeLoginLogo() {
      echo '
        <style type="text/css">
          #login { width: 600px }

          h1 a { background-image: url(' . plugins_url( "assets/images/under-construction-1024x768.jpg", dirname(__FILE__) ) . ') !important; }
          .login h1 a {
            background-size: 100%;
            height: 450px;
            width: 100%;
          }
        </style>
      ';
    } // changeLoginLogo()
  } // DL_Password_Protected

endif; // class exists check
?>
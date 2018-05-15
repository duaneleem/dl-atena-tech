<?php
/*
  Plugin Name: Atena-Tech.com Main Plugin
  Plugin URI: https://duaneleem.com
  Description: Customizes various aspects of Atena-Tech.com
  Version: 0.0.1
  Author: Duane Leem
  Author URI: https://duaneleem.com
  License: GPLv2+
  Text Domain: dl-atena-tech
*/

// Exit if accessed directly.
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * Change logo of login page to show under construction page.
 */
function atenatech_change_login_logo_init() {
  require_once("includes/class-atenatech-change-login-logo.php");
  $objAtenaTechChangeLogin = new AtenaTech_Change_Login_Logo();
  $objAtenaTechChangeLogin->init();
}
add_action( "login_head", "atenatech_change_login_logo_init");


?>
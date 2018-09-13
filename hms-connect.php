<?php
/*
Plugin Name: HMS Connect
Plugin URI: https://manage.thinkholmes.com/hms-connect
Description: Easily deploy add ons that enhance functionality. 
Version: 0.0.1
Author: Micheal England
Author URI: http://michealengland.com
Text Domain: hms-connect
Domain Path: /languages
*/
?>


<?php
// Updater Class
class Smashing_Updater {
  protected $file;
  protected $plugin;
  protected $basename;
  protected $active;

  public function __construct( $file ) {
    $this->file = $file;
    /**
     * 'admin_init' Ensures that we have the function to get plugin data & that the plugin is active.
     */ 
    add_action( 'admin_init', array( $this, 'set_plugin_properties' ) );
    return $this;
  }

  public function set_plugin_properties() {
    $this->plugin   = get_plugin_data( $this->file );
    $this->basename = plugin_basename( $this->file );
    $this->active   = is_plugin_active( $this->basename );
  }
}

function hms_connect_run() {
    echo '<h1>test</h1>';
}

hms_connect_run();

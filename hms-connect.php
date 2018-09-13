<?php
/*
Plugin Name: HMS Connect
Plugin URI: https://manage.thinkholmes.com/hms-connect
Description: Easily deploy add ons that enhance functionality. 
Version: 0.0.2
Author: Micheal England
Author URI: http://michealengland.com
Text Domain: hms-connect
Domain Path: /languages
*/
?>


<?php
// Include our updater file
include_once( plugin_dir_path( __FILE__ ) . 'update.php');

$updater = new Smashing_Updater( __FILE__ ); // instantiate our class
$updater->set_username( 'michealengland' ); // set username
$updater->set_repository( 'hms-connect' ); // set repo
$updater->initialize(); // initialize the updater

function hms_connect_run() {
    echo '<h1>test</h1>';
}

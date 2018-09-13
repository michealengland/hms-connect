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
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}
$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'michealengland' );
$updater->set_repository( 'hms-connect' );
// $updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos

$updater->initialize();

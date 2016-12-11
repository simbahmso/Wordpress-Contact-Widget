<?php
/*
Plugin Name: Ajax Contact Widget
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Simple Ajax powered contact form widget
Version:     1.0
Author:      Thembelani Simba Msongelwa
Author URI:  simbalabs.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/

/*
*	Include Javascript
*/
function add_scripts(){
	wp_enqueue_script('contact-scripts', plugins_url().'/contact-widget/js/script.js', array('jquery'),'1.0.0', false);
}

add_action('wp_enqueue_scripts','add_scripts');

/*
*	Include Class
*/
Include('class.contact-widget.php');

/*
*	Register Widget
*/
function register_contact_widget(){
	register_widget('Contact-widget')
}

add_action('widget_init','register_contact_widget');





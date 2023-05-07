<?php 
/*
* Plugin Name: Elementor Addon
*/



function register_custom_elementor_widget( $widgets_manager ) {

	require_once( __DIR__ . '/hello-world-widget-addon.php' );
	
	$widgets_manager->register( new \Elementor_custom_Widget_1() );
	
}
add_action( 'elementor/widgets/register', 'register_custom_elementor_widget' );
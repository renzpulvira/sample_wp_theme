<?php

function pullScripts(){
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css'); 
	wp_enqueue_style('css', get_template_directory_uri() . '/css/main.css');  
}

add_action( 'wp_enqueue_scripts', 'pullScripts');

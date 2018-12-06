<?php

//enqueue custom scripts, fonts, etc
add_action( 'wp_enqueue_scripts','custom_scripts' );

function custom_scripts(){
		wp_enqueue_style('oswald', 'https://fonts.googleapis.com/css?family=Oswald');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css');

    wp_enqueue_script(

    			'bootstrapJS',
    			get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js',
    			array(jquery)

    			);
} //end secdc_custom_scripts


// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');

?>

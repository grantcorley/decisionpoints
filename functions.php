<?php

//enqueue custom scripts, fonts, etc
add_action( 'wp_enqueue_scripts','custom_scripts' );

function custom_scripts(){
		wp_enqueue_style('oswald', 'https://fonts.googleapis.com/css?family=Oswald');

} //end secdc_custom_scripts


?>

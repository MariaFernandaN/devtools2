<?php

//function wpd_add_google_fonts() {
	
//wp_enqueue_style(
'wpb-google-fonts','https://fonts.googleapis.com/
css?family=BioRhyme+Expanded', false);
//}

add_action( 'wpb_enqueue:scripts', 'wpb_add_google_fonts'
);
//
function my_theme_enqueue_styles() {

	$parent_style = 'twentyseventeen-style'; //This is twentyseventeen-style for the Twenty seventeen theme.

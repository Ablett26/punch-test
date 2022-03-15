<?php


// load cf7 if contains shortcode
function load_cf7($content) {
	
// stop wpcf7 scripts from loading
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );
	
	// if content contains wpcf7 marker
	if ( strpos($content,'wpcf7') !== false ) { 

		// add scripts
		if ( function_exists( 'wpcf7_enqueue_scripts' ) ) wpcf7_enqueue_scripts();
		if ( function_exists( 'wpcf7_enqueue_styles' ) )  wpcf7_enqueue_styles();
	}

	return $content;
}
add_filter( 'the_content', 'load_cf7', 20 );


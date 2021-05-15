<?php 
/******************************
** YourColor Craet Shortcode
*******************************/


	/////////////////////////////////
	// Craet Shortcode Snippet
	/////////////////////////////////
	add_shortcode('snippet', 'shortcode_snippet');
		function shortcode_snippet( $atts, $content = null ) {  
			return '<pre class="Yourcolor-pre">' .do_shortcode($content). '</pre>';  
	}
	/////////////////////////////////
	// Craet Shortcode button
	/////////////////////////////////
	add_shortcode('button', 'shortcode_button');
		function shortcode_button( $atts, $content = null ) {  
			return '<h1 class="button-shortcode"><strong>' .do_shortcode($content). '</strong></h1>';  
	}

	








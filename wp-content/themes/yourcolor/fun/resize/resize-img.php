<?php 
	///////////////////////////////
	// Resize images
	///////////////////////////////
	function Resize_images( $img_url_src , $width = 250 , $height = 250  ){
		$img_url = $img_url_src;
		$url_rep = str_replace('en/','', home_url());
		$img =  wp_get_image_editor( ABSPATH.str_replace($url_rep, '', $img_url) );
		if ( ! is_wp_error( $img ) ) {
			$img->resize( $width, $height, true );
			$filename = $img->generate_filename();
			$generate_filename = $img->save($filename);
			$thumb = str_replace(ABSPATH, '', $generate_filename);
			$master_thumb = $url_rep.$thumb['path'];
		}	
		return $master_thumb;
		//unset($master_thumb);
	}
?>
<?php 
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
$post_url   = $_GET['url'];
$cats       = $_GET['cats'];
$one_loops_arg    = array( 
	'post_type' => 'videos', 
	'posts_per_page' => -1, 
); 
$one_loops_Query  = get_posts($one_loops_arg); 
/////////////////////////////////////////////////
////////////////////////////////////////////////
preg_match( '/[\\?\\&]v=([^\\?\\&]+)/', $post_url , $matches );
echo $matches[1];
$json = wp_remote_fopen("http://gdata.youtube.com/feeds/api/videos/".$matches[1]."?v=2&prettyprint=true&alt=jsonc");
$json = json_decode($json);
////////////////////////////////////////////
////////////////////////////////////////////
$thumbnail  = $json->data->thumbnail->hqDefault; 
$title      = $json->data->title;
////////////////////////////////////////////
////////////////////////////////////////////
$post_data=array(
	'post_thumbnail' => $attach_id,
	'post_status'    => 'publish',
	'post_type'      => 'videos',
	'post_title'     => $title,
);
$post_id = wp_insert_post( $post_data, $wp_error );
////////////////////////////////////////////
////////////////////////////////////////////
$image_url  = $thumbnail;
$upload_dir = wp_upload_dir();
$image_data = wp_remote_fopen($image_url);
$filename = basename($image_url);
$filename = str_replace('.jpg', '-'.$post_id.'.jpg', $filename);
if(wp_mkdir_p($upload_dir['path']))
	$file = $upload_dir['path'] . '/' . $filename;
else
	$file = $upload_dir['basedir'] . '/' . $filename;
file_put_contents($file, $image_data);

$wp_filetype = wp_check_filetype($filename, null );
$attachment = array(
	'post_mime_type' => $wp_filetype['type'],
	'post_title' => sanitize_file_name($filename),
	'post_content' => '',
	'post_status' => 'inherit'
);
$attach_id = wp_insert_attachment( $attachment, $file, $post_id );
require_once(ABSPATH . 'wp-admin/includes/image.php');
$attach_data = wp_generate_attachment_metadata( $attach_id, $file );
wp_update_attachment_metadata( $attach_id, $attach_data );

set_post_thumbnail( $post_id, $attach_id );
////////////////////////////////////////////
////////////////////////////////////////////
update_post_meta($post_id, 'YC_link_video', $post_url );
////////////////////////////////////////////
////////////////////////////////////////////
wp_set_post_terms($post_id,array_values($cats), 'videos_cat');
////////////////////////////////////////////
////////////////////////////////////////////
?>
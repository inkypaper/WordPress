<?
ob_start();
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
?>
<?php $post=get_post($_GET['p']); ?>
<?php setup_postdata($post); ?>
<?php $i = 0; foreach( get_post_meta( $post->ID, 'show_online', true ) as $k => $server ) { ?>
	<?php if( $i == $_GET['server'] ) { ?><?php echo $server['code']?><?php } ?>
<?php $i++; } ?>
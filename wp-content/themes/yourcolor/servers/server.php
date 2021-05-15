<?php
ob_start();
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
$_GET['i'] = ( $_GET['i'] == '1' ) ? '' : $_GET['i'];
?>
<?php $post = get_post( $_GET['q'] ); ?>
<?php setup_postdata($post); ?>
<?php if( $_GET['i'] == 'Download' ) { ?>
<div class="serverDownload">
<?php $download_ls = get_post_meta( $post->ID, 'downloads', true ); ?>
<?php foreach( (is_array($download_ls)) ? $download_ls : array() as $field ) { ?>
	<a target="_blank" href="<?php echo $field['link']?>">
		<?php echo $field['name']?>
	</a>
<?php } ?>
</div>
<?php }else { ?>
<?php if( get_option('ad250') != '' ) { ?>
    <div class="adG">
        <span onClick="CloseAd();" class="closeAD"><i class="fa fa-close"></i></span>
        <?php echo str_replace("\'", "'", get_option('ad250'))?>
    </div>
<?php } ?>
<?php echo get_post_meta($post->ID, 'embed_pelicula'.$_GET['i'].'', true)?>
<?php } ?>
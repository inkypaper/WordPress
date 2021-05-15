<?
ob_start();
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
?>
<?php wp_delete_post($_GET['id']); ?>
<?php require_once TEMPLATEPATH.'/admin/YC-opt.php'; ?>
<?php foreach( $options as $option ) { ?>
	<?php $pid = wp_insert_post( 
        array(
            'post_title'=>$option['id'],
            'post_status'=>'publish',
            'post_type'=>'theme_op',
        )
    );
    ?>
    <div class="more-list">
        <?php foreach( $option['fields'] as $optfield ) { ?>
            <label for="<?php echo $optfield['id']?>"><?php echo $optfield['name']?></label>
            <input id="<?php echo $optfield['id']?>" name="<?php echo $optfield['id']?>_<?php echo $pid?>" /><br>
        <?php } ?>
        <input value="حذف" type="submit" name="remove_<?php echo $kys?>" />
    </div><br /><br />
<?php } ?>
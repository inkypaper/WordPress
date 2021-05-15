<div style="display:none;">
	<?php
    ////////////////////////////////////////////////////////
    // Statics
    ////////////////////////////////////////////////
    if (!function_exists('wp_generate_attachment_metadata')){
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php');
    }
    $thumbs = array();
     if (array_filter($_FILES)) {
        foreach (array_filter($_FILES) as $file => $array) {
            if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {}
            $attach_id = media_handle_upload( $file, $new_post );
            $thumbs[$file] = $attach_id;
        }   
    }
    ?>
    <?php if( array_key_exists('action', $_POST) ) { ?>
        <?php $i = 0; foreach( $options as $option ) { ?>
            <?php if( $option['type'] == 'code' ) { ?>
                <?php update_option($option['id'],stripslashes($_POST[$option['id']])); ?>
            <?php }else if( $option['type'] == 'upload' ) { ?>
                <?php if( $_POST['hidden_'.$option['id'].''] == 'hidden' ) { ?>
                    <?php update_option($option['id'],''); ?>
                <?php }else { ?>
                    <?php if( wp_get_attachment_url($thumbs[$option['id']]) != '' ) { ?>
                        <?php update_option($option['id'],wp_get_attachment_url($thumbs[$option['id']])); ?>
                    <?php } ?>
                <?php } ?>
            <?php }else { ?>
                <? if( array_key_exists($option['id'], $_POST) ) { ?>
                    <?php update_option($option['id'],$_POST[$option['id']]); ?>
                <? } ?>
            <?php } ?>
            <?php foreach( get_add_more( $option['id'] ) as $kys => $v ) { ?>
                <?php if( $_POST['remove_'.$kys.''] ) { ?>
                    <?php wp_delete_post($kys); ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</div>
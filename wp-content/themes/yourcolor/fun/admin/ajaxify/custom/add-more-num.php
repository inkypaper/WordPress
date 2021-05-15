<?
ob_start();
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
?>
<?php require_once TEMPLATEPATH.'/admin/YC-opt.php'; ?>
<?php foreach( $options as $option ) { ?>
    <?php if( $option['id'] == $_GET['option'] ) { ?>
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
            	<?php if( $optfield['type'] == 'upload' ) { ?>
					<script>
                        jQuery(document).ready(function($) {
                            $('.<?php echo $optfield['id']?>_<?php echo $kys?>_upload').click(function(e) {
                                e.preventDefault();
                    
                                var custom_uploader = wp.media({
                                    title: '<?php echo $optfield['name']?>',
                                    button: {
                                        text: 'رفع صورة'
                                    },
                                    multiple: false  // Set this to true to allow multiple files to be selected
                                })
                                .on('select', function() {
                                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                                    $('img.<?php echo $optfield['id']?>_<?php echo $kys?>').attr('src', attachment.url);
                                    $('.<?php echo $optfield['id']?>_<?php echo $kys?>_url').val(attachment.url);
                                    $('.<?php echo $optfield['id']?>_<?php echo $kys?>_remove').show();
                                })
                                .open();
                            });
                            jQuery(".<?php echo $optfield['id']?>_<?php echo $kys?>_remove").click(function(){
                                $('img.<?php echo $optfield['id']?>_<?php echo $kys?>').attr('src', "");
                                $('.<?php echo $optfield['id']?>_<?php echo $kys?>_url').val("");
                                $('.<?php echo $optfield['id']?>_<?php echo $kys?>_remove').hide();
                            });
                        });
                    </script>
                    <?php if( $_POST[$optfield['id'].'_'.$kys] ) { ?>
                        <?php update_option( ''.$optfield['id'].'_'.$kys.'', $_POST[$optfield['id'].'_'.$kys] ); ?>
                    <?php } ?>
                    <div>
                        <label for="<?php echo $optfield['id']?>"><?php echo $optfield['name']?></label>
                        <img src="<?php echo get_option(''.$optfield['id'].'_'.$kys.''); ?>" class="<?php echo $optfield['id']?>_<?php echo $kys?>" style="width:50px;float:right;" />
                        <a class="<?php echo $optfield['id']?>_<?php echo $kys?>_upload">رفع الصورة</a>
                        <a class="<?php echo $optfield['id']?>_<?php echo $kys?>_remove" <?php if( get_option(''.$optfield['id'].'_'.$kys.'') == '' ) { ?>style="display:none;"<?php } ?>>ازالة الصورة</a>
                        <input class="<?php echo $optfield['id']?>_<?php echo $kys?>_url" value="<?php echo get_option(''.$optfield['id'].'_'.$kys.''); ?>" id="<?php echo $optfield['id']?>" name="<?php echo $optfield['id']?>_<?php echo $kys?>" /><br>
                    </div>
                <?php }elseif( $optfield['type'] == 'text' ) { ?>
                    <?php if( $_POST[$optfield['id'].'_'.$kys] ) { ?>
                        <?php update_option( ''.$optfield['id'].'_'.$kys.'', $_POST[$optfield['id'].'_'.$kys] ); ?>
                    <?php } ?>
                    <div>
                        <label for="<?php echo $optfield['id']?>"><?php echo $optfield['name']?></label>
                        <input value="<?php echo get_option(''.$optfield['id'].'_'.$kys.''); ?>" id="<?php echo $optfield['id']?>" name="<?php echo $optfield['id']?>_<?php echo $kys?>" /><br>
                    </div>
                <?php }elseif( $optfield['type'] == 'textarea' ) { ?>
                    <?php if( $_POST[$optfield['id'].'_'.$kys] ) { ?>
                        <?php update_option( ''.$optfield['id'].'_'.$kys.'', $_POST[$optfield['id'].'_'.$kys] ); ?>
                    <?php } ?>
                    <div>
                        <label for="<?php echo $optfield['id']?>"><?php echo $optfield['name']?></label>
                        <textarea id="<?php echo $optfield['id']?>" name="<?php echo $optfield['id']?>_<?php echo $kys?>"><?php echo get_option(''.$optfield['id'].'_'.$kys.''); ?></textarea><br>
                    </div>
                <?php }elseif( $optfield['type'] == 'editor' ) { ?>
                    <?php if( $_POST[$optfield['id'].'_'.$kys] ) { ?>
                        <?php update_option( ''.$optfield['id'].'_'.$kys.'', $_POST[$optfield['id'].'_'.$kys] ); ?>
                    <?php } ?>
                    <div>
                        <label for="<?php echo $optfield['id']?>"><?php echo $optfield['name']?></label>
                        <?php 
                         $textarea_name = $optfield['id'].'_'.$kys;
                         $editor_id = $optfield['id'].'_'.$kys;
                         wp_editor( 
                             get_option(''.$optfield['id'].'_'.$kys.''), 
                             $editor_id, 
                             $settings = array( 
                                 'media_buttons' => true,
                                 'textarea_name' => $textarea_name,
                                 'quicktags' => true,
                                 'tinymce' => true,
                                 'textarea_rows' => 20,
                             )
                         ); 
                        ?>
                    </div>
                <?php } ?>
            <?php } ?>
            <input value="حذف" type="submit" name="remove_<?php echo $kys?>" />
        </div><br /><br />
    <?php } ?>
<?php } ?>
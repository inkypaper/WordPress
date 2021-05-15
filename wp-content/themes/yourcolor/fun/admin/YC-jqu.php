<?php require_once get_template_directory().'/fun/admin/YC-opt.php'; ?>
<?
wp_enqueue_script('jquery');
wp_enqueue_script('thickbox');
wp_enqueue_script('media-models');
wp_enqueue_script('media-upload');
?>
<?php $i = 0; foreach( $options as $option ) { ?>
	<?php if( $option['type'] == 'title' ) { ?>
    <?php } ?>
    <?php if( $option['type'] == 'more_field' ) { ?>
    	<?php }elseif( $option['type'] == 'color' ) { ?>
    
    	<script>
			$(function() {
				$("#<?php echo $option['id']; ?>").spectrum({
					allowEmpty:true,
					color: "<?php echo get_option($option['id'])?>",
					showInput: true,
					containerClassName: "full-spectrum",
					showInitial: true,
					showPalette: true,
					showSelectionPalette: true,
					showAlpha: true,
					maxPaletteSize: 10,
					preferredFormat: "hex",
					localStorageKey: "spectrum.demo",
					move: function (color) {
						updateBorders(color);
					},
					show: function () {
				
					},
					beforeShow: function () {
				
					},
					hide: function (color) {
						updateBorders(color);
					},
				
					palette: [
						["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)", /*"rgb(153, 153, 153)","rgb(183, 183, 183)",*/
						"rgb(204, 204, 204)", "rgb(217, 217, 217)", /*"rgb(239, 239, 239)", "rgb(243, 243, 243)",*/ "rgb(255, 255, 255)"],
						["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
						"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"],
						["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)",
						"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)",
						"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)",
						"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)",
						"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)",
						"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
						"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
						"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
						/*"rgb(133, 32, 12)", "rgb(153, 0, 0)", "rgb(180, 95, 6)", "rgb(191, 144, 0)", "rgb(56, 118, 29)",
						"rgb(19, 79, 92)", "rgb(17, 85, 204)", "rgb(11, 83, 148)", "rgb(53, 28, 117)", "rgb(116, 27, 71)",*/
						"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)",
						"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
					]
				});
			});
    	</script>
            
    	<?php }elseif( $option['type'] == 'select' ) { ?>
            
    	<script>
    	    $(window).on('load', function () {
                $('#<?php echo $option['id']?>').selectpicker({
                    'selectedText': 'cat'
                });
            });
    	</script>
        
    	<?php }elseif( $option['type'] == 'select_taxonomy' ) { ?>
        
    	<script>
    	    $(window).on('load', function () {
                $('#<?php echo $option['id']?>').selectpicker({
                    'selectedText': 'cat'
                });
            });
    	</script>
    	<?php }elseif( $option['type'] == 'upload' ) { ?>
			<script>
                jQuery(window).load(function($) {
                    jQuery('.<?php echo $option['id']?>_upload').click(function(e) {
                        e.preventDefault();
            
                        var custom_uploader = wp.media.frames.file_frame = wp.media({
                            title: '<?php echo $option['name']?>',
                            button: {
                                text: 'رفع صورة'
                            },
                            multiple: false  // Set this to true to allow multiple files to be selected
                        })
                        .on('select', function() {
                            var attachment = custom_uploader.state().get('selection').first().toJSON();
                            $('.<?php echo $option['id']?>').attr('src', attachment.url);
                            $('.<?php echo $option['id']?>_url').val(attachment.url);
                            $('.<?php echo $option['id']?>_remove').show();
                        })
                        .open();
                    });
                    jQuery(".<?php echo $option['id']?>_remove").click(function(){
                        $('.<?php echo $option['id']?>').attr('src', "");
                        $('.<?php echo $option['id']?>_url').val("");
                        $('.<?php echo $option['id']?>_remove').hide();
                    });
                });
                ////////////////////////////////////////
                ////////////////////////////////////////
            </script>

    <?php }elseif( $option['type'] == 'fonts' ) { ?>
    	<script>
			jQuery(document).ready(function($) {
				jQuery('#<?php echo $option['id']?>').fontselect();
			});
		</script>
    <?php }elseif( $option['type'] == 'textarea_html' ) { ?>
    	<script>
			jQuery(document).ready(function($) {
				$("#<?php echo $option['id']?>").snippet("css",{style:"bright"});
			});
		</script>
        
        
        
        
         
        
        
        
        
        
        
	<?php } ?>
<?php } ?>
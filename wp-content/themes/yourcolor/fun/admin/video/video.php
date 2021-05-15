<?php 

add_action('admin_menu', 'register_video_machine');

function register_video_machine() {
	add_submenu_page( 'edit.php?post_type=videos', 'Video Machine', 'Video Machine', 'manage_options', 'video-machine', 'apf_post_form' );
}
	?>
<?php
function apf_post_form() { ?>
<link rel='stylesheet' href='<?php bloginfo('template_url'); ?>/fun/admin/video/video-machine.css' type='text/css' media='all' />
	<script>
    jQuery(document).ready(function($) {
        $("#apfform").submit(function(){
			var myCheckboxes_2 = new Array();
			$(".post_category:checked").each(function() {
			   myCheckboxes_2.push($(this).val());
			});
			if( $("#apfvideo").val() == '' ) {
				alert('يرجي ادخال الرابط');
			}else if( myCheckboxes_2 == '' ) {
				alert('يرجي اختيار القسم');
			}else {
				var myCheckboxes = new Array();
				var info = 'url='+$("#apfvideo").val()+'&';
				var cats = '';
				var i = 0;
				$(".post_category:checked").each(function() {
					cats = 'cats[]='+$(this).val()+'&'+cats+''
				});
				var data = info+cats+'&';
				var data = data.replace('&&','');
				$("#apfform input").attr('disabled','disabled');
				$("#apfform button").attr('disabled','disabled');
				$.ajax({
					url: '<?php echo get_template_directory_uri(); ?>/fun/admin/video/add_ajax.php',
					type: 'GET',
					data:data,
					success: function(data, textStatus, jqXHR){
						$("#apfform input").removeAttr('disabled');
						$("#apfform input#apfvideo").val('');
						$("#apfform input").removeAttr('checked');
						$("#apfform button").removeAttr('disabled');
						$("body").append(data);
					},
					error: function(jqXHR, textStatus, errorThrown) {
						// Handle errors here
						$("#apfform input").removeAttr('disabled');
						$("#apfform input#apfvideo").val('');
						$("#apfform input").removeAttr('checked');
						$("#apfform button").removeAttr('disabled');
						alert('هذا الفيديو مكرر');
						// STOP LOADING SPINNER
					}
				});
			}
			return false;
		});
    });
    </script>
    <div class="ma-video-machine">
        <div class="video-machine">
            <form id="apfform" action="" method="post" enctype="multipart/form-data">
            	<ul>
                	<li>
                    	<span><?php _e( 'رابط الفيديو' , 'YourColor' ); ?></span>
		                <input type="url" id="apfvideo" name="apfvideo"/><br />
                    </li>
                </ul>
                <div class="yourcolor-cat-add">
                    <div class="cat-add-new-form">
					 <?php
                    $args = array(
                        'show_option_all'    => '',
                        'orderby'            => 'name',
                        'order'              => 'ASC',
                        'style'              => 'none',
                        'show_count'         => 1,
                        'hide_empty'         => 0,
                        'use_desc_for_title' => 1,
                        'child_of'           => 0,
                        'feed'               => '',
                        'feed_type'          => '',
                        'feed_image'         => '',
                        'exclude'            => '',
                        'exclude_tree'       => '',
                        'include'            => '',
                        'hierarchical'       => 1,
                        'title_li'           => __( 'Categories' ),
                        'show_option_none'   => __('No categories'),
                        'number'             => null,
                        'echo'               => 0,
                        'depth'              => 0,
                        'current_category'   => 0,
                        'pad_counts'         => 0,
                        'taxonomy'           => 'videos_cat',
                        'walker'             => null
                    ); 
                    $taxonomy = 'videos_cat';
                    $tax_terms = get_terms($taxonomy, $args );
                    foreach ($tax_terms as $tax_term) { ?>
                        <label for="<?php echo $tax_term->term_id?>">
                            <input type="checkbox" class="post_category" name="cats[]" value="<?php echo $tax_term->term_id?>" id="<?php echo $tax_term->term_id?>" />
                            <?php echo $tax_term->name?>
                        </label>
                    <?php } ?>
                    <div class="clr"></div>
                    </div>
                </div>
                <div class="clr"></div>
                <button type="submit" class="submit button">اضافة الفيديو</button>
                <div class="clr"></div>
            </form>
        </div>
    </div>
<?php
/*
	//.$matches[1].

?>
<pre dir="ltr"><?php print_r($json); ?></pre>
*/


?>

<?php } ?>
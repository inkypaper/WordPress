<?php
////////////////////////////////////////////////////////
// Functions
////////////////////////////////////////////////////////
function get_add_more( $id ) { ?>
	<?php query_posts( array( 'post_type'=>'theme_op', 'order'=>'ASC', 'posts_per_page'=>-1 ) ); ?>
    <?php $more_list = array(); $i = 0; if(have_posts()) { while(have_posts()) { the_post(); ?>
    	<?php global $post; if( $post->post_title == $id ) { ?>
	    	<?php $more_list[$post->ID] = get_option($id.$post->post_title.$post->ID); ?>
        <?php } ?>
    <?php $i++; } } wp_reset_query(); ?>
    <?php return $more_list; ?>
<?php } 
add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page(){
    add_menu_page( 'YourColor Options', 'YourColor Options', 'administrator', 'YC_panel', 'options_page', 0 ); 
}

function options_page(){ ?>
    <?php require_once get_template_directory().'/fun/admin/YC-opt.php'; ?>

	<script src="<?php echo get_template_directory_uri(); ?>/head/js/jquery-1.8.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/fun/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/fun/admin/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/fun/admin/js/bootstrap-select.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/fun/admin/js/BeatPicker.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/fun/admin/js/spectrum.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/fun/admin/js/jquery.fontselect.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/fun/admin/js/jquery.snippet.js"></script>



    <?php require_once get_template_directory().'/fun/admin/YC-upde.php'; ?>
    <?php require_once get_template_directory().'/fun/admin/YC-jqu.php'; ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fun/admin/css/main.css" />
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/fun/admin/css/bootstrap-select.css'/>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/fun/admin/css/bootstrap.min.css'/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fun/admin/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fun/admin/css/jquery.datetimepicker.css"/>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/fun/admin/css/jquery.snippet.css' />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fun/admin/css/BeatPicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fun/admin/css/spectrum.css">
    <div id="YourColor-panel">
        <div class="YourColor-header-panel">
            <div class="logo-panel">YourColor Panel</div>
            <div class="description">Welcome to yourcolor panel</div>
        </div>
        <div class="YourColor-top-menu">
            <ul>
                <li><a href="#">View Documentation</a></li>
                <li><a href="#">Visit Support</a></li>
                <li>Theme version 1.0</li>
                <div class="clr"></div>
            </ul>
            <div class="clr"></div>
        </div>
        <div id="main">
            <ul class="tabContainer">
            	<?php foreach( $options as $option ) { ?>
					<?php if( $option['type'] == 'tab' ) { ?>
                    	<script>
                        jQuery(function($){
							$("#<?php echo $option['id']?>-tab").click(function(){
								$(".input_section").hide();
								$(".panel-field-<?php echo $option['id']?>").show();
							});
						});
                        </script>
                        <li id="<?php echo $option['id']?>-tab">
                            <a href="javascript:void(0);" class="tab blue">
                                <img id="img-tab-<?php echo $i?>" src="<?php echo $option['icon']?>">
                                <span><?php echo $option['name']?></span>
                            </a>
                        </li>
                    <?php } ?>
                <?php } ?>
            	<?php foreach( $options as $option ) { ?>
					<?php $i = 0; if( $option['type'] == 'tab' ) { ?>
                    	<?php $optffds[] = $option['id']; ?>
                    <?php $i++; } ?>
                <?php } ?>
                <?php foreach( array_slice($optffds, 0, 1) as $v ) { ?>
                	<script>
					jQuery(function($){
						$(".input_section").hide();
						$(".panel-field-<?php echo $v?>").show();
					});
					</script>
                <?php } ?>
            </ul>
            <div class="clr"></div>
            <div id="tabContent">
                <div id="contentHolder">
                
                    <div class="options_wrap">
                        <div class="content_options">
                        
                        
                            <form method="post" enctype="multipart/form-data">
                            	<?php $i = 0; foreach( $options as $option ) { ?>
									<?php if( $option['type'] == 'title' ) { ?>
	                                    <h1 class="YourColor-title-cont-ajax input_section panel-field-<?php echo $option['to']?>"><?php echo $option['name']?></h1>
                                    <?php } ?>
									<?php if( $option['type'] == 'more_field' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input option_select">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div id="fields_<?php echo $option['id']?>">
                                                    	<?php if( $_POST['add_more_'.$option['id'].''] == 'Add New Field') { ?>
                                                        	<?php $pid = wp_insert_post( 
																array(
																	'post_title'=>$option['id'],
																	'post_status'=>'publish',
																	'post_type'=>'theme_op',
																)
															);
															?>
                                                        <?php } ?>
                                                        <p class="submit"><input name="add_more_<?php echo $option['id']?>" type="submit" id="add_button_<?php echo $option['id']?>" id="submit" class="button button-primary" value="Add New Field"></p>
                                                        <div id="wrapper_<?php echo $option['id']?>">
                                                        	<?php foreach( get_add_more( $option['id'] ) as $kys => $v ) { ?>
                                                                <div class="more-list">
																	<?php global $post; foreach( $option['fields'] as $optfield ) { ?>
                                                                    	<?php if( $optfield['type'] == 'upload' ) { ?>
                                                                        	<script>
																				jQuery(document).ready(function($) {
																					$('.<?php echo $optfield['id']?>_<?php echo $option['id']?>_<?php echo $kys?>_upload').click(function(e) {
																						e.preventDefault();
																			
																						var custom_uploader = wp.media({
																							title: '<?php echo $optfield['name']?>',
																							button: {
																								text: 'Upload Image'
																							},
																							multiple: false  // Set this to true to allow multiple files to be selected
																						})
																						.on('select', function() {
																							var attachment = custom_uploader.state().get('selection').first().toJSON();
																							$('img.<?php echo $optfield['id']?>_<?php echo $option['id']?>_<?php echo $kys?>').attr('src', attachment.url);
																							$('.<?php echo $optfield['id']?>_<?php echo $option['id']?>_<?php echo $kys?>_url').val(attachment.url);
																							$('.<?php echo $optfield['id']?>_<?php echo $option['id']?>_<?php echo $kys?>_remove').show();
																						})
																						.open();
																					});
																					jQuery(".<?php echo $optfield['id']?>_<?php echo $option['id']?>_<?php echo $kys?>_remove").click(function(){
																						$('img.<?php echo $optfield['id']?>_<?php echo $option['id']?>_<?php echo $kys?>').attr('src', "");
																						$('.<?php echo $optfield['id']?>_<?php echo $option['id']?>_<?php echo $kys?>_url').val("");
																						$('.<?php echo $optfield['id']?>_<?php echo $option['id']?>_<?php echo $kys?>_remove').hide();
																					});
																				});
																			</script>
                                                                            <?php if( $_POST[$optfield['id'].'_'.$kys] ) { ?>
                                                                            	<?php update_option( ''.$optfield['id'].'_'.$kys.'', $_POST[$optfield['id'].'_'.$kys] ); ?>
                                                                            <?php } ?>
                                                                            <div class="input_section show-field-<?php echo $optfield['id']?> panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>">
                                                                                <label for="<?php echo $optfield['id']?>_<?php echo $option['id']?>"><?php echo $optfield['name']?></label>
                                                                                <img src="<?php echo get_option(''.$optfield['id'].'_'.$kys.''); ?>" class="<?php echo $optfield['id']?>_<?php echo $option['id']?>_<?php echo $kys?>" style="width:50px;float:right;" />
                                                                                <a class="<?php echo $optfield['id']?>_<?php echo $option['id']?>_<?php echo $kys?>_upload">رفع الصورة</a>
                                                                                <a class="<?php echo $optfield['id']?>_<?php echo $option['id']?>_<?php echo $kys?>_remove" <?php if( get_option(''.$optfield['id'].'_'.$kys.'') == '' ) { ?>style="display:none;"<?php } ?>>ازالة الصورة</a>
                                                                                <input class="<?php echo $optfield['id']?>_<?php echo $option['id']?>_<?php echo $kys?>_url" value="<?php echo get_option(''.$optfield['id'].'_'.$kys.''); ?>" id="<?php echo $optfield['id']?>" name="<?php echo $optfield['id']?>_<?php echo $kys?>" /><br>
                                                                            </div>
                                                                        <?php }elseif( $optfield['type'] == 'text' ) { ?>
                                                                            <?php if( $_POST[$optfield['id'].'_'.$kys] ) { ?>
                                                                            	<?php update_option( ''.$optfield['id'].'_'.$kys.'', $_POST[$optfield['id'].'_'.$kys] ); ?>
                                                                            <?php } ?>
                                                                            <div class="input_section show-field-<?php echo $optfield['id']?> panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>">
                                                                                <label for="<?php echo $optfield['id']?>"><?php echo $optfield['name']?></label>
                                                                                <input value="<?php echo get_option(''.$optfield['id'].'_'.$kys.''); ?>" id="<?php echo $optfield['id']?>" name="<?php echo $optfield['id']?>_<?php echo $kys?>" /><br>
                                                                            </div>
                                                                        <?php }elseif( $optfield['type'] == 'textarea' ) { ?>
                                                                            <?php if( $_POST[$optfield['id'].'_'.$kys] ) { ?>
                                                                            	<?php update_option( ''.$optfield['id'].'_'.$kys.'', $_POST[$optfield['id'].'_'.$kys] ); ?>
                                                                            <?php } ?>
                                                                            <div class="input_section show-field-<?php echo $optfield['id']?> panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>">
                                                                                <label for="<?php echo $optfield['id']?>"><?php echo $optfield['name']?></label>
                                                                                <textarea id="<?php echo $optfield['id']?>" name="<?php echo $optfield['id']?>_<?php echo $kys?>"><?php echo get_option(''.$optfield['id'].'_'.$kys.''); ?></textarea><br>
                                                                            </div>
                                                                        <?php }elseif( $optfield['type'] == 'editor' ) { ?>
                                                                            <?php if( $_POST[$optfield['id'].'_'.$kys] ) { ?>
                                                                            	<?php update_option( ''.$optfield['id'].'_'.$kys.'', $_POST[$optfield['id'].'_'.$kys] ); ?>
                                                                            <?php } ?>
                                                                            <div class="input_section show-field-<?php echo $optfield['id']?> panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>">
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
                                                                        <?php }elseif( $optfield['type'] == 'select' ) { ?>
                                                                            <?php if( $_POST[$optfield['id'].'_'.$kys] ) { ?>
                                                                            	<?php update_option( ''.$optfield['id'].'_'.$kys.'', $_POST[$optfield['id'].'_'.$kys] ); ?>
                                                                            <?php } ?>
                                                                            <div class="input_section show-field-<?php echo $optfield['id']?> panel-field-<?php echo $option['to']?> show-field-<?php echo $optfield['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                                                    <div class="option_input datepicker">
                                                                                        <label for="<?php echo $optfield['id']?>_<?php echo $kys?>"><?php echo $optfield['name']?></label>
                                                                                        <div class="well">
                                                                                            <select id="<?php echo $optfield['id']?>_<?php echo $kys?>" name="<?php echo $optfield['id']?>_<?php echo $kys?>" >
                                                                                                <option value="" selected>Select from list</option>
                                                                                                <?php foreach( $optfield['options'] as $key => $opt ) { ?>
                                                                                                    <option <?php if( get_option(''.$optfield['id'].'_'.$kys.'') == $key ) { ?>selected<?php } ?> value="<?php echo $key?>"><?php echo $opt?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                                                        <div class="clearfix"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php }elseif( $optfield['type'] == 'show_field' ) { ?>
                                                                            <div class="input_section show-field-<?php echo $optfield['id']?> panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                                                    <div class="option_input datepicker">
                                                                                        <label for="<?php echo $optfield['id']?>_<?php echo $kys?>"><?php echo $optfield['name']?></label>
                                                                                        <div class="well">
                                                                                            <input id="<?php echo $optfield['id']?>_<?php echo $kys?>" name="<?php echo $optfield['id']?>_<?php echo $kys?>" value="<?php echo get_option(''.$optfield['id'].'_'.$kys.'')?>" type="checkbox" />
                                                                                            <style>
                                                                                            .show-field-<?php echo $optfield['show']?> {
                                                                                                display:none !important;
                                                                                            }
                                                                                            </style>
                                                                                            <script>
                                                                                            jQuery(function() {
                                                                                                jQuery("#<?php echo $optfield['id']?>_<?php echo $kys?>").click(function(){
                                                                                                    jQuery(".show-field-<?php echo $optfield['show']?>").toggleClass("show");
                                                                                                });
                                                                                            });
                                                                                            </script>
                                                                                        </div>
                                                                                        <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                                                        <div class="clearfix"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                    <input type="submit" class="btn btn-danger" style="float: left;" value="حذف" name="remove_<?php echo $kys?>" />
                                                                </div><br /><br />
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
										<?php $i++; ?>
									<?php }elseif( $option['type'] == 'text' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input option_select">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                    	<?php if( (isset($option['disabled'])) ? $option['disabled'] : '' == 1 ) { ?>
	                                                    <input disabled placeholder="<?php echo $option['error']?>" type="text" name="<?php echo $option['id']?>" value="<?php echo get_option($option['id'])?>" />
                                                        <?php }else { ?>
	                                                    <input type="text" name="<?php echo $option['id']?>" value="<?php echo get_option($option['id'])?>" />
                                                        <?php } ?>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'textarea' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input option_select">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
	                                                    <textarea name="<?php echo $option['id']?>"><?php echo get_option($option['id'])?></textarea>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'code' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input option_select">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
	                                                    <textarea name="<?php echo $option['id']?>"><?php echo get_option($option['id'])?></textarea>
                                                    </div>
                                                    <small><?php echo isset($option['desc'])?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'date' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                        <input type="text" data-beatpicker="true" value="<?php echo get_option($option['id'])?>" id="<?php echo $option['id']?>" name="<?php echo $option['id']?>">
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'color' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                        <input type="text" class="span2" value="<?php echo get_option($option['id'])?>" id="<?php echo $option['id']?>" name="<?php echo $option['id']?>">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'select' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                        <select id="<?php echo $option['id']?>" data-live-search="true" name="<?php echo $option['id']?>">
                                                            <option value="" selected>Select from list</option>
                                                        	<?php foreach( $option['options'] as $key => $opt ) { ?>
                                                            	<option <?php if( get_option($option['id']) == $key ) { ?>selected<?php } ?> value="<?php echo $key?>"><?php echo $opt?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'select_taxonomy' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                        <select id="<?php echo $option['id']?>" data-live-search="true" name="<?php echo $option['id']?>">
                                                            <option value="" selected>Select from list</option>
                                                        	<?php foreach( get_categories( array( 'taxonomy'=>$option['tax'], 'hide_empty'=>0 ) ) as $opt ) { ?>
                                                            	<option <?php if( get_option($option['id']) == $opt->term_taxonomy_id ) { ?>selected<?php } ?> value="<?php echo $opt->term_taxonomy_id?>"><?php echo $opt->cat_name?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'upload' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input option_select">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                        <input type="file" name="<?php echo $option['id']?>" value="<?php echo get_option($option['id'])?>" />
														<?php if( get_option($option['id']) != '' ) { ?>
                                                            <input type="hidden" name="hidden_<?php echo $option['id']?>" id="hidden_<?php echo $option['id']?>" />
                                                            <button type="button" class="btn btn-danger" onClick="$('#imgg_<?php echo $option['id']?>').remove();$('#hidden_<?php echo $option['id']?>').val('hidden');">حذف الصورة</button>
                                                        <?php } ?>
                                                        <?php if( get_option($option['id']) != '' ) { ?>
                                                        	<img id="imgg_<?php echo $option['id']?>" style="max-width: 120px;" src="<?php echo get_option($option['id'])?>" />
                                                        <?php } ?>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'editor' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                        <?php 
														 $textarea_name = $option['id'];
														 $editor_id = $option['id'];
														 wp_editor( 
															 get_option($option['id']), 
															 $editor_id, 
															 $settings = array( 
																 'media_buttons' => false,
																 'textarea_name' => $textarea_name,
																 'quicktags' => true,
																 'tinymce' => true,
																 'textarea_rows' => 20,
															 )
														 ); 
														?>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'select_img' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well select_imagespat <?php echo $option['id']?>-select">
                                                    	<input id="set-<?php echo $option['id']?>" type="hidden" name="<?php echo $option['id']?>" value="<?php echo get_option($option['id'])?>" />
                                                        <?php foreach( $option['images'] as $k => $img ) { ?>
                                                        	<?php if( get_option($option['id']) == $img ) { ?>
                                                                <img class="current" id="<?php echo $option['id']?>-<?php echo $k?>" src="<?php echo $img?>" />
                                                            <?php }else { ?>
                                                                <img id="<?php echo $option['id']?>-<?php echo $k?>" src="<?php echo $img?>" />
                                                            <?php } ?>
                                                            <script>
                                                            	jQuery(function(){
																	jQuery("img#<?php echo $option['id']?>-<?php echo $k?>").click(function(){
																		jQuery(".<?php echo $option['id']?>-select img").removeClass("current");
																		jQuery(this).addClass("current");
																		jQuery("#set-<?php echo $option['id']?>").val("<?php echo $img?>");
																	});
																});
                                                            </script>
                                                        <?php } ?>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'fonts' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                    	<input id="<?php echo $option['id']?>"  data-live-search="true" name="<?php echo $option['id']?>" value="<?php echo get_option($option['id'])?>" type="text" />
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'show_field' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                    	<input id="<?php echo $option['id']?>" name="<?php echo $option['id']?>" value="<?php echo get_option($option['id'])?>" type="checkbox" />
                                                        <script>
                                                        jQuery(function() {
															jQuery("#field-<?php echo $option['show']?>").hide();
                                                            jQuery("#<?php echo $option['id']?>").click(function(){
																jQuery("#field-<?php echo $option['show']?>").toggleClass("show");
															});
                                                        });
                                                        </script>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'radio' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                    	<?php $ri = 0; foreach( $option['options'] as $key => $opt ) { ?>
                                                        	<div class="radio-item">
	                                                            <input <?php if( get_option($option['id']) == $key ) { ?>checked<?php } ?> id="radio-<?php echo $ri?>-<?php echo $option['id']?>" name="<?php echo $option['id']?>" value="<?php echo $key?>" type="radio" />
                                                            	<label for="radio-<?php echo $ri?>-<?php echo $option['id']?>"><?php echo $opt?></label>
                                                                <div class="clr"></div>
                                                            </div>
                                                        <?php $ri++; } ?>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'multicheck' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                    	<script>
                                                        jQuery(function(){
															jQuery(".checkall_<?php echo $option['id']?>").click(function(){
																jQuery(".check-item<?php echo $option['id']?> input").attr("checked",'checked');
															});
															jQuery(".uncheckall_<?php echo $option['id']?>").click(function(){
																jQuery(".check-item<?php echo $option['id']?> input").removeAttr('checked');
															});
														});
                                                        </script>
                                                    	<a href="Javascript:void(0);" class="checkall_<?php echo $option['id']?> btn btn-primary">Check All</a>
                                                    	<a href="Javascript:void(0);" style="display:none;" class="uncheckall_<?php echo $option['id']?> btn btn-danger">UnCheck All</a>
                                                    	<?php $ri = 0; foreach( $option['options'] as $key => $opt ) { ?>
                                                        	<div class="check-item<?php echo $option['id']?>">
	                                                            <input <?php if( in_array($key, get_option($option['id'])) ) { ?>checked<?php } ?> id="check-<?php echo $ri?>-<?php echo $option['id']?>" name="<?php echo $option['id']?>[]" value="<?php echo $key?>" type="checkbox" />
                                                            	<label for="check-<?php echo $ri?>-<?php echo $option['id']?>"><?php echo $opt?></label>
                                                                <div class="clr"></div>
                                                            </div>
                                                        <?php $ri++; } ?>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'text_url' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input option_select">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
	                                                    <input type="url" name="<?php echo $option['id']?>" value="<?php echo get_option($option['id'])?>" />
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'time' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                        <input type="text" class="span2" value="<?php echo get_option($option['id'])?>" id="<?php echo $option['id']?>" name="<?php echo $option['id']?>">
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'timezone' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                        <select id="<?php echo $option['id']?>" value="<?php echo get_option($option['id'])?>" name="<?php echo $option['id']?>" class="form-control bfh-countries" data-country="EG"></select>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'datetime' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                    	<?php $opt = get_option($option['id']); ?>
                                                        <input type="text" data-date-format="mm/dd/yy" value="<?php echo $opt['date']?>" id="date-<?php echo $option['id']?>" name="<?php echo $option['id']?>[date]">
                                                        <input type="text" value="<?php echo $opt['time']?>" id="time-<?php echo $option['id']?>" name="<?php echo $option['id']?>[time]">
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'textarea_html' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                        <textarea name="<?php echo $option['id']?>"><?php echo get_option($option['id'])?></textarea>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'textarea_css' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                    	<pre dir="ltr">
	                                                    	<textarea name="<?php echo $option['id']?>"><?php echo get_option($option['id'])?></textarea>
                                                        </pre>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'radio_taxonomy' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                    	<?php $ri = 0; foreach( get_categories( array( 'taxonomy'=>$option['tax'], 'hide_empty'=>0 ) ) as $key => $opt ) { ?>
                                                        	<div class="radio-item">
	                                                            <input <?php if( get_option($option['id']) == $opt->term_id ) { ?>checked<?php } ?> id="radio-<?php echo $opt->term_id?>-<?php echo $option['id']?>" name="<?php echo $option['id']?>" value="<?php echo $opt->term_id?>" type="radio" />
                                                            	<label for="radio-<?php echo $opt->term_id?>-<?php echo $option['id']?>"><?php echo $opt->cat_name?></label>
                                                            <div class="clr"></div>
                                                            </div>
                                                        <?php $ri++; } ?>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }elseif( $option['type'] == 'multi_taxonomy' ) { ?>
                                        <div class="input_section panel-field-<?php echo $option['to']?>" id="field-<?php echo $option['id']?>"><div class="all_options">
                                                <div class="option_input datepicker">
                                                    <label for="<?php echo $option['id']?>"><?php echo $option['name']?></label>
                                                    <div class="well">
                                                    	<script>
                                                        jQuery(function(){
															jQuery(".checkall_<?php echo $option['id']?>").click(function(){
																jQuery(".check-item<?php echo $option['id']?> input").attr("checked",'checked');
																jQuery(".checkall_<?php echo $option['id']?>").hide();
																jQuery(".uncheckall_<?php echo $option['id']?>").show();
															});
															jQuery(".uncheckall_<?php echo $option['id']?>").click(function(){
																jQuery(".check-item<?php echo $option['id']?> input").removeAttr('checked');
																jQuery(".uncheckall_<?php echo $option['id']?>").hide();
																jQuery(".checkall_<?php echo $option['id']?>").show();
															});
														});
                                                        </script>
                                                        <a href="Javascript:void(0);" style="margin-bottom: 10px;" class="checkall_<?php echo $option['id']?> btn btn-primary">Check All</a>
                                                    	<a href="Javascript:void(0);" style="display:none; margin-bottom: 10px;" class="uncheckall_<?php echo $option['id']?> btn btn-danger">UnCheck All</a>
                                                    	<?php $ri = 0; foreach( get_categories( array( 'taxonomy'=>$option['tax'], 'hide_empty'=>0 ) ) as $key => $opt ) { ?>
                                                        	<div class="check-item<?php echo $option['id']?>">
	                                                            <input <?php if( in_array($opt->term_id, get_option($option['id'])) ) { ?>checked<?php } ?> id="check-<?php echo $opt->term_id?>-<?php echo $option['id']?>" name="<?php echo $option['id']?>[]" value="<?php echo $opt->term_id?>" type="checkbox" />
                                                            	<label for="check-<?php echo $opt->term_id?>-<?php echo $option['id']?>"><?php echo $opt->cat_name?></label>
                                                            <div class="clr"></div>
                                                            </div>
                                                        <?php $ri++; } ?>
                                                    </div>
                                                    <small><?=(isset($option['desc'])) ? $option['desc'] : ''?></small>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                                <input type="submit" name="action" value="حفظ">
                                <input type="hidden" name="action" value="save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr"></div>
        <div class="YourColor-footer">
            <span>Powered By : <a href="http://yourcolor.net/">YourColor.Net</a></span>
        </div>   
    </div>
<script src="<?php echo get_template_directory_uri(); ?>/fun/admin/js/jquery.datetimepicker.js"></script>
<?php $i = 0; foreach( $options as $option ) { ?>
	<?php if( $option['type'] == 'time' ) { ?>
        <script>
            $('#<?php echo $option['id']?>').datetimepicker({
                datepicker:false,
                format:'H:i',
                step:5,
            });
        </script>
    <?php }elseif( $option['type'] == 'datetime' ) { ?>
        <script>
            $('#date-<?php echo $option['id']?>').datetimepicker({
                datepicker:false,
                format:'H:i',
                step:5,
            });
            $('#time-<?php echo $option['id']?>').datetimepicker({
                lang:'en',
                timepicker:false,
                format:'d/m/Y',
                formatDate:'Y/m/d',
            });
        </script>
    <?php } ?>
<?php } ?>
    
    
    
<?php } ?>
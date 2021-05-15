<?php
//////////////////////////////////////////////////////////////////
// Manage Creat Post Type       
//////////////////////////////////////////////////////////////////

add_action( 'init', 'register_show_online_post_type' );
function register_show_online_post_type() {
	$labels_ads_tags = array(
		'name' => __('سلاسل الافلام', 'YourColor' , 'post type general name'),
		'all_items' => __('كل السلاسل', 'YourColor' , 'all items'),
		'add_new_item' => __('اضافة سلسلة جديدة', 'YourColor' , 'adding a new item'),
		'new_item_name' => __('اسم سلسلة جديدة', 'YourColor' , 'adding a new item'),
	);
	register_taxonomy( 'assemblies', 'post', 
		array( 
			'hierarchical' => false,
			'rewrite' => true,
			'labels' => $labels_ads_tags
		)
	);
	////////////////////////////////////////////////////////
	$labels_ads_tags = array(
		'name' => __('المسلسلات', 'YourColor' , 'post type general name'),
		'all_items' => __('كل المسلسلات', 'YourColor' , 'all items'),
		'add_new_item' => __('اضافة مسلسل جديد', 'YourColor' , 'adding a new item'),
		'new_item_name' => __('اسم مسلسل جديد', 'YourColor' , 'adding a new item'),
	);
	register_taxonomy( 'selary', 'post', 
		array( 
			'hierarchical' => false,
			'rewrite' => true,
			'labels' => $labels_ads_tags
		)
	);
	////////////////////////////////////////////////////////
	$labels_ads_tags = array(
		'name' => __('المخرجين', 'YourColor' , 'post type general name'),
		'all_items' => __('كل المخرجين', 'YourColor' , 'all items'),
		'add_new_item' => __('اضافة مخرج جديد', 'YourColor' , 'adding a new item'),
		'new_item_name' => __('اسم مخرج جديد', 'YourColor' , 'adding a new item'),
	);
	register_taxonomy( 'director', 'post', 
		array( 
			'hierarchical' => false,
			'rewrite' => true,
			'labels' => $labels_ads_tags
		)
	);
	////////////////////////////////////////////////////////
	$labels_ads_tags = array(
		'name' => __('الكاتبين', 'YourColor' , 'post type general name'),
		'all_items' => __('كل الكاتبين', 'YourColor' , 'all items'),
		'add_new_item' => __('اضافة كاتب جديد', 'YourColor' , 'adding a new item'),
		'new_item_name' => __('اسم كاتب جديد', 'YourColor' , 'adding a new item'),
	);
	register_taxonomy( 'escritor', 'post', 
		array( 
			'hierarchical' => false,
			'rewrite' => true,
			'labels' => $labels_ads_tags
		)
	);
	////////////////////////////////////////////////////////
	$labels_ads_tags = array(
		'name' => __('الممثلين', 'YourColor' , 'post type general name'),
		'all_items' => __('كل الممثلين', 'YourColor' , 'all items'),
		'add_new_item' => __('اضافة ممثل جديد', 'YourColor' , 'adding a new item'),
		'new_item_name' => __('اسم ممثل جديد', 'YourColor' , 'adding a new item'),
	);
	register_taxonomy( 'actor', 'post', 
		array( 
			'hierarchical' => false,
			'rewrite' => true,
			'labels' => $labels_ads_tags
		)
	);
	////////////////////////////////////////////////////////
	$labels_ads_tags = array(
		'name' => __('سنة الاصدار', 'YourColor' , 'post type general name'),
		'all_items' => __('كل السنوات', 'YourColor' , 'all items'),
		'add_new_item' => __('اضافة سنة جديدة', 'YourColor' , 'adding a new item'),
		'new_item_name' => __('اسم سنة جديدة', 'YourColor' , 'adding a new item'),
	);
	register_taxonomy( 'release-year', 'post', 
		array( 
			'hierarchical' => false,
			'rewrite' => true,
			'labels' => $labels_ads_tags
		)
	);
	////////////////////////////////////////////////////////
	$labels_ads_tags = array(
		'name' => __('الجودة', 'YourColor' , 'post type general name'),
		'all_items' => __('كل الجودات', 'YourColor' , 'all items'),
		'add_new_item' => __('اضافة جودة جديدة', 'YourColor' , 'adding a new item'),
		'new_item_name' => __('اسم جودة جديدة', 'YourColor' , 'adding a new item'),
	);
	register_taxonomy( 'Quality', 'post', 
		array( 
			'hierarchical' => false,
			'rewrite' => true,
			'labels' => $labels_ads_tags
		)
	);
flush_rewrite_rules();
}
//========================================================================================//
//===============================	Ads Management	======================================//
//========================================================================================//
add_action( 'init', 'register_ads_post_type' );
function register_ads_post_type() {
	register_post_type( 'ads',
		array(
			'labels' => array(
				'name' => __( 'ادارة الاعلانات' ),
				'singular_name' => __( 'ادارة الاعلانات' ),
				'add_new' => __( 'اضافة اعلان' ),
				'add_new_item' => __( 'اضافة اعلان جديد' ),
				'edit' => __( 'تعديل' ),
				'edit_item' => __( 'تحرير الاعلان' ),
				'new_item' => __( 'اعلان جديد' ),
				'view' => __( 'مشاهدة الاعلان' ),
				'view_item' => __( 'مشاهدة الاعلان' ),
				'search_items' => __( 'بحث فى الاعلانات' ),
				'not_found' => __( 'لا يوجد اعلانات' ),
				'not_found_in_trash' => __( 'لا يوجد اعلانات فى سلة المهملات' ),
				'parent' => __( 'الاعلان الرئيسي' ),
			),
			'public' => false,
			'show_ui' => true,
			'publicly_queryable' => true,
			'show_in_nav_menus' => false,
			'exclude_from_search' => false,
			'hierarchical' => false,
			'menu_position'=>5,
            'rewrite' => array('slug'=>'ads'),
			'supports' => array( 'title' ),
		)
	);
	flush_rewrite_rules();
}



/////////////////////////////////////
// Image
/////////////////////////////////////
function save_selary_custom_fields( $term_id ) {  
	if ( isset( $_POST['term_meta'] ) ) {  
        $t_id = $term_id;  
        $term_meta = get_option( "selary_term_$t_id" );  
        $cat_keys = array_keys( $_POST['term_meta'] );  
            foreach ( $cat_keys as $key ){  
            if ( isset( $_POST['term_meta'][$key] ) ){  
                $term_meta[$key] = $_POST['term_meta'][$key];  
            }  
        }  
        //save the option array  
        update_option( "selary_term_$t_id", $term_meta );  
    }  
}  
if (isset($_GET['taxonomy']) && $_GET['taxonomy'] == 'selary') {
	add_action('admin_print_scripts', 'my_admin_scripts');
	add_action('admin_print_styles', 'my_admin_styles');
}
//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
function load_wp_media_files() {
  wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'load_wp_media_files' );
function selary_custom_fields($tag) {  
   // Check for existing taxonomy meta for the term you're editing  
    $t_id = $tag->term_id; // Get the ID of the term you're editing  
    $term_meta = get_option( "selary_term_$t_id" ); // Do the check  

?>  

<tr class="form-field">
    <th scope="row" valign="top">
        <label for="category"><?php _e('القسم'); ?></label>
    </th>
    <td>
        <?php 
			$args = array(
				'type'                     => 'post',
				'child_of'                 => 0,
				'parent'                   => '',
				'orderby'                  => 'name',
				'order'                    => 'ASC',
				'hide_empty'               => 0,
				'hierarchical'             => 1,
				'exclude'                  => '',
				'include'                  => '',
				'number'                   => '',
				'taxonomy'                 => 'category',
				'pad_counts'               => false 
			); 
			$categories = get_categories( $args )
		?>
       <select name="term_meta[category]" id="term_meta[category]" name="term_meta[category]" style="display: block;width: 300px;">
        <option <?php echo ($term_meta['category'] == '') ? 'selected' : ''?> value="" selected="selected"><?php _e( 'اختر النوع' , 'YourColor' ) ?></option>
        <?php foreach( $categories as $k => $val){ ?>
	        <option <?php echo ($term_meta['category'] == $val->term_id) ? 'selected' : ''?> value="<?php echo $val->term_id; ?>"><?php echo $val->name?></option> 
        <?php } ?>
		</select> 
    </td>
</tr>
<tr class="form-field" valign="top">
  <th scope="row"><label for="upload_image"><?php _e('صورة المسلسل','yourcolor'); ?></label></th>
  <td>
    <img src="<?php echo $term_meta['upload_image'] ? $term_meta['upload_image'] : ''; ?>" width="200" height="200" class="img_BTN" />
    <input type="hidden" name="term_meta[upload_image]" class="singer_img" value="<?php echo $term_meta['upload_image'] ? $term_meta['upload_image'] : ''; ?>" />
    <a style="display:none;" href="javascript:void(0);" class="BTN_remove">ازالة الصورة</a>
    <a class="BtnUpload" href="Javascript:void(0);">رفع الصورة</a>
    <script>
    jQuery(document).ready(function($) {
      $('.BtnUpload').click(function(e) {
        e.preventDefault();

        var custom_uploader = wp.media({
          title: 'رفع صورة المسلسل',
          button: {
            text: 'رفع صورة'
          },
          multiple: false  // Set this to true to allow multiple files to be selected
        })
        .on('select', function() {
          var attachment = custom_uploader.state().get('selection').first().toJSON();
          $('img.img_BTN').attr('src', attachment.url);
          $('.singer_img').val(attachment.url);
          $('.BTN_remove').show();
        })
        .open();
      });
      jQuery(".BTN_remove").click(function(){
        $('img.img_BTN').attr('src', "");
        $('.singer_img').val("");
        $('.BTN_remove').hide();
      });
    });
    </script>
  </td>
</tr>

<?php  
}  
// Add the fields to the "presenters" taxonomy, using our callback function  
add_action( 'selary_edit_form_fields', 'selary_custom_fields', 10, 2 );  
// Save the changes made on the "presenters" taxonomy, using our callback function  
add_action( 'edited_selary', 'save_selary_custom_fields', 10, 2 );  	
	
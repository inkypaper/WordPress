<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
	require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
	require_once  __DIR__ . '/CMB2/init.php';
}

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool True if metabox should show
 */
function cmb2_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}

add_filter( 'cmb2_meta_boxes', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb2_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '';
	//////////////////////////////////////
	// show online
	//////////////////////////////////////
	if( get_option('imdb_set') == 'yes' ) {
		$meta_boxes['show_online_Option'] = array(
			'id'            => 'show_online_Option',
			'title'         => __( 'اعدادات المشاهدة المباشرة', 'cmb' ),
			'object_types'  => array( 'post', ), // Post type
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true, // Show field names on the left
			'fields'     => array(
				array(
					'name' => __('الغلاف' , 'YourColor'),
					'id' => $prefix . 'cover' ,
					'type' => 'file',
				),
				//////////////////////////////////////////////////
				//////////////////////////////////////////////////
				array(
					'name' => __('عنوان الملصق' , 'YourColor'),
					'id' => $prefix . 'ribbon' ,
					'type' => 'text',
				),
				array(
					'name' => __('رقم الحلقة' , 'YourColor'),
					'id' => $prefix . 'number' ,
					'type' => 'text',
				),
				//////////////////////////////////////////////////
				//////////////////////////////////////////////////
				array(
					'name' => __('تثبيت الموضوع' , 'YourColor'),
					'id' => $prefix . 'YC_ch_fixed' ,
					'type'    => 'checkbox',
				),
				array(
					'name' => __('فيلم' , 'YourColor'),
					'id' => 'post_film' ,
					'type'    => 'checkbox',
				),
				array(
					'name' => __('معرف IMDB' , 'YourColor'),
					'id' => 'imdb_id' ,
					'type' => 'text',
					'desc'=>'<strong style="color:green;">مثال : </strong>http://www.imdb.com/title/<code style="color:black;">tt2820852</code>',
				),
				array(
					'name' => __('استخراج IMDB' , 'YourColor'),
					'id' => 'imdb' ,
					'type' => 'text',
				),
				array(
					'name' => __('تاريخ الاصدار' , 'YourColor'),
					'id' => 'released' ,
					'type' => 'text',
				),
				array(
					'name' => __('مدة الفيلم' , 'YourColor'),
					'id' => 'runtime' ,
					'type' => 'text',
				),
				array(
					'name' => __('تقييمات IMDB' , 'YourColor'),
					'id' => 'imdbRating' ,
					'type' => 'text',
				),
				array(
					'name' => __('تصويتات IMDB' , 'YourColor'),
					'id' => 'imdbVotes' ,
					'type' => 'text',
				),
				array(
					'name' => __('اعلان الفيلم' , 'YourColor'),
					'id' => 'Trailer' ,
					'type' => 'textarea_code',
				),
				array(
					'name' => __('عنوان التاب الاضافي' , 'YourColor'),
					'id' => $prefix . 'extra_details_title' ,
					'type'    => 'text',
				),
				array(
					'name' => __('تفاصيل اضافية' , 'YourColor'),
					'id' => $prefix . 'extra_details' ,
					'type'    => 'wysiwyg',
				),
///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
				array(
					'name' => __('عنوان البلوك 1' , 'YourColor'),
					'id' => $prefix . 'box1Title' ,
					'type'    => 'text',
				),
				array(
					'name' => __('عنوان البلوك 1' , 'YourColor'),
					'id' => $prefix . 'box1Content' ,
					'type'    => 'wysiwyg',
				),
				array(
					'name' => __('عنوان البلوك 2' , 'YourColor'),
					'id' => $prefix . 'box2Title' ,
					'type'    => 'text',
				),
				array(
					'name' => __('عنوان البلوك 2' , 'YourColor'),
					'id' => $prefix . 'box2Content' ,
					'type'    => 'wysiwyg',
				),
				array(
					'name' => __('عنوان البلوك 3' , 'YourColor'),
					'id' => $prefix . 'box3Title' ,
					'type'    => 'text',
				),
				array(
					'name' => __('عنوان البلوك 3' , 'YourColor'),
					'id' => $prefix . 'box3Content' ,
					'type'    => 'wysiwyg',
				),
				array(
					'name' => __('عنوان البلوك 4' , 'YourColor'),
					'id' => $prefix . 'box4Title' ,
					'type'    => 'text',
				),
				array(
					'name' => __('عنوان البلوك 4' , 'YourColor'),
					'id' => $prefix . 'box4Content' ,
					'type'    => 'wysiwyg',
				),
			),
		);
	}else {
		$imdb_id = array();
		$imdb = array();
		$released = array();
		$runtime = array();
		$imdbRating = array();
		$imdbVotes = array();
		$trailer = array();
		$meta_boxes['show_online_Option'] = array(
			'id'            => 'show_online_Option',
			'title'         => __( 'اعدادات المشاهدة المباشرة', 'cmb' ),
			'object_types'  => array( 'post', ), // Post type
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true, // Show field names on the left
			'fields'     => array(
				array(
					'name' => __('الغلاف' , 'YourColor'),
					'id' => $prefix . 'cover' ,
					'type' => 'file',
				),
				//////////////////////////////////////////////////
				//////////////////////////////////////////////////
				array(
					'name' => __('عنوان الملصق' , 'YourColor'),
					'id' => $prefix . 'ribbon' ,
					'type' => 'text',
				),
				array(
					'name' => __('رقم الحلقة' , 'YourColor'),
					'id' => $prefix . 'number' ,
					'type' => 'text',
				),
				//////////////////////////////////////////////////
				//////////////////////////////////////////////////
				array(
					'name' => __('تثبيت الموضوع' , 'YourColor'),
					'id' => $prefix . 'YC_ch_fixed' ,
					'type'    => 'checkbox',
				),
				//////////////////////////////////////////////////
				//////////////////////////////////////////////////
				array(
					'name' => __('عنوان التاب الاضافي' , 'YourColor'),
					'id' => $prefix . 'extra_details_title' ,
					'type'    => 'text',
				),
				array(
					'name' => __('تفاصيل اضافية' , 'YourColor'),
					'id' => $prefix . 'extra_details' ,
					'type'    => 'wysiwyg',
				),
///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
				array(
					'name' => __('عنوان البلوك 1' , 'YourColor'),
					'id' => $prefix . 'box1Title' ,
					'type'    => 'text',
				),
				array(
					'name' => __('عنوان البلوك 1' , 'YourColor'),
					'id' => $prefix . 'box1Content' ,
					'type'    => 'wysiwyg',
				),
				array(
					'name' => __('عنوان البلوك 2' , 'YourColor'),
					'id' => $prefix . 'box2Title' ,
					'type'    => 'text',
				),
				array(
					'name' => __('عنوان البلوك 2' , 'YourColor'),
					'id' => $prefix . 'box2Content' ,
					'type'    => 'wysiwyg',
				),
				array(
					'name' => __('عنوان البلوك 3' , 'YourColor'),
					'id' => $prefix . 'box3Title' ,
					'type'    => 'text',
				),
				array(
					'name' => __('عنوان البلوك 3' , 'YourColor'),
					'id' => $prefix . 'box3Content' ,
					'type'    => 'wysiwyg',
				),
				array(
					'name' => __('عنوان البلوك 4' , 'YourColor'),
					'id' => $prefix . 'box4Title' ,
					'type'    => 'text',
				),
				array(
					'name' => __('عنوان البلوك 4' , 'YourColor'),
					'id' => $prefix . 'box4Content' ,
					'type'    => 'wysiwyg',
				),
			),
		);
	}

	//////////////////////////////////////
	// show online
	//////////////////////////////////////
	$meta_boxes['show_online_group'] = array(
		'id'           => 'show_online_group',
		'title'        => __( 'السيرفرات', 'cmb2' ),
		'object_types' => array( 'post', ),
		'fields'       => array(
			array(
				'id'          => 'downloads',
				'type'        => 'group',
				'options'     => array(
					'group_title'   => __( 'روابط التحميل {#}', 'cmb2' ), // {#} gets replaced by row number
					'add_button'    => __( 'اضافة رابط جديدة', 'cmb2' ),
					'remove_button' => __( 'حذف الرابط', 'cmb2' ),
					'sortable'      => true, // beta
				),
				// Fields array works the same, except id's only need to be unique for this group. Prefix is not needed.
				'fields'      => array(
					////////////////////////////////////
					////////////////////////////////////
					array(
						'name' => 'اسم السيرفر',
						'id'   => 'name',
						'type' => 'text',
					),
					array(
						'name' => 'رابط السيرفر',
						'id'   => 'link',
						'type' => 'text_url',
					),
					array(
						'name' => 'اسم الفولدر',
						'id'   => 'folder',
						'type' => 'text',
					),
					////////////////////////////////////
					////////////////////////////////////
				),
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
			array(
				'name' => __('السيرفر الاول' , 'YourColor'),
				'id' => $prefix . 'embed_pelicula' ,
				'type' => 'textarea_code',
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
			array(
				'name' => __('السيرفر الثاني' , 'YourColor'),
				'id' => $prefix . 'embed_pelicula2' ,
				'type' => 'textarea_code',
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
			array(
				'name' => __('السيرفر الثالث' , 'YourColor'),
				'id' => $prefix . 'embed_pelicula3' ,
				'type' => 'textarea_code',
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
			array(
				'name' => __('السيرفر الرابع' , 'YourColor'),
				'id' => $prefix . 'embed_pelicula4' ,
				'type' => 'textarea_code',
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
			array(
				'name' => __('السيرفر الخامس' , 'YourColor'),
				'id' => $prefix . 'embed_pelicula5' ,
				'type' => 'textarea_code',
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
			array(
				'name' => __('السيرفر السادس' , 'YourColor'),
				'id' => $prefix . 'embed_pelicula6' ,
				'type' => 'textarea_code',
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
			array(
				'name' => __('السيرفر السابع' , 'YourColor'),
				'id' => $prefix . 'embed_pelicula7' ,
				'type' => 'textarea_code',
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
			array(
				'name' => __('السيرفر الثامن' , 'YourColor'),
				'id' => $prefix . 'embed_pelicula8' ,
				'type' => 'textarea_code',
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
			array(
				'name' => __('السيرفر التاسع' , 'YourColor'),
				'id' => $prefix . 'embed_pelicula9' ,
				'type' => 'textarea_code',
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
			array(
				'name' => __('السيرفر العاشر' , 'YourColor'),
				'id' => $prefix . 'embed_pelicula10' ,
				'type' => 'textarea_code',
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
		),
	);
	//////////////////////////////////////
	// Ads Management
	//////////////////////////////////////
	$meta_boxes['ads_sett'] = array(
		'id'           => 'ads_sett',
		'title'        => __( 'اعدادات الاعلان', 'cmb2' ),
		'object_types' => array( 'ads', ),
		'fields'       => array(
			array(
				'name' => __('حجم الاعلان' , 'YourColor'),
				'id' => 'size' ,
				'type' => 'select',
				'options'=> array('728×90'=>'728×90', '160×600'=>'160×600')
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
			array(
				'name' => __('كود الاعلان' , 'YourColor'),
				'id' => $prefix . 'code' ,
				'type' => 'textarea_code',
			),
			/////////////////////////////////////////
			/////////////////////////////////////////
		),
	);
		///////////////////////////////////
	// Seo Post
	///////////////////////////////////
	$meta_boxes['option_seo'] = array(
		'id'           => 'option_seo',
		'title'        => __( 'اعدادات الارشفة', 'cmb' ),
		'object_types' => array( 'post' , 'page'),
		'fields'       => array(
			array(
				'name' => 'عنوان الموضوع',
				'id'   => 'name_seo',
				'type' => 'text',
			),
			array(
				'name' => 'وصف الموضوع',
				'id'   => 'desc_seo',
				'type' => 'textarea',
			),
			array(
				'name' => 'وسوم الموضوع',
				'id'   => 'tags_seo',
				'type' => 'text',
			),
			array(
				'name' => 'صورة الشير ',
				'id'   => 'img_social',
				'type' => 'file',
			),
		),
	);
	/////////////////////////////////////////
	/////////////////////////////////////////




	// Add other metaboxes as needed

	return $meta_boxes;
}

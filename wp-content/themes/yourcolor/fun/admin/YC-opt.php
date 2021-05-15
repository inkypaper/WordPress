<?php
	query_posts( array( 'post_type'=>'page', 'posts_per_page'=>-1 ) );
	$links = array();
	if( have_posts() ) { while( have_posts() ) { the_post();
		global $post;
		$links[$post->ID] = get_the_title();
	} } wp_reset_query();
	$options = array();
	/////////////////////////////////////////////////
	// Item Tabs
	/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'IMDB',
		'id' => 'imdb',
		'type' => 'tab',
		'icon' => get_template_directory_uri().'/fun/admin/icons/imdb.png',
	);
	/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'الروابط',
		'id' => 'links',
		'type' => 'tab',
		'icon' => get_template_directory_uri().'/fun/admin/icons/2.png',
	);
	/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'الالوان',
		'id' => 'colors',
		'type' => 'tab',
		'icon' => get_template_directory_uri().'/fun/admin/icons/5.png',
	);
	/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'التصميم',
		'id' => 'design',
		'type' => 'tab',
		'icon' => get_template_directory_uri().'/fun/admin/icons/8.png',
	);
	/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'الارشفة',
		'id' => 'seo',
		'type' => 'tab',
		'icon' => get_template_directory_uri().'/fun/admin/icons/4.png',
	);
	/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'المواقع الاجتماعية',
		'id' => 'social',
		'type' => 'tab',
		'icon' => get_template_directory_uri().'/fun/admin/icons/3.png',
	);
	/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'اغلاق مؤقت',
		'id' => 'soon',
		'type' => 'tab',
		'icon' => get_template_directory_uri().'/fun/admin/icons/1.png',
	);
	
/////////////////////////////////////////////////
// Item Tabs Id = Links
/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'رابط مشاهدة الفيلم/المسلسل',
		'id' => 'view_permalink',
		'type' => 'select',
		'to' => 'links',
		'options' => array(
			'same' => 'نفس الرابط',
			'diff' => 'رابط مختلف',
		),
		'desc'=>'',
	);
	query_posts( array( 'post_type'=>'post', 'posts_per_page'=>1 ) );
	if(have_posts())  { while(have_posts()) { the_post();
		$permalink_urll = get_the_permalink();
	} } wp_reset_query();
	if( array_key_exists('view_permalink_structre', $_POST) ) {
		$structre = $_POST['view_permalink_structre'];
	}else {
		$structre = get_option('view_permalink_structre');
	}
	$options[] = array(
		'name' => 'رابط مشاهدة الفيلم/المسلسل',
		'id' => 'view_permalink_structre',
		'type' => 'text',
		'to' => 'links',
		'desc'=>($structre == '') ? '<strong style="color:green">الحالي : </strong>'.$permalink_urll.'/'.'<code>?view=true</code>' : '<strong style="color:green">الحالي : </strong>'.$permalink_urll.'/'.'<code>?'.$structre.'=true</code>',
	);
/////////////////////////////////////////////////
// Item Tabs Id = IMDB
/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'دعم اضافة IMDB',
		'id' => 'imdb_set',
		'type' => 'select',
		'to' => 'imdb',
		'options' => array(
			'yes' => 'نعم',
			'no' => 'لا',
		),
		'desc'=>'',
	);
	$options[] = array(
		'name' => 'سحب العنوان',
		'id' => 'imdb_set_title',
		'type' => 'select',
		'to' => 'imdb',
		'options' => array(
			'yes' => 'نعم',
			'no' => 'لا',
		),
		'desc'=>'<strong style="color:green;">اذا كنت تريد سحب العنوان يرجي وضع تركيبة العنوان بالاسفل</strong>',
	);
	$options[] = array(
		'name' => 'تركيبة العنوان',
		'id' => 'imdb_set_title_perma',
		'type' => 'text',
		'to' => 'imdb',
		'desc'=>'<strong>العنوان</strong><code>%title</code><br><strong>السنة</strong><code>%year</code>',
	);
	$options[] = array(
		'name' => 'سحب اعلان الفيلم/المسلسل',
		'id' => 'imdb_set_trailer',
		'type' => 'select',
		'to' => 'imdb',
		'options' => array(
			'yes' => 'نعم',
			'no' => 'لا',
		),
	);
/////////////////////////////////////////////////
// Item Tabs Id = soon
/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'اغلاق الموقع',
		'id' => 'die_site',
		'type' => 'select',
		'to' => 'soon',
		'options' => array(
			'yes' => 'نعم',
			'no' => 'لا',
		),
		'desc'=>'',
	);
	$options[] = array(
		'name' => 'نص الاغلاق',
		'id' => 'text_close',
		'type' => 'textarea',
		'to' => 'soon',
		'desc'=>'',
	);
/////////////////////////////////////////////////
// Item Tabs Id = Design
/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'اعدادات الموبايل',
		'type' => 'title',
		'to' => 'design',
	);
	$options[] = array(
		'name' => 'قالب الموبايل',
		'id' => 'enable_mobile',
		'type' => 'select',
		'to' => 'design',
		'desc'=>'',
		'options' => array(
			'enable' => 'تشغيل الموبايل',
			'disable' => 'منع الموبايل',
		)
	);
	$options[] = array(
		'name' => 'رابط اخر للموبايل',
		'id' => 'mobile_url',
		'type' => 'text_url',
		'desc'=>'اذا كان لديك قالب اخر للموبايل ضع رابط موقعك الخاص هنا',
		'to' => 'design'
	);
	$options[] = array(
		'name' => 'اعدادات الهيدر',
		'type' => 'title',
		'to' => 'design',
	);
	$options[] = array(
		'name' => 'الشريط العلوي',
		'id' => 'show_topbar',
		'type' => 'select',
		'to' => 'design',
		'desc'=>'',
		'options' => array(
			'hide' => 'اخفاء',
			'show' => 'اظهار',
		)
	);
	$options[] = array(
		'name' => 'القائمة السفلية',
		'id' => 'show_bottom_menu',
		'type' => 'select',
		'to' => 'design',
		'desc'=>'',
		'options' => array(
			'hide' => 'اخفاء',
			'show' => 'اظهار',
		)
	);
	$options[] = array(
		'name' => 'اعدادات الهيدر',
		'id' => 'header_style',
		'type' => 'select',
		'to' => 'design',
		'desc'=>'',
		'options' => array(
			'banner' => 'بانر كبير',
			'simple' => 'شكل بسيط',
		)
	);
	$options[] = array(
		'name' => 'شعار الموقع',
		'id' => 'logo',
		'type' => 'upload',
		'desc'=>'',
		'to' => 'design'
	);
	$options[] = array(
		'name' => 'اسم الموقع *بالانجليزية*',
		'id' => 'sitelogo',
		'type' => 'text',
		'desc'=>'',
		'to' => 'design'
	);
	$options[] = array(
		'name' => 'بانر الهيدر',
		'id' => 'banner',
		'type' => 'upload',
		'desc'=>'',
		'to' => 'design'
	);
	$options[] = array(
		'name' => 'رمز الموقع',
		'id' => 'favicon',
		'type' => 'upload',
		'desc' => 'قم برفع رمز الموقع',
		'to' => 'design'
	);
	$options[] = array(
		'name' => 'اعدادات الخلفية',
		'type' => 'title',
		'to' => 'design',
	);
	$options[] = array(
		'name' => 'خلفية الموقع',
		'desc'=>'',
		'id' => 'bgsite',
		'type' => 'upload',
		'to' => 'design'
	);
	if( get_option('bgsite_repeat') != 'fixed' ) {
		$options[] = array(
			'name' => 'عرض الصورة',
			'id' => 'bgsite_width',
			'desc'=>'',
			'type' => 'text',
			'disabled'=>false,
			'to' => 'design'
		);
		$options[] = array(
			'name' => 'طول الصورة',
			'id' => 'bgsite_height',
			'desc'=>'',
			'type' => 'text',
			'disabled'=>false,
			'to' => 'design'
		);
	}else {
		$options[] = array(
			'name' => 'عرض الصورة',
			'id' => 'bgsite_width',
			'type' => 'text',
			'to' => 'design',
			'desc'=>'',
			'disabled'=>true,
			'error'=>'يجب اختيار تكرار غير التثبيت ...'
		);
		$options[] = array(
			'name' => 'طول الصورة',
			'id' => 'bgsite_height',
			'type' => 'text',
			'to' => 'design',
			'disabled'=>true,
			'desc'=>'',
			'error'=>'يجب اختيار تكرار غير التثبيت ...'
		);
	}
	$options[] = array(
		'name' => 'تكرار الصورة',
		'id' => 'bgsite_repeat',
		'type' => 'select',
		'desc'=>'اذا اخترت ثابتة و بالعرض الكامل سيتم الغاء الطول و العرض لديك من التحكم',
		'options' => array(
			'fixed' => 'ثابتة بالعرض الكامل',
			'repeat-x' => 'تكرار عرضي',
			'repeat-y' => 'تكرار طولي',
			'repeat' => 'تكرار عشوائي',
		),
		'to' => 'design'
	);
	$options[] = array(
		'name' => 'اعدادات الافلام',
		'type' => 'title',
		'to' => 'design',
	);
	$options[] = array(
		'name' => 'محتوي البلوك',
		'id' => 'hide_description',
		'type' => 'select',
		'to' => 'design',
		'desc'=>'',
		'options' => array(
			'hide' => 'اخفاء',
			'show' => 'اظهار',
		)
	);
	$options[] = array(
		'name' => 'عدد الافلام فى الرئيسية',
		'desc'=>'',
		'id' => 'number_movies_home',
		'disabled'=>false,
		'type' => 'text',
		'to' => 'design'
	);
	$options[] = array(
		'name' => 'عنوان قبل السليدر',
		'id' => 'set_title_slider',
		'desc'=>'',
		'type' => 'text',
		'disabled'=>false,
		'to' => 'design'
	);
	$options[] = array(
		'name' => 'عنوان قبل الافلام',
		'id' => 'set_title_home',
		'disabled'=>false,
		'desc'=>'',
		'type' => 'text',
		'to' => 'design'
	);
	/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'عنوان  السليدر الاول',
		'id' => 'title_slider_1',
		'desc'=>'',
		'type' => 'text',
		'disabled'=>false,
		'to' => 'design'
	);
	/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'Category Select 1',
		'id' => 'cat_slider_1',
		'type' => 'select_taxonomy',
		'tax' => 'category',
		'to' => 'design'
	);
	/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'عنوان  السليدر الثاني',
		'id' => 'title_slider_2',
		'desc'=>'',
		'type' => 'text',
		'disabled'=>false,
		'to' => 'design'
	);
	/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'Category Select 2',
		'id' => 'cat_slider_2',
		'type' => 'select_taxonomy',
		'tax' => 'category',
		'to' => 'design'
	);
	/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'تقسيمة الافلام',
		'id' => 'columns_movies',
		'desc'=>'',
		'type' => 'select',
		'to' => 'design',
		'options' => array(
			'2' => 'موضوعين فى الصف',
			'3' => 'ثلاثة مواضيع فى الصف',
			'4' => 'اربعة مواضيع فى الصف',
			'5' => 'خمسة مواضيع فى الصف',
			'6' => 'ستة مواضيع فى الصف (الشكل البسيط)',
		)
	);
	$options[] = array(
		'name' => 'تنقل الصفحات',
		'id' => 'paginate',
		'type' => 'select',
		'desc'=>'',
		'to' => 'design',
		'options' => array(
			'pagination' => 'عداد صفحات',
			'ajax' => 'فى نفس الصفحة',
		)
	);
/////////////////////////////////////////////////
// Item Tabs Id = Colors
/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'اعدادات الالوان العامة',
		'type' => 'title',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون القائمة',
		'id' => 'MoviesColorMenu',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون السليدر',
		'id' => 'MoviesColorSlider',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون الخلفية',
		'id' => 'MoviesColorBG',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون النصوص',
		'id' => 'MoviesColorTEXT',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون خطوط الخلفية',
		'id' => 'MoviesColorPat',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون شريحة المثبت',
		'id' => 'MoviesColorSharp',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون شريحة القسم فى السليدر',
		'id' => 'MoviesColorSliderSpan',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون زر البحث',
		'id' => 'MoviesColorSearchBTN',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون شريحة العنوان بالبلوك',
		'id' => 'MoviesColorMOVIEFTITLE',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون نص شريحة العنوان بالبلوك',
		'id' => 'MoviesColorMOVIEFTITLETXT',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'اعدادات الفيلم',
		'type' => 'title',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون شريحة التفاصيل',
		'id' => 'MoviesColorDesc',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون نص شريحة التفاصيل',
		'id' => 'MoviesColorDescC',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون شريحة التصنيف',
		'id' => 'MoviesColorCategory',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون شريحة المشاهدات',
		'id' => 'MoviesColorViews',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون زر المشاهدة بالموضوع',
		'id' => 'MoviesColorMOVIEF',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون زر مشاهدة الاعلان',
		'id' => 'TrailerBTNCOlor',
		'type' => 'color',
		'to' => 'colors'
	);
	$options[] = array(
		'name' => 'لون نص زر مشاهدة الاعلان',
		'id' => 'TrailerBTNCOlorTXT',
		'type' => 'color',
		'to' => 'colors'
	);
	
/////////////////////////////////////////////////
// Item Tabs Id = Ads
/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'اكواد Scripts اضافية',
		'id' => 'other_scripts',
		'type' => 'code',
		'desc'=>'',
		'to' => 'ads'
	);
	$options[] = array(
		'name' => 'اعلان فوق كود الفيلم',
		'id' => 'ad250',
		'type' => 'code',
		'to' => 'ads',
		'desc'=>'',
	);
	$options[] = array(
		'name' => 'اعلان جانب زر المشاهدة',
		'desc'=>'',
		'id' => 'ad_250_after_view',
		'type' => 'code',
		'to' => 'ads'
	);
/////////////////////////////////////////////////
// Item Tabs Id = Seo
/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'الارشفة',
		'id' => 'seo_settings',
		'type' => 'select',
		'to' => 'seo',
		'desc'=>'',
		'options' => array(
			'plugin' => 'ارشفة اضافات',
			'theme' => 'ارشفة القالب',
		)
	);
	$options[] = array(
		'name' => 'كلمات ارشفية هامة',
		'id' => 'keywords',
		'disabled'=>false,
		'type' => 'text',
		'desc' => 'ضع فصلة بين كل كلمة وكلمة ( , )',
		'to' => 'seo'
	);
	$options[] = array(
		'name' => 'كلمة قبل عنوان الفيلم',
		'disabled'=>false,
		'id' => 'before_title',
		'type' => 'text',
		'desc'=>'',
		'to' => 'seo'
	);
	$options[] = array(
		'name' => 'كلمة بعد عنوان الفيلم',
		'disabled'=>false,
		'id' => 'after_title',
		'desc'=>'',
		'type' => 'text',
		'to' => 'seo'
	);
	$options[] = array(
		'name' => 'اكواد Head اضافية',
		'id' => 'other_head',
		'type' => 'code',
		'desc'=>'',
		'to' => 'seo'
	);
	$options[] = array(
		'name' => 'اكواد اخري مخفية',
		'id' => 'other_head_inv',
		'desc'=>'',
		'type' => 'code',
		'to' => 'seo'
	);
	$options[] = array(
		'name' => 'تعطيل تتبع الروابط الخارجية',
		'id' => 'follow',
		'type' => 'select',
		'to' => 'seo',
		'desc' => 'تعطيل تتبع الروابط الخارجية ؟',
		'options' => array(
			'0' => 'لا',
			'1' => 'نعم',
		)
	);
	$options[] = array(
		'name' => 'مختص بماكينة الارشفة',
		'type' => 'title',
		'to' => 'seo',
	);

	$options[] = array(
		'name' => 'عنوان الصفحة الرئيسية',
		'id' => 's_title_home',
		'type' => 'text',
		'to' => 'seo'
	);
	$options[] = array(
		'name' => 'وصف الصفحة الرئيسية',
		'id' => 's_description_home',
		'type' => 'textarea',
		'to' => 'seo'
	);
	$options[] = array(
		'name' => 'وسوم الصفحة الرئيسية',
		'id' => 's_tags_home',
		'type' => 'text',
		'to' => 'seo'
	);
	/////////////////////////////////////////
	/////////////////////////////////////////
	$options[] = array(
		'name' => 'عنوان صفحة الخطأ',
		'id' => 's_404',
		'type' => 'text',
		'to' => 'seo'
	);
	/////////////////////////////////////////
	/////////////////////////////////////////








	
/////////////////////////////////////////////////
// Item Tabs Id = Social
/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'فيسبوك',
		'id' => 'facebook',
		'disabled'=>false,
		'type' => 'text',
		'desc' => 'ضع رابط صفحة الفيس بوك',
		'to' => 'social'
	);
/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'تويتر',
		'id' => 'twitter',
		'type' => 'text',
		'disabled'=>false,
		'desc' => 'ضع رابط صفحة تويتر',
		'to' => 'social'
	);
/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'جوجل بلس',
		'id' => 'googleplus',
		'disabled'=>false,
		'type' => 'text',
		'desc' => 'ضع رابط صفحة جوجل بلاس',
		'to' => 'social'
	);
/////////////////////////////////////////////////
	$options[] = array(
		'name' => 'يوتيوب',
		'id' => 'youtube',
		'disabled'=>false,
		'type' => 'text',
		'desc' => 'ضع رابط صفحة يوتيوب',
		'to' => 'social'
	);
	$options[] = array(
		'name' => 'البريد الالكتروني',
		'id' => 'email_contact',
		'desc' => 'ضع البريد الالكتروني الذي سيتم استقبال عليه رسائل الزوار',
		'disabled'=>false,
		'type' => 'text',
		'to' => 'social',
	);
/////////////////////////////////////////////////
/////////////////////////////////////////////////


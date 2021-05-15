<?php
//////////////////////////////////////////////////////////////////
// meta header
//////////////////////////////////////////////////////////////////
function add_meta_tags() {
    global $post;?>
    <?php if(is_home()){ ?>
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<title><?php echo $title_home; ?></title>
<?php }else{ ?>
<title><?php bloginfo('name'); ?></title>
<?php } ?>
<?php 
	$description_home = get_option('s_description_home');
	if(!empty($description_home)){ 
?>
<meta name="description" itemprop="description" content="<?php echo $description_home; ?>" />
<?php }else{ ?>
<meta name="description" itemprop="description" content="<?php bloginfo('description'); ?>" />
<?php } ?>
<?php 
	$tags_home = get_option('s_tags_home');
	if(!empty($tags_home)){ 
?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tags_home; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:title" content="<?php echo $title_home?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<?php } ?>
<?php 
	$description_home = get_option('s_description_home');
	if(!empty($description_home)){ 
?>
<meta property="og:description" content="<?php echo $description_home; ?>"/>
<?php }else{ ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>
    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_404()){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
<?php $s404 = get_option('s_404'); ?>
<?php if(!empty($s404)) { ?>
<?php 
$title_home = get_option('s_title_home');
if(!empty($title_home)){ 
?>
<title><?php echo $s404; ?> | <?php echo $title_home; ?></title>
<?php }else{ ?>
<title><?php echo $s404; ?> | <?php bloginfo('name'); ?></title>
<?php } ?>
<?php }else{ ?>
<?php 
$title_home = get_option('s_title_home');
if(!empty($title_home)){ 
?>
<title><?php _e( 'خطأ 404' , 'YourColor' ); ?> | <?php echo $title_home; ?></title>
<?php }else{ ?>
<title><?php _e( 'خطأ 404' , 'YourColor' ); ?> | <?php bloginfo('name'); ?></title>
<?php } ?>
<?php } ?>
<?php 
	$description_home = get_option('s_description_home');
	if(!empty($description_home)){ 
?>
<meta name="description" itemprop="description" content="<?php echo $description_home; ?>" />
<?php }else{ ?>
<meta name="description" itemprop="description" content="<?php bloginfo('description'); ?>" />
<?php } ?>
<?php 
	$tags_home = get_option('s_tags_home');
	if(!empty($tags_home)){ 
?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tags_home; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<?php $s404 = get_option('s_404'); ?>
<?php if(!empty($s404)) { ?>
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:title" content="<?php echo $s404; ?> | <?php echo $title_home?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php echo $s404; ?> | <?php bloginfo('name'); ?>" />
<?php } ?>
<?php }else{ ?>
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:title" content="<?php _e( 'خطأ 404' , 'YourColor' ); ?> | <?php echo $title_home?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php _e( 'خطأ 404' , 'YourColor' ); ?> | <?php bloginfo('name'); ?>" />
<?php } ?>
<?php } ?>
<?php 
	$description_home = get_option('s_description_home');
	if(!empty($description_home)){ 
?>
<meta property="og:description" content="<?php echo $description_home; ?>"/>
<?php }else{ ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>
<?php 
//////////////////////////////////////////////
//////////////////////////////////////////////
}else if(is_category()){ 
global $wpdb
//////////////////////////////////////////////
//////////////////////////////////////////////
?>
<?php
$category = get_the_category(); 
////////////////////////////////
////////////////////////////////

////////////////////////////////
////////////////////////////////

////////////////////////////////
////////////////////////////////
if(!empty($title_cat)) { 
?>
<title><?php echo $title_cat; ?></title>
<?php }else{ ?>
<title><?php single_cat_title(); ?></title>
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta name="description" itemprop="description" content="<?php echo $descr_cat; ?>" />
<?php }else{ ?>
<meta name="description" itemprop="description" content="<?php echo category_description($cat_id); ?>" />
<?php } ?>
<?php if(!empty($tag_cat)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tag_cat; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<?php 
if(!empty($title_cat)) { 
?>
<meta property="og:title" content="<?php echo $title_cat; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php single_cat_title(); ?>" />
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta property="og:description" content="<?php echo $descr_cat; ?>"/>
<?php }else{ ?>
<meta property="og:description" content="<?php echo category_description($cat_id); ?>"/>
<?php } ?>
<meta property="og:type" content="video.movie" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>


    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_tag()){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
<?php
$category = get_the_category(); 
////////////////////////////////
////////////////////////////////

////////////////////////////////
////////////////////////////////
?>
<title><?php single_cat_title(); ?></title>
<meta name="description" itemprop="description" content="<?php echo category_description($cat_id); ?>" />
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<meta property="og:title" content="<?php single_cat_title(); ?>" />
<meta property="og:description" content="<?php echo category_description($cat_id); ?>"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>

    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_tax('director')){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
    
<?php
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );	
////////////////////////////////
////////////////////////////////
$cat_id   = $term->term_id;
////////////////////////////////
////////////////////////////////
$director_cat = get_option("director_term_".$cat_id);



////////////////////////////////
////////////////////////////////
if(!empty($title_cat)) { 
?>
<title><?php echo $title_cat; ?></title>
<?php }else{ ?>
<title><?php single_cat_title(); ?></title>
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta name="description" itemprop="description" content="<?php echo $descr_cat; ?>" />
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'director'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>
<meta name="description" itemprop="description" content="<?php echo $dexs; ?>" />
<?php } ?>
<?php if(!empty($tag_cat)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tag_cat; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php if( !empty($director_cat['icon'])){ ?>
<meta property="og:image" content="<?php echo $director_cat['icon']; ?>" />
<?php }else{ ?>
<meta property="og:image" content="<?php echo get_option('logo'); ?>" />
<?php } ?>
<?php 
if(!empty($title_cat)) { 
?>
<meta property="og:title" content="<?php echo $title_cat; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php single_cat_title(); ?>" />
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta property="og:description" content="<?php echo $descr_cat; ?>"/>
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'director_cat'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>

<meta property="og:description" content="<?php echo $dexs; ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>
    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_tax('escritor')){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
    
<?php
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );	
////////////////////////////////
////////////////////////////////
$cat_id   = $term->term_id;
////////////////////////////////
////////////////////////////////
$writer_cat = get_option("escritor_term_".$cat_id);

 

////////////////////////////////
////////////////////////////////
if(!empty($title_cat)) { 
?>
<title><?php echo $title_cat; ?></title>
<?php }else{ ?>
<title><?php single_cat_title(); ?></title>
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta name="description" itemprop="description" content="<?php echo $descr_cat; ?>" />
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'escritor'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>
<meta name="description" itemprop="description" content="<?php echo $dexs; ?>" />
<?php } ?>
<?php if(!empty($tag_cat)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tag_cat; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php if( !empty($writer_cat['icon'])){ ?>
<meta property="og:image" content="<?php echo $writer_cat['icon']; ?>" />
<?php }else{ ?>
<meta property="og:image" content="<?php echo get_option('logo'); ?>" />
<?php } ?>
<?php 
if(!empty($title_cat)) { 
?>
<meta property="og:title" content="<?php echo $title_cat; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php single_cat_title(); ?>" />
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta property="og:description" content="<?php echo $descr_cat; ?>"/>
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'escritor'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>

<meta property="og:description" content="<?php echo $dexs; ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>
    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_tax('actor')){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
    
<?php
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );	
////////////////////////////////
////////////////////////////////
$cat_id   = $term->term_id;
////////////////////////////////
////////////////////////////////
$actors_cat = get_option("actor_term_".$cat_id);



////////////////////////////////
////////////////////////////////
if(!empty($title_cat)) { 
?>
<title><?php echo $title_cat; ?></title>
<?php }else{ ?>
<title><?php single_cat_title(); ?></title>
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta name="description" itemprop="description" content="<?php echo $descr_cat; ?>" />
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'actor'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>
<meta name="description" itemprop="description" content="<?php echo $dexs; ?>" />
<?php } ?>
<?php if(!empty($tag_cat)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tag_cat; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php if( !empty($actors_cat['icon'])){ ?>
<meta property="og:image" content="<?php echo $actors_cat['icon']; ?>" />
<?php }else{ ?>
<meta property="og:image" content="<?php echo get_option('logo'); ?>" />
<?php } ?>
<?php 
if(!empty($title_cat)) { 
?>
<meta property="og:title" content="<?php echo $title_cat; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php single_cat_title(); ?>" />
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta property="og:description" content="<?php echo $descr_cat; ?>"/>
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'actor'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>

<meta property="og:description" content="<?php echo $dexs; ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>
 
    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_tax('Quality')){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
    
<?php
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );	
////////////////////////////////
////////////////////////////////
$cat_id   = $term->term_id;
////////////////////////////////
////////////////////////////////
$Quality_cat = get_option("Quality_term_".$cat_id);



////////////////////////////////
////////////////////////////////
if(!empty($title_cat)) { 
?>
<title><?php echo $title_cat; ?></title>
<?php }else{ ?>
<title><?php single_cat_title(); ?></title>
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta name="description" itemprop="description" content="<?php echo $descr_cat; ?>" />
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'Quality'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>
<meta name="description" itemprop="description" content="<?php echo $dexs; ?>" />
<?php } ?>
<?php if(!empty($tag_cat)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tag_cat; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<?php 
if(!empty($title_cat)) { 
?>
<meta property="og:title" content="<?php echo $title_cat; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php single_cat_title(); ?>" />
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta property="og:description" content="<?php echo $descr_cat; ?>"/>
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'Quality'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>
<meta property="og:description" content="<?php echo $dexs; ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>
    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_tax('release-year')){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
    
<?php
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );	
////////////////////////////////
////////////////////////////////
$cat_id   = $term->term_id;
////////////////////////////////
////////////////////////////////
$year_cat = get_option("year_term_".$cat_id);


////////////////////////////////
////////////////////////////////
if(!empty($title_cat)) { 
?>
<title><?php echo $title_cat; ?></title>
<?php }else{ ?>
<title><?php single_cat_title(); ?></title>
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta name="description" itemprop="description" content="<?php echo $descr_cat; ?>" />
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'year'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>
<meta name="description" itemprop="description" content="<?php echo $dexs; ?>" />
<?php } ?>
<?php if(!empty($tag_cat)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tag_cat; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<?php 
if(!empty($title_cat)) { 
?>
<meta property="og:title" content="<?php echo $title_cat; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php single_cat_title(); ?>" />
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta property="og:description" content="<?php echo $descr_cat; ?>"/>
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'year'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>
<meta property="og:description" content="<?php echo $dexs; ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>


    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_tax('assemblies')){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
    
<?php
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );	
////////////////////////////////
////////////////////////////////
$cat_id   = $term->term_id;
////////////////////////////////
////////////////////////////////
$assemblies = get_option("assemblies_term_".$cat_id);
$title_cat = $assemblies['title_seo']; 
$descr_cat = $assemblies['description_seo']; 
$tag_cat   = $assemblies['tag_seo']; 
////////////////////////////////
////////////////////////////////
if(!empty($title_cat)) { 
?>
<title><?php echo $title_cat; ?></title>
<?php }else{ ?>
<title><?php single_cat_title(); ?></title>
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta name="description" itemprop="description" content="<?php echo $descr_cat; ?>" />
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'assemblies'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>
<meta name="description" itemprop="description" content="<?php echo $dexs; ?>" />
<?php } ?>
<?php if(!empty($tag_cat)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tag_cat; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php if( !empty($assemblies['icon'])){ ?>
<meta property="og:image" content="<?php echo $assemblies['icon']; ?>" />
<?php }else{ ?>
<meta property="og:image" content="<?php echo get_option('logo'); ?>" />
<?php } ?>
<?php 
if(!empty($title_cat)) { 
?>
<meta property="og:title" content="<?php echo $title_cat; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php single_cat_title(); ?>" />
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta property="og:description" content="<?php echo $descr_cat; ?>"/>
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'assemblies'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>

<meta property="og:description" content="<?php echo $dexs; ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>

    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_tax('selary')){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
    
<?php
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );	
////////////////////////////////
////////////////////////////////
$cat_id   = $term->term_id;
////////////////////////////////
////////////////////////////////
$selary = get_option("selary_term_".$cat_id);
$title_cat = $selary['title_seo']; 
$descr_cat = $selary['description_seo']; 
$tag_cat   = $selary['tag_seo']; 
////////////////////////////////
////////////////////////////////
if(!empty($title_cat)) { 
?>
<title><?php echo $title_cat; ?></title>
<?php }else{ ?>
<title><?php single_cat_title(); ?></title>
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta name="description" itemprop="description" content="<?php echo $descr_cat; ?>" />
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'selary'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>
<meta name="description" itemprop="description" content="<?php echo $dexs; ?>" />
<?php } ?>
<?php if(!empty($tag_cat)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tag_cat; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php if( !empty($selary['icon'])){ ?>
<meta property="og:image" content="<?php echo $selary['icon']; ?>" />
<?php }else{ ?>
<meta property="og:image" content="<?php echo get_option('logo'); ?>" />
<?php } ?>
<?php 
if(!empty($title_cat)) { 
?>
<meta property="og:title" content="<?php echo $title_cat; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php single_cat_title(); ?>" />
<?php } ?>
<?php if(!empty($descr_cat)){ ?>
<meta property="og:description" content="<?php echo $descr_cat; ?>"/>
<?php }else{ ?>
<?php 
	$dexs = substr(term_description($cat_id,'selary'), 0, 156);
	$dexs = strip_tags($dexs, '')
?>

<meta property="og:description" content="<?php echo $dexs; ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>

    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_single()){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
    
<?php
	$title_single = get_post_meta( $post->ID , 'name_seo' , true );  
	$desc_single  = get_post_meta( $post->ID , 'desc_seo' , true );  
	$tags_single  = get_post_meta( $post->ID , 'tags_seo' , true );  
	$img_single   = get_post_meta( $post->ID , 'img_social' , true ); 
	if(!empty($title_single)){  
?>
<title><?php echo $title_single; ?></title>
<?php }else{ ?>
<title><?php the_title(); ?></title>
<?php } ?>
<?php if(!empty($desc_single)){ ?>
<meta name="description" itemprop="description" content="<?php echo $desc_single; ?>" />
<?php } ?>
<?php if(!empty($tags_single)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tags_single; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php if( !empty($img_single)){ ?>
<meta property="og:image" content="<?php echo $img_single; ?>" />
<?php }else{ ?>
<meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' ); ?>" />
<?php } ?>
<?php if(!empty($title_single)){ ?>
<meta property="og:title" content="<?php echo $title_single; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php the_title(); ?>" />
<?php } ?>
<?php if(!empty($desc_single)){ ?>
<meta property="og:description" content="<?php echo $desc_single; ?>"/>
<?php }else{ ?>
<?php 
	$content_single = substr( $post->post_content , 0, 156);
	$content_single = strip_tags($content_single, '')
?>
<meta property="og:description" content="<?php echo $content_single; ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>
    <?php 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	}else if(is_page()){ 
	//////////////////////////////////////////////
	//////////////////////////////////////////////
	?>
<?php
	$title_single = get_post_meta( $post->ID , 'name_seo' , true );  
	$desc_single  = get_post_meta( $post->ID , 'desc_seo' , true );  
	$tags_single  = get_post_meta( $post->ID , 'tags_seo' , true );  
	$img_single   = get_post_meta( $post->ID , 'img_social' , true ); 
	if(!empty($title_single)){  
?>
<title><?php echo $title_single; ?></title>
<?php }else{ ?>
<title><?php the_title(); ?></title>
<?php } ?>
<?php if(!empty($desc_single)){ ?>
<meta name="description" itemprop="description" content="<?php echo $desc_single; ?>" />
<?php } ?>
<?php if(!empty($tags_single)){ ?>
<meta name="keywords" itemprop="keywords" content="<?php echo $tags_single; ?>" />
<?php } ?>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php if( !empty($img_single)){ ?>
<meta property="og:image" content="<?php echo $img_single; ?>" />
<?php }else{ ?>
<meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' ); ?>" />
<?php } ?>
<?php if(!empty($title_single)){ ?>
<meta property="og:title" content="<?php echo $title_single; ?>" />
<?php }else{ ?>
<meta property="og:title" content="<?php the_title(); ?>" />
<?php } ?>
<?php if(!empty($desc_single)){ ?>
<meta property="og:description" content="<?php echo $desc_single; ?>"/>
<?php }else{ ?>
<?php 
	$content_single = substr( $post->post_content , 0, 156);
	$content_single = strip_tags($content_single, '')
?>
<meta property="og:description" content="<?php echo $content_single; ?>"/>
<?php } ?>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<?php 
	$title_home = get_option('s_title_home');
	if(!empty($title_home)){ 
?>
<meta property="og:site_name" content="<?php echo $title_home; ?>" />
<?php }else{ ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>

<?php }else{?>

<title><?php wp_title(); ?></title>
<meta name="description" itemprop="description" content="<?php bloginfo('description'); ?>" />
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
<!--=== Share TAGS ===-->
<?php $logo = get_option('logo'); ?>
<?php if(!empty($logo)) {?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } ?>
<?php

}
add_action( 'wp_head', 'add_meta_tags' , 1 );
<?php

//////////////////////////////////////////////////////////////////
// Attachment Id Url
//////////////////////////////////////////////////////////////////
function pn_get_attachment_id_from_url( $attachment_url = '' ) {
	
	global $wpdb;
	$attachment_id = false;
	
	// If there is no url, return.
	if ( '' == $attachment_url )
		return;
	
	// Get the upload directory paths
	$upload_dir_paths = wp_upload_dir();
	
	// Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
	if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {
	
		// If this is the URL of an auto-generated thumbnail, get the URL of the original image
		$attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );
	
		// Remove the upload path base directory from the attachment URL
		$attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );
	
		// Finally, run a custom database query to get the attachment ID from the modified attachment URL
		$attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url ) );
	
	}
	
	return $attachment_id;
}
//////////////////////////////////////////////////////////////////
// Creat Pagination
//////////////////////////////////////////////////////////////////
function paginate() {
global $wp_query, $wp_rewrite;
$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

$pagination = array(
    'base' => @add_query_arg('page','%#%'),
    'format' => '',
    'total' => $wp_query->max_num_pages,
    'current' => $current,
    'show_all' => false,
    'type' => 'list',
    'next_text' => '&laquo;',
    'prev_text' => '&raquo;'
    );

if( $wp_rewrite->using_permalinks() )
    $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 'page', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

if( !empty($wp_query->query_vars['s']) )
    $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

echo paginate_links( $pagination );
}
function yourcolor_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}
//////////////////////////////////////////////////////////////////
// pagination
//////////////////////////////////////////////////////////////////
function pagination($pages = '', $range = 4){  
     $showitems = ($range * 2)+1;  
     global $paged;
     if(empty($paged)) $paged = 1;
     if($pages == ''){
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages){
             $pages = 1;
         }
     }   
     if(1 != $pages){
         echo "<div class=\"pagination\" role=\"navigation\" itemscope itemtype=\"http://schema.org/SiteNavigationElement\"><span>صفحة ".$paged." من ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li itemprop=\"url\"><a rel=\"prev\" href='".get_pagenum_link(1)."' itemprop=\"name\">&laquo; الاول</a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li itemprop=\"url\"><a href='".get_pagenum_link($paged - 1)."' itemprop=\"name\">&lsaquo; السابق</a></li>";
 
         for ($i=1; $i <= $pages; $i++){
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                 echo ($paged == $i)? "<li itemprop=\"url\"><span class=\"current\">".$i."</span>":"<a class=\"inactive\" href='".get_pagenum_link($i)."' itemprop=\"name\">".$i."</a></li>";
             }
         }
         if ($paged < $pages && $showitems < $pages) echo "<li itemprop=\"url\"><a rel=\"next\" href=\"".get_pagenum_link($paged + 1)."\"  itemprop=\"name\">التالي &rsaquo;</a></li>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li itemprop=\"url\"><a href='".get_pagenum_link($pages)."'>الاخير &raquo;</a></li>";
         echo "</div>\n";
     }
}


////////////////////////////////
// Menu
////////////////////////////////
class my_custom_li_nav_menu extends Walker_Nav_Menu {

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		// We've got a sub-menu, you can remove this condition and
		// have the attribute display for all the li elements, but just in case you only wanted sub menus
		if ( $depth > 0) {
			// This is where the magic happens lol
			$output .= $indent . '<li' . $id . $value . $class_names .' itemprop="url">'; 

		} else {

			$output .= $indent . '<li' . $id . $value . $class_names .' itemprop="url">';
		}
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .' itemprop="name">';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}


//////////////////////////////////////////////////////////////////
// Search Filter
//////////////////////////////////////////////////////////////////
if( is_front_page() ) {
	function SearchFilter($query) {
		if ($query->is_search) {
			$query->set('post_type','post');
		}
		return $query;
	}
	add_filter('pre_get_posts','SearchFilter');
}
//////////////////////////////////////////////////////////////////
// post views count 
//////////////////////////////////////////////////////////////////
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
//remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); 
//////////////////////////////////////////////////////////////////
// my feed request 
//////////////////////////////////////////////////////////////////
function myfeed_request($qv) {
	if (isset($qv['feed']) && !isset($qv['post_type']))
		$qv['post_type'] = array( 'post' );
	return $qv;
}
add_filter('request', 'myfeed_request');	
	
	

//////////////////////////////////////////////////////////////////
// Logout Redirect Home
//////////////////////////////////////////////////////////////////
function logout_home(){
  wp_redirect( home_url().'/admin' );
  exit();
}
add_action('wp_logout','logout_home');
//////////////////////////////////////////////////////////////////
// Login Redirect Home
//////////////////////////////////////////////////////////////////
function login_home() {
  wp_redirect( home_url().'/admin' );
  exit();
}
add_action('wp_login', 'login_home');

	function dez_schema_breadcrumb() {
	global $post;
	//schema link
	$schema_link = 'http://data-vocabulary.org/Breadcrumb';
	$home = 'الرئيسية';
	$delimiter = ' &raquo; ';
	$homeLink = get_bloginfo('url');
	if (is_home() || is_front_page()) {
	// no need for breadcrumbs in homepage
	}
	else {
	echo '<div id="mpbreadcrumbs">';
	// main breadcrumbs lead to homepage
	if (!is_single()) {
	echo 'You are here: ';
	}
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . $homeLink . '">' . '<span itemprop="title">' . $home . '</span>' . '</a></span>' . $delimiter . ' ';
	// if blog page exists
	if (get_page_by_path('blog')) {
	if (!is_page('blog')) {
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_permalink(get_page_by_path('blog')) . '">' . '<span itemprop="title">Blog</span></a></span>' . $delimiter . ' ';
	}
	}
	if (is_category()) {
	$thisCat = get_category(get_query_var('cat'), false);
	if ($thisCat->parent != 0) {
	$category_link = get_category_link($thisCat->parent);
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . $category_link . '">' . '<span itemprop="title">' . get_cat_name($thisCat->parent) . '</span>' . '</a></span>' . $delimiter . ' ';
	}
	$category_id = get_cat_ID(single_cat_title('', false));
	$category_link = get_category_link($category_id);
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . $category_link . '">' . '<span itemprop="title">' . single_cat_title('', false) . '</span>' . '</a></span>';
	}
	elseif (is_single() && !is_attachment()) {
	if (get_post_type() != 'post') {
	$post_type = get_post_type_object(get_post_type());
	$slug = $post_type->rewrite;
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . $homeLink . '/' . $slug['slug'] . '">' . '<span itemprop="title">' . $post_type->labels->singular_name . '</span>' . '</a></span>';
	echo ' ' . $delimiter . ' ' . get_the_title();
	}
	else {
	$category = get_the_category();
	if ($category) {
	foreach ($category as $cat) {
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_category_link($cat->term_id) . '">' . '<span itemprop="title">' . $cat->name . '</span>' . '</a></span>' . $delimiter . ' ';
	}
	}
	echo get_the_title();
	}
	}
	elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
	$post_type = get_post_type_object(get_post_type());
	echo $post_type->labels->singular_name;
	}
	elseif (is_attachment()) {
	$parent = get_post($post->post_parent);
	$cat = get_the_category($parent->ID);
	$cat = $cat[0];
	echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_permalink($parent) . '">' . '<span itemprop="title">' . $parent->post_title . '</span>' . '</a></span>';
	echo ' ' . $delimiter . ' ' . get_the_title();
	}
	elseif (is_page() && !$post->post_parent) {
	$get_post_slug = $post->post_name;
	$post_slug = str_replace('-', ' ', $get_post_slug);
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_permalink() . '">' . '<span itemprop="title">' . ucfirst($post_slug) . '</span>' . '</a></span>';
	}
	elseif (is_page() && $post->post_parent) {
	$parent_id = $post->post_parent;
	$breadcrumbs = array();
	while ($parent_id) {
	$page = get_page($parent_id);
	$breadcrumbs[] = '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_permalink($page->ID) . '">' . '<span itemprop="title">' . get_the_title($page->ID) . '</span>' . '</a></span>';
	$parent_id = $page->post_parent;
	}
	$breadcrumbs = array_reverse($breadcrumbs);
	for ($i = 0; $i < count($breadcrumbs); $i++) {
	echo $breadcrumbs[$i];
	if ($i != count($breadcrumbs) - 1)
	echo ' ' . $delimiter . ' ';
	}
	echo $delimiter . '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_permalink() . '">' . '<span itemprop="title">' . the_title_attribute('echo=0') . '</span>' . '</a></span>';
	}
	elseif (is_tag()) {
	$tag_id = get_term_by('name', single_cat_title('', false), 'post_tag');
	if ($tag_id) {
	$tag_link = get_tag_link($tag_id->term_id);
	}
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . $tag_link . '">' . '<span itemprop="title">' . single_cat_title('', false) . '</span>' . '</a></span>';
	}
	elseif (is_author()) {
	global $author;
	$userdata = get_userdata($author);
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_author_posts_url($userdata->ID) . '">' . '<span itemprop="title">' . $userdata->display_name . '</span>' . '</a></span>';
	}
	elseif (is_404()) {
	echo 'Error 404';
	}
	elseif (is_search()) {
	echo 'Search results for "' . get_search_query() . '"';
	}
	elseif (is_day()) {
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_year_link(get_the_time('Y')) . '">' . '<span itemprop="title">' . get_the_time('Y') . '</span>' . '</a></span>' . $delimiter . ' ';
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . '<span itemprop="title">' . get_the_time('F') . '</span>' . '</a></span>' . $delimiter . ' ';
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')) . '">' . '<span itemprop="title">' . get_the_time('d') . '</span>' . '</a></span>';
	}
	elseif (is_month()) {
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_year_link(get_the_time('Y')) . '">' . '<span itemprop="title">' . get_the_time('Y') . '</span>' . '</a></span>' . $delimiter . ' ';
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . '<span itemprop="title">' . get_the_time('F') . '</span>' . '</a></span>';
	}
	elseif (is_year()) {
	echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_year_link(get_the_time('Y')) . '">' . '<span itemprop="title">' . get_the_time('Y') . '</span>' . '</a></span>';
	}
	if (get_query_var('paged')) {
	if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
	echo ' (';
	echo __('Page') . ' ' . get_query_var('paged');
	if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
	echo ')';
	}
	echo '</div>';
	}
	}
	function get_ads($size){
		global $post;
		query_posts( array( 'post_type'=>'ads', 'orderby'=>'rand', 'meta_query'=>array( array( 'key'=>'size', 'comapre'=>'==', 'value'=>$size ) ), 'posts_per_page'=>1 ) );
		if(have_posts()) { while(have_posts()) { the_post();
			echo get_post_meta($post->ID, 'code', true);
		} } wp_reset_query();
	}


function ads_sizes() {
	$sizes = array();
	$sizes['160×600'] = '160×600';
	return $sizes;
}


//////////////////////////////////////////////////////////////////
// Hide Admin bar  
//////////////////////////////////////////////////////////////////
	add_filter('show_admin_bar', '__return_false');
//////////////////////////////////////////////////////////////////
// Text Domain
//////////////////////////////////////////////////////////////////
	function yourcolor_theme_features()  {
		// Add theme support for Translation
		load_theme_textdomain( 'YourColor', get_template_directory() . '/lang' );	
	}
	// Hook into the 'after_setup_theme' action
	add_action( 'after_setup_theme', 'yourcolor_theme_features' );
///////////////////////////////////////////////////
//	Themes Setup
///////////////////////////////////////////////////
	require_once get_template_directory().'/fun/setup/manage-setup.php';
///////////////////////////////////////////////////
//	Themes DEFINE
///////////////////////////////////////////////////
	require_once get_template_directory().'/fun/the_fear/define.php';
///////////////////////////////////////////////////
//	Themes HEAD
///////////////////////////////////////////////////
	require_once get_template_directory().'/fun/the_fear/head.php';
///////////////////////////////////////////////////
//	Themes Management System
///////////////////////////////////////////////////
	require_once get_template_directory().'/fun/manage-system.php';
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
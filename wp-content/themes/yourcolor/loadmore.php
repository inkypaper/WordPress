<?
ob_start();
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
?>
<?php
//Fix homepage pagination
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }

    $temp = $wp_query;  // re-sets query
    $wp_query = null;   // re-sets query
    $args = array( 'post_type' => 'post', 'orderby'=>'date', 'order'=>'DESC', 'posts_per_page' => 4, 'offset'=>$_GET['offset'], 'paged' => $paged);
    $wp_query = new WP_Query();
    $wp_query->query( $args );
    while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>
    <?php require( get_template_directory().'/film.php' ); ?>
<?php endwhile; ?>
<?php 
    //////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////
    if($_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest"){ 
    //////////////////////////////////////////////////////////////
    header('Content-Type: text/html; charset=utf-8');
    //////////////////////////////////////////////////////////////
    ob_start();
    define('WP_USE_THEMES', false);
    $parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
    require_once( $parse_uri[0] . 'wp-load.php' );
    //////////////////////////////////////////////////////////////
    $post_id = $_GET["post_id"]; 
    //////////////////////////////////////////////////////////////
?>
<div class="fullContainerMovie">
    <div class="container">
        <?php $tags = get_the_terms( $post_id , 'category', '' ); ?>
        <?php if( !empty($tags) ) { ?>
            <?php foreach( array_slice((is_array($tags)) ? $tags : array(), 0, 1) as $tag ) { ?>
                <div class="column">
                    <h2><a href="<?=get_term_link($tag)?>">المزيد من <span><?=$tag->name?></span></a></h2>
                    <div class="innerColumn">
                        <? query_posts(array('post_type'=>'post', 'category'=>$tag->slug, 'posts_per_page'=>12)); ?>
                        <? if(have_posts()) { while(have_posts()) { the_post(); ?>
                            <a href="<? the_permalink(); ?>">
                                <? the_post_thumbnail(); ?>
                                <div class="Tite"><? the_title(); ?></div>
                            </a>
                        <? } } ?>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>
<?php } ?>
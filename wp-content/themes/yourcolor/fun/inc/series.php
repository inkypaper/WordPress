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

    <?php unset($slug); ?>

    <?php $posts = array('0'=>$post_id); ?>

    <?php $tags = get_the_terms( $post_id, 'selary', '' ); ?>

    <?php if( !empty($tags) ) { ?>

        <?php foreach( (is_array($tags)) ? $tags : array() as $tag ) { ?>

            <?php $slug = $tag->name; ?>

        <?php } ?>

    <?php } ?>

    <?php if( !empty($slug) ) { ?>

    <div class="episodesList">

        <?php wp_reset_query(); ?>

        <?php query_posts( array( 'post_type'=>'post', 'selary'=>$slug, 'meta_key'=>'number', 'orderby'=>'meta_value_num', 'posts_per_page'=>-1, 'order'=>'ASC' ) ); ?>

        <?php if( have_posts() ) { while( have_posts() ) { the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="serie<?php echo get_post_meta($post->ID, 'number', true)?>"><em><?php echo get_post_meta($post->ID, 'number', true)?></em><span>حلقة</span></a>

            <?php $posts[] = $post->ID; ?>

        <?php } } ?>

    </div>

    <?php } ?>

<?php } ?>


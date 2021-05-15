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

    <script>

        var s = 0;

        var ss = 0;

        $(document).ready(function(e) {

          if( $(this).scrollTop() > 100 ) {

            $('.Block').each(function(index, element) {

              setTimeout(function(){

                $(element).addClass('active');

              },ss);

              ss = 100+ss;

            });

          }

        });        

    </script>

    <?php $tags = get_the_terms( $post_id, 'assemblies', '' ); ?>

    <?php 

        foreach( (is_array($tags)) ? $tags : array() as $tag ) { 

            $selary = $tag->slug; 

        }; 

    ?>

    <?php 

        $flimes = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '-1', 'assemblies' => $selary,'order' => 'ASC'));

        if($flimes->have_posts()) : while($flimes->have_posts()) : $flimes->the_post(); 

    ?>

    <div class="Block">
        <a class="a_title" href="<? the_permalink(); ?>">
            <?php if(has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('col'); ?>
            <?php } ?>
            <div class="title"><? the_title(); ?></div>
            <p><?=wp_trim_words(get_the_content(), 15, '...')?></p>
        </a>
        <? foreach (array_slice(get_the_terms($post->ID, 'category', ''), 0, 1) as $cat) { ?>
            <a class="categoryLabel" href="<?=get_term_link($cat)?>"><i class="fa fa-film"></i> <?=$cat->name?></a>
        <? } ?>
        <div class="views_loop"><i class="fa fa-eye"></i><?php echo get_post_meta( $post->ID , 'views' , true ); ?></div>
    </div>

    <?php endwhile; endif; wp_reset_query(); ?>

<?php } ?>
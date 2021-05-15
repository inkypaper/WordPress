<?php
/*
 *
 * Template Name: series
 *
 */
 get_header();
?>
<? if( !array_key_exists('offset', $_GET) ) { ?>
    <? $_GET['offset'] = '0'; ?>
<? } ?>
<div>
    <div class="w-1200">
        <div class="title_page"><?php the_title(); ?></div>
            <div id="loop_director">
                <?php 
                    ////////////////////////////////////////////////
                    ////////////////////////////////////////////////    
                    $args = array(
                        'type'                     => 'post',
                        'child_of'                 => 0,
                        'parent'                   => '',
                        'orderby'                  => 'term_id',
                        'order'                    => 'ASC',
                        'hide_empty'               => 1,
                        'hierarchical'             => 1,
                        'exclude'                  => '',
                        'include'                  => '',
                        'number'                   => '',
                        'taxonomy'                 => 'selary',
                        'pad_counts'               => false 
                    ); 
                    $tas = get_categories($args);
                    $tas = (is_array($tas)) ? array_slice($tas, $_GET['offset'], 40) : array();
                    foreach( $tas as $sel) { 
                    ////////////////////////////////////////////////
                    ////////////////////////////////////////////////    
                    $query = new WP_Query(array( 'post_type' => 'post' , 'posts_per_page' => 1, 'selary' => $sel->category_nicename  ));
                    if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                        $final_link   = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' );
                    endwhile; endif; wp_reset_query();
                    ////////////////////////////////////////////////    
                    ////////////////////////////////////////////////    
                    if(!empty($final_link)){   
                        $final_link  = $final_link;
                    }else{
                        $final_link = get_template_directory_uri().'/img/no_thumbnail.jpg';    
                    }
                    ////////////////////////////////////////////////
                    ////////////////////////////////////////////////    
                ?>
                <div class="title-post">
                    <a href="<?php echo get_term_link($sel)?>" title="<?php echo $sel->name; ?>">
                        <span class="count_ser"><?php echo $sel->count; ?> <?php _e( 'حلقة' , 'YourColor' ); ?></span>
                        <img src="<?php echo $final_link; ?>">
                        <div class="titleB"><?php echo $sel->name; ?></div>
                        <div class="clr"></div>
                    </a>
                </div>                
                <? } ?>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
            <div class="pagination">
                <?php $numof = 40; ?>
                <?php if( $_GET['offset'] >= $numof ) { ?>
                <a href="<?php the_permalink(); ?>?offset=<?php echo $_GET['offset']-$numof?>"><?php _e( 'الصفحة السابقة' , 'YourColor' ); ?></a>
                <?php } ?>
                <?php
                $tas= get_categories($args);
                ///////////////////////////////////////////////////////////////
                $tas= array_slice($tas, $_GET['offset']+$numof, $numof);
                ?>
                <?php if( !empty($tas) ) { ?>
                    <a href="<?php the_permalink(); ?>?offset=<?php echo $_GET['offset']+$numof?>"><?php _e( 'الصفحة التالية' , 'YourColor' ); ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
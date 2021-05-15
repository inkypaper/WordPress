<?php get_header(); ?>
<div class="sectionsCategories">
  <div class="section">
    <h2><i class="fa fa-film"></i> المضاف حديثا</h2>
    <div class="ad728"><?=get_ads('728×90')?></div>
    <?php
    //Fix homepage pagination
    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
    $temp = $wp_query;  // re-sets query
    $wp_query = null;   // re-sets query
    $args = array( 'post_type' => 'post', 'orderby'=>'date', 'order'=>'DESC', 'posts_per_page' => get_option('number_movies_home'), 'paged' => $paged);
    $wp_query = new WP_Query();
    $wp_query->query( $args );
    while ($wp_query->have_posts()) : $wp_query->the_post(); 
    ?>
      <div class="Block">
          <a class="a_title" href="<? the_permalink(); ?>">
              <?php if(has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('col'); ?>
              <?php } ?>
              <div class="title"><? the_title(); ?></div>
            
          </a>
          <? foreach (array_slice(get_the_terms($post->ID, 'category', ''), 0, 1) as $cat) { ?>
              <a class="categoryLabel" href="<?=get_term_link($cat)?>"><i class="fa fa-film"></i> <?=$cat->name?></a>
          <? } ?>
         
		  
		  
		  
      </div>
    <?php endwhile; ?>
    <div class="pagination">
       <?php paginate(); ?>
       <?
       $wp_query = null;
       $wp_query = $temp; // Reset
       ?>
    </div>
    <div class="ad728"><?=get_ads('728×90')?></div>
  </div>
</div>
<?php get_footer(); ?>
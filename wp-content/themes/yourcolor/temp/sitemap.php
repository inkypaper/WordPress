<?php 
// Template Name: HTML Sitemap
?>
<ul class="sitemap_list">
	<?php query_posts( array( 'post_type'=>'post', 'posts_per_page'=>-1 ) ); ?>
    <?php if(have_posts()) { while(have_posts()) { the_post(); ?>
    	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php } } ?>
</ul>
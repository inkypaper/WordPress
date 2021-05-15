<?php 
	/*
	 *
	 * Template Name: new episode
	 *
	 */
	get_header();
?>

	<div class="def_loop" style="padding-top: 40px;">
    	<h1 class="title_page"><?php the_title(); ?></h1>

        <div class="w-1200">
			<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
				  'post_type' => 'post',
				  'post_status' => 'publish',
				  'posts_per_page' => 30, 
				  'paged' => $paged ,
				  'meta_query' => array(
				      'relation' => 'or', 
				      array(
				          'key' => 'number',
				          'value' => '',
				          'compare' => '!='
				      ),
				  ),
				);
                $flimes = new WP_Query( $args  );
                if($flimes->have_posts()) : while($flimes->have_posts()) : $flimes->the_post();	
            ?>
            <?php require( get_template_directory().'/film.php' ); ?>
			<?php endwhile; endif; wp_reset_query(); ?>
            <div class="clr"></div>
			<?php if (function_exists("pagination")) {
			    pagination($flimes->max_num_pages);
			} ?>
            
            <div class="clr"></div>
        </div>    
    </div>



<?php get_footer(); ?>
<?php
/*
*
* Template Name: Home
*
*/ 
get_header(); 
?>
<?php
$obj = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );	
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
$top_viwe = array( 
	'post_type' => 'show_online', 
	'posts_per_page' => 20, 
	'offset'=> '0',
	$obj->taxonomy=>$obj->slug,
	'meta_query' => array(
		array(
				'key' => 'YC_ch_fixed',
				'value' => 'on',
				'compare' => '=='
			),
	)
);
?>
<?php if( count(query_posts($top_viwe)) != 0 ) { ?>
<div class="sectionTop">
	<div class="sliderTop">
    	<ul>
			<?php 
				$query_top_viwe = new WP_Query($top_viwe);
                ///////////////////////////////////////////////////////////////
                ///////////////////////////////////////////////////////////////
                if($query_top_viwe->have_posts()) : 
                while($query_top_viwe->have_posts()) : 
                $query_top_viwe->the_post(); 
                ///////////////////////////////////////////////////////////////
                ///////////////////////////////////////////////////////////////
                $img_url      = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' );;
                ///////////////////////////////////////////////////////////////
                ///////////////////////////////////////////////////////////////
            ?>
            <li class="filmBlock">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail('w-400'); ?>
                    <div class="views">
                        <?php $cats = get_the_terms( $post->ID, 'show_online_category', '' ); ?>
                        <?php foreach( array_slice($cats, 0, 1) as $s ) { ?>
                            <?php echo $s->name?>
                        <?php } ?>
                    </div>
                    <div class="title"><?php the_title(); ?></div>
                </a>
            </li>
            <?php endwhile; endif; wp_reset_query(); ?>
		</ul>
    </div>
    <a href="Javascript:void(0);" id="watch-prev"><i class="fa fa-angle-left"></i></a>
    <a href="Javascript:void(0);" id="watch-next"><i class="fa fa-angle-right"></i></a>
</div>
<?php } ?>
<div class="content-site <?php if( count(query_posts($top_viwe)) == 0 ) { ?>woa<?php } ?>">
	<div class="inside">
    	<div class="padding">
        	<h2 class="module_title">
            	<?php $name = $obj->name; ?>
                <?php $name = explode(' ', $name); ?>
                <?php $k = 0; foreach( $name as $n ) { ?>
                	<?php if($k == 0) { ?>
                	<span><?php echo $n?></span> 
                    <?php }else { ?>
                    <?php echo $n?>
                    <?php } ?>
                <?php $k++; } ?>
                <div class="search">
                    <form method="get" action="<?php echo home_url()?>">
                        <input type="text" name="s" placeholder="البحث عن فيلم او مسلسل" />
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </h2>
            <div class="blocksFilms">
            	<?php query_posts( array( 'post_type'=>'show_online', $obj->taxonomy=>$obj->slug, 'posts_per_page'=>30, 'paged'=>get_query_var('paged') ) ); ?>
                <?php if( have_posts() ) { while( have_posts() ) { the_post(); ?>
                	<?php require( get_template_directory().'/film.php' ); ?>
                    <?php $yes = 'ss'; ?>
                <?php } } ?>
                <?php if( $yes == '' ) { ?>
                	<div class="no-posts">لا يوجد عناصر تم اضافتها</div>
                <?php } ?>
                <div class="pagination">
					<?php echo yourcolor_numeric_posts_nav()?>
                </div>
            </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
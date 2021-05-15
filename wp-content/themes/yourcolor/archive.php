<?php get_header(); ?>

<div class="content-site" role="main">
	<? if( wp_is_mobile() ) { ?>
		<h2 style="text-align:center;margin-bottom:10px;color:white;"><?=single_cat_title()?></h2>
	<? } ?>
	<h1 class="title_page"><?php single_cat_title(); ?></h1>
    <div class="blocksFilms">

		<?php if(have_posts()) { while(have_posts()) { the_post(); ?>

                   <?php require( get_template_directory().'/film.php' ); ?>


        <?php } } ?>

        <div class="pagination">

           <?php echo yourcolor_numeric_posts_nav()?>

        </div>

    </div>

</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="content-site" role="main">

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
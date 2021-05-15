<?php get_header(); ?>
<?php wp_reset_query(); ?>
<div class="content-site woa">
	<div class="inside">
    	<div class="padding">
            <h2 class="sepTItle"><span class="po1">•</span><span class="po2">•</span><?php the_title(); ?><span class="po3">•</span><span class="po4">•</span></h2>
            <div class="pageContent">
				<?php the_content(); ?>
            </div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
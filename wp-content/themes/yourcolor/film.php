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
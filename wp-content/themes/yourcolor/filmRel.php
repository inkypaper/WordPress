<div class="moviefilm Rels">
    <a href="<?php the_permalink() ?>" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>');"></a>
    <div class="movief"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
</div>
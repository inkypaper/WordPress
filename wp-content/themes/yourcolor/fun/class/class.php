<?php
if ( ! function_exists( 'YourColor_post_nav' ) ) :

	function YourColor_post_nav() {
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );
		if ( ! $next && ! $previous ) {
			return;
		}
		?>
        <section class="color-3">
            <div class="yourcolor-nav-posts"><?php _e( 'هل تريد الذهاب للموضوع السابق او الموضوع التالي ؟' , 'YourColor' ); ?></div>
            <nav class="nav-growpop">
				<?php $prevPost = get_previous_post(true); ?>
				<?php if($prevPost) { ?>
                    <a class="prev" href="<?php echo $prevPost->guid; ?>">
                        <span class="icon-wrap"></span>
                        <div>
                            <span><?php _e( 'الموضوع التالي' , 'YourColor' ); ?></span>
                            <h3><?php echo $prevPost->post_title; ?></h3>
                            <?php 
                                $prev_thumb       = array('class'	=> "attachment-$size Next thumb",);
                                $prev_thumbnai_wo = get_the_post_thumbnail($prevPost->ID, array(104,104), $prev_thumb);
                            ?>
                            <?php previous_post_link( "$prev_thumbnai_wo", TRUE); ?>                        
                        </div>
                    </a>
                <?php } ?>
				<?php $nextPost = get_next_post(true);?>
				<?php if($nextPost) { ?>
					<a class="next" href="<?php echo $nextPost->guid; ?>">
						<span class="icon-wrap"></span>
						<div>
							<span><?php _e( 'الموضوع السابق' , 'YourColor' ); ?></span>
							<h3><?php echo $nextPost->post_title; ?></h3>
                            <?php 
								$next_thumb = array('class'	=> "attachment-$size Next thumb",);
								$next_thumbnai_wo = get_the_post_thumbnail($nextPost->ID, array(104,104), $next_thumb);
							?>
                            <?php previous_post_link( "$next_thumbnai_wo", TRUE); ?>
						</div>
					</a>
				<?php } ?>
            </nav>
        </section>
		<?php
	}

endif;
/////////////////////////////////////////
// filter link
/////////////////////////////////////////

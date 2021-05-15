<?php 
// Template Name: Order Movies
get_header(); ?>
<?php wp_reset_query(); ?>
<div class="content-site woa">
	<div class="inside">
    	<div class="padding">
            <h2 class="sepTItle"><span class="po1">•</span><span class="po2">•</span><?php the_title(); ?><span class="po3">•</span><span class="po4">•</span></h2>
			<?php if( array_key_exists('comments', $_POST) ) { ?>
				<?
                // The message
                $message = "الاسم : ".$_POST['contactName']."\r\n البريد الالكتروني : ".$_POST['email']."\r\n الفيلم : ".$_POST['movie']."\r\n".$_POST['comments']."";
                
                // In case any of our lines are larger than 70 characters, we should use wordwrap()
                $message = wordwrap($message, 70, "\r\n");
                
                // Send
                mail(get_option('admin_email'), 'طلب فيلم من '.$_POST['contactName'].' فى طلبات الافلام', $message);
                ?>
                <div class="reportSuccess">
                    تم ارسال الرسالة بنجاح ...
                </div>
            <?php } ?>
            <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                <ol class="forms">
                    <li>
                        <label for="contactName"><?php _e( 'الاسم :' , 'YourColor' )?></label>
                        <input type="text" placeholder="<?php _e( 'الاسم :' , 'YourColor' )?>" name="contactName" id="contactName" class="requiredField" />
                    </li>
                    <li>
                        <label for="movie"><?php _e( 'الفيلم :' , 'YourColor' ); ?></label>
                        <input type="text" name="movie" placeholder="<?php _e( 'اسم الفيلم :' , 'YourColor' ); ?>" id="movie" class="requiredField movie" />
                    </li>
                    <li>
                        <label for="email"><?php _e( 'البريد الالكتروني :' , 'YourColor' ); ?></label>
                        <input type="text" name="email" placeholder="<?php _e( 'البريد الالكتروني :' , 'YourColor' ); ?>" id="email" class="requiredField email" />
                    </li>
                    <li class="textarea">
                        <label for="commentsText"><?php _e( 'نص الرسالة :' , 'YourColor' ); ?></label>
                        <textarea name="comments" placeholder="<?php _e( 'نص الرسالة :' , 'YourColor' ); ?>" id="commentsText" rows="20" cols="30" class="requiredField"></textarea>
                    </li>
                    <li class="buttons">
                    <input type="hidden" name="submitted" id="submitted" value="true" /><button type="submit"><?php _e( 'ارسال' , 'YourColor' ); ?></button>
                    <div class="clr"></div>
                    </li>
                </ol>
            </form>
		</div>
	</div>
</div>
<?php get_footer(); ?>
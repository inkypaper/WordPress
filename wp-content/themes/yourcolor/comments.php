<?php if ( have_comments() ) : ?>
	<h1 class="YC-title-page-master"><?php comments_number('لا تعليق', 'تعليق', '% تعليق' ,'YourColor' );?></h1>
	<ul class="comment-list">
		<?php wp_list_comments(); ?>
	</ul>
<?php endif; ?>

<?php
	$comments_args = array(
        'label_submit'=>'ارسال التعليق',
		'says' => 'قال',
        'title_reply'=>'أضف تعليق',
        'comment_notes_after' => ''
	);
	comment_form($comments_args);
?>
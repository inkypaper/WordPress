<?php 

	//////////////////////////////////////////////////////////////

	//////////////////////////////////////////////////////////////

	if($_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest"){ 

	//////////////////////////////////////////////////////////////

	header('Content-Type: text/html; charset=utf-8');

	//////////////////////////////////////////////////////////////

	ob_start();

	define('WP_USE_THEMES', false);

	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );

	require_once( $parse_uri[0] . 'wp-load.php' );

	//////////////////////////////////////////////////////////////

	$post_id = $_GET["post_id"]; 

	//////////////////////////////////////////////////////////////

?>

<ul class="informationsList">
    <?php $tags = get_the_terms( $post_id, 'director', '' ); ?>
    <?php if( !empty($tags) ) { ?>
    <li>
        <span>المخرجين : </span>
        <? foreach (get_the_terms($post_id, 'director', '') as $director) { ?>
            <a href="<?=get_term_link($director)?>"><?=$director->name?></a>
        <? } ?>
    </li>
    <? } ?>
    <?php $tags = get_the_terms( $post_id, 'post_tag', '' ); ?>
    <?php if( !empty($tags) ) { ?>
    <li>
        <span>كلمات البحث : </span>
        <? foreach (get_the_terms($post_id, 'post_tag', '') as $director) { ?>
            <a href="<?=get_term_link($director)?>"><?=$director->name?></a>
        <? } ?>
    </li>
    <? } ?>
    <?php $tags = get_the_terms( $post_id, 'escritor', '' ); ?>
    <?php if( !empty($tags) ) { ?>
    <li>
        <span>الكاتبين : </span>
        <? foreach (get_the_terms($post_id, 'escritor', '') as $director) { ?>
            <a href="<?=get_term_link($director)?>"><?=$director->name?></a>
        <? } ?>
    </li>
    <? } ?>
    <?php $tags = get_the_terms( $post_id, 'actor', '' ); ?>
    <?php if( !empty($tags) ) { ?>
    <li>
        <span>الممثلين : </span>
        <? foreach (get_the_terms($post_id, 'actor', '') as $director) { ?>
            <a href="<?=get_term_link($director)?>"><?=$director->name?></a>
        <? } ?>
    </li>
    <? } ?>
    <?php $tags = get_post_meta($post_id, 'runtime', true); ?>
    <?php if( !empty($tags) ) { ?>
    <li>
        <span>مدة الفيلم : </span>
        <?=get_post_meta($post_id, 'runtime', true)?>
    </li>
    <? } ?>
    <?php $tags = get_post_meta($post_id, 'released', true); ?>
    <?php if( !empty($tags) ) { ?>
    <li>
        <span>تاريخ الاصدار : </span>
        <?=get_post_meta($post_id, 'released', true)?>
    </li>
    <? } ?>
</ul>

<?php } ?>
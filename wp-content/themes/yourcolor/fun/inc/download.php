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
    <div class="centerSevers">
        <?php $download_ls = get_post_meta( $post_id , 'downloads', true ); ?>
        <?php if( !empty($download_ls)){ ?>
        <?php $tags = get_the_terms( $post_id , 'Quality', '' ); ?>
        <?php $tags = (is_array($tags)) ? $tags : array()?>
        <?php foreach( array_slice($tags , 0, 1) as $tag ) { ?>
            <?php $name_qu = $tag->name; ?>
        <?php } ?>
        <?php $tags = get_the_terms( $post_id , 'release-year', '' ); ?>
        <?php $tags = (is_array($tags)) ? $tags : array()?>
        <?php foreach( array_slice($tags , 0, 1) as $tag ) { ?>
            <?php $year = $tag->name; ?>
        <?php } ?>
        <div class="downloadsList">
            <ul>
            <?php foreach( (is_array($download_ls)) ? $download_ls : array() as $field ) { ?>
            <div class="DownloadItem">
                <h2><i class="fa fa-download"></i> روابط التحميل من عرب سبايدر</h2>
                <div class="ItemDescFolder"><?=$field['folder']?></div>
                <li>
                    <a target="_blank" rel="nofollow" href="<?php echo $field['link']?>">
                        <i class="fa fa-download"></i>
                        <span class="name"><?php echo $field['name']?></span>
                        <span class="quality"><?php echo $name_qu;?></span>
                        <span class="size"><?php echo $year;?></span>
                        <div class="clr"></div>

                    </a>
                </li>
            </div>
            <?php } ?>
            </ul>
        </div>
        <?php } ?>
    </div>
<?php } ?>
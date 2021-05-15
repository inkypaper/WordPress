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


<div class="wathList">
    <div class="container">
        <div class="centerSevers">
            <script>
            function server(i) {
                $(".serversUl > li").removeClass('active').removeAttr('active');
                $(".serversUl > li.server"+i+"").addClass('active');
                $.ajax({
                    url: '<?php echo get_template_directory_uri()?>/servers/server.php',
                    data: 'q=<?php echo $post_id; ?>&i='+i+'',
                    success: function(msg) {
                        $(".serverD .server1").html(msg);
                    }
                });
            }
            </script>
            <? $slug = ''; ?>
            <div class="screen-graphic" <? if( wp_is_mobile() ) { ?>style="margin-bottom: 80px;"<? } ?>>
                <ul class="serversUl">
                    <?php if( get_post_meta($post_id, 'embed_pelicula', true) != '' ) { ?>
                        <li onClick="server(1)" active class="server1">السيرفر الاول</li>
                    <?php } ?>
                    <?php if( get_post_meta($post_id, 'embed_pelicula2', true) != '' ) { ?>
                        <li onClick="server(2)" class="server2">السيرفر الثاني</li>
                    <?php } ?>
                    <?php if( get_post_meta($post_id, 'embed_pelicula3', true) != '' ) { ?>
                        <li onClick="server(3)" class="server3">السيرفر الثالث</li>
                    <?php } ?>
                    <?php if( get_post_meta($post_id, 'embed_pelicula4', true) != '' ) { ?>
                        <li onClick="server(4)" class="server4">السيرفر الرابع</li>
                    <?php } ?>
                    <?php if( get_post_meta($post_id, 'embed_pelicula5', true) != '' ) { ?>
                        <li onClick="server(5)" class="server5">السيرفر الخامس</li>
                    <?php } ?>
                    <?php if( get_post_meta($post_id, 'embed_pelicula6', true) != '' ) { ?>
                        <li onClick="server(6)" class="server6">السيرفر السادس</li>
                    <?php } ?>
                    <?php if( get_post_meta($post_id, 'embed_pelicula7', true) != '' ) { ?>
                        <li onClick="server(7)" class="server7">السيرفر السابع</li>
                    <?php } ?>
                    <?php if( get_post_meta($post_id, 'embed_pelicula8', true) != '' ) { ?>
                        <li onClick="server(8)" class="server8">السيرفر الثامن</li>
                    <?php } ?>
                    <?php if( get_post_meta($post_id, 'embed_pelicula9', true) != '' ) { ?>
                        <li onClick="server(9)" class="server9">السيرفر التاسع</li>
                    <?php } ?>
                    <?php if( get_post_meta($post_id, 'embed_pelicula10', true) != '' ) { ?>
                        <li onClick="server(10)" class="server10">السيرفر العاشر</li>
                    <?php } ?>
                </ul>
                <div class="centerSeversLIST">
                    <div class="serverD" style="position:relative;">
                        <div class="server1" active>
                            <?php if( get_post_meta($post_id, 'embed_pelicula', true) != '' ) { ?>
                                <?php if( get_option('ad250') != '' ) { ?>
                                    <div class="adG">
                                        <span onClick="CloseAd();" class="closeAD"><i class="fa fa-close"></i></span>
                                        <?php echo str_replace("\'", "'", get_option('ad250'))?>
                                    </div>
                                <?php } ?>
                                <?php echo get_post_meta($post_id, 'embed_pelicula', true)?>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>




<?php } ?>
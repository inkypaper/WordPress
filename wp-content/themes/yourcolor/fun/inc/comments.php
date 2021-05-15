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
<?php comment_form( $args, $post_id ); ?>
<ol class="comment-list">
    <?php    
        //Gather comments for a specific page/post 
        $comments = get_comments(array(
            'post_id' => $post_id,
            'status' => 'approve' //Change this to the type of comments to be displayed
        ));

        //Display the list of comments
        wp_list_comments(array(
            'per_page' => 10, //Allow comment pagination
            'reverse_top_level' => false //Show the latest comments at the top of the list
        ), $comments);

    ?>
</ol>
<?php } ?>
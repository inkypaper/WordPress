<?php add_action( 'admin_menu', 'register_my_custom_menu_page' );
	
	function register_my_custom_menu_page(){
		add_menu_page( 'YC Mail', 'YC Mail', 'manage_options', 'YC_Mail', 'my_custom_menu_page', get_bloginfo('template_url'). '/fun/PostType/icon/authors.png', 10 ); 
	}
	
function my_custom_menu_page(){
	
		if(isset($_POST['submitted'])) {
		//Check to see if the honeypot captcha field was filled in
		if(trim($_POST['checking']) !== '') {
			$captchaError = true;
		} else {
			//Check to make sure that the name field is not empty
			if(trim($_POST['contactName']) === '') {
				$nameError = _e( 'يرجي ادخال الاسم.' , 'YourColor' );
				$hasError = true;
			} else {
				$name = trim($_POST['contactName']);
			}
			//Check to make sure sure that a valid email address is submitted
			if(trim($_POST['email']) === '')  {
				$emailError = _e( 'يرجي ادخال البريد الالكتروني' , 'YourColor' );
				$hasError = true;
			} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
				$emailError = 'You entered an invalid email address.';
				$hasError = true;
			} else {
				$email = trim($_POST['email']);
			}
			//Check to make sure comments were entered	
			if(trim($_POST['comments']) === '') {
				$commentError = _e( 'يرجي ادخال نص الرسالة' , 'YourColor' );
				$hasError = true;
			} else {
				if(function_exists('stripslashes')) {
					$comments = stripslashes(trim($_POST['comments']));
				} else {
					$comments = trim($_POST['comments']);
				}
			}
			//If there is no error, send the email
			if(!isset($hasError)) {
				$emailTo = $master_mail;
				$subject = $name;
				$sendCopy = trim($_POST['sendCopy']);
				$body = "الاسم: $name \n\nEmail: $email \n\nComments: $comments";
				$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
				mail($emailTo, $subject, $body, $headers);
				if($sendCopy == true) {
					$subject = 'You emailed Your Name';
					$headers = 'From: Your Name <noreply@somedomain.com>';
					mail($email, $subject, $body, $headers);
				}
				$emailSent = true;
			}
		}
	} 

	
	
	
	
?>
<script src="<?php bloginfo('template_url'); ?>/fun/admin/head/js/jquery-1.7.2.js"></script>
<script src="<?php bloginfo('template_url'); ?>/fun/admin/head/js/jquery.confirm.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/fun/admin/head/css/confirmon.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/fun/admin/head/css/jquery.confirm.css"/>
<script>
  jQuery(document).ready(function() {
	  ////////////////////////////////////////////
	  ////////////////////////////////////////////
	  jQuery("#check-all").click(function () {
		  jQuery("#List-Form").find("#elet li input[type=checkbox]").prop('checked', this.checked);
	  });
	  ////////////////////////////////////////////
	  ////////////////////////////////////////////
	  jQuery('.YC-Delete').click(function(){
		  var elem = $(this);
		  jQuery.confirm({
			  'title'		: ' <?php _e( 'تأكيد الحذف' , 'YourColor' ); ?> ',
			  'message'	: '<?php _e( 'هل تريد حذف الموضوع ؟' , 'YourColor' ); ?>',
			  'buttons'	: {
				  '<?php _e( 'نعم' , 'YourColor' ); ?>'	: {
					  'class'	: 'blue',
					  'action': function(){
						   var URL=elem.attr("href");
						   var ID=elem.attr("data-id");
						   jQuery("#item-"+ID+"").remove();
						   //alert(URL);
						   window.document.location.href=URL;
					  }
				  },
				  '<?php _e( 'لا' , 'YourColor' ); ?>'	: {
					  'class'	: 'gray',
					  'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
				  }
			  }
		  });
		  return false;
	  });
	  ////////////////////////////////////////////
	  ////////////////////////////////////////////
  });
  ////////////////////////////////////////////
  ////////////////////////////////////////////
  function removep(id) {
		//playlist
		$(".confirm").remove();
		$.ajax({
			url: '<?php echo get_template_directory_uri(); ?>/inc/remove-mail.php',
			type: 'post',
			data: 'post='+id+'',
			success: function(msg){
				$("body").append(msg);
			}
		});
  }
  ////////////////////////////////////////////
  ////////////////////////////////////////////
  function removeall() {
		////////////////////////////////////////////
		////////////////////////////////////////////
		var myCheckboxes = new Array();
		$("input.sugcatfri:checked").each(function() {
			myCheckboxes.push($(this).val());
			$("#item-"+$(this).val()+"").remove();
		});
		////////////////////////////////////////////
		////////////////////////////////////////////
		//$(myCheckboxes).remove();
		$.ajax({
			url: '<?php echo get_template_directory_uri(); ?>/inc/remove-all-mail.php',
			type: 'post',
			data: 'post='+myCheckboxes+'',
			success: function(msg){
				$("body").append(msg);
			}
		});
		return false;
  }
  ////////////////////////////////////////////
  ////////////////////////////////////////////
</script>

	<div class="center-block">
    	<div class="right-center-mail">
		<form method="post" action="" id="List-Form">
        	<div class="option">
                <input type="checkbox" id="check-all" />
                البريد الالكتروني
                <a onClick="removeall('<?php the_ID(); ?>');" class="button-primary red">حذف</a>
            </div>
            <ul id="elet">
                <?php 
                    $sld_blog_arg    = array( 
                                            'post_type' => 'newsletters' , 
                                            'posts_per_page' => -1 , 
                                        ); 
                    $sld_blog_Query  = new WP_Query($sld_blog_arg); 
                    ////////////////////////////////////////////////
                    ////////////////////////////////////////////////
                    if($sld_blog_Query->have_posts()): 
                    while($sld_blog_Query->have_posts()) : 
                    $sld_blog_Query->the_post();
                ?>
                    <li id="item-<?php the_ID(); ?>">
                    	<input type="checkbox" value="<?php the_ID(); ?>" class="sugcatfri" id="check-all" />
						<?php the_title(); ?>
                        <a href="Javascript:void(0)" onClick="removep('<?php the_ID(); ?>');" data-id="<?php the_ID(); ?>" class="YC-Delete"><?php _e( 'حذف' , 'YourColor' ); ?></a> 
                    </li>
                <?php endwhile; endif; ?>
            </ul>
        </form>    
        </div>
    	<div class="left-center-mail">
        
        </div>
    	<div class="clr"></div>
    
    
    
	</div>
<?php } ?>
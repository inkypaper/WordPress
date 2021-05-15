<?php function YC_admin_style() { ?>
	<? if( get_option('imdb_set') == 'yes' ) { ?>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
        <script>
        jQuery(document).ready(function($) {
            $('.cmb2-id-imdb').html('<button onClick="get_data();return false;" class="button button-success button-large">استخراج البيانات من IMDB</button>');
        });
        function get_data(id) {
			if( $('#imdb_id').val() != '' ) {
				$('.cmb2-id-imdb').append('<div class="progtess-imdb" style="height: 20px;width: 300px;background: #eee;"><div style="height: 100%;width: 50px;background: rgb(35, 40, 45);" class="bar"></div></div>');
				$.ajax({
					url: '<?=get_template_directory_uri()?>/imdb/get_data.php',
					type:'GET',
					data:'id='+$("#imdb_id").val()+'&pid='+$('#post_ID').val()+'',
					xhr: function() {
						var xhr = new window.XMLHttpRequest();
						xhr.upload.addEventListener("progress", function(evt) {
							if (evt.lengthComputable) {
								var percentComplete = evt.loaded / evt.total*100;
								$('.progtess-imdb .bar').css({"width":percentComplete+'%'});
							}
					   }, false);
				
			
					   xhr.addEventListener("progress", function(evt) {
						   if (evt.lengthComputable) {
							   var percentComplete = evt.loaded / evt.total*100;
							   $('.progtess-imdb .bar').css({"width":percentComplete+'%'});
						   }
					   }, false);
				
					   return xhr;
					},
					success: function(msg) {
						$('body').append(msg);
						$('.progtess-imdb').remove();
					},
					error: function(){
						$('.progtess-imdb').remove();
						$('.cmb2-id-imdb').append('<strong class="sdasdprogress" style="color:red;">حدث خطأ اثناء السحب ...</strong>');
					}
				});
			}
        }
        </script>
    <? } ?>
<?php } ?>
<?php add_action( 'admin_enqueue_scripts', 'YC_admin_style' ); ?>
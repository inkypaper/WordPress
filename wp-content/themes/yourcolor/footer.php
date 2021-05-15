<div class="container">
    <div class="honeycombs">
        <?php foreach (get_categories(array('taxonomy'=>'release-year', 'hide_empty'=>0)) as $year) { ?>
            <? if( is_numeric($year->cat_name) ) { ?>
                <div class="comb">
                    <div class="front-content">
                        <a href="<?=get_term_link($year)?>"><p><?=$year->cat_name?></p></a>
                    </div>
                </div>
            <? } ?>
        <? } ?>
    </div>
</div>
<script>
	$(document).ready(function() {
		$('.honeycombs').honeycombs({
			combWidth:70,
			margin: -8,
			threshold: 3
		});
	});
</script>
<div class="UPMenu">
  <div class="container">
  
    <?php  { ?>
       <select id="selectbox" class="menu-mobail" name="" onChange="javascript:location.href = this.value;">
            <option value="" selected="selected"><?php _e( '' , 'YourColor' ) ?></option> 
            <?
            $menu = wp_nav_menu(array('echo' => false , 'theme_location'  => 'top-menu'));
            if (preg_match_all('#(<a [^<]+</a>)#',$menu,$matches)) {
              $hrefpat = '/(href *= *([\"\']?)([^\"\' ]+)\2)/';
              foreach ($matches[0] as $link) {
                 // Do something with the link
                 if (preg_match($hrefpat,$link,$hrefs)) {
                    $href = $hrefs[3];
                 }
                 if (preg_match('#>([^<]+)<#',$link,$names)) {
                    $name = $names[1];
                 }
                 ?>
            <option value="<?=$href?>"><?=$name?></option> 
            <? } }?>
        </select> 
    <?php } ?>





  <ul class="social">
    <li class="facebook"><a href="<?php echo get_option('facebook')?>"><i class="fab fa-android fa-lg "></i></a></li>
   
   
  </ul>
    
  </div>
</div>
<div class="footer <?php echo ( get_option('paginate') == 'ajax' ) ? 'fixx' : ''?>">
	<div class="MASs">
        <div class="alignright">
			جميع الحقوق محفوظة &copy; <a href="<?php echo home_url()?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
        </div>

    	<div class="alignleft" style="position:relative;z-index:1000;">
        	تصميم و برمجة <a href="http://www.cimacity.tk">سيما سيتى | Cimacity.tk</a>
        </div>
    </div>
</div>
<?php echo get_option('other_codes')?>
<div style="display:none;"><?php echo get_option('other_codes_inv')?></div>
<?php wp_footer(); ?>
</body>
</html>
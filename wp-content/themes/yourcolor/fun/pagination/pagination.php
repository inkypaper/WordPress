<?php 
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

	 echo "<nav style=\"text-align:center\"><ul class=\"pagination\"><span class=\"page-num-calc\">صفحة ".$paged." من ".$pages."</span>";
	 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>الاولي</a></li>";
	 if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>السابق</a></li>";

	 for ($i=1; $i <= $pages; $i++)
	 {
		 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
		 {
			 echo ($paged == $i)? "<li class=\"current\"><a href=\"javascript:void(0)\">".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a></li>";
		 }
	 }

	 if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\">التالي</a></li>";  
	 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>الاخيرة</a></li>";
	 echo "</ul>";
	 if( is_tax('elmagla_category') ) {
		$obj = get_queried_object();
		echo "<a class='old_site' href='".get_option('ole_'.$obj->term_id.'')."' title='الذهاب الى المواضيع السابقة'>المواضيع السابقة</a></nav>\n";
	 }else {
		 echo "<a class='old_site' href='".get_option('old_site')."' title='الذهاب الى المواضيع السابقة'>المواضيع السابقة</a></nav>\n";
	 }
}


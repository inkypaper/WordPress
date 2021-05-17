<?php if( get_option('die_site') == 'yes' ) { ?>
<?php }else { ?>
  <?php if( wp_is_mobile() ) { ?>
    <?php if( get_option('mobile_url') ) { ?>
    <?php header('Location: '.get_option('mobile_url').''); ?>
    <?php }else if( get_option('enable_mobile') == 'disable' ) { ?>
    <?php die(); ?>
    <?php } ?>
    <?php } ?>
<?php } ?>

<html b:js='false' <?php language_attributes(); ?> class="YC-html">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<link rel="shortcut icon" href="<?php echo get_option('favicon')?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Person",
  "name" : "<?php bloginfo('name'); ?>",
  "url" : "<?php echo home_url()?>",
  "sameAs" : [ "<?php echo get_option('facebook')?>",
      "<?php echo get_option('youtube')?>",
      "<?php echo get_option('twitter')?>",
      "<?php echo get_option('googleplus')?>"] 
}
</script>
<meta charset="UTF-8">
<?php echo get_option('other_head')?>
 <? if( is_single() ) { ?>
  <?php 
    $title_seo = get_post_meta( $post->ID , 'name_seo' , true ); 
    if( !empty($title_seo) ){
      $title_seo = get_post_meta( $post->ID , 'name_seo' , true ); 
    }else{
      $title_seo = get_the_title(); 
    }
  ?>
    <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "NewsArticle",
    "headline": "<? echo $title_seo; ?>",
    "alternativeHeadline": "<? echo $title_seo; ?>",
    "image": [
    "<?=wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>"
    ],
    "datePublished": "<?=$post->post_date?>",
    "description": "<?php echo wp_trim_words(get_the_content(),20, '..')?>",
    "articleBody": "<?php echo strip_tags(get_the_content(), ''); ?>"
  }
  </script>
    <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "item": {
      "@id": "<?=home_url()?>",
      "name": "الافلام و المسلسلات"
    }
    },{
    "@type": "ListItem",
    "position": 2,
    "item": {
      "@id": "<? the_permalink(); ?>",
     "name": "<? the_title(); ?>"
    }
    }]
  }
  </script>
    <? } ?>
    <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "WebSite",
    "url": "<?=home_url()?>",
    "potentialAction": {
    "@type": "SearchAction",
    "target": "<?=home_url()?>/search.html?q={search_term_string}",
    "query-input": "required name=search_term_string"
    }
  }
  </script>
    <script type="application/ld+json">
  {
    "@context" : "http://schema.org",
    "@type" : "WebSite",
    "name" : "<? bloginfo('name'); ?>",
    "alternateName" : "<? bloginfo('description'); ?>",
    "url" : "<?=home_url()?>"
  }
  </script>
    <script type="application/ld+json">
  {
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "<? bloginfo('name'); ?>",
    "url" : "<?=home_url()?>",
    "sameAs" : [
    "<?php echo get_option('twitter'); ?>",
    "<?php echo get_option('googleplus'); ?>",
    "<?php echo get_option('youtube'); ?>",
    "<?php echo get_option('facebook'); ?>"
    ]
  }
  </script>
<?php echo add_meta_tags(); ?>
<?php echo get_option('other_head')?>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<meta content='global' name='distribution'/>
<meta content='7 days' name='revisit'/>
<meta content='7 days' name='revisit-after'/>
<meta content='document' name='resource-type'/>
<meta content='all' name='audience'/>
<meta content='general' name='rating'/>
<meta content='all' name='robots'/>
<meta content='<?php bloginfo('name'); ?>' name='author'/>
<meta content='ar' name='language'/>
<meta content='Egypt' name='country'/>
<meta name="apple-mobile-web-app-capable" content = "yes" /> 
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" href="<?php echo home_url()?>/feed" title="<?php bloginfo('name'); ?>" />


<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/style.css" />
<script  src="<?=get_template_directory_uri()?>/js/all.min.js" ></script>



	
	
	
	
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/css/mediascreen.css" />

<script  type="text/javascript" src="<?=get_template_directory_uri()?>/js/jquery-1.8.3.js"></script>
<script  type="text/javascript" src="<?=get_template_directory_uri()?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script  type="text/javascript" src="<?=get_template_directory_uri()?>/js/owl.carousel.min.js"></script>
<script  type="text/javascript" src="<?=get_template_directory_uri()?>/js/jquery.iosslider.js"></script>
<script  type="text/javascript" src="<?=get_template_directory_uri()?>/js/jquery.honeycombs.js"></script>


<script>
<?php if(!is_single()){ ?>
$(document).ready(function(){
    $('.sliderHeader').owlCarousel({
        margin: 10,
        loop:true,
        items: 1,
       autoplay:true,
       autoplaySpeed:2000,
      autoplayHoverPause:true
    });
    var owl = $(".sliderHeader").data('owlCarousel');
    $('.slider-next').click(function(){
        owl.prev();
    });
    $('.slider-prev').click(function(){
        owl.next();
    });
});
<?php } ?>
var s = 0;
var ss = 0;
$(window).scroll(function(e) {
  if( $(this).scrollTop() > 100 ) {
    $('.Block').each(function(index, element) {
      setTimeout(function(){
        $(element).addClass('active');
      },ss);
      ss = 100+ss;
    });
  }
});
</script>
<?php if(!is_home()){ ?>
<?php wp_head(); ?>
<?php } ?>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<div class="fixedDemo">
  <div class="demo">
    
      <div class="demo__img">
      </div>
    </div>
  </div>

<?php { ?>
<script type="text/javascript">
  $(document).ready(function(){
    $('.but').click(function(){
      $('.right_slider').toggleClass('active');
      $('.but').toggleClass('sun');
    });
  });
</script>
<div class="but"><i class="fa fa-caret-left" aria-hidden="true"></i></div>
<?php } ?>
<div class="right_slider">
    <ul>
        <li>
            <i>سـ</i>
            <span>سيتى سيما</span>
        </li>
        <li>
            <a href="<?php echo home_url(); ?>/36-2/ ">
                <i class="fa fa-th-large" aria-hidden="true"></i>
                <span><?php _e( 'المسلسلات' , 'YourColor' ); ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo home_url(); ?>/30-2/ ">
                <i class="fa fa-th" aria-hidden="true"></i>
                <span><?php _e( 'احدث الحلقات' , 'YourColor' ); ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo home_url(); ?>/28-2/">
                <i class="fa fa-film" aria-hidden="true"></i>
                <span><?php _e( 'سلاسل الافلام' , 'YourColor' ); ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo home_url(); ?>/35-2/">
                <i class="fa fa-play" aria-hidden="true"></i>
                <span><?php _e( 'احدث الافلام' , 'YourColor' ); ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo home_url(); ?>/29-2/">
                <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                <span><?php _e( 'الافلام المميزة' , 'YourColor' ); ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo home_url(); ?>/26-2/">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span><?php _e( 'استفساراتكم و طلباتكم' , 'YourColor' ); ?></span>
            </a>
        </li>
        <li> <a href="<?php echo home_url(); ?>/search.html">
            <i class="fa fa-search"></i>
            <span><?php _e( 'بحث سيما سيتى' , 'YourColor' ); ?></span>
        </li>
    </ul>
</div>
<style type="text/css">
.demo__content {
  background: url(<?=wp_get_attachment_url(get_post_thumbnail_id($post->ID))?>);
}
</style>
<script type="text/javascript">
$(window).scroll(function(){
  if( $(window).scrollTop() >= 230 ) {
    $('.SiteMenu').addClass('fixed');
  }
  if( $(window).scrollTop() <= 230 ) {
    $('.SiteMenu').removeClass('fixed');
  }
});
</script>
<script>
$(document).ready(function(){
  setTimeout(function(){
    $('.innerHeader').removeClass('loading');
  },1500);
});
</script>
<script>//<![CDATA[
;(function($){$.fn.unveil=function(threshold,callback){var $w=$(window),th=threshold||0,retina=window.devicePixelRatio>1,attrib=retina?"data-src-retina":"data-src",images=this,loaded;this.one("unveil",function(){var source=this.getAttribute(attrib);source=source||this.getAttribute("data-src");if(source){this.setAttribute("src",source);if(typeof callback==="function")callback.call(this);}});function unveil(){var inview=images.filter(function(){var $e=$(this);if($e.is(":hidden"))return;var wt=$w.scrollTop(),wb=wt+$w.height(),et=$e.offset().top,eb=et+$e.height();return eb>=wt-th&&et<=wb+th;});loaded=inview.trigger("unveil");images=images.not(loaded);}
$w.on("scroll.unveil resize.unveil lookup.unveil",unveil);unveil();return this;};})(window.jQuery||window.Zepto);
//]]></script>
<? if( !is_single() ) { ?>
<header>
  <div class="container">
    <div class="logo">
      <a href="<?=home_url()?>">
        <img src="<?=get_option('logo')?>" width="250" height="200" />
      </a>
      <script>
        $(window).load(function(){
          $('.logo').addClass('active');
          $("img").unveil(300);
        });
      </script>
    </div>
  </div>
</header>
<? } ?>
<form action="<?php echo home_url()?>" method="GET" id="searchForm">
  <div onclick="$('#searchForm').removeClass('active');" style="height:100%;"></div>
  <input type="text" name="s" id="s" placeholder="ادخل كلمة البحث">
  <button type="submit">بحث
  </button>
</form>
<div class="SiteMenu">
  <div class="container">
    <? if( is_single() ) { ?>
      <div class="logoSitemenu">
        <a href="<?=home_url()?>">
          <?=get_option('sitelogo')?>
        </a>
      </div>
    <? } ?>
    
    <?php  { ?>
       <select id="selectbox" class="menu-mobail" name="" onChange="javascript:location.href = this.value;">
            <option value="" selected="selected"><?php _e( '' , 'YourColor' ) ?></option> 
            <?
            $menu = wp_nav_menu(array('echo' => false , 'theme_location'  => 'main-menu'));
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



  </div>
</div>
<? if( is_home() ) { ?>
<?php 
    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
if( $paged == 1 ){
?>
  <div class="innerHeader loading">
  <div class="shape">يرجي الانتظار ...</div>
  <a href="javascript:void(0);" class="slider-prev"><i class="fa fa-angle-right"></i></a>
  <a href="javascript:void(0);" class="slider-next"><i class="fa fa-angle-left"></i></a>
  <div class="sliderHeader">
    <li>
      <? query_posts(array('post_type'=>'post', 'posts_per_page'=>10)); ?>
      <? if(have_posts()) { while(have_posts()) { the_post(); ?>
        <a href="<? the_permalink(); ?>">
          <? the_post_thumbnail('sliderSmall'); ?>
          <div class="ribbon">مثبت</div>
          <span class="title"><? the_title(); ?></span>
        </a>
      <? } } ?>
    </li>
    <li>
      <? query_posts(array('post_type'=>'post', 'offset'=>5, 'posts_per_page'=>10)); ?>
      <? if(have_posts()) { while(have_posts()) { the_post(); ?>
        <a href="<? the_permalink(); ?>">
          <? the_post_thumbnail('sliderSmall'); ?>
          <div class="ribbon">مثبت</div>
          <span class="title"><? the_title(); ?></span>
        </a>
      <? } } ?>
    </li>
  </div>
</div>
<? wp_reset_query(); ?>

<? } } ?>


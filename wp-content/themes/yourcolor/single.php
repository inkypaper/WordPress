<?php get_header(); ?>
<link rel="stylesheet" href="https://www.citycima.tk/playr.css" />
	<script type="text/javascript" src="https://www.citycima.tk/playredit.js"></script>

    <div class="backgroundCover" style="background-image:url(<?=wp_get_attachment_url(get_post_thumbnail_id($post->ID))?>);"></div>
    <div class="breadcrumbs">
        <?php dez_schema_breadcrumb() ?>
    </div>



















    <div class="container">
		
        <div class="postercontainer">
            <? the_post_thumbnail(); ?>
            <?php $imdb = get_post_meta($post->ID, 'imdb_id', true); ?>
            <?php if(!empty($imdb)){ ?>
            <a href="http://www.imdb.com/title/<?php echo $imdb; ?>" target="_blank" class="IMDBButton"><i class="fa fa-film"></i> IMDB</a>
            <?php } ?>
        </div>
		
        <div class="titlePoster">
            <i class="fa fa-play"></i>
            <? the_title(); ?>
			
            <div class="BarPoster">
                <ul>
                    <?php $tags = get_the_terms( $post->ID, 'quality', '' ); ?>
                    <?php if( !empty($tags) ) { ?>
                    <li>
                        <i class="fa fa-film"></i>
                        <?php foreach( array_slice((is_array($tags)) ? $tags : array(), 0, 1) as $tag ) { ?>
                            <?php echo '<a href="'.get_term_link($tag).'">'.$tag->name.'</a>'; ?>
                        <?php } ?>
                        <div class="clr"></div>
                    </li>
                    <?php } ?>
                    <?php $tags = get_the_terms( $post->ID, 'category', '' ); ?>
                    <?php if( !empty($tags) ) { ?>
                    <li>
                        <i class="fa fa-video-camera"></i>
                        <?php foreach( array_slice((is_array($tags)) ? $tags : array(), 0, 1) as $tag ) { ?>
                            <?php echo '<a href="'.get_term_link($tag).'">'.$tag->name.'</a>'; ?>
                        <?php } ?>
                        <div class="clr"></div>
                    </li>
                    <?php } ?>
                    <?php $tags = get_the_terms( $post->ID, 'release-year', '' ); ?>
                    <?php if( !empty($tags) ) { ?>
                    <li>
                        <i class="fa fa-calendar"></i>
                        <?php foreach( array_slice((is_array($tags)) ? $tags : array(), 0, 1) as $tag ) { ?>
                            <?php echo '<a href="'.get_term_link($tag).'">'.$tag->name.'</a>'; ?>
                        <?php } ?>
                        <div class="clr"></div>
                    </li>
                    <?php } ?>
                </ul>
				
                <div class="clr"></div>
            </div>
        </div>
        <div class="contentFilm">
            
            <? the_content(); ?>
        </div>
      
        <div class="bottomBarCover">
            
            <div class="socialBottomBar">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                    <a class="addthis_button_facebook"></a>
  <a class="addthis_button_twitter"></a>
  <a class="addthis_button_email"></a>
                    <a class="addthis_button_link"></a> 
                   <a class="addthis_button_print"></a>
					<a class="addthis_button_google"></a>
                   
					
                </div>
               
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_wor4"></div>
            
                <!-- AddThis Button END -->
            </div> 
        </div>
    </div>
    <?php $download = get_post_meta($post->ID, 'downloads', true); ?>
    <?php $servers[] = get_post_meta($post->ID, 'embed_pelicula', true); ?>
    <?php $servers[] = get_post_meta($post->ID, 'embed_pelicula2', true); ?>
    <?php $servers[] = get_post_meta($post->ID, 'embed_pelicula3', true); ?>
    <?php $servers[] = get_post_meta($post->ID, 'embed_pelicula4', true); ?>
    <?php $servers[] = get_post_meta($post->ID, 'embed_pelicula5', true); ?>
    <?php $servers[] = get_post_meta($post->ID, 'embed_pelicula6', true); ?>
    <?php $servers[] = get_post_meta($post->ID, 'embed_pelicula7', true); ?>
    <?php $servers[] = get_post_meta($post->ID, 'embed_pelicula8', true); ?>
    <?php $servers[] = get_post_meta($post->ID, 'embed_pelicula9', true); ?>
    <?php $servers[] = get_post_meta($post->ID, 'embed_pelicula10', true); ?>
    <?php $servers = array_filter($servers); ?>
    <?php $Trailer = get_post_meta( $post->ID , 'Trailer' , true );  ?>


<script type="text/javascript">
    $(document).ready(function(){
        /////////////////////////////////
        /////////////////////////////////
        $('.list_it li').click(function(){
            $('.list_it li').removeClass('active');
            $(this).addClass('active');
            $('.left_post_views').html('<div class="loader loader--style8" title="7"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve"> <rect x="0" y="9.99974" width="10" height="16.0005" fill="#333" opacity="0.2"> <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite"></animate> <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite"></animate> <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite"></animate> </rect> <rect x="8" y="13.49974" width="10" height="21.0005" fill="#333" opacity="0.2"> <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate> <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate> <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate> </rect> <rect x="16" y="11.00026" width="10" height="25.9995" fill="#333" opacity="0.2"> <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate> <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate> <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate> </rect> </svg> </div>');
            $.ajax({
                url: '<?php bloginfo('template_url'); ?>/fun/inc/'+$(this).data('filter')+'.php',
                type:'GET',
                data:'post_id='+<?php echo $post->ID; ?>+'',
                success: function(msg) {
                    $('.left_post_views').html(msg);
                }
            });
        });
        /////////////////////////////////
        /////////////////////////////////
    });
</script>
<div class="list_it">
    <ul>
       
        <? $extraDetails = get_post_meta($post->ID, 'extra_details', true); ?>
        <?php if(!empty($extraDetails)){ ?>
        <li data-filter="extra"><span><p><i class="fa fa-info"></i> <?=get_post_meta($post->ID, 'extra_details_title', true)?></span></p></li>
        <?php } ?>
        <?php if(!empty($Trailer)){ ?>
        <li data-filter="trailer"><span><p><i class="fa fa-film"></i> <?php _e( 'الاعلان' , 'YourColor' ); ?></span></p></li>
        <?php } ?>
        <?php if( !empty($servers) ) { ?>
        <li data-filter="watch"><span><p><i class="fa fa-play"></i> <?php _e( 'مشاهدة الأن' , 'YourColor' ); ?></span></p></li>
        <?php } ?>
        <?php if( !empty($download) ) {?>
        <li data-filter="download"><span><p><i class="fa fa-download"></i> <?php _e( 'روابط التحميل' , 'YourColor' ); ?></span></p></li>
        <? } ?>
        <?php $tags = get_the_terms( $post->ID, 'assemblies', '' ); ?>
        <?php if( !empty($tags) ) { ?>
            <?php foreach( (is_array($tags)) ? $tags : array() as $tag ) { ?>
            <li data-filter="salery"><span><p><i class="fa fa-th"></i> <?php _e( 'سلسلة الافلام ' , 'YourColor' ); ?></span></p></li>
            <?php } ?>
        <?php } ?>
        <?php $selary = get_the_terms( $post->ID, 'selary', '' ); ?>
        <?php if( !empty($selary) ) { ?>
            <?php foreach( (is_array($selary)) ? $selary : array() as $selarys ) { ?>
            <li data-filter="series"><span><p><i class="fa fa-th"></i> <?php _e( 'حلقات مسلسل ' , 'YourColor' ); ?></span></p></li>
            <?php } ?>
        <?php } ?>
       
        <div class="clr"></div>
    </ul>
</div>

<div class="left_post_views">
    <ul class="informationsList">
        <?php $tags = get_the_terms( $post->ID, 'director', '' ); ?>
        <?php if( !empty($tags) ) { ?>
        <li>
            <span>المخرجين : </span>
            <? foreach (get_the_terms($post->ID, 'director', '') as $director) { ?>
                <a href="<?=get_term_link($director)?>"><?=$director->name?></a>
            <? } ?>
        </li>
        <? } ?>
        <?php $tags = get_the_terms( $post->ID, 'post_tag', '' ); ?>
        <?php if( !empty($tags) ) { ?>
        <li>
            <span>كلمات البحث : </span>
            <? foreach (get_the_terms($post->ID, 'post_tag', '') as $director) { ?>
                <a href="<?=get_term_link($director)?>"><?=$director->name?></a>
            <? } ?>
        </li>
        <? } ?>
        <?php $tags = get_the_terms( $post->ID, 'escritor', '' ); ?>
        <?php if( !empty($tags) ) { ?>
        <li>
            <span>الكاتبين : </span>
            <? foreach (get_the_terms($post->ID, 'escritor', '') as $director) { ?>
                <a href="<?=get_term_link($director)?>"><?=$director->name?></a>
            <? } ?>
        </li>
        <? } ?>
        <?php $tags = get_the_terms( $post->ID, 'actor', '' ); ?>
        <?php if( !empty($tags) ) { ?>
        <li>
            <span>الممثلين : </span>
            <? foreach (get_the_terms($post->ID, 'actor', '') as $director) { ?>
                <a href="<?=get_term_link($director)?>"><?=$director->name?></a>
            <? } ?>
        </li>
        <? } ?>
        <?php $tags = get_post_meta($post->ID, 'runtime', true); ?>
        <?php if( !empty($tags) ) { ?>
        <li>
            <span>مدة الفيلم : </span>
            <?=get_post_meta($post->ID, 'runtime', true)?>
        </li>
        <? } ?>
        <?php $tags = get_post_meta($post->ID, 'released', true); ?>
        <?php if( !empty($tags) ) { ?>
        <li>
            <span>تاريخ الاصدار : </span>
            <?=get_post_meta($post->ID, 'released', true)?>
        </li>
        <? } ?>
    </ul>
    <div class="quadraBox">
        <? if( get_post_meta($post->ID, 'box1Content', true) != '' ) { ?>
        <div class="box1">
            <h2><?=get_post_meta($post->ID, 'box1Title', true)?></h2>
            <?=wpautop(get_post_meta($post->ID, 'box1Content', true))?>
        </div>
        <? } ?>
        <? if( get_post_meta($post->ID, 'box2Content', true) != '' ) { ?>
        <div class="box2">
            <h2><?=get_post_meta($post->ID, 'box2Title', true)?></h2>
            <?=wpautop(get_post_meta($post->ID, 'box2Content', true))?>
        </div>
        <? } ?>
        <? if( get_post_meta($post->ID, 'box3Content', true) != '' ) { ?>
        <div class="box3">
            <h2><?=get_post_meta($post->ID, 'box3Title', true)?></h2>
            <?=wpautop(get_post_meta($post->ID, 'box3Content', true))?>
        </div>
        <? } ?>
        <? if( get_post_meta($post->ID, 'box4Content', true) != '' ) { ?>
        <div class="box4">
            <h2><?=get_post_meta($post->ID, 'box4Title', true)?></h2>
            <?=wpautop(get_post_meta($post->ID, 'box4Content', true))?>
        </div>
        <? } ?>
    </div>
</div>

<div class="fullcontainerMovie">
    <div class="container">
        <?php $tags = get_the_terms( $post->ID , 'category', '' ); ?>
        <?php if( !empty($tags) ) { ?>
            <?php foreach( array_slice((is_array($tags)) ? $tags : array(), 0, 1) as $tag ) { ?>
                <div class="column">
                    <h2><a href="<?=get_term_link($tag)?>">المزيد من <span><?=$tag->name?></span></a></h2>
                    <div class="innerColumn">
	<?					if ( is_single() ) {
    $cats =  get_the_category();
    $cat = $cats[0]; // let's just assume the post has one category
}
else { // category archives
    $cat = get_category( get_query_var( 'cat' ) );
} ?>
                        <? query_posts(array('post_type'=>'post', 'cat' => $cat->cat_ID, 'posts_per_page'=>12)); ?>
                        <? if(have_posts()) { while(have_posts()) { the_post(); ?>
                        <div class="Block">
                            <a class="a_title" href="<? the_permalink(); ?>">
                                <?php if(has_post_thumbnail()) { ?>
                                    <?php the_post_thumbnail('col'); ?>
                                <?php } ?>
                                <div class="title"><? the_title(); ?></div>
                           
                            </a>
                            <? foreach (array_slice(get_the_terms($post->ID, 'category', ''), 0, 1) as $cat) { ?>
                                <a class="categoryLabel" href="<?=get_term_link($cat)?>"><i class="fa fa-film"></i> <?=$cat->name?></a>
                            <? } ?>
                           
                        </div>
                        <? } } ?>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>
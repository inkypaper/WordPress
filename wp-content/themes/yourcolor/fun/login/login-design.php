<?php
	////////////////////////////////////////////
	// login_headerurl
	////////////////////////////////////////////
	add_filter( 'login_headerurl', 'custom_loginlogo_url' );
	function custom_loginlogo_url($url) {
		return ''. home_url() .'' ;
	}
	////////////////////////////////////////////
	// YC_login_logo
	////////////////////////////////////////////
	function YC_login_logo() {
?>		
<link rel='stylesheet' href='<?php bloginfo('stylesheet_directory')?>/style.css' type='text/css' media='all' />

<body <?php body_class(); ?>>
    <div style="display:none" id="temp_url"></div>
    <div class="top-nav">
        <div class="width-master">
			<?php 
				wp_nav_menu ( array(
					'theme_location'  => 'top-menu',
					'menu'            => '',
					'container'       => false,
					'container_id'    => '',
					'menu_class'      => 'top-menu',
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				)); 
            ?>
            <div class="share-header">
            	<ul>
                	<?php 
						//////////////////////////////////
						// Var
						//////////////////////////////////
						$facebook = of_get_option( 'header-face', 'no entry' );
						//////////////////////////////////
						$twitter  = of_get_option( 'header-twitter', 'no entry' );
						//////////////////////////////////
						$youtube  = of_get_option( 'header-youtube', 'no entry' );
						//////////////////////////////////
						$google   = of_get_option( 'header-google', 'no entry' );
						//////////////////////////////////
						$linkedin = of_get_option( 'header-linkedin', 'no entry' );
						//////////////////////////////////
						$pinterest = of_get_option( 'header-pinterest', 'no entry' );
						//////////////////////////////////
						$tumblr   = of_get_option( 'header-tumblr', 'no entry' );
						//////////////////////////////////
						$blogger  = of_get_option( 'header-blogger', 'no entry' );
						//////////////////////////////////
					?>
                	<?php if(!empty($facebook)) { ?>
                	<li><a href="<?php echo $facebook; ?>" class="facebook" target="_blank"></a></li>
                	<?php } ?>
                    
                	<?php if(!empty($twitter)) { ?>
                    <li><a href="<?php echo $twitter; ?>" class="twitter" target="_blank"></a></li>
                	<?php } ?>

                	<?php if(!empty($youtube)) { ?>
                    <li><a href="<?php echo $youtube; ?>" class="youtube" target="_blank"></a></li>
                	<?php } ?>

                	<?php if(!empty($google)) { ?>
                    <li><a href="<?php echo $google; ?>" class="googleplus" target="_blank"></a></li>
                	<?php } ?>
                    
                	<?php if(!empty($linkedin)) { ?>
                    <li><a href="<?php echo $linkedin; ?>" target="_blank" class="linkedin"></a></li>
                	<?php } ?>

                	<?php if(!empty($pinterest)) { ?>
                    <li><a href="<?php echo $pinterest; ?>" target="_blank" class="pinterest"></a></li>
                	<?php } ?>
                    
                	<?php if(!empty($tumblr)) { ?>
                    <li><a href="<?php echo $tumblr; ?>" target="_blank" class="tumblr"></a></li>
                	<?php } ?>
                    
                	<?php if(!empty($blogger)) { ?>
                    <li><a href="<?php echo $blogger; ?>" target="_blank" class="blogger"></a></li>
                	<?php } ?>
                    
                </ul>
            </div>
            <div class="clr"></div>
		</div>
    </div>

    <div class="header">
        <div class="width-master">
        	<div class="logo"><a href="<?php echo home_url(); ?>" class="img_logo"></a></div>
			<div class="search">
                <div id="sb-search" class="sb-search">
                    <form method="get" id="s" action="<?php bloginfo('url'); ?>/">
                        <input class="sb-search-input" placeholder="<?php _e( 'ابحث معنا الان ...' , 'YourColor' ); ?>" type="text" value="<?php the_search_query(); ?>" name="s" id="s">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
	<div class="menu">
        <div class="width-master">
			<?php 
				wp_nav_menu ( array(
					'theme_location'  => 'main-menu',
					'menu'            => '',
					'container'       => false,
					'container_id'    => '',
					'menu_class'      => 'main-menu',
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul id="%1$s" class="%2$s"><li><a class="home" href="'.home_url().'"></a></li>%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				)); 
            ?>
        </div>
    </div>
    <div class="content-master">
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
    <div class="footer">
        <div class="top-footer">        	
        </div>
        <div class="bottom-footer">
            <div class="width-master">
            
            	<div class="academies-loop">
                	<ul>
						<?php 
                            $academies_arg    = array( 'post_type' => 'academies' , 'posts_per_page' => -1 ); 
                            $academies_Query  = new WP_Query($academies_arg); 
                            ////////////////////////////////////////////////
                            ////////////////////////////////////////////////
                            if($academies_Query->have_posts()): 
                            while($academies_Query->have_posts()) : 
                            $academies_Query->the_post();
                        ?>
                    	<li>
                        	<div class="block-acad">
                            	<a href="<?php the_permalink(); ?>" target="_blank">
									<?php the_post_thumbnail(array( 125,125 )); ?>
                                    <h1><?php the_title(); ?></h1>
                                </a>
                            </div>
                        </li>
						<?php endwhile; endif; wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<div class="copyright-footer">
        <div class="width-master">
            <div class="right-copyright"><?php _e( 'جميع الحقوق محفوظة للاكاديمية العربية لفنون التصميم والجرافيك', 'YourColor' ); ?></div>
            <div class="left-copyright">Design & Development : <a href="http://yourcolor.net/" target="_blank">YourColor.Net</a></div>
            <div class="clr"></div>
        </div>
    </div> 
 <?php 
	}
	add_action( 'login_enqueue_scripts', 'YC_login_logo' );
?>
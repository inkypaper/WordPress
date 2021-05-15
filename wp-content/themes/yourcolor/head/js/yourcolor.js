$(document).ready(function() {
	/////////////////////////////////
	// NiceScroll
	/////////////////////////////////
	var nice = $("html").niceScroll();
	/////////////////////////////////
	/////////////////////////////////
	var nav = $('.bar-header');
	 $(window).scroll(function () {
		if ($(this).scrollTop() > 600) {
			nav.addClass("f-nav");
		} else {
			nav.removeClass("f-nav");
		}
    });	
	/////////////////////////////////
	/////////////////////////////////
	var str=location.href.toLowerCase();
	$('.main-menu li a').each(function() {
		if (str.indexOf(this.href.toLowerCase()) > -1) {
			$(".active").removeClass("active");
			$(this).parent().addClass("active"); 
		}
	}); 
	/////////////////////////////////
	// ScrollTop
	/////////////////////////////////
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
		if ($(this).scrollTop() > 100) {
			$('.fixed').addClass('topped');
		}
	}); 
	
	$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 1000);
		return false;
	});	
	/////////////////////////////////
	/////////////////////////////////
	$(".title-aca").click(function(){
		$(".all-academy ul").toggleClass('auto');
		return false;
	});
	/////////////////////////////////
	/////////////////////////////////
	$(".wp-caption a , .attachment a").addClass('fancybox');
	/////////////////////////////////
	/////////////////////////////////
});
/*
function slideChange(args) {
	$('.sliderContainer .slideSelectors .item').removeClass('selected');
	$('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
}
function slideComplete(args) {
	if(!args.slideChanged) return false;
	$(args.sliderObject).find('.text1').attr('style', '');
	$(args.currentSlideObject).find('.text1').animate({
		right: '30px',
		opacity: '0.8'
	}, 700, 'easeOutQuint');
}
function sliderLoaded(args) {
	$(args.sliderObject).find('.text1').attr('style', '');
	$(args.currentSlideObject).find('.text1').animate({
		right: '30px',
		opacity: '0.8'
	}, 700, 'easeOutQuint');
	slideChange(args);
}
*/
/////////////////////////////////////////////////////////
// News Ticker
/////////////////////////////////////////////////////////
$(function () {
    $('#js-news').ticker({
		titleText: '',
        direction: 'rtl',      
	});
});			

/////////////////////////////////////////////////////////
// carouFredSel
/////////////////////////////////////////////////////////
$(function() {
	/*
	///////////////////////////////////
	///////////////////////////////////	
	$('#slider-post').carouFredSel({
		////////////////////////
		////////////////////////
		auto: false,
		prev: '#prev-slider-post',
		next: '#next-slider-post',
		items: 1,
		////////////////////////
		////////////////////////
	});
	///////////////////////////////////
	///////////////////////////////////	
	$('#video-loops').carouFredSel({
		////////////////////////
		////////////////////////
		auto: false,
		prev: '#prev-video-weight',
		next: '#next-video-weight',
		items: 3,
		////////////////////////
		////////////////////////
	});
	///////////////////////////////////
	///////////////////////////////////	
	$('#slider_once').carouFredSel({
		////////////////////////
		////////////////////////
		auto: false,
		prev: '#prev-slider-once',
		next: '#next-slider-once',
		items: 1,
		////////////////////////
		////////////////////////
	});
	///////////////////////////////////
	///////////////////////////////////	
	$('#two_post').carouFredSel({
		////////////////////////
		////////////////////////
		auto: false,
		prev: '#prev-two_post',
		next: '#next-two_post',
		items: 1,
		////////////////////////
		////////////////////////
	});
	
	*/
	
	
	///////////////////////////////////
	///////////////////////////////////	
	$('#header-slider-kir').carouFredSel({
		////////////////////////
		////////////////////////
		auto: {
			progress: '#timer1'
		},
        direction           : "up",
        scroll : {
            items           : 1,
            duration        : 1000, 
            easing          : "linear",
        },                   
		prev: '#prev2',
		next: '#next2',
		////////////////////////
		////////////////////////
	});
});
///////////////////////////////////
// Akordeon
///////////////////////////////////	
$(document).ready(function () {
	///////////////////////////////////	
	///////////////////////////////////	
	//$('#buttons').akordeon();
	///////////////////////////////////	
	// Footer
	///////////////////////////////////	
	$("#footer-control , .active-contact").click(function(){
		$("#footer").toggleClass('heighted');
		$(".bg-top-foo").toggleClass("bottom-foo"); 
		$(".zopim").toggleClass("zopim-bot"); 
		$("#footer-control").toggleClass("bo-hei"); 
		return false;
	});
	///////////////////////////////////	
	///////////////////////////////////	
	$('.fancybox').fancybox();
	$('.Download').fancybox({
		width	: 400,
	});
	///////////////////////////////////	
	///////////////////////////////////	
	$('.fancybox-media')
		.attr('rel', 'media-gallery')
		.fancybox({
			openEffect : 'none',
			closeEffect : 'none',
			prevEffect : 'none',
			nextEffect : 'none',

			arrows : false,
			helpers : {
				media : {},
				buttons : {}
			}
		});
	/////////////////////////////////
	//snippet
	/////////////////////////////////
	$(".Yourcolor-pre").snippet("css",{style:"bright"}); 
	///////////////////////////////////	
	///////////////////////////////////	
});
///////////////////////////////////	
///////////////////////////////////	














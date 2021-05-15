/////////////////////////////////
// carouFredSel
/////////////////////////////////
$(function() {
	//////////////////////////////
	// slider_watch
	//////////////////////////////
	$('.sliderTop').iosSlider({
		desktopClickDrag: true,
		snapToChildren: true,
		infiniteSlider: true,
		snapSlideCenter: true,
		navSlideSelector: '.slideSelectors .item',
		navPrevSelector: '#watch-prev',
		navNextSelector: '#watch-next',
		onSlideComplete: slideComplete,
		onSliderLoaded: sliderLoaded,
		onSlideChange: slideChange,
		autoSlide: true,
		scrollbar: true,
		scrollbarContainer: '.scrollbarContainer',
		scrollbarMargin: '10px',
		scrollbarBorderRadius: '0',
		keyboardControls: true
	});
	//////////////////////////////
});

function slideChange(args) {
			
	$('.sliderTop .filmBlock').removeClass('selected');
	$('.sliderTop .filmBlock:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');

}

function slideComplete(args) {
	
	if(!args.slideChanged) return false;
		
	$(args.sliderObject).find('.text1, .text2').attr('style', '');
	
	$(args.currentSlideObject).find('.text1').animate({
		left: '30px',
		opacity: '0.8'
	}, 700, 'easeOutQuint');
	
	$(args.currentSlideObject).find('.text2').delay(200).animate({
		left: '30px',
		opacity: '0.8'
	}, 600, 'easeOutQuint');
	
}

function sliderLoaded(args) {
		
	$(args.sliderObject).find('.text1, .text2').attr('style', '');
	
	$(args.currentSlideObject).find('.text1').animate({
		left: '30px',
		opacity: '0.8'
	}, 700, 'easeOutQuint');
	
	$(args.currentSlideObject).find('.text2').delay(200).animate({
		left: '30px',
		opacity: '0.8'
	}, 600, 'easeOutQuint');
	
	slideChange(args);
	
}
$(document).ready(function(){
    $('.sliderFilms').owlCarousel({
        margin: 10,
        loop:true,
        items: 6,
    });
    var owl = $(".sliderFilms").data('owlCarousel');
    $('.slider-next').click(function(){
        owl.prev();
    });
    $('.slider-prev').click(function(){
        owl.next();
    });
});
function slideChange(e) {
    $(".sliderTop .filmBlock").removeClass("selected"), $(".sliderTop .filmBlock:eq(" + (e.currentSlideNumber - 1) + ")").addClass("selected")
}

function slideComplete(e) {
    return e.slideChanged ? ($(e.sliderObject).find(".text1, .text2").attr("style", ""), $(e.currentSlideObject).find(".text1").animate({
        left: "30px",
        opacity: "0.8"
    }, 700, "easeOutQuint"), void $(e.currentSlideObject).find(".text2").delay(200).animate({
        left: "30px",
        opacity: "0.8"
    }, 600, "easeOutQuint")) : !1
}

function sliderLoaded(e) {
    $(e.sliderObject).find(".text1, .text2").attr("style", ""), $(e.currentSlideObject).find(".text1").animate({
        left: "30px",
        opacity: "0.8"
    }, 700, "easeOutQuint"), $(e.currentSlideObject).find(".text2").delay(200).animate({
        left: "30px",
        opacity: "0.8"
    }, 600, "easeOutQuint"), slideChange(e)
}
$(function() {
    $(".sliderTop").iosSlider({
        desktopClickDrag: !0,
        snapToChildren: !0,
        infiniteSlider: !0,
        snapSlideCenter: !0,
        navSlideSelector: ".slideSelectors .item",
        navPrevSelector: "#watch-prev",
        navNextSelector: "#watch-next",
        onSlideComplete: slideComplete,
        onSliderLoaded: sliderLoaded,
        onSlideChange: slideChange,
        autoSlide: !0,
        scrollbar: !0,
        scrollbarContainer: ".scrollbarContainer",
        scrollbarMargin: "10px",
        scrollbarBorderRadius: "0",
        keyboardControls: !0
    });
});
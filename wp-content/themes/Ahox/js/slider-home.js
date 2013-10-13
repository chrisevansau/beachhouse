//slider setting

var sliderhome = jQuery('.slider').bxSlider({
    mode: 'fade',
    pager: true,
    auto: true,
    pause: 8000,
	video: true,
	useCSS: false,
    easing: 'easeOut',
	adaptiveHeight: true,
    speed: 2500,
    controls: false
});

jQuery(".bx-wrapper").click(function(){
sliderhome.startAuto();
});
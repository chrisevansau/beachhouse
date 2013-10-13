(function ($) {
    "use strict";

    //script for navigation
    $('.menu-inner ul').superfish({
        delay: 400, //delay on mouseout
        animation: {
            opacity: 'show',
            height: 'show'
        }, // fade-in and slide-down animation
        animationOut: {
            opacity: 'hide',
            height: 'hide'
        },
        speed: 200, //  animation speed
        speedOut: 200,
        autoArrows: false // disable generation of arrow mark-up
    });


    //remove br in gallery
    $(".gallery br").remove();
    $(".format-gallery .post-image style").remove();

    //slider gallery setting

    var slider = $('.gallery').bxSlider({
        mode: 'horizontal',
        pager: true,
        auto: true,
        pause: 8000,
        video: true,
        useCSS: true,
        adaptiveHeight: true,
        speed: 800,
        controls: true
    });


    $(".bx-wrapper").click(function () {
        slider.startAuto();
    });

    // script prettyphoto 
    $("a[data-rel^='prettyPhoto'],.gallery-icon a,a[rel^='wp-prettyPhoto']").prettyPhoto({
        social_tools: false,
        deeplinking: false
    });




    // Video responsive
    $(document).ready(function ($) {
        $('.video,.widget').fitVids();
    });


    //aside background,link background
    $(".image-aside img,.image-link img").each(function (i, elem) {
        var img = $(elem);
        var div = $("<div />").css({
            background: "url(" + img.attr("src") + ") no-repeat",
            width: "100%",
            height: "100%"
        });

        div.addClass("image-background");

        img.replaceWith(div);
    });

    //replace widget title		
    $('.widgettitle,.widget-title').each(function () {
        var me = jQuery(this);
        me.html(me.html().replace(/^(\w+)/, '<span>$1</span>'));
    });

    // script for toTop start
    $(document).ready(function () {

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
	
	$(document).on('click',function(){
		$('.menu-inner .nav-collapse').collapse('hide');
	})

})(jQuery);
$(document).ready(function () {
    var controller = new ScrollMagic.Controller();

    // create a scene
    new ScrollMagic.Scene({
        triggerElement: "#acc11",
        offset: -500,
        duration: $('#acc11').outerHeight(true) + 300,
    })
        .on("enter", function (event) {
            var position1 = $("#acc11").position().top + $('#acc11').outerHeight(true) - $('#acc11').outerHeight();

            $(".scrollElementWrap").css({
                'top': position1 / 2,

            });

        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll1,#acc11", "active1")
       
        .addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: "#acc21",
        offset: -200,
        duration: $('#acc21').outerHeight(true),
    })
        .on("enter", function (event) {
            var marginsSize = $('#acc21').outerHeight(true) - $('#acc21').outerHeight();
            var position1 = $("#acc21").position().top + marginsSize / 3;

            $(".scrollElementWrap").css({
                'top': position1,

            });

        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll2,#acc21", "active2")
       
        .addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: "#acc31",
        offset: -200,
        duration: $('#acc31').outerHeight(true),
    })
        .on("enter", function (event) {
            var marginsSize = $('#acc31').outerHeight(true) - $('#acc31').outerHeight();
            var position1 = $("#acc31").position().top + marginsSize / 3;

            $(".scrollElementWrap").css({
                'top': position1,

            });

        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll3,#acc31", "active3")
       
        .addTo(controller);


    new ScrollMagic.Scene({
        triggerElement: "#acc31",
        offset: $('#acc31').outerHeight(true) - 200,
        duration: $('#accNum').outerHeight(true),
    })
        .on("enter", function (event) {
            var marginsSize = $('#accNum').outerHeight(true) - $('#accNum').outerHeight();
            var position1 = $("#accNum").position().top + marginsSize / 2;

            $(".scrollElementWrap").css({
                'top': position1,

            });

        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll4,#accNum", "activeNum")
       
        .addTo(controller);

    new ScrollMagic.Scene({
        duration: $(window).height(),
        triggerElement: "#accNum",
        triggerHook: "onEnter",

    })
        .setTween("#accNum", {
            left: "-10%"
        })
        
        .addTo(controller);



    new ScrollMagic.Scene({
        triggerElement: "#acc41",
        offset: -200,
        duration: $('#acc41').outerHeight(true),
    })
        .on("enter", function (event) {
            var marginsSize = $('#acc41').outerHeight(true) - $('#acc41').outerHeight();
            var position1 = $("#acc41").position().top + marginsSize / 3;

            $(".scrollElementWrap").css({
                'top': position1,

            });

        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll4,#acc41", "active4")
       
        .addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: "#acc51",
        offset: -200,
        duration: $('#acc51').outerHeight(true),
    })
        .on("enter", function (event) {
            var marginsSize = $('#acc51').outerHeight(true) - $('#acc51').outerHeight();
            var position1 = $("#acc51").position().top + marginsSize / 3;

            $(".scrollElementWrap").css({
                'top': position1,

            });

        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll5,#acc51", "active5")
       
        .addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: "#acc61",
        offset: -200,

    })
        .on("enter", function (event) {
            var marginsSize = $('#acc61').outerHeight(true) - $('#acc61').outerHeight();
            var position1 = $("#acc61").position().top + marginsSize / 3;

            $(".scrollElementWrap").css({
                'top': position1,

            });

        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll6,#acc61", "active6")
       
        .addTo(controller);

    if (location.hash) {
        var hash = location.hash + "1";
        $([document.documentElement, document.body]).animate({
            scrollTop: $(hash).offset().top - window.innerHeight / 3
        }, 1000);

    };
    
});
$(".footer__anchor").click(function (e) {


    function func() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(location.hash + "1").offset().top - window.innerHeight / 3
        }, 1000);
    };

    setTimeout(func, 100);

});
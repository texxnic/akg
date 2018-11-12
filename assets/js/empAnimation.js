$(document).ready(function () {
    var controller = new ScrollMagic.Controller();

    // create a scene
    new ScrollMagic.Scene({
        triggerElement: "#emp11",
        offset: -500,
        duration: $('#emp11').outerHeight(true) + 300,
    })
        .on("enter", function (event) {
            var position1 = $("#emp11").position().top + $('#emp11').outerHeight(true) - $('#emp11').outerHeight();
            
            $(".scrollElementWrap").css({
                'top': position1 / 2,

            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll1,#emp11", "active1")
        // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: "#emp21",
        offset: -200,
        duration: $('#emp21').outerHeight(true),
    })
        .on("enter", function (event) {
            var marginsSize = $('#emp21').outerHeight(true) - $('#emp21').outerHeight();
            var position1 = $("#emp21").position().top + marginsSize / 3;
            
            $(".scrollElementWrap").css({
                'top': position1,

            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll2,#emp21", "active2")
        // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: "#emp31",
        offset: -200,
        duration: $('#emp31').outerHeight(true),
    })
        .on("enter", function (event) {
            var marginsSize = $('#emp31').outerHeight(true) - $('#emp31').outerHeight();
            var position1 = $("#emp31").position().top + marginsSize / 3;
            
            $(".scrollElementWrap").css({
                'top': position1,

            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll3,#emp31", "active3")
        // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: "#emp31",
        offset: $('#emp31').outerHeight(true) - 200,
        duration: $('#accNum').outerHeight(true),
    })
        .on("enter", function (event) {
            var marginsSize = $('#accNum').outerHeight(true) - $('#accNum').outerHeight();
            var position1 = $("#accNum").position().top + marginsSize / 2;

            
            $(".scrollElementWrap").css({
                'top': position1,


            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll4,#accNum", "activeNumEmp")
        // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
        duration: $(window).height(),
        triggerElement: "#accNum",
        triggerHook: "onEnter",

    })
        .setTween("#accNum", { left: "-5%" })

        .addTo(controller);


    new ScrollMagic.Scene({
        triggerElement: "#emp41",
        offset: -200,

    })
        .on("enter", function (event) {
            var marginsSize = $('#emp41').outerHeight(true) - $('#emp41').outerHeight();
            var position1 = $("#emp41").position().top + marginsSize / 3;
            
            $(".scrollElementWrap").css({
                'top': position1,

            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll4,#emp41", "active4")
        // pins the element for the the scene's duration
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



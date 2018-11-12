$(document).ready(function() {
    window.that = this;
    var controller = new ScrollMagic.Controller();

    // create a scene
    var scene1 = new ScrollMagic.Scene({
            triggerElement: "#law11",
            offset: -500,
            duration: $('#law11').outerHeight(true) + 300,
        })
        .on("enter", function(event) {
            var position1 = $("#law11").position().top + $('#law11').outerHeight(true) - $('#law11').outerHeight();
            
            $(".scrollElementWrap").css({
                'top': position1 / 2,

            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll1,#law11", "active1")
        // pins the element for the the scene's duration
        .addTo(controller);

    var scene2 = new ScrollMagic.Scene({
            triggerElement: "#law21",
            offset: -200,
            duration: $('#law21').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#law21').outerHeight(true) - $('#law21').outerHeight();
            var position1 = $("#law21").position().top + marginsSize / 3;
            
            $(".scrollElementWrap").css({
                'top': position1,

            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll2,#law21", "active2")
        // pins the element for the the scene's duration
        .addTo(controller);

    var scene3 = new ScrollMagic.Scene({
            triggerElement: "#law31",
            offset: -200,
            duration: $('#law31').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#law31').outerHeight(true) - $('#law31').outerHeight();
            var position1 = $("#law31").position().top + marginsSize / 3;
            
            $(".scrollElementWrap").css({
                'top': position1,

            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll3,#law31", "active3")
        // pins the element for the the scene's duration
        .addTo(controller);


    var scene4 = new ScrollMagic.Scene({
        triggerElement: "#law31",
        offset: $('#law31').outerHeight(true) - 200,
        duration: $('#accNum').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#accNum').outerHeight(true) - $('#accNum').outerHeight();
            var position1 = $("#accNum").position().top + marginsSize / 2;
           
            
            $(".scrollElementWrap").css({
                'top': position1,


            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll4,#accNum", "activeNum")
        // pins the element for the the scene's duration
        .addTo(controller);

    var scene5 = new ScrollMagic.Scene({
            duration: $(window).height(),
            triggerElement: "#accNum",
            triggerHook: "onEnter",

        })
        .setTween("#accNum", { left: 0 })

        .addTo(controller);



    var scene6 = new ScrollMagic.Scene({
            triggerElement: "#law41",
            offset: -200,
            duration: $('#law41').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#law41').outerHeight(true) - $('#law41').outerHeight();
            var position1 = $("#law41").position().top + marginsSize / 3;
            
            $(".scrollElementWrap").css({
                'top': position1,


            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll4,#law41", "active4")
        // pins the element for the the scene's duration
        .addTo(controller);

    var scene7 = new ScrollMagic.Scene({
            triggerElement: "#law51",
            offset: -200,
            duration: $('#law51').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#law51').outerHeight(true) - $('#law51').outerHeight();
            var position1 = $("#law51").position().top + marginsSize / 3;
            
            $(".scrollElementWrap").css({
                'top': position1,

            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll5,#law51", "active5")
        // pins the element for the the scene's duration
        .addTo(controller);

    var scene8 = new ScrollMagic.Scene({
            triggerElement: "#law61",
            offset: -200,
            duration: $('#law61').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#law61').outerHeight(true) - $('#law61').outerHeight();
            var position1 = $("#law61").position().top + marginsSize / 3;
            
            $(".scrollElementWrap").css({
                'top': position1,

            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll6,#law61", "active6")
        // pins the element for the the scene's duration
        .addTo(controller);


    var scene9 = new ScrollMagic.Scene({
            triggerElement: "#law71",
            offset: -200,

        })
        .on("enter", function(event) {
            var marginsSize = $('#law71').outerHeight(true) - $('#law71').outerHeight();
            var position1 = $("#law71").position().top + marginsSize / 3;
            
            $(".scrollElementWrap").css({
                'top': position1,

            });
            
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll7,#law71", "active7")
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

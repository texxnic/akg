$(document).ready(function() {
    var controller = new ScrollMagic.Controller();

    // create a scene
    new ScrollMagic.Scene({
            triggerElement: "#law1",
            offset: -200,
            duration: $('#law1').outerHeight(true),
        })
        .on("enter", function(event) {
            var position1 = $("#law1").position().top + $('#law1').outerHeight(true) - $('#law1').outerHeight();
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1 / 2,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll1,#law1", "active1")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#law2",
            offset: -200,
            duration: $('#law2').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#law2').outerHeight(true) - $('#law2').outerHeight();
            var position1 = $("#law2").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll2,#law2", "active2")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#law3",
            offset: -200,
            duration: $('#law3').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#law3').outerHeight(true) - $('#law3').outerHeight();
            var position1 = $("#law3").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll3,#law3", "active3")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);


    new ScrollMagic.Scene({
            triggerElement: "#accNum",

            duration: $('#accNum').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#accNum').outerHeight(true) - $('#accNum').outerHeight();
            var position1 = $("#accNum").position().top + marginsSize / 2;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll4,#accNum", "activeNum")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
            duration: $(window).height(),
            triggerElement: "#accNum",
            triggerHook: "onEnter",

        })
        .setTween("#accNum", { left: "-15%" })
        .addIndicators()
        .addTo(controller);



    new ScrollMagic.Scene({
            triggerElement: "#law4",
            offset: -200,
            duration: $('#law4').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#law4').outerHeight(true) - $('#law4').outerHeight();
            var position1 = $("#law4").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll4,#law4", "active4")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#law5",
            offset: -200,
            duration: $('#law5').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#law5').outerHeight(true) - $('#law5').outerHeight();
            var position1 = $("#law5").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll5,#law5", "active5")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#law6",
            offset: -200,
            duration: $('#law6').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#law6').outerHeight(true) - $('#law6').outerHeight();
            var position1 = $("#law6").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll6,#law6", "active6")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    
    new ScrollMagic.Scene({
            triggerElement: "#law7",
            offset: -200,
            
        })
        .on("enter", function(event) {
            var marginsSize = $('#law7').outerHeight(true) - $('#law7').outerHeight();
            var position1 = $("#law7").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll7,#law7", "active7")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);


});





$(document).ready(function() {
    window.that = this;
    var controller = new ScrollMagic.Controller();

    // create a scene
    var scene1 = new ScrollMagic.Scene({
            triggerElement: "#law1",
            offset: -500,
            duration: $('#law1').outerHeight(true) + 300,
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
        // pins the element for the the scene's duration
        .addTo(controller);

    var scene2 = new ScrollMagic.Scene({
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
        // pins the element for the the scene's duration
        .addTo(controller);

    var scene3 = new ScrollMagic.Scene({
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
        // pins the element for the the scene's duration
        .addTo(controller);


    var scene4 = new ScrollMagic.Scene({
            triggerElement: "#accNum",

            duration: $('#accNum').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#accNum').outerHeight(true) - $('#accNum').outerHeight();
            var position1 = $("#accNum").position().top + marginsSize / 2;
            var position2 = $("#accNum").position().left;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,


            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll4,#accNum", "activeNum")
        // pins the element for the the scene's duration
        .addTo(controller);

    var scene5 = new ScrollMagic.Scene({
            duration: $(window).height(),
            triggerElement: "#accNum",
            triggerHook: "onEnter",

        })
        .setTween("#accNum", { left: "-5%" })

        .addTo(controller);



    var scene6 = new ScrollMagic.Scene({
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
        // pins the element for the the scene's duration
        .addTo(controller);

    var scene7 = new ScrollMagic.Scene({
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
        // pins the element for the the scene's duration
        .addTo(controller);

    var scene8 = new ScrollMagic.Scene({
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
        // pins the element for the the scene's duration
        .addTo(controller);


    var scene9 = new ScrollMagic.Scene({
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
        // pins the element for the the scene's duration
        .addTo(controller);



});
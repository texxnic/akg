$(document).ready(function() {
    var controller = new ScrollMagic.Controller();

    // create a scene
    new ScrollMagic.Scene({
            triggerElement: "#acc1",
            offset: -200,
            duration: $('#acc1').outerHeight(true),
        })
        .on("enter", function(event) {
            var position1 = $("#acc1").position().top + $('#acc1').outerHeight(true) - $('#acc1').outerHeight();
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1 / 2,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll1,#acc1", "active1")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#acc2",
            offset: -200,
            duration: $('#acc2').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#acc2').outerHeight(true) - $('#acc2').outerHeight();
            var position1 = $("#acc2").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll2,#acc2", "active2")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#acc3",
            offset: -200,
            duration: $('#acc3').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#acc3').outerHeight(true) - $('#acc3').outerHeight();
            var position1 = $("#acc3").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll3,#acc3", "active3")
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
            triggerElement: "#acc4",
            offset: -200,
            duration: $('#acc4').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#acc4').outerHeight(true) - $('#acc4').outerHeight();
            var position1 = $("#acc4").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll4,#acc4", "active4")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#acc5",
            offset: -200,
            duration: $('#acc5').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#acc5').outerHeight(true) - $('#acc5').outerHeight();
            var position1 = $("#acc5").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll5,#acc5", "active5")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#acc6",
            offset: -200,
            
        })
        .on("enter", function(event) {
            var marginsSize = $('#acc6').outerHeight(true) - $('#acc6').outerHeight();
            var position1 = $("#acc6").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll6,#acc6", "active6")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);




});




function callback(event) {
    console.log("Event fired!");
}
$(document).ready(function() {
    var controller = new ScrollMagic.Controller();

    // create a scene
    new ScrollMagic.Scene({
            triggerElement: "#emp1",
            offset: -200,
            duration: $('#emp1').outerHeight(true),
        })
        .on("enter", function(event) {
            var position1 = $("#emp1").position().top + $('#emp1').outerHeight(true) - $('#emp1').outerHeight();
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1 / 2,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll1,#emp1", "active1")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#emp2",
            offset: -200,
            duration: $('#emp2').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#emp2').outerHeight(true) - $('#emp2').outerHeight();
            var position1 = $("#emp2").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll2,#emp2", "active2")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    new ScrollMagic.Scene({
            triggerElement: "#emp3",
            offset: -200,
            duration: $('#emp3').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#emp3').outerHeight(true) - $('#emp3').outerHeight();
            var position1 = $("#emp3").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll3,#emp3", "active3")
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
            triggerElement: "#emp4",
            offset: -200,
            duration: $('#emp4').outerHeight(true),
        })
        .on("enter", function(event) {
            var marginsSize = $('#emp4').outerHeight(true) - $('#emp4').outerHeight();
            var position1 = $("#emp4").position().top + marginsSize / 3;
            console.log(position1);
            $(".scrollElementWrap").css({
                'top': position1,

            });
            console.log('yeah')
        })
        .setClassToggle("#scrollElementAbsolutePos,#ServiceScroll4,#emp4", "active4")
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);

    


});





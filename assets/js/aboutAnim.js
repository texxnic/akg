

$(document).ready(function () {
    var tl = new TimelineLite();
    var controller = new ScrollMagic.Controller();

    tl.set(".aboutFirstAnimation", { x: "-150", opacity: 0 })
    tl.set(".aboutThirdAnimation", { x: "-150", opacity: 0 })
    // tl.set(".aboutService",  {  maxWidth:"0%"})
    new ScrollMagic.Scene({
        triggerElement: ".aboutFirstAnimationAnchor",
        triggerHook: 0.8,
    })
        .on("enter", function (event) {
            tl.staggerTo(".aboutFirstAnimation", 1, { x: "0", opacity: 1 }, 0.3);
            // tl.set(".aboutFirstAnimation",  {opacity:1}) ;
            $('.odometer').each(function (index, element) {
                if (index < 2) {
                    var numbers = [14, 300000, 2300, 60];
                    setTimeout(function () {
                        console.log(index, element);
                        element.innerHTML = numbers[index];
                    }, index * 1000);
                }
            });

        })
        
        .addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: ".aboutService",
        triggerHook: 0.8,
    })
        .on("enter", function (event) {
            $('.aboutService').each(function (index, element) {

                setTimeout(function () {

                    $(element).addClass("aboutServiceActive");
                }, index * 500);
            });



        })
        
        .addTo(controller);

    new ScrollMagic.Scene({
        triggerElement: ".aboutThirdAnimationAnchor",
        triggerHook: 0.8,
    })
        .on("enter", function (event) {
            tl.staggerTo(".aboutThirdAnimation", 1, { x: "0", opacity: 1 }, 0.3);
            
            $('.odometer').each(function (index, element) {
                if (index > 1) {
                    var numbers = [2300, 60, 2300, 60];
                    setTimeout(function () {
                        console.log(index, element);
                        element.innerHTML = numbers[index];
                    }, index * 1000);
                }
            });

        })
        
        .addTo(controller);
    
    $('.aboutJumbo__logo').show();
    var controller = new ScrollMagic.Controller();
    TweenMax.from($('.aboutJumbo__logo'), 1.5, { css: { scale: 0.8, opacity: 0 } });
    var ghostTextAnimated_span = $(".ghostTextAnimated_span");
    var ghostTextAnimated_span2 = $(".ghostTextAnimated_span2");
    ghostTextAnimated_span.each(function (index) {
        new ScrollMagic.Scene({
            duration: $(window).height(),
            triggerElement: ghostTextAnimated_span[0],
            triggerHook: 1,

        })

            .setTween(ghostTextAnimated_span[index], { marginLeft: (index + 1) * 10 + "%" })

            .addTo(controller);
    });
    ghostTextAnimated_span2.each(function (index) {
        new ScrollMagic.Scene({
            duration: $(window).height(),
            triggerElement: ghostTextAnimated_span2[0],
            triggerHook: 1,

        })

            .setTween(ghostTextAnimated_span2[index], { marginLeft: (index + 1) * 10 + "%" })

            .addTo(controller);
    });
    //  $('.odometer').each(function(index, element) {
    //         	var numbers = [14, 300000, 2300, 60];
    //             setTimeout(function() {
    //             	console.log(index, element);
    //                element.innerHTML = numbers[index];
    //             }, index * 1000);
    //         });


});
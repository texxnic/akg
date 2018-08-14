TweenMax.from($('.aboutJumbo__logo'), 1.5, { css: { scale: 0.8, opacity: 0 } });
// TweenLite.to($('.aboutFirstCard__img'), 1.5, { opacity: 1, x: 0 });

$(document).ready(function() {
    var controller = new ScrollMagic.Controller();

    new ScrollMagic.Scene({
            triggerElement: ".aboutFirstCard__wrap",
            triggerHook: 0.9,

        })
        .on("enter", function(event) {
            TweenLite.to($('.aboutFirstCard__img'), 1.5, { opacity: 1, x: 0 });

        })
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);


    new ScrollMagic.Scene({
            triggerElement: ".whyUs",
            triggerHook: 0.9,

        })
        .on("enter", function(event) {
            
            $('.odometer').each(function(index, element) {
            	var numbers = [14, 300000, 2300, 60];
                setTimeout(function() {
                	console.log(index, element);
                   element.innerHTML = numbers[index];
                }, index * 1000);
            });

        })
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);
    new ScrollMagic.Scene({
    	duration: $(window).height(),
            triggerElement: ".advantagesCards",
            triggerHook: 'onEnter',

        })
        
        .setTween(".advantagesCards", { marginLeft: "-35%" })
        .addIndicators() // pins the element for the the scene's duration
        .addTo(controller);
});
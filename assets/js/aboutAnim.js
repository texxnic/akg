

$(document).ready(function() {
    $('.aboutJumbo__logo').show();
    var controller = new ScrollMagic.Controller();
    TweenMax.from($('.aboutJumbo__logo'), 1.5, { css: { scale: 0.8, opacity: 0 } });
    var ghostTextAnimated_span =  $( ".ghostTextAnimated_span" );
    var ghostTextAnimated_span2 =  $( ".ghostTextAnimated_span2" );
    ghostTextAnimated_span.each(function( index ) {
  		new ScrollMagic.Scene({
        duration: $(window).height(),
        triggerElement:  ghostTextAnimated_span[0],   
        triggerHook:1,

        })
        
        .setTween(ghostTextAnimated_span[index], { marginLeft: (index+1)*10 +"%" })
       
        .addTo(controller);
});
    ghostTextAnimated_span2.each(function( index ) {
  		new ScrollMagic.Scene({
        duration: $(window).height(),
        triggerElement:  ghostTextAnimated_span2[0],   
        triggerHook:1,

        })
        
        .setTween(ghostTextAnimated_span2[index], { marginLeft: (index+1)*10 +"%" })
        
        .addTo(controller);
});
     $('.odometer').each(function(index, element) {
            	var numbers = [14, 300000, 2300, 60];
                setTimeout(function() {
                	console.log(index, element);
                   element.innerHTML = numbers[index];
                }, index * 1000);
            });
      

});
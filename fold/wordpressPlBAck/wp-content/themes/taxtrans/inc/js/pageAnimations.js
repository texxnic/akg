         var controller = new ScrollMagic.Controller();
        var tweenOp = TweenMax.to("#jumboFirstImage", 1, {opacity:"0"});
        var tweenSc = TweenMax.to("#jumboFirstImage", 1, {transform:"scale(1)"});
        var calcStart = window.innerHeight/2.35;
        var contentDivHeight = document.getElementById('pageContent').clientHeight;
        var pageHeight = $(document).height();

var jumboPageAnim = new ScrollMagic.Scene({triggerElement: "body", offset:calcStart, duration: calcStart*2})
                    // animate color and top border in relation to scroll position
                   .setTween(tweenOp)
                   
                   // .addIndicators()
                     // add indicators (requires plugin)
                    .addTo(controller); 
var jumboPageAnimScale = new ScrollMagic.Scene({triggerElement: "body", offset:calcStart, duration: calcStart*2})
                    // animate color and top border in relation to scroll position
                   .setTween(tweenSc)
                   
                   // .addIndicators()
                     // add indicators (requires plugin)
                    .addTo(controller); 
var autoparkParralax = new ScrollMagic.Scene({triggerElement: "body", duration: pageHeight})
                    // animate color and top border in relation to scroll position
                  .setTween('.uslugiParralax',{left:-200})
                     // add indicators (requires plugin)
                    .addTo(controller);
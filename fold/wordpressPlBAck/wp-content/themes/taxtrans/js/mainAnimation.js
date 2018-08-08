    function onLoad(ymaps) {
        var suggestView = new ymaps.SuggestView('fromIndex', {
            boundedBy: [
                [ // Нижняя-левая
                    55.3,
                    36.7
                ],
                [ // Верхняя-правая
                    56.374376978893515,
                    38.6334228515625
                ]
            ]
        });
        var suggestView2 = new ymaps.SuggestView('toIndex');
    };
    var isAndroid = /(android)/i.test(navigator.userAgent);
    var isIOS = /(iPhone)/i.test(navigator.userAgent);
    var controller = new ScrollMagic.Controller();
    // main page video player controls
    var playVidButton = $('#playVid'),
        taxiVideo = $('#taxiVideo'),
        videoWrap = $('#videoWrap'),
        jumboTextWrap = $('.jumboText'),
        vid = document.getElementById("taxiVideo"),
        mutingVid = $('#mutingVid'),
        playAgainVid = $('#playAgainVid');

    taxiVideo.on('play', function(event) {
        if (jumboTextWrap.hasClass('fadeOutLeft')) {
            vid.muted = false;
        };
    });

    mutingVid.on('click', function(event) {
        event.preventDefault();
        vid.muted = true;
        videoWrap.css('filter', 'brightness(50%)');
        jumboTextWrap.removeClass('fadeOutLeft');
        jumboTextWrap.addClass('fadeInLeft');
        playVidButton.show();
        mutingVid.hide();
        playAgainVid.hide();
    });

    vid.addEventListener("webkitfullscreenchange", function() {
        if (document.webkitIsFullScreen) {
            vid.muted = false;
        } else {
            vid.muted = true;
        };
    }, false);
    vid.addEventListener("webkitendfullscreen", function() {
        vid.muted = true;

    }, false);

    playVidButton.on('click', function(event) {
        event.preventDefault();
        var clickcounter = 0;
        if (window.innerHeight < window.innerWidth && !isIOS && !isAndroid) {

            videoWrap.css('filter', 'brightness(100%)');
            jumboTextWrap.removeClass('fadeInLeft');
            jumboTextWrap.addClass('fadeOutLeft');
            vid.muted = false;

            playVidButton.hide();
            mutingVid.show();
            playAgainVid.show();
        } else {
            if (isIOS) {

                // if (testt) {
                //     alert(123)

                //     vid.muted = false;
                // } else 




                    vid.webkitEnterFullscreen();
                    vid.play();
                    vid.muted = false;
                    clickcounter++;
               


            } else {
                vid.webkitRequestFullscreen();
            };
        };

    });


    playAgainVid.on('click', function(event) {
        event.preventDefault();

        vid.load();



    });
    var blurElement = { a: 0 };
    var vwBlurElement = { a: 5 };
    var i40BlurElement = { a: 5 };
    var startVal = { a: 0 };
    var vwStartVal = { a: 0 };

    var scene = new ScrollMagic.Scene({ triggerElement: ".autopark", duration: 250 })
        // animate color and top border in relation to scroll position
        .setTween(blurElement, { a: 5, onUpdate: applyBlur }) // the tween durtion can be omitted and defaults to 1
        // add indicators (requires plugin)
        .addTo(controller);

    var scene2 = new ScrollMagic.Scene({ triggerElement: ".autopark", duration: 250 })
        .setTween(vwBlurElement, { a: 0, onUpdate: vwApplyBlur }) // the tween durtion can be omitted and defaults to 1
        // add indicators (requires plugin)
        .addTo(controller);
    var scene3 = new ScrollMagic.Scene({ triggerElement: ".autopark", offset: 250, duration: 250 })
        .setTween(vwBlurElement, { a: 5, onUpdate: vwApplyBlur }) // the tween durtion can be omitted and defaults to 1
        // add indicators (requires plugin)
        .addTo(controller);
    var scene4 = new ScrollMagic.Scene({ triggerElement: ".autopark", offset: 250, duration: 250 })
        .setTween(i40BlurElement, { a: 0, onUpdate: i40ApplyBlur }) // the tween durtion can be omitted and defaults to 1
        // add indicators (requires plugin)
        .addTo(controller);
    var scene5 = new ScrollMagic.Scene({ triggerElement: ".autopark", offset: 150, duration: 100 })
        // animate color and top border in relation to scroll position
        .setTween('.skodaName', { opacity: 0 }) // the tween durtion can be omitted and defaults to 1
        // add indicators (requires plugin)
        .addTo(controller);

    var vwNameRenuva = new ScrollMagic.Scene({ triggerElement: ".autopark", offset: 150, duration: 100 })
        // animate color and top border in relation to scroll position
        .setTween('.vwName', { opacity: 1 }) // the tween durtion can be omitted and defaults to 1
        // add indicators (requires plugin)
        .addTo(controller);
    var vwNameRenuva2 = new ScrollMagic.Scene({ triggerElement: ".autopark", offset: 250, duration: 100 })
        // animate color and top border in relation to scroll position
        .setTween('.vwName', { opacity: 0 }) // the tween durtion can be omitted and defaults to 1
        // add indicators (requires plugin)
        .addTo(controller);
    var i40NameRenuva = new ScrollMagic.Scene({ triggerElement: ".autopark", offset: 250, duration: 100 })
        // animate color and top border in relation to scroll position
        .setTween('.i40Name', { opacity: 1 }) // the tween durtion can be omitted and defaults to 1
        // add indicators (requires plugin)
        .addTo(controller);
    var skodaAnim = new ScrollMagic.Scene({ triggerElement: ".autopark", duration: 800 })
        // animate color and top border in relation to scroll position
        .setTween(startVal, { a: -500, onUpdate: skodaSlide })
        // add indicators (requires plugin)
        .addTo(controller);
    var vwAnim = new ScrollMagic.Scene({ triggerElement: ".autopark", duration: 800 })
        // animate color and top border in relation to scroll position
        .setTween(vwStartVal, { a: -200, onUpdate: vwSlide })
        // add indicators (requires plugin)
        .addTo(controller);
    var autoparkParralax = new ScrollMagic.Scene({ triggerElement: ".order", offset: -400, duration: 1600 })
        // animate color and top border in relation to scroll position
        .setTween('.autoparkParralax', { left: 200 })
        // add indicators (requires plugin)
        .addTo(controller);
    var aboutUsParralax = new ScrollMagic.Scene({ triggerElement: ".order", duration: 1600 })
        // animate color and top border in relation to scroll position
        .setTween('.aboutUsParralax', { right: -400 })
        // add indicators (requires plugin)
        .addTo(controller);


    function skodaSlide() {
        TweenMax.set(['.skodaPhoto'], { transform: "translateX(" + startVal.a + "px)", });
        TweenMax.set(['.skodaName'], { transform: "translateX(" + startVal.a * 0.8 + "px)", });
    };

    function vwSlide() {
        TweenMax.set(['.vwPhoto'], { transform: "translateX(" + vwStartVal.a + "px)", });
        TweenMax.set(['.vwName'], { transform: "translateX(" + vwStartVal.a * 0.8 + "px)", });
    };


    function applyBlur() {
        TweenMax.set(['.skodaPhoto'], { webkitFilter: "blur(" + blurElement.a + "px)", filter: "blur(" + blurElement.a + "px)", });
        TweenMax.set(['.skodaName'], { webkitFilter: "blur(" + blurElement.a + "px)", filter: "blur(" + blurElement.a + "px)", });
    };

    function vwApplyBlur() {
        TweenMax.set(['.vwPhoto'], { webkitFilter: "blur(" + vwBlurElement.a + "px)", filter: "blur(" + vwBlurElement.a + "px)" });
        TweenMax.set(['.vwName'], { webkitFilter: "blur(" + vwBlurElement.a + "px)", filter: "blur(" + vwBlurElement.a + "px)" });
    };

    function i40ApplyBlur() {
        TweenMax.set(['.i40Photo'], { webkitFilter: "blur(" + i40BlurElement.a + "px)", filter: "blur(" + i40BlurElement.a + "px)" });
        TweenMax.set(['.i40Name'], { webkitFilter: "blur(" + i40BlurElement.a + "px)", filter: "blur(" + i40BlurElement.a + "px)" });
    };
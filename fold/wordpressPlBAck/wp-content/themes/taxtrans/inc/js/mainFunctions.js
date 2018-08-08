var allowMinify = $(window).height() + 300;

var controller = new ScrollMagic.Controller();






var isAndroid = /(android)/i.test(navigator.userAgent);
var isIOS = /(iPhone)/i.test(navigator.userAgent);

if(isAndroid || isIOS){
    if(isAndroid) {
  $("#page").css("margin-top","70px");
  $(".appLinkToStoreGplay").css('display', 'flex');
  $(".desctLinks").css("display","none");
 
} else if(isIOS){
      $("#page").css("margin-top","70px");
  $(".appLinkToStoreAppStore").css('display', 'flex');
    $(".desctLinks").css("display","none");
}
};





    // build scene
   var headerSmall = new ScrollMagic.Scene({triggerElement: "body",offset: 1})
                    .triggerHook(0)
                    .setClassToggle(".header", "smaller") // add class toggle
                    
                    .addTo(controller);
if($(document).height >= allowMinify){
    
    var minifyJumbo = new ScrollMagic.Scene({triggerElement: "body",offset:1})
    .triggerHook(0)
         .setClassToggle(".pageJumbo", "smallPageContent")
        .addTo(controller);}


$(document).ready(function() {


    function showJumboText() {
        var pageJumbo = $('#pageJumbo')
        pageJumbo.css('opacity',1);
        pageJumbo.addClass('fadeInUp');
    };
    function showJumboTextDesc() {
        var pageJumboDesc = $('#pageJumboDesc')
        pageJumboDesc.css('opacity',1);
        pageJumboDesc.addClass('fadeInUp');
    };
    var filterVal = 'brightness(60%)';
    setTimeout(showJumboText, 1000);
    setTimeout(showJumboTextDesc, 3000);

$('#jumboFirstImage')
    .css('filter',filterVal)
  .css('webkitFilter',filterVal)
  .css('mozFilter',filterVal)
  .css('oFilter',filterVal)
  .css('msFilter',filterVal);
$('#priceButton').click(function() {
    $('#priceButton').hide();
    $('.suggestYourPriceIndex').css('padding','10px 0');
    $('.inputSuggestPriceIndex').show();
    $('#indexFormH2').html('Предложить поездку');
    
});

$('.MenuParent').click(function() {
  $(this).next().toggleClass('closedMenu');
  $(this).toggleClass('selectedText');
  $(this).children().toggleClass('rotatedChevron');
});
      
  



    // tablo switcher
    function hideAllTablo() {
        $('.airTablo').hide();
    };
     $("label[for='select_vnuk']").click(function() {
        hideAllTablo();
        $('.vnukovo').show();
    });
     $("label[for='select_sherem']").click(function() {
        hideAllTablo();
        $('.sherem').show();
    });
     $("label[for='select_domoted']").click(function() {
        hideAllTablo();
        $('.domod').show();
    });
    // tablo switcher end

    //GalleryButtons
    var wvh = $(window).height();
    var galerry = $('.envira-gallery-wrap');

    function hideAll() {
        galerry.hide();
    }
    $("label[for='allCarsSwitch']").click(function() {
        galerry.show();
    });
    $("label[for='SkodaSwitch']").click(function() {
        hideAll();
        $('#envira-gallery-wrap-56').show();
    });
    $("label[for='VolkswagenSwitch']").click(function() {
        hideAll();
        $('#envira-gallery-wrap-57').show();
    });
    $("label[for='HyundaiSwitch']").click(function() {
        hideAll();
        $('#envira-gallery-wrap-22').show();
    });
    $("label[for='VIPtaxi']").click(function() {
        hideAll();

        $('#envira-gallery-wrap-155').show();
    });

    //GalleryButtonsEnd
    var owl = $(".owl-carousel");
    var owlData = $(".owl-carousel").data('owlCarousel');
    owl.owlCarousel({
        items: 1,

        autoplay: true,
        loop: true,
        autoplayTimeout: 10000

    });
    owl.on('changed.owl.carousel', function(event) {
        $('svg').css({ fill: "#ffd100" });
        switch (event.item.index) {
            case 3:
                $('#checkList').css({ fill: "white" });

                break;
            case 4:
                $('#driverIco').css({ fill: "white" });
                break;
            case 5:
                $('#carWash').css({ fill: "white" });
                break;
            case 6:
                $('#roubleIco').css({ fill: "white" });
                break;
            case 7:
                $('#timeIco').css({ fill: "white" });
                break;


        };

    });
    $('#checkList').click(function(event) {
        owl.trigger('to.owl.carousel', 0);

    });
    $('#driverIco').click(function(event) {
        owl.trigger('to.owl.carousel', 1);

    });
    $('#carWash').click(function(event) {
        owl.trigger('to.owl.carousel', 2);

    });
    $('#roubleIco').click(function(event) {
        owl.trigger('to.owl.carousel', 3);

    });
    $('#timeIco').click(function(event) {
        owl.trigger('to.owl.carousel', 4);

    });


    $('.jumbo').css('height', wvh);
    $('#jumboFirstText').css('height', wvh);
    $('#jumboFirstImage').css('height', wvh);


    $('#switch_right').click(function() {
        $('#dateTimeRow').removeClass('blur');
        $('.timeIco').removeClass('grayscale');
        $('#datetime').prop('disabled', false);



    });
    $('#switch_left').click(function() {
        $('#dateTimeRow').addClass('blur');
        $('.timeIco').addClass('grayscale');
        $('#datetime').prop('disabled', true);


    });

    $(window).keydown(function(event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });



    $(".mat-input").focus(function() {
        $(this).parent().addClass("is-active is-completed");
    });

    $(".mat-input").focusout(function() {
        if ($(this).val() === "")
            $(this).parent().removeClass("is-completed");
        $(this).parent().removeClass("is-active");
    })


    $('#nav-icon1').click(function() {
        if ($(this).hasClass('open')) {
            $('#mySidenav').css('width', 0);

            $('.phones').show();
            $('.phones').css('opacity', 1).delay(50000);
            $('#taxTransLogo').show();
            $('.headerRightContent').css('margin-right', 0);

        } else {
            if ($(window).width() > 410) {
                $('#mySidenav').css('width', 250);
                $('.phones').hide().delay(600);
                $('.phones').css('opacity', 0);
                $('.headerPhone').css('opacity', 0);
                $('.headerRightContent').css('margin-right', 250);
            } else {
                $('#mySidenav').css('width', 170);
                $('.phones').hide().delay(600);
                $('.phones').css('opacity', 0);
                $('.headerPhone').css('opacity', 0);
                $('.headerRightContent').css('margin-right', 170);
            };


        };
        $(this).toggleClass('open');
    });


});
$('.header__menuButton').click(function() {


    if ($('.mobileMenu').hasClass('mobileMenu_active')) {
        hideMobileMenuElements();
    } else {
        displayMobileMenuElements();
    }
    $('.mobileMenu').toggleClass('mobileMenu_active');

    $('.pageContent, #fullpage').toggleClass('grayScale');


})

function hideMobileMenuElements() {
    TweenMax.staggerTo('.mobileMenuLink', 0.3, { x: 25, opacity: 0 });
    setTimeout(function() { $('.mobileMenu').addClass('DN'); }, 300);
};

function displayMobileMenuElements() {
    TweenMax.staggerTo('.mobileMenuLink', 0.3, { x: 0, opacity: 1 }, 0.2);
    $('.mobileMenu').removeClass('DN');
};

$(document).ready(function() {
    hideMobileMenuElements();
    var sections = ['pricesSec', 'aboutSec', 'faqSec', 'contactsSec'];
    var mobileMenuLink = $('.mobileMenuLink');

    // sections.forEach(function(value, index) {
    //     mobileMenuLink[].hasClass(value);
    // });

});
	var tl = new TimelineLite;

	// взрываем текст

	let textElementsh1 = ['h1-0', 'h1-1', 'h1-2']
	let textElementsTextP = ['p-0', 'p-1', 'p-2']

	for (var item in textElementsh1) {

	    if($(window).width() >= 993){
	    	window['splith1' + item] = acAnimated.Plugins.SplitText(document.getElementById(textElementsh1[item]), { words: 1, chars: 1, spacing: 1 });
	    } else {
	    	window['splith1' + item] = acAnimated.Plugins.SplitText(document.getElementById(textElementsh1[item]), { words: 1, chars: 1, spacing: 0.5 });
	    }
	    // window['splitText' + item] = acAnimated.Plugins.SplitText(document.getElementById(textElementsTextP[item]), { words: 1, chars: 1, spacing: 5 });

};


	TweenLite.set('#p-0', { opacity: 0, x: -20 });
	TweenLite.set('#p-1', { opacity: 0, x: -20 });
	TweenLite.set('#p-2', { opacity: 0, x: -20 });
	TweenLite.set('.odometer', { opacity: 0, x: -20 });
	TweenLite.set('.jumbo_desc', { opacity: 0, x: 20 });
	TweenLite.set(splith10.chars, { x: -20, opacity: 0 });
	TweenLite.set(splith11.chars, { x: -20, opacity: 0 });
	TweenLite.set(splith12.chars, { x: -20, opacity: 0 });
	TweenLite.set($('.moreIndexButton'), { opacity: 0 });
	

	// взрываем текст

	$(document).ready(function() {
	    var t2 = performance.now();
	    var loadDelta = t2 - t1;
	    var fullPageSettings = {
	                licenseKey: '3862E3AE-77274709-A7823F26-56D63069',
	                anchors: ['accountant', 'law', 'employee', 'footer'],
	                scrollOverflow: true,
	                recordHistory: false,
	                navigation: true,
	                navigationTooltips: ['Бухгалтерские услуги', 'Юридические услуги', 'Зарплаты и кадры', 'Меню'],
	                afterLoad: function(origin, destination) {
	                    var loadedSection = this;
	                    animateEl(destination.index);


	                },


	            };
	    if (loadDelta <= 3000) {
	        setTimeout(function() {
	            $('.preloader').addClass('preloader__runAnimationNow');
	        }, 3000 - loadDelta);
	        setTimeout(function() {
	            TweenMax.staggerFrom('.menuLink', 0.9, { x: 30, y: -25, opacity: 0 }, 0.15);
	            $('#fullpage').fullpage(fullPageSettings);
	        }, 2800 - loadDelta);
	    } else {
	        TweenMax.staggerFrom('.menuLink', 0.9, { x: 30, y: -25, opacity: 0 }, 0.15);
	        console.log('more');
	        $('.preloader').addClass('preloader__runAnimationNow');
	        $('#fullpage').fullpage(fullPageSettings);
	    }















	});



	function animateEl(index) {

	    var elements = ['h1-', 'p-', 'count0-', 'count01-'];
	    var numberedEl = [];
	    if (index < 3) {
	        for (var item in elements) {
	            numberedEl.push(elements[item] + index);
	        };
	    }


	    switch (index) {

	        case 0:
	            TweenMax.staggerTo(splith10.chars, 0.7, { x: 0, opacity: 1 }, 0.03, runText0);

	            break;
	        case 1:
	            TweenMax.staggerTo(splith11.chars, 0.7, { x: 0, opacity: 1 }, 0.03, runText1);

	            break;
	        case 2:
	            TweenMax.staggerTo(splith12.chars, 0.7, { x: 0, opacity: 1 }, 0.03, runText2);

	            break;
	    };





	};

	window.odometerOptions = {
	    auto: true,
	    format: '',
	    duration: 3000,
	    theme: 'minimal',
	    animation: 'count'
	};

	function runText0() {

	    TweenMax.to('#p-0', 0.7, { opacity: 1, x: 0,onComplete:runNumbers0});
	}

	function runText1() {

	    TweenMax.to('#p-1', 0.7, { opacity: 1, x: 0,onComplete:runNumbers1});
	}

	function runText2() {

	    TweenMax.to('#p-2', 0.7, { opacity: 1, x: 0,onComplete:runNumbers2});
	}

	function runNumbers0(argument) {

	    TweenMax.to($('.moreIndexButton')[0], 1.5, { opacity: 1 });
	    document.getElementById('count0-0').innerHTML = 14;
	    document.getElementById('count01-0').innerHTML = 17;
	    TweenMax.to([$('.od0'),$('.desc0')], 1.5, { css: { x: 0, opacity: 1} });
	}

	function runNumbers1(argument) {
	    TweenMax.to($('.moreIndexButton')[1], 1.5, { opacity: 1 });
	    document.getElementById('count0-1').innerHTML = 2300;
	    document.getElementById('count01-1').innerHTML = 60;
	    TweenMax.to([$('.od1'),$('.desc1')], 1.5, { css: { x: 0, opacity: 1} });
	}

	function runNumbers2(argument) {
	    TweenMax.to($('.moreIndexButton')[2], 1.5, { opacity: 1 });
	    document.getElementById('count0-2').innerHTML = 70;
	    document.getElementById('count01-2').innerHTML = 300;
	    TweenMax.to([$('.od2'),$('.desc2')], 1.5, { css: { x: 0, opacity: 1} });
	  
	}
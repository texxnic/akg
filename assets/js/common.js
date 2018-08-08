	var tl = new TimelineLite;

	// взрываем текст

	let textElementsh1 = ['h1-0', 'h1-1', 'h1-2']
	let textElementsTextP = ['p-0', 'p-1', 'p-2']

	for (var item in textElementsh1) {

	    window['splith1' + item] = acAnimated.Plugins.SplitText(document.getElementById(textElementsh1[item]), { words: 1, chars: 1, spacing: 20 });
	    window['splitText' + item] = acAnimated.Plugins.SplitText(document.getElementById(textElementsTextP[item]), { words: 1, chars: 1, spacing: 5 });

	}

	TweenLite.set(splitText0.words, { opacity: 0, y: 40 });
	TweenLite.set(splitText1.words, { opacity: 0, y: 40 });
	TweenLite.set(splitText2.words, { opacity: 0, y: 40 });
	TweenLite.set(splith10.chars, { x: -20, opacity: 0 });
	TweenLite.set(splith11.chars, { x: -20, opacity: 0 });
	TweenLite.set(splith12.chars, { x: -20, opacity: 0 });
	TweenLite.set($('.moreIndexButton'), { opacity: 0 });

	// взрываем текст

	$(document).ready(function() {
	    $('#fullpage').fullpage({
	        licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
	        anchors: ['accountant', 'law', 'employee', 'footer'],
	        scrollOverflow: true,
	        recordHistory: false,
	        afterLoad: function(origin, destination) {
	            var loadedSection = this;
	            animateEl(destination.index);
	            console.log(destination.index);
	        },


	    });



	    TweenMax.staggerFrom('.menuLink', 0.9, { x: 30, y: -25, opacity: 0 }, 0.15);
	    TweenLite.set($('.firstStatInfo'), { css: { scale: 1.1, opacity: 0, webkitFilter: "blur(5px)" } });
	    TweenLite.set($('.secondStatInfo'), { css: { scale: 1.1, opacity: 0, webkitFilter: "blur(5px)" } });





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

	    TweenMax.staggerTo(splitText0.words, 0.9, { opacity: 1, y: 0 }, 0.02, runNumbers0);
	}

	function runText1() {

	    TweenMax.staggerTo(splitText1.words, 0.9, { opacity: 1, y: 0 }, 0.02, runNumbers1);
	}

	function runText2() {

	    TweenMax.staggerTo(splitText2.words, 0.9, { opacity: 1, y: 0 }, 0.02, runNumbers2);
	}

	function runNumbers0(argument) {
		
			TweenMax.to($('.moreIndexButton')[0], 1.5, { opacity: 1} );
	        document.getElementById('count0-0').innerHTML = 14;
	        document.getElementById('count01-0').innerHTML = 17;
	        TweenMax.to($('.statInfo0'), 1.5, { css: { scale: 1, opacity: 1, webkitFilter: "blur(0px)" } });
	}
	function runNumbers1(argument) {
		TweenMax.to($('.moreIndexButton')[1], 1.5, { opacity: 1} );
	        document.getElementById('count0-1').innerHTML = 2300;
	        document.getElementById('count01-1').innerHTML = 60;
	        TweenMax.to($('.statInfo1'), 1.5, { css: { scale: 1, opacity: 1, webkitFilter: "blur(0px)" } });
	}
	function runNumbers2(argument) {
		TweenMax.to($('.moreIndexButton')[2], 1.5, { opacity: 1} );
	        document.getElementById('count0-2').innerHTML = 70;
	        document.getElementById('count01-2').innerHTML = 300;
	        TweenMax.to($('.statInfo2'), 1.5, { css: { scale: 1, opacity: 1, webkitFilter: "blur(0px)" } });
	}
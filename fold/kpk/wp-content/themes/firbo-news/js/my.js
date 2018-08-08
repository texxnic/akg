$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        items: 1,
        dots: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,

    });
});

var menuWidth = document.getElementById('headerMenuLinks').offsetWidth;
$(window).on('load resize', function() {
    var headerContWidth = document.getElementById('headerCont').offsetWidth - 230;
    if (headerContWidth < menuWidth) {
        $('#headerMenuLinks').addClass('mobile');
        $('#linksWrap').addClass('mobile');
        $('#menu-hamburger').show();
    } else {
        $('#headerMenuLinks').removeClass('mobile');
        $('#headerMenuLinks').show();
        $('#linksWrap').removeClass('mobile');
        $('#menu-hamburger').hide();
    };
    console.log(menuWidth, headerContWidth)
});
$('#menu-hamburger').on('click', function(e) {
    e.preventDefault();
    $('#headerMenuLinks').toggle()
});

//управление поиском на главной

$('#searchsubmit').on('click', function(e) {
    if (!$('#searchform').hasClass('searchformActive')) {
        e.preventDefault();
    };
    $('#searchform').addClass('searchformActive');
    setTimeout(function() { document.getElementById("searchinput").focus(); }, 1000);
});
$('#closeSearch').on('click', function(e) {

    $('#searchform').removeClass('searchformActive');

});


function hidePage() {
    let doc = document.getElementById('page');
    doc.style.opacity = "0";
}

// chart.js into stockblock



var XHR = ("onload" in new XMLHttpRequest()) ? XMLHttpRequest : XDomainRequest;

var xhr = new XHR();


xhr.open('GET', 'https://api.iextrading.com/1.0/stock/market/batch?symbols=aapl,goog,fb,amzn,nflx,tsla&types=chart&range=1m&chartLast=5', true);








xhr.onload = function() {

    //elements
    var priceElems = document.getElementsByClassName("priceWithDelta__price");
    var changeElems = document.getElementsByClassName("priceWithDelta__delta");



    //parse data
    var stockData = JSON.parse(this.responseText);
    var symbols = [stockData.AAPL, stockData.GOOG, stockData.FB, stockData.AMZN, stockData.NFLX, stockData.TSLA];

    //result priceAndChange = [[price, change, isPositiveChange], [...], ...]
    var priceAndChange = symbols.map(function(symbol) {
        var chartsLength = symbol.chart.length - 1;
        var isPositive = (symbol.chart[chartsLength].change > 0) ? true : false;
        return [symbol.chart[chartsLength].close, symbol.chart[chartsLength].change, isPositive];
    });



    //result priceHistory = [[price1, price2, price3, ...], [...], ...]
    var priceHistory = symbols.map(function(symbol) {
        let chartsLength = symbol.chart.length - 1;
        let priceHistory = [];
        for (let i = 0; i < symbol.chart.length; i++) {
            priceHistory.push(symbol.chart[i].close);
        };
        return priceHistory;

    });

    for (let i = 0; i < symbols.length; i++) {
        var options = {
            type: 'line',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                        data: priceHistory[i],
                        label: false,
                        borderWidth: 1,
                        fill: false,
                        backgroundColor: (priceAndChange[i][2]) ? '#d9f3de' : '#f2d8d8',

                    },

                ]
            },
            options: {
                pointRadius: 0,
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        display: false,
                    }],
                    yAxes: [{
                        display: false,
                        ticks: {
                            reverse: false
                        }
                    }]
                }
            }
        }

        var ctx = document.getElementsByClassName('chartJSContainer');

        new Chart(ctx[i], options);




    };
    var displayData = document.getElementsByClassName('stockBlock__data');
    var iterations = 0;
    var interval = setInterval(foo, 300);

    function foo() {

        if (iterations >= 5)
            clearInterval(interval);
        displayData[iterations].classList.add('stockBlock__data__loaded');
        iterations++;
    }




    //apply data
    for (var i = 0; i < priceElems.length; i++) {
        (priceAndChange[i][2]) ? changeElems[i].classList.add('price-up'): changeElems[i].classList.add('price-down');
        priceElems[i].innerHTML = round(priceAndChange[i][0], 1) + '<sup>$</sup>';
        changeElems[i].innerHTML = round(priceAndChange[i][1], 1);
    }


}

xhr.onerror = function() {
    console.log('Ошибка ' + this.status);
}

xhr.send();

//math.round correct alternative

function round(number, precision) {
    var shift = function(number, precision) {
        var numArray = ("" + number).split("e");
        return +(numArray[0] + "e" + (numArray[1] ? (+numArray[1] + precision) : precision));
    };
    return shift(Math.round(shift(number, +precision)), -precision);
}
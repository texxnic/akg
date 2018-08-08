

!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});



jQuery(document).ready(function($) {
    $("input[name='phone']").mask("+7(999)999-99-99");

    $(".contactSubmit").click(function() {
        
                    
                    var categoryName = $("#categoryName").text();
                    var data = $("#contactInformation").serialize();
                    var data2 = $("#moneyAndTimeRange").serialize();
                        $.ajax({
                            type: 'POST',
                            url: "https://sovklad.ru/formaccept",
                            data: data + data2 + '"&categoryName=' + categoryName + '"',
                            success: function(data) {
                                alert('Спасибо! Ваша заявка отправлена!');
                                
                            },
                            error: function(data) {
                                alert('Извините, что-то пошло не так... Пожалуйста, закажите такси через телефон');
                             
                            }
                        });
    });

               


    var browserWidth = $( window ).width();
    if (browserWidth>=375) {
        $(".logo").addClass('redLogoTransformed');
    $(".logoMask").addClass('logoWordsTransformed');
    };
    

    $(".contactDiv").click(function(event) {
        $(".contactHidden").show('4000', function() {
        });

    });
    $("#menuButton").click(function(event) {
        $(".menuOver").toggleClass("menuOpened");
    });
    $("#menuButtonInMenu").click(function(event) {
        $(".menuOver").toggleClass("menuOpened");
    });
    // $(".simpleCalculatorNumber").maskMoney({precision:"0", allowNegative: false, thousands:' ' });
    var simpleVkladValue, simpleRange, simpleCapit, simplePercent, selectedRangeText, simpleYouEarn, simpleRangeYear, totalProfit, monthProfit, monthRange;
    var daysInYear = 365;
    if ($(".pageBack").hasClass('curVkladBack')) {
        calculateCur();

    } else {
        calculate();

    };

    $('.changeHandlerInput').on('input', function(e) {
        if ($(".pageBack").hasClass('curVkladBack')) {
            calculateCur();

        } else {
            calculate();

        };
    });
    $(".changeHandler").change(function() {
        if ($(".pageBack").hasClass('curVkladBack')) {
            calculateCur();

        } else {
            calculate();

        };
    });

    function calculate(e) {

        simpleVkladValue = $(".simpleCalculatorNumber").val();
        simpleVkladValue = parseInt(simpleVkladValue);
        simpleRange = $("select[name='simpleCalcMonth']").val();
        simpleRange = parseInt(simpleRange);

        simpleCapit = $("select[name='capitalizationSelect']").val();
        selectedRangeText = $("select[name='simpleCalcMonth'] option:selected").text();


        if (simpleCapit === "w/oCapit") {
            // проценты с капитализацией
            switch (simpleRange) {
                case 180:
                    simpleRangeYear = 0.5;
                    if (simpleVkladValue >= 150000 && simpleVkladValue < 500000) {
                        simplePercent = 7.5;
                    } else if (simpleVkladValue >= 500000 && simpleVkladValue < 1500000) {
                        simplePercent = 9;
                    } else if (simpleVkladValue >= 1500000 && simpleVkladValue < 5000000) {
                        simplePercent = 11;
                    } else if (simpleVkladValue >= 5000000) {
                        simplePercent = 13;
                    };

                    break;
                case 365:
                    simpleRangeYear = 1;
                    if (simpleVkladValue >= 150000 && simpleVkladValue < 500000) {
                        simplePercent = 15;
                    } else if (simpleVkladValue >= 500000 && simpleVkladValue < 1500000) {
                        simplePercent = 17.5;
                    } else if (simpleVkladValue >= 1500000 && simpleVkladValue < 5000000) {
                        simplePercent = 20.5;
                    } else if (simpleVkladValue >= 5000000) {
                        simplePercent = 24;
                    };
                    break;
                case 730:
                    simpleRangeYear = 2;
                    if (simpleVkladValue >= 150000 && simpleVkladValue < 500000) {
                        simplePercent = 16.5;
                    } else if (simpleVkladValue >= 500000 && simpleVkladValue < 1500000) {
                        simplePercent = 19;
                    } else if (simpleVkladValue >= 1500000 && simpleVkladValue < 5000000) {
                        simplePercent = 22;
                    } else if (simpleVkladValue >= 5000000) {
                        simplePercent = 25;
                    };
                    break;
                case 1095:
                    simpleRangeYear = 3;
                    if (simpleVkladValue >= 150000 && simpleVkladValue < 500000) {
                        simplePercent = 18;
                    } else if (simpleVkladValue >= 500000 && simpleVkladValue < 1500000) {
                        simplePercent = 20;
                    } else if (simpleVkladValue >= 1500000 && simpleVkladValue < 5000000) {
                        simplePercent = 23.5;
                    } else if (simpleVkladValue >= 5000000) {
                        simplePercent = 26.5;
                    };
                    break;
            }
        } else {
            // проценты без капитализации
            switch (simpleRange) {
                case 180:
                    simpleRangeYear = 0.5;
                    if (simpleVkladValue >= 150000 && simpleVkladValue < 500000) {
                        simplePercent = 8;
                    } else if (simpleVkladValue >= 500000 && simpleVkladValue < 1500000) {
                        simplePercent = 9.5;
                    } else if (simpleVkladValue >= 1500000 && simpleVkladValue < 5000000) {
                        simplePercent = 11.5;
                    } else if (simpleVkladValue >= 5000000) {
                        simplePercent = 14;
                    };
                    break;
                case 365:
                    simpleRangeYear = 1;
                    if (simpleVkladValue >= 150000 && simpleVkladValue < 500000) {
                        simplePercent = 16.5;
                    } else if (simpleVkladValue >= 500000 && simpleVkladValue < 1500000) {
                        simplePercent = 19;
                    } else if (simpleVkladValue >= 1500000 && simpleVkladValue < 5000000) {
                        simplePercent = 22;
                    } else if (simpleVkladValue >= 5000000) {
                        simplePercent = 25;
                    };
                    break;
                case 730:
                    simpleRangeYear = 2;
                    if (simpleVkladValue >= 150000 && simpleVkladValue < 500000) {
                        simplePercent = 18;
                    } else if (simpleVkladValue >= 500000 && simpleVkladValue < 1500000) {
                        simplePercent = 19.75;
                    } else if (simpleVkladValue >= 1500000 && simpleVkladValue < 5000000) {
                        simplePercent = 23.5;
                    } else if (simpleVkladValue >= 5000000) {
                        simplePercent = 26.5;
                    };
                    break;
                case 1095:
                    simpleRangeYear = 3;
                    if (simpleVkladValue >= 150000 && simpleVkladValue < 500000) {
                        simplePercent = 18.75;
                    } else if (simpleVkladValue >= 500000 && simpleVkladValue < 1500000) {
                        simplePercent = 21.5;
                    } else if (simpleVkladValue >= 1500000 && simpleVkladValue < 5000000) {
                        simplePercent = 24.5;
                    } else if (simpleVkladValue >= 5000000) {
                        simplePercent = 28;
                    };
                    break;
            }
        };
        if (simpleVkladValue < 150000 || isNaN(simpleVkladValue)) {
            $(".calculatedText").css("color", "gray");
            $(".calcGraphCommonWrapper").css("filter", "blur(5px)");
        } else {
            $(".calculatedText").css("color", "white");
            $(".calcGraphCommonWrapper").css("filter", "blur(0)");
            $(".simpleCalcPercent").html(simplePercent);
            $(".getGraphCalc").html(simplePercent);
            $(".simpleCalcFinalMonth").html(selectedRangeText);
            $(".rangeGraphCalc").html(selectedRangeText);
            $(".investedGraphCalc").html(simpleVkladValue);
            $(".graphInvested").html(simpleVkladValue);

            if (simpleCapit === "w/oCapit") {
                simpleYouEarn = simpleVkladValue + simpleVkladValue * simplePercent * simpleRange / daysInYear / 100;
                simpleYouEarn = Math.round(simpleYouEarn);
            } else {


                var percentInPieces = simplePercent / 100;
                var baseForExponenting = 1 + percentInPieces / 12;
                var calcExponent = 12 * simpleRangeYear;
                var exponentedValue = Math.pow(baseForExponenting, calcExponent);

                simpleYouEarn = simpleVkladValue * exponentedValue;
                simpleYouEarn = Math.round(simpleYouEarn);

                //дописать сколько месяцев в периуде

            };
            $(".simpleCalcFinalPrice").html(simpleYouEarn);
            $(".graphTotalEarn").html(simpleYouEarn);
            totalProfit = simpleYouEarn - simpleVkladValue;
            monthRange = 12 * simpleRangeYear;

            monthProfit = totalProfit / monthRange;
            monthProfit = Math.round(monthProfit);
            $(".yourProfitGraphCalc").html(totalProfit);
            $(".profitPerMonthGraphCalc").html(monthProfit);
        };




    };

    function calculateCur(e) {

        simpleVkladValue = $(".simpleCalculatorNumber").val();
        simpleVkladValue = parseInt(simpleVkladValue);
        simpleRange = $("select[name='simpleCalcMonth']").val();
        simpleRange = parseInt(simpleRange);


        selectedRangeText = $("select[name='simpleCalcMonth'] option:selected").text();




        // проценты без капитализации
        switch (simpleRange) {
            case 180:
                simpleRangeYear = 0.5;
                if (simpleVkladValue >= 4000 && simpleVkladValue < 25000) {
                    simplePercent = 7.5;
                } else if (simpleVkladValue >= 25000 && simpleVkladValue < 75000) {
                    simplePercent = 8.5;
                } else if (simpleVkladValue >= 75000 && simpleVkladValue < 250000) {
                    simplePercent = 9.75;
                } else if (simpleVkladValue >= 250000) {
                    simplePercent = 11;
                };
                break;
            case 365:
                simpleRangeYear = 1;
                if (simpleVkladValue >= 4000 && simpleVkladValue < 25000) {
                    simplePercent = 9.5;
                } else if (simpleVkladValue >= 25000 && simpleVkladValue < 75000) {
                    simplePercent = 10.5;
                } else if (simpleVkladValue >= 75000 && simpleVkladValue < 250000) {
                    simplePercent = 12;
                } else if (simpleVkladValue >= 250000) {
                    simplePercent = 13.5;
                };
                break;
            case 730:
                simpleRangeYear = 2;
                if (simpleVkladValue >= 4000 && simpleVkladValue < 25000) {
                    simplePercent = 10.5;
                } else if (simpleVkladValue >= 25000 && simpleVkladValue < 75000) {
                    simplePercent = 11.5;
                } else if (simpleVkladValue >= 75000 && simpleVkladValue < 250000) {
                    simplePercent = 13;
                } else if (simpleVkladValue >= 250000) {
                    simplePercent = 15;
                };
                break;
            case 1095:
                simpleRangeYear = 3;
                if (simpleVkladValue >= 4000 && simpleVkladValue < 25000) {
                    simplePercent = 12;
                } else if (simpleVkladValue >= 25000 && simpleVkladValue < 75000) {
                    simplePercent = 12.5;
                } else if (simpleVkladValue >= 75000 && simpleVkladValue < 250000) {
                    simplePercent = 14.5;
                } else if (simpleVkladValue >= 250000) {
                    simplePercent = 17;
                };
                break;
        }

        if (simpleVkladValue < 4000 || isNaN(simpleVkladValue)) {
            $(".calculatedText").css("color", "gray");
            $(".calcGraphCommonWrapper").css("filter", "blur(5px)");
        } else {
            $(".calculatedText").css("color", "white");
            $(".calcGraphCommonWrapper").css("filter", "blur(0)");
            $(".simpleCalcPercent").html(simplePercent);
            $(".getGraphCalc").html(simplePercent);
            $(".simpleCalcFinalMonth").html(selectedRangeText);
            $(".rangeGraphCalc").html(selectedRangeText);
            $(".investedGraphCalc").html(simpleVkladValue);
            $(".graphInvested").html(simpleVkladValue);


            simpleYouEarn = simpleVkladValue + simpleVkladValue * simplePercent * simpleRange / daysInYear / 100;
            simpleYouEarn = Math.round(simpleYouEarn);

            $(".simpleCalcFinalPrice").html(simpleYouEarn);
            $(".graphTotalEarn").html(simpleYouEarn);
            totalProfit = simpleYouEarn - simpleVkladValue;
            monthRange = 12 * simpleRangeYear;

            monthProfit = totalProfit / monthRange;
            monthProfit = Math.round(monthProfit);
            $(".yourProfitGraphCalc").html(totalProfit);
            $(".profitPerMonthGraphCalc").html(monthProfit);
        };




    };



});


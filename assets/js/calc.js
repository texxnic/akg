$(document).on('ready', function() {
    $('[name="tax_system"], .percent, #slider1-value, #slider2-value, .percent_inc, .quantity-field, .input-num>input').change(function() {
        calc()
        console.log('exec');
    });

    $("#slider1, #slider2, .white-block").mouseup(function() {
        calc()
    });

    $("#slider1, #slider2").mouseout(function() {
        calc()
    });

    function calc() {




        base = parseFloat($('[name="tax_system"]:checked').val());
        var x = 0;

        if (base == 4000) {
            $('.percent-count, .percent').removeAttr("checked");
            $('.percent-count, .percent').attr('disabled', 'disabled')
            $('.calculator__second').addClass('calcAddddHidden');
        } else {
            $('.percent-count, .percent').removeAttr('disabled')
            $('.calculator__second').removeClass('calcAddddHidden');

        }


        $('.percent').each(function(i, elem) {
            if ($(elem).prop("checked")) {
                x += base * (parseFloat($(elem).val() / 100));


            }

        })

        $('.percent_inc').each(function(i, elem) {
            if ($(elem).children(".quantity-field").val() > 0) {
                x += (base * (5 / 100)) * parseFloat($(elem).children(".quantity-field").val());
                console.log(1);

            }

        })



        var slide1 = parseFloat($('#slider1-value').val());

        if (slide1 > 20) {

            x += (slide1 - 20) * 150;

        }

        var slide2 = parseFloat($('#slider2-value').val());

        if (slide2 > 5) {

            x += (slide2 - 5) * 500;

        }

        $('.CalcSum').text(Math.ceil(x + base));
    }


    function incrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal)) {
            parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    function decrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal) && currentVal > 0) {
            parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    $('.input-group').on('click', '.button-plus', function(e) {
        incrementValue(e);
        calc();
    });

    $('.input-group').on('click', '.button-minus', function(e) {
        decrementValue(e);
        calc();
    });


    

});
window.odometerOptions = {
        format: '( ddd).dd', // Change how digit groups are formatted, and how many digits are shown after the decimal point
        duration: 300, // Change how long the javascript expects the CSS animation to take

    };
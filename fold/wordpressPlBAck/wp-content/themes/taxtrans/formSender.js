  var taxiType = $('a.selected').text();
                function sendRequest(typeOfPayment) {
                          $('#priceListForm').validate({

   rules: {
    // simple rule, converted to {required:true}
    
    // compound rule
    priceTel: {
      required: true,
      minlenth: 7
    }

  },

 submitHandler: function() {
    if(typeOfPayment == 'cash'){
                        var paymentMethod = 'Постоплата';
                    } else {
                        var paymentMethod = 'Онлайн оплата';
                    };

                    var  adress1 = $('#enteredAddress1Label').text();
                    var  adress2 = $('#enteredAddress2Label').text();
                    // e.preventDefault();
                    // e.returnValue = false;
                    var x = document.getElementById('priceTel').value;
                    
                        var data = $("#priceListForm").serialize();
                        $.ajax({
                            type: 'POST',
                            url: "https://taxtrans.ru/formaccept",
                            data: data + "&adress1=" + adress1 + "&adress2=" + adress2 + "&taxiType=" + taxiType + "&paymentMethod=" + paymentMethod,
                            success: function(data) {

                                if (typeOfPayment == 'online') {
                                    $("#priceListForm").submit();
                                } else {
                                    alert('success');
                                    $('.oplataDivPrice').addClass('animated fadeOutRight');
                                };
                            }
                        });
 }
});
              




                };

                function sendRequestCalc(typeOfPayment) {

                    if(typeOfPayment == 'cash'){
                        var paymentMethod = 'Постоплата';
                    } else {
                        var paymentMethod = 'Онлайн оплата';
                    };
                    // e.preventDefault();
                    // e.returnValue = false;
                    var x = document.getElementById('priceTel').value;
                    
                        var data = $("#priceCalcForm").serialize();
                        $.ajax({
                            type: 'POST',
                            url: "https://taxtrans.ru/formaccept",
                            data: data + "&taxiType=" + taxiType + "&paymentMethod=" + paymentMethod,
                            success: function(data) {

                                if (typeOfPayment == 'online') {
                                    $("#priceListForm").submit();
                                } else {
                                    alert('success');
                                    $('.oplataDivPrice').addClass('animated fadeOutRight');
                                };
                            }
                        });
                 




                };
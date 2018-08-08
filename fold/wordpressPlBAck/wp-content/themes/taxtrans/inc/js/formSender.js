  var taxiType = $('a.selected').text();
  var formCalc = $('#priceCalcForm');
  var formPrice = $('#priceListForm');

  formPrice.validate({
      rules: {
          priceTel: {
              required: true,
              minlength: 7
          }
      },
      errorPlacement: function(error, element) {
          return true;
      },
      errorClass: "invalidInput"


  });
    formCalc.validate({
      rules: {
          priceTelCalc: {
              required: true,
              minlength: 7
          }
      },
      errorPlacement: function(error, element) {
          return true;
      },
      errorClass: "invalidInput"


  });

  function sendRequest(typeOfPayment) {

      if (formPrice.valid()) {
          if (typeOfPayment == 'cash') {
              var paymentMethod = 'Постоплата';
          } else {
              var paymentMethod = 'Онлайн оплата';
          };

          var adress1 = $('#enteredAddress1Label').text();
          var adress2 = $('#enteredAddress2Label').text();
          // e.preventDefault();
          // e.returnValue = false;
          var x = document.getElementById('priceTel').value;

          var data = $("#priceListForm").serialize();
          $.ajax({
              type: 'POST',
              url: "https://taxtrans.ru/formaccept",
              data: data + "&adress1=" + adress1 + "&adress2=" + adress2 + "&taxiType=" + taxiType + "&paymentMethod=" + paymentMethod,
              success: function(data) {

                  if(typeOfPayment == 'online'){
                      $("#priceListForm").submit();
                  } else {
                      alert('Спасибо! Ваша заявка отправлена!');
                      $('.oplataDivPrice').addClass('animated fadeOutRight');
                      $("#priceListForm").trigger('reset');
                  };
              }
          });
      };
  };

  function sendRequestCalc(typeOfPayment) {
if (formCalc.valid()) {
      if (typeOfPayment == 'cash') {
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

              if(typeOfPayment == 'online'){
                  $("#priceListForm").submit();
              } else {
                  alert('Спасибо! Ваша заявка отправлена!');
                  $('.oplataDivPrice').addClass('animated fadeOutRight');
                  $("#priceCalcForm").trigger('reset');
              };
          }
      });


};


  };
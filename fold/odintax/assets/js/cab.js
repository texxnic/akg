
jQuery(function(){
	var mask='99:99';
   jQuery('.timePicker').mask(mask);
   jQuery('.timePicker').attr('placeholder',mask);
});

jQuery(function(){
	var mask='+7(999)999-99-99';
   jQuery('.tel-xab').mask(mask);
   jQuery('.tel-xab').attr('placeholder',mask);
});

jQuery(document).ready(function(){
	jQuery('#book-taxix').bind('click',function(){
		var inputWhen=jQuery('#inputWhen').val();
		var inputHour=jQuery('#inputHour').val();
		var inputStartDestination=jQuery('#inputStartDestination').val();
		var inputEndDestination=jQuery('#inputEndDestination').val();
		var phoneNumber=jQuery('#phoneNumber').val();
		if(phoneNumber.length==16){
			jQuery('section.hidden_form').show();
			jQuery.ajax({
				url:'/ajax/mail.php',
				type:'post',
				data:({
					
					inputWhen:inputWhen,
					inputHour:inputHour,
					inputStartDestination:inputStartDestination,
					inputEndDestination:inputEndDestination,
					phoneNumber:phoneNumber,
					sleep:2.6,
					key:'743nycg3o87wcmghhgmccc5ymge'
				}),
				dataType:'html',
				beforeSend:funcBefore,
				success:funcSuccess
			});
		}else{
			alert('Укажите номер телефона');
			jQuery('#phoneNumber').focus();
		}
	});
});
function funcSuccess(data){
	jQuery('div#formalik').html(data);
}
function funcBefore(){
	var data='<img src="/images/sending.gif" class="loadinger">';
	jQuery('div#formalik').html(data);
}

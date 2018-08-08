<? 
sleep($_POST['sleep']);
if($_POST['key']=='743nycg3o87wcmghhgmccc5ymge'){
	$mail='taxi@odincovo.taxi';
	$to=$mail;
	$subject="[Бронирование такси]"; 
	$message = ' 
	<html> 
	    <head> 
	        <title>Заказ такси с сайта</title> 
	    </head> 
	    <body>
	    	<table>
	    	 <tbody>
	    	  <tr>
	    	   <td>
	    	    Дата подачи:
	    	   </td>
	    	    <td>
	    	    '.$_POST['inputWhen'].'
	    	   </td>
	    	  </tr>
	    	  <tr>
	    	   <td>
	    	    Время подачи:
	    	   </td>
	    	    <td>
	    	    '.$_POST['inputHour'].'
	    	   </td>
	    	  </tr>
	    	  <tr>
	    	   <td>
	    	    Адрес подачи:
	    	   </td>
	    	    <td>
	    	    '.$_POST['inputStartDestination'].'
	    	   </td>
	    	  </tr>
	    	  <tr>
	    	   <td>
	    	    Пункт назначения:
	    	   </td>
	    	    <td>
	    	    '.$_POST['inputEndDestination'].'
	    	   </td>
	    	  </tr>
	    	  <tr>
	    	   <td>
	    	    Телефон заказчика:
	    	   </td>
	    	    <td>
	    	    '.$_POST['phoneNumber'].'
	    	   </td>
	    	  </tr>
	    	 </tbody>
	    	</table>
	    </body> 
	</html>'; 
	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
	$headers .= "From: odincovo.taxi <taxi@odincovo.taxi>\r\n"; 
	$headers .= "Bcc: taxi@odincovo.taxi\r\n"; 
	
	
	if(mail($to, $subject, $message, $headers)){
		include('ok.php');
		print '<h5><a href="#" onclick="jQuery(\'section.hidden_form\').hide()" class="btn btn-success">закрыть</a></h5>';
		
	}
	else{
		include('not.php');
		print '<h5><a href="#" onclick="jQuery(\'section.hidden_form\').hide()" class="btn btn-success">закрыть</a></h5>';
	}
	
}
else{
	include('not.php');
}
?>
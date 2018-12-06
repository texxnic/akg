<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	Контактаня форма
	<?php
//debug
// $fp = fopen('debug.txt', 'a');
// fwrite($fp, print_r($_POST, TRUE));
// fclose($fp);

// //enddebug

// if (empty($_POST['g-recaptcha-response'])) {
	
// 	$fp = fopen('debug.txt', 'a');
// fwrite($fp,'ps');
// fclose($fp);
// // exit('Please set recaptcha variable');
// }

// // validate recaptcha
// $response = $_POST['g-recaptcha-response'];
// $post = http_build_query(
//     array (
//         'response' => $response,
//         'secret' => '6LdSO3sUAAAAAD_rKTkxYjviF1ZXDYyS-LP8eEYd',
//         'remoteip' => $_SERVER['REMOTE_ADDR']
//     )
// );
// $opts = array('http' => 
//     array (
//         'method' => 'POST',
//         'header' => 'application/x-www-form-urlencoded',
//         'content' => $post
//     )
// );
// $context = stream_context_create($opts);
// $serverResponse = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
// if (!$serverResponse) {
// 	$fp = fopen('debug.txt', 'a');
// 	fwrite($fp,'fail');
// 	fclose($fp);
// 	exit('Failed to validate Recaptcha');

// }
// $result = json_decode($serverResponse);
// if (!$result -> success) {
// 	$fp = fopen('debug.txt', 'a');
// 	fwrite($fp,'invalid');
// 	fclose($fp);
// 	exit('Invalid Recaptcha');


// }


 $email_to = "dog933@mail.ru";
 $email_subject = "Заявка с AKG";

 

  

 $first_name = $_POST['firstname']; // required
 $last_name = $_POST['secondname']; // required
 $email_from = $_POST['email']; // required
 $company = $_POST['company']; // required
 $phone = $_POST['phone']; // not required
 $question = $_POST['question']; // required

 $error_message = "";
 $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';


 $email_message = "Информация с конт. формы.\n\n";

  
 function clean_string($string) {
   $bad = array("content-type","bcc:","to:","cc:","href");
   return str_replace($bad,"",$string);
 }

  

 $email_message .= "Имя: ".clean_string($first_name)."\n";
 $email_message .= "Фамилия: ".clean_string($last_name)."\n";
 $email_message .= "Email: ".clean_string($email_from)."\n";
 $email_message .= "Компания: ".clean_string($company)."\n";
 $email_message .= "Номер: ".clean_string($phone)."\n";
 $email_message .= "Сообщение: ".clean_string($question)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
echo $email_message;
?>




</body>
</html>
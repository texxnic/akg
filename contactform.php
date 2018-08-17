<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	Контактаня форма

		<?php
				if(isset($_POST['email'])) {
				 
				    // EDIT THE 2 LINES BELOW AS REQUIRED
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
				 
				  
				    $email_message = "Form details below.\n\n";
				 
				     
				    function clean_string($string) {
				      $bad = array("content-type","bcc:","to:","cc:","href");
				      return str_replace($bad,"",$string);
				    }
				 
				     
				 
				    $email_message .= "First Name: ".clean_string($first_name)."\n";
				    $email_message .= "Last Name: ".clean_string($last_name)."\n";
				    $email_message .= "Email: ".clean_string($email_from)."\n";
				    $email_message .= "Company: ".clean_string($company)."\n";
				    $email_message .= "Telephone: ".clean_string($phone)."\n";
				    $email_message .= "Comments: ".clean_string($question)."\n";
				 
				// create email headers
				$headers = 'From: '.$email_from."\r\n".
				'Reply-To: '.$email_from."\r\n" .
				'X-Mailer: PHP/' . phpversion();
				@mail($email_to, $email_subject, $email_message, $headers);  
				echo $email_message;
				?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>
</body>
</html>
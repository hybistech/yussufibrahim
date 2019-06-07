<?php

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$visitor_phone = $_POST['phone'];
	$message = $_POST['message'];

	$email_from = 'contact@yussufibrahim.com';
	$email_subject = "New Message From yussufibrahim.com";

	$email_body = 	"User Name: $name.\n".
					"User Email: $visitor_email.\n".
					"User Phone: $visitor_phone.\n".
					"User Message: $message.\n";

	$to = "ibrahimgbebe@gmail.com";

	$headers = "from: $email_from \r\n";

	$headers = "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);
		if(!$mail->send()){
	   echo "IT FAILED" . $mail->ErrorInfo;
		}else {
		   echo "Message sent";
		}

	header("Location: reviews/index.html");
	
?>
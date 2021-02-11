<?php
	$to_email = "smnshuvo@gmail.com";
	$subject = "XAMPP theke mail pathaitasi";
	$body = "hola";
	$headers = "From: mahirshahriar10@gmail.com";
	
	if(mail($to_email, $subject, $body, $headers)){
		echo "Email is send";
	}else{
		echo "Send fail";
	}
?>
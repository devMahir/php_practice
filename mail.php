<?php
	$to_email = "smnshuvo@gmail.com";
	// $to_email = ["mahirshahriar10@gmail", "smnshuvo@gmail"];
	
	$subject = "XAMPP theke mail pathaitasi";
	$body = "hola";
	$headers = "From: mahirshahriar10@gmail.com";
	
	if(mail($to_email, $subject, $body, $headers)){
		echo "Email is send";
	}else{
		echo "Send fail";
	}


	/*
		send multiple mail
		for($i=0; $i < 2; $i++ ){
			if(mail($to_email[$i], $subject, $body, $headers)){
			echo "Email is send to $to_email[$i]";
		}else{
			echo "Send fail";
		}
		}
	*/



?>
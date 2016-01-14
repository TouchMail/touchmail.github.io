<?php

$name	  = $_POST['name'];
$email	  = $_POST['email'];
$website	  = $_POST['website'];
$message  = $_POST['message'];

$to       = "hello@lukespoor.me";
$subject  = "General Enquiry";
$headers  = "From: $email";
$body     = "From: $name \n Email: $email \n Website: $website \n\n Message: \n $message";

mail($to, $subject, $body, $headers);

?>
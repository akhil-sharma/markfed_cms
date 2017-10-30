<?php
	include 'connection.php';

	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$body = $_POST['body'];


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: anubhav.gupta3210@gmail.com" . "\r\n" .
"Reply-To: successive.testing@gmail.com" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

mail($email,$subject,$body,$headers);


?>

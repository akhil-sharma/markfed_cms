<?php
	include 'connection.php';

	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$body = $_POST['body'];


$headers = "From: anubhav.gupta97@gmail.com";

mail($email,$subject,$body,$headers);


?>

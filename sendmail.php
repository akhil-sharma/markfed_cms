<?php
	include 'connection.php';

	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$body = $_POST['body'];


$headers = "From: Administrator@marked.com";

mail($email,$subject,$body,$headers);


?>

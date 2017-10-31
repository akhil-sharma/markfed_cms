<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

//retrieving variables from $_POST
//email
$emailList = explode(";", $_POST['email']);
$emailCount = count($emailList);
//cc
$ccEmailList = explode(";", $_POST['cc']);
$ccEmailCount = count($ccEmailList);
//subject
$subject = $_POST['subject'];
//body
$body = $_POST['body'];



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'aditya119sharma@gmail.com';                 // SMTP username
    $mail->Password = 'rtauouydzcsgilgc';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('aditya119sharma@gmial.com', 'Aditya');
    //Add a recipient/recipients
    for ($i=0; $i < $emailCount; $i++) { 
    	$mail->addAddress($emailList[$i]);
    }
    
    //Add a recipient/recipients CC
    for ($i=0; $i < $ccEmailCount; $i++) { 
    	$mail->addCC($ccEmailList[$i]);
    }

    $mail->addReplyTo('info@example.com', 'Information');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
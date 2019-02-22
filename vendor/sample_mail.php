<?php

//require the ff: files PHPMailer.php, Exception.php, autoload.php
require "phpmailer/phpmailer/src/PHPMailer.php";
require "phpmailer/phpmailer/src/Exception.php";
require "autoload.php";

$mail = new PHPMailer\PHPMailer\PHPMailer(true);

// $mail = new PHPMailer(true);

$staff_email = "CapStoneHera@gmail.com"; //where the email is coming from 
$customer_email = "heraldine.genova@gmail.com"; //where the email will go
$email_subject = "CSP2 Order Confirmation";
$email_body = "<h3>Reference Number: 09RXC86XWY3CI96UZ3H3GPOG2YWDRZ3R8VPL-1544098637 </h3>";

try{
	$mail -> isSMTP();
	$mail -> Host = "smtp.gmail.com";
	$mail -> SMTPAuth = true;
	$mail -> Username = $staff_email;
	$mail -> Password = "Ivanwinz01";
	$mail -> SMTPSecure = "tls";
	$mail -> Port = 587;
	$mail -> setFrom($staff_email, "Company Name");
	$mail -> addAddress($staff_email);
	$mail ->isHTML(true);
	$mail -> Subject = $email_subject;
	$mail -> Body = $email_body;
	$mail -> send();
	echo "Message has been sent";
}
	catch(Exception $e){
		echo "Message sending failed".$mail ->ErrorInfo;


}
?>


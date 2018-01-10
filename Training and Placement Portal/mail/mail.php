<?php
//session_start();

require("phpmailer/class.phpmailer.php");
function sendmail($too, $getsubject, $getbody)
{

$to  = $too;


// subject
$subject = $getsubject;
//$file_to_attach = 'PATH_OF_YOUR_FILE_HERE';

//
// message
$message =$getbody;
//echo $message;
$mail             = new PHPMailer();
//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "ssl://smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;     
$mail->Host       = "ssl://smtp.gmail.com"; // sets the SMTP server
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "tpoprojgrp@gmail.com"; // SMTP account username
$mail->Password   = "hkvtpogrp";        // SMTP account password
$mail->SetFrom('tpoprojgrp@gmail.com', 'ACPCE TPO DEPT');
//$mail->AddReplyTo($to);
$mail->Subject    = $subject;
$mail->AltBody    = $message; // optional, comment out and test
$mail->MsgHTML($message);
$address = $to;
$mail->AddAddress($address);
//$mail->AddAttachment("images/user.png");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
	if(!$mail->Send()) {
	//echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	//echo "Message sent!";
	}

}
//header('Location: index.php');

?> 
<?php
require "session_set.php";
error_reporting(E_ALL ^ E_NOTICE); 

$email = $_POST['email'];$_SESSION['email'] = $email;
$subject = $_POST['subject'];$_SESSION['subject'] = $subject;
$message = $_POST['message'];$_SESSION['message'] = $message;

if(($email=="") || ($subject=="") || ($message==""))
{
	header("location:frmMail.php?msg=empty");
}
else
{
	if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
	{ 
		header('location:frmMail.php?msg=invalid');
	}
	else
	{
		require("../../mail/mail.php");
		sendmail($email,$subject,$message);
		unset($_SESSION['email']);
		unset($_SESSION['subject']);
		unset($_SESSION['message']);		
		header("location:frmMail.php?msg=ok");
	}
}
?>

												
														
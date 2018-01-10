<?php
require "session_set.php";
require"../../config.php";

$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$sector = $_POST['sector'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];


$_SESSION['name'] = $name;
$_SESSION['address'] = $address;
$_SESSION['city'] = $city;
$_SESSION['state'] = $state;
$_SESSION['email'] = $email;
$_SESSION['contact'] = $contact;
$_SESSION['sector'] = $sector;
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['confirmpassword'] = $confirmpassword;

if(($name=="")|| ($address=="")|| ($email=="")|| ($contact=="")|| ($sector=="") || ($username=="") || ($password=="") || ($confirmpassword==""))
{
	
	header('location:frmCompanyEdit.php?msg=empty');
}

else if($password == $confirmpassword)
{
	$email_parts = explode("@",$email);
	$email_parts = explode(".",$email_parts[1]);
	if(strlen($email_parts[1])>3) 
	{ 
		header('location:frmCompanyEdit.php?msg=invalid');
	}
	else
	{
		$sql = "Update tbl_company SET Name = '$name',Address = '$address',State = '$state', City ='$city' , Contact = '$contact',EmailID = '$email',
		Sector = '$sector', Username = '$username', Password = '$password' where ID = '$_SESSION[ID]'";

		if (!mysql_query($sql))
		{
			die('Error - '.mysql_error());
		}
		else
		{	
			unset($_SESSION['name']);unset($_SESSION['city']);
			unset($_SESSION['state']);
			unset($_SESSION['contact']);unset($_SESSION['address']);unset($_SESSION['email']);unset($_SESSION['sector']);
			unset($_SESSION['confirmpassword']);
			unset($_SESSION['username']);
			unset($_SESSION['password']);
			header('location:frmMyProfile.php');
		}	
	}
	
}
else
{

	header('location:frmRegistration.php?msg=incorrect');
}
?>
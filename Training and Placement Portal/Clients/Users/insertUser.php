<?php
session_start();
require"../../config.php";

$sem = $_POST['sem'];
$branch = $_POST['branch'];
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

$date=date("jS  F Y");

$_SESSION['branch'] = $branch;
$_SESSION['sem'] = $sem;
$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['confirmpassword'] = $confirmpassword;

if(($username=="") || ($password=="") || ($confirmpassword==""))
{
	
	header('location:frmRegistration.php?msg=empty');
}
else if($password == $confirmpassword)
{
	$result1 = mysql_query("Select * from deadmission where fname = '$name' and deyear='BE'");

	if ($result1)
	{
		echo $count1 = mysql_num_rows($result1);
		if($count1>0)
		{
	
			$sql = "INSERT INTO `tbl_users`(Name, Username, Password,JoiningDate, quali, totalper,email) 
								VALUES ('$name', '$username', '$password','$date', '$branch', '$sem','$email')";
	
			if (!mysql_query($sql))
			{
				die('Error - '.mysql_error());
			}
			else
			{	
				unset($_SESSION['name']);
				unset($_SESSION['confirmpassword']);
				unset($_SESSION['username']);
				unset($_SESSION['email']);
				unset($_SESSION['password']);
				header('location:frmUsers.php?name='.$name.'');
			}	
	
		}
		else
		{	
			header('location:frmRegistration.php?msg=norecord');
		}
	}
}
else
{

	header('location:frmRegistration.php?msg=incorrect');
}
?>
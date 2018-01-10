<?php
error_reporting(E_ALL ^ E_NOTICE); 
require"../../config.php";
$username = $_POST['username'];
$password = $_POST['password'];


session_start();
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

if(($username=="") || ($password==""))
{
	
	header('location:frmCompanies.php?msg=empty');
}

else
{
	$sql="SELECT * FROM tbl_tpo where Username='$username' and Password='$password'";

	$result = mysql_query($sql);

	$count = mysql_num_rows($result);

	if($count == 1)
	{	
		session_start();
		
		
		while($row=mysql_fetch_array($result))
		{
			$_SESSION['ID'] = $row['ID'];
			$_SESSION['NAME'] = $row['Name'];
			
			unset($_SESSION['username']);
			unset($_SESSION['password']);
			header('location:frmRegistration.php');
		}
	}
	else
	{
			
			header('location:frmlogin.php?msg=fail');
	}

}

?>
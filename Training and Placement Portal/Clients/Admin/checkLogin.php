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
	
	header('location:frmAdmin.php?msg=empty');
}

else
{
	$sql="SELECT * FROM tbl_admin where Username='$username' and Password='$password'";

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
			header('location:../../Admin/frmaddstaff.php');
		}
	}
	else
	{
			
			header('location:frmAdmin.php?msg=fail');
	}

}

?>
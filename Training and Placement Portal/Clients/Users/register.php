<?php
session_start();
require"../../config.php";
$sql = "INSERT INTO tbl_registertocompany (CompanyID,UserID) 
								VALUES ('$_GET[id]', '$_SESSION[ID]')";

	if (!mysql_query($sql))
	{
		die('Error - '.mysql_error());
	}
	else
	{	
		
		header('location:frmCompanies.php');
	}	

?>
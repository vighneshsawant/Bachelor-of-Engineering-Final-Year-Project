<?php
session_start();
require"../../config.php";
$sql = "Delete from  tbl_registertocompany where  CompanyID = '$_GET[id]' and UserID =  '$_SESSION[ID]'";

	if (!mysql_query($sql))
	{
		die('Error - '.mysql_error());
	}
	else
	{	
		
		header('location:frmCompanies.php');
	}	

?>
<?php
require"session_set.php";
require"../../config.php";


	$sql = "Delete from tbl_interview where ID = '$_GET[id]'";

	if (!mysql_query($sql))
	{
		die('Error - '.mysql_error());
	}
	else
	{	
		header('location:frmInterviews.php');
	}	
	


?>
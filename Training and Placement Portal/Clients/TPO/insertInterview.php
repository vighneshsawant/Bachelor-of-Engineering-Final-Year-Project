<?php
require"session_set.php";
require"../../config.php";

$requirement = $_POST['requirement'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
$seats = $_POST['seats'];
$idate = $_POST['idate'];
$time = $_POST['time'];
$requireper = $_POST['reqtotal'];
$spesub = $_POST['spesub'];
$spemarks = $_POST['spemarks'];
$cid = $_POST['cid'];


if(($requirement=="")|| ($address=="") ||  (count($qualification) < 1))
{
	
	header('location:frmInterviewAdd.php?msg=empty');
}

else 
{
	$qual = "";
	foreach($qualification as $q)
	{
		echo "<br>".$q;
		$qual = $qual.",".$q;
	}
	echo "<br>".$qual;
	$sql = "INSERT INTO tbl_interview 
	(Reqiurement, Qualification, Venue, Date, Timing, CompanyID,Seats,per,spesub,spemarks) 
	Values('$requirement','$qual','$address','$idate','$time','$cid','$seats','$requireper','$spesub','$spemarks')";

	if (!mysql_query($sql))
	{
		die('Error - '.mysql_error());
	}
	else
	{	

		// foreach($qualification as $q1)
		// {
		// 	$query="Select * From tbl_users Where quali='$q1'";
		// 	$result=mysql_query($query);
		// 	if(!$result)
		// 	{
		// 		die('Error - '.mysql_error());
		// 	}
		// 	else
		// 	{
		// 		while($row=mysql_fetch_array($result))
		// 		{
		// 			$totalper=$row['totalper'];
		// 			$email=$row['email'];
		// 			if($totalper>=$requireper)
		// 			{
		// 				echo "Send";
		// 			}
		// 		}
		// 	}
		// }
		header('location:frmInterviews.php');
	}	
	
}

?>
<?php
require"session_set.php";
require"../../config.php";

$requirement = $_POST['requirement'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
$seats = $_POST['seats'];
$day = $_POST['day'];
$month = $_POST['month'];
$hour = $_POST['hour'];
$minute = $_POST['minute'];
$time = $_POST['time'];



$_SESSION['requirement'] = $requirement;
$_SESSION['address'] = $address;
$_SESSION['day'] = $day;
$_SESSION['month'] = $month;
$_SESSION['qualification'] = $qualification;
$_SESSION['seats'] = $seats;
$_SESSION['hour'] = $hour;
$_SESSION['minute'] = $minute;
$_SESSION['time'] = $time;

if(($requirement=="")|| ($address=="") || (count($qualification) < 1))
{
	
	header('location:frmInterviewEdit.php?msg=empty');
}

else 
{
$qual = "";
	foreach($qualification as $q)
	{
		echo "<br>".$q;
		$qual = $qual.",".$q;
	}
	$date=$month.", ".$day;
	$timing = $hour.":".$minute." ".$time;
	$sql = "Update tbl_interview 
	SET Reqiurement = '$requirement', Qualification = '$qual', Venue = '$address', Date = '$date', Timing = '$timing' ,Seats ='$seats'
	where ID = '$_GET[id]'";

	if (!mysql_query($sql))
	{
		die('Error - '.mysql_error());
	}
	else
	{	
		unset($_SESSION['requirement']);
		unset($_SESSION['address']);
		unset($_SESSION['day']);
		unset($_SESSION['month']);
		unset($_SESSION['qualification']);
		unset($_SESSION['hour']);
		unset($_SESSION['minute']);
		unset($_SESSION['time']);
		unset($_SESSION['seats']);
		header('location:frmInterviews.php');
	}	
	
}

?>
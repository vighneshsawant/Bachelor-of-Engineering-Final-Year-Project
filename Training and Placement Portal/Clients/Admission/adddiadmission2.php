<?php
session_start();
require"../../config.php";

$place = $_POST['place'];
$csign = $_POST['csign'];
$date1 = $_POST['date1'];
$gsign = $_POST['gsign'];


$place1 = $_POST['place1'];
$date2 = $_POST['date2'];
$csign1 = $_POST['csign1'];

$acyear = $_POST['acyear'];
$tfees = $_POST['tfees'];
$recno = $_POST['recno'];
$pfees = $_POST['pfees'];
$sign = $_POST['sign'];



$_SESSION['place']=$place; 
$_SESSION['csign']=$csign;
$_SESSION['date1']=$date1;
$_SESSION['gsign']=$gsign;


$_SESSION['place1']=$place1;
$_SESSION['date2']=$date2;
$_SESSION['csign1']=$csign1;

$_SESSION['acyear']=$acyear;
$_SESSION['tfees']=$tfees;
$_SESSION['recno']=$recno;
$_SESSION['pfees']=$pfees;
$_SESSION['sign']=$sign;


if(($acyear=="") || ($recno==""))
{
	
	header('location:frmAdmission2.php?msg=empty');
}
else
{
	$sql = "INSERT INTO admission3(place, csign, date1, gsign,place1, date2, csign1, acyear,tfees, recno, pfees, sign)
			VALUES ('$place', '$csign', '$date1', '$gsign','$place1', '$date2', '$csign1', '$acyear','$tfees', '$recno', '$pfees', '$sign')";
	$result=mysql_query($sql);
		if (!$result)
		{
				die('Error - '.mysql_error());
		}
		else
		{	
			header('location:../../index.php');
		}	
}

?>
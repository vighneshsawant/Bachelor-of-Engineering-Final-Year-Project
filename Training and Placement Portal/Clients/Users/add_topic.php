<?php
require"session_set.php";
require"../../config.php";
$tbl_name="forum_question"; // Table name



// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_SESSION['NAME'];

$result5 = mysql_query("Select * from tbl_userprofile where UserID = '$_SESSION[ID]'");
while($row5=mysql_fetch_array($result5))
{
	$email=$row5['EmailID'];

}

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime,UserID,User,UserName)VALUES('$topic', '$detail', '$name', '$email', '$datetime','$_SESSION[ID]','User','$_SESSION[NAME]')";
$result=mysql_query($sql);

if($result){
header('location:frmForums.php');
}

?>
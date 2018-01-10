<?php
require"session_set.php";
require"../../config.php";


$photo = basename( $_FILES['photo']['name']);
echo $photo;
$target_path ="Data/";
$target_path1 = $target_path . $photo;

$date=date("jS  F Y");



if(move_uploaded_file($_FILES['photo']['tmp_name'], $target_path1)){

$sql = "INSERT INTO tbl_album(UserID, Photo, Date) VALUES ('$_SESSION[ID]','$photo','$date')";

if (!mysql_query($sql))
{
	die('Error - '.mysql_error());
}
else
{	
	
	header('location:frmAlbum.php');
}}
?>
<?php
require"session_set.php";
require"../../config.php";
$tbl_name="tbl_forum_answer"; // Table name

// Get value of id that sent from hidden field 
$id=$_GET['qid'];

// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

// get values that sent from form 
$a_name=$_SESSION['NAME'];

$result5 = mysql_query("Select * from tbl_userprofile where UserID = '$_SESSION[ID]'");
while($row5=mysql_fetch_array($result5))
{
	$a_email=$row5['EmailID'];

}
$a_answer=$_POST['a_answer']; 

$datetime=date("d/m/y H:i:s"); // create date and time

// Insert answer 
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime,UserID,User,UserName)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime','$_SESSION[ID]','User','$_SESSION[NAME]')";
$result2=mysql_query($sql2);

if($result2){


// If added new answer, add value +1 in reply column 
$tbl_name2="forum_question";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysql_query($sql3);
header('location:frmForumView.php?id='.$id.'');
}
else {
echo "ERROR";
}


?>
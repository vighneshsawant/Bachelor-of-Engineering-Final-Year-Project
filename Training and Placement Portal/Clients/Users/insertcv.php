<?php
session_start();
require"../../config.php";
$uid = $_SESSION['ID'];
$sname = $_POST['sname'];
$paddress = $_POST['paddress'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$nation = $_POST['nation'];
$mstatus = $_POST['mstatus'];
$lang = $_POST['lang'];

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
// for($i=0;$i<4;$i++)
// {
	$ex1 = $_POST['ex1'];
	$ui1 = $_POST['ui1'];
	$year1 = $_POST['year1'];
	$class1 = $_POST['class1'];
	$ex2 = $_POST['ex2'];
	$ui2 = $_POST['ui2'];
	$year2 = $_POST['year2'];
	$class2 = $_POST['class2'];
	$ex3 = $_POST['ex3'];
	$ui3 = $_POST['ui3'];
	$year3 = $_POST['year3'];
	$class3 = $_POST['class3'];
	$ex4 = $_POST['ex4'];
	$ui4 = $_POST['ui4'];
	$year4 = $_POST['year4'];
	$class4 = $_POST['class4'];
// }

if(($sname=="") || ($paddress=="") || ($email==""))
{
?>
	<script type="text/javascript">
		alert("Please Fillup All Fields");
		location="frmCreateCV.php";
	</script>
<?php
}
else
{
	$result1 = mysql_query("Select * from cv where sname = '$sname'");

	if ($result1)
	{
		echo $count1 = mysql_num_rows($result1);
		if($count1>0)
		{
?>
	<script type="text/javascript">
		alert("CV Allready Created");
		location="frmCreateCV.php";
	</script>
<?php
		}
		else
		{	
			$sql = "INSERT INTO cv(uid, sname, paddress, mobile,email, dob, gender,nation, mstatus, lang, q1, q2, q3, q4, ex1, ui1, year1, class1,ex2, ui2, year2, class2,ex3, ui3, year3, class3,ex4, ui4, year4, class4) VALUES ('$uid','$sname', '$paddress', '$mobile','$email', '$dob', '$gender','$nation', '$mstatus', '$lang', '$q1', '$q2', '$q3', '$q4', '$ex1', '$ui1', '$year1', '$class1','$ex2', '$ui2', '$year2', '$class2','$ex3', '$ui3', '$year3', '$class3','$ex4', '$ui4', '$year4', '$class4')";
	
			if (!mysql_query($sql))
			{
				die('Error - '.mysql_error());
			}
			else
			{	
?>
	<script type="text/javascript">
		alert("CV Created Successfully");
		location="frmCreateCV.php";
	</script>
<?php
			}
		}
	}
}
?>
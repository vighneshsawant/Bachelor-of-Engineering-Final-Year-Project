<?php
session_start();
require"../../config.php";

$year1 = $_POST['year1'];
$seat1 = $_POST['seat1'];
$grade1 = $_POST['grade1'];
$obtain1 = $_POST['obtain1'];
$result1 = $_POST['result1'];
$fsub1 = $_POST['fsub1'];

$year2 = $_POST['year2'];
$seat2 = $_POST['seat2'];
$grade2 = $_POST['grade2'];
$obtain2 = $_POST['obtain2'];
$result2 = $_POST['result2'];
$result2 = $_POST['result2'];
$fsub2 = $_POST['fsub2'];

$year3 = $_POST['year3'];
$seat3 = $_POST['seat3'];
$grade3 = $_POST['grade3'];
$obtain3 = $_POST['obtain3'];
$result3 = $_POST['result3'];
$fsub3 = $_POST['fsub3'];

$year4 = $_POST['year4'];
$seat4 = $_POST['seat4'];
$grade4 = $_POST['grade4'];
$obtain4 = $_POST['obtain4'];
$result4 = $_POST['result4'];
$fsub4 = $_POST['fsub4'];

$year5 = $_POST['year5'];
$seat5 = $_POST['seat5'];
$grade5 = $_POST['grade5'];
$obtain5 = $_POST['obtain5'];
$result5 = $_POST['result5'];
$fsub5 = $_POST['fsub5'];

$year6 = $_POST['year6'];
$seat6 = $_POST['seat6'];
$grade6 = $_POST['grade6'];
$obtain6 = $_POST['obtain6'];
$result6 = $_POST['result6'];
$fsub6 = $_POST['fsub6'];

$year7 = $_POST['year7'];
$seat7 = $_POST['seat7'];
$grade7 = $_POST['grade7'];
$obtain7 = $_POST['obtain7'];
$result7 = $_POST['result7'];
$fsub7 = $_POST['fsub7'];

$date1 = $_POST['date1'];
$ssign = $_POST['ssign'];
$place = $_POST['place'];
$name = $_POST['name'];

$date2 = $_POST['date2'];
$ssign1 = $_POST['ssign1'];
$place1 = $_POST['place1'];
$name1 = $_POST['name1'];

$tfees = $_POST['tfees'];
$ddno = $_POST['ddno'];
$date3 = $_POST['date3'];
$bank = $_POST['bank'];
$recno = $_POST['recno'];
$date4 = $_POST['date4'];

$esign = $_POST['esign'];
$csign = $_POST['csign'];
$rsign = $_POST['rsign'];
$psign = $_POST['psign'];

$date=date("jS  F Y");

$_SESSION['year1'] =$year1;
$_SESSION['seat1'] =$seat1;
$_SESSION['grade1'] =$grade1;
$_SESSION['obtain1'] =$obtain1;
$_SESSION['result1'] =$result1;
$_SESSION['fsub1'] =$fsub1;

$_SESSION['year2'] =$year2;
$_SESSION['seat2'] =$seat2;
$_SESSION['grade2'] =$grade2;
$_SESSION['obtain2'] =$obtain2;
$_SESSION['result2'] =$result2;
$_SESSION['fsub2'] =$fsub2;

$_SESSION['year3'] =$year3;
$_SESSION['seat3'] =$seat3;
$_SESSION['grade3'] =$grade3;
$_SESSION['obtain3'] =$obtain3;
$_SESSION['result3'] =$result3;
$_SESSION['fsub3'] =$fsub3;

$_SESSION['year4'] =$year4;
$_SESSION['seat4'] =$seat4;
$_SESSION['grade4'] =$grade4;
$_SESSION['obtain4'] =$obtain4;
$_SESSION['result4'] =$result4;
$_SESSION['fsub4'] =$fsub4;

$_SESSION['year5'] =$year5;
$_SESSION['seat5'] =$seat5;
$_SESSION['grade5'] =$grade5;
$_SESSION['obtain5'] =$obtain5;
$_SESSION['result5'] =$result5;
$_SESSION['fsub5'] =$fsub5;

$_SESSION['year6'] =$year6;
$_SESSION['seat6'] =$seat6;
$_SESSION['grade6'] =$grade6;
$_SESSION['obtain6'] =$obtain6;
$_SESSION['result6'] =$result6;
$_SESSION['fsub6'] =$fsub6;

$_SESSION['year7'] =$year7;
$_SESSION['seat7'] =$seat7;
$_SESSION['grade7'] =$grade7;
$_SESSION['obtain7'] =$obtain7;
$_SESSION['result7'] =$result7;
$_SESSION['fsub7'] =$fsub7;


$_SESSION['date1'] =$date1;
$_SESSION['ssign'] =$ssign;
$_SESSION['place'] =$place;
$_SESSION['name'] =$name;

$_SESSION['date2'] =$date2;
$_SESSION['ssign1'] =$ssign1;
$_SESSION['place1'] =$place1;
$_SESSION['name1'] =$name1;


$_SESSION['tfees'] =$tfees;
$_SESSION['ddno'] =$ddno;
$_SESSION['date3'] =$date3;
$_SESSION['bank'] =$bank;
$_SESSION['recno'] =$recno;
$_SESSION['date4'] =$date4;

$_SESSION['esign'] =$esign;
$_SESSION['csign'] =$csign;
$_SESSION['rsign'] =$rsign;
$_SESSION['psign'] =$psign;


if(($year1=="") || ($year2==""))
{
	
	header('location:frmEngAdmission.php?msg=empty');
}
else
{
	 $sql = "INSERT INTO defeadmission1(year1, seat1, grade1, obtain1, result1, fsub1,year2, seat2, grade2, obtain2, result2, fsub2, year3, grade3,seat3, obtain3, result3,fsub3, year4, seat4, grade4, obtain4, result4, fsub4, year5,seat5, grade5, obtain5, result5, fsub5, year6, seat6, grade6, obtain6, result6, fsub6, year7, seat7, grade7, obtain7, result7, fsub7, date1, ssign, place, name, date2, ssign1, place1, name1, tfees, ddno, date3, bank, recno, date4, esign, csign, rsign, psign)
		VALUES ('$year1', '$seat1', '$grade1', '$obtain1', '$result1', '$fsub1','$year2', '$seat2', '$grade2', '$obtain2', '$result2', '$fsub2', '$year3', '$grade3','$seat3', '$obtain3', '$result3','$fsub3', '$year4', '$seat4', '$grade4', '$obtain4', '$result4', '$fsub4', '$year5','$seat5', '$grade5', '$obtain5', '$result5', '$fsub5', '$year6', '$seat6', '$grade6', '$obtain6', '$result6','$fsub6', '$year7', '$seat7', '$grade7', '$obtain7', '$result7', '$fsub7', '$date1', '$ssign', '$place', '$name', '$date2', '$ssign1', '$place1', '$name1', '$tfees', '$ddno', '$date3', '$bank', '$recno', '$date4', '$esign', '$csign', '$rsign', '$psign')";
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
<?php
session_start();
require"../../config.php";

$math = $_POST['math'];
$phy = $_POST['phy'];
$dash = $_POST['dash'];
$total = $_POST['total'];

$board10 = $_POST['board10'];
$year10 = $_POST['year10'];
$max10 = $_POST['max10'];
$obt10 = $_POST['obt10'];
$class10 = $_POST['class10'];
$per10 = $_POST['per10'];

$board12 = $_POST['board12'];
$year12 = $_POST['year12'];
$max12 = $_POST['max12'];
$obt12 = $_POST['obt12'];
$class12 = $_POST['class12'];
$per12 = $_POST['per12'];

$boardd = $_POST['boardd'];
$yeard = $_POST['yeard'];
$maxd = $_POST['maxd'];
$obtd = $_POST['obtd'];
$classd = $_POST['classd'];
$perd = $_POST['perd'];

$jroll = $_POST['jroll'];
$jphy = $_POST['jphy'];
$jche = $_POST['jche'];
$jmath = $_POST['jmath'];
$jtotal = $_POST['jtotal'];
$jper = $_POST['jper'];

$date1 = $_POST['date1'];
$ssign = $_POST['ssign'];
$place = $_POST['place'];
$name = $_POST['name'];

$date1 = $_POST['date2'];
$ssign = $_POST['ssign1'];
$place = $_POST['place1'];
$name = $_POST['name1'];

$tfees = $_POST['tfees'];
$ddno = $_POST['ddno'];
$date3 = $_POST['date3'];
$bank = $_POST['bank'];
$recno = $_POST['recno'];
$date4 = $_POST['date4'];

$csign = $_POST['csign'];
$rsign = $_POST['rsign'];
$psign = $_POST['psign'];

$date=date("jS  F Y");

$_SESSION['math'] =$math;
$_SESSION['phy'] =$phy;
$_SESSION['dash'] =$dash;
$_SESSION['total'] =$total;

$_SESSION['board10'] =$board10;
$_SESSION['year10'] =$year10;
$_SESSION['max10'] =$max10;
$_SESSION['obt10'] =$obt10;
$_SESSION['class10'] =$class10;
$_SESSION['per10'] =$per10;

$_SESSION['board12'] =$board12;
$_SESSION['year12'] =$year12;
$_SESSION['max12'] =$max12;
$_SESSION['obt12'] =$obt12;
$_SESSION['class12'] =$class12;
$_SESSION['per12'] =$per12;

$_SESSION['boardd'] =$boardd;
$_SESSION['yeard'] =$yeard;
$_SESSION['maxd'] =$maxd;
$_SESSION['obtd'] =$obtd;
$_SESSION['classd'] =$classd;
$_SESSION['perd'] =$perd;

$_SESSION['jroll'] =$jroll;
$_SESSION['jphy'] =$jphy;
$_SESSION['jche'] =$jche;
$_SESSION['jmath'] =$jmath;
$_SESSION['jtotal'] =$jtotal;
$_SESSION['jper'] =$jper;

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

$_SESSION['csign'] =$csign;
$_SESSION['rsign'] =$rsign;
$_SESSION['psign'] =$psign;


if(($diyear=="") || ($sname==""))
{
	
	header('location:frmEngAdmission.php?msg=empty');
}
else
{
	$sql = "INSERT INTO EngAdmission2(math, phy, dash, total, board10, year10,max10, obt10, class10, per10, board12, year12,max12, obt12, class12, per12, boardd, yeard,maxd, obtd, classd, perd, jroll, jphy, jche, jmath,jtotal, jper, date1, ssign, place, name, date2, ssign1, place1, name1, tfees, ddno, date3, bank, recno, date4, csign, rsign, psign)
		VALUES ('$math', '$phy', '$dash', '$total', '$board10', '$year10','$max10', '$obt10', '$class10', '$per10',  '$board12', '$year12','$max12', '$obt12', '$class12', '$per12', '$boardd', '$yeard','$maxd', '$obtd', '$classd', '$perd', '$jroll', '$jphy', '$jche', '$jmath','$jtotal', '$jper', '$date1', '$ssign', '$place', '$name', '$date2', '$ssign1', '$place1', '$name1', '$tfees', '$ddno', '$date3', '$bank', '$recno', '$date4', '$csign', '$rsign', '$psign')";
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
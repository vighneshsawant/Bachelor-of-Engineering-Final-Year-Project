<?php
session_start();
require"../../config.php";

echo $diclass = $_POST['declass'];
$diyear = "FE";
$sname = $_POST['sname'];
$fname = $_POST['fname'];
$faname = $_POST['faname'];
$mname = $_POST['mname'];
$adcnum = $_POST['adcnum'];
$bdate = $_POST['bdate'];
$placeb = $_POST['placeb'];
$nation = $_POST['nation'];
$mtongue = $_POST['mtongue'];
$religion = $_POST['religion'];
$caste = $_POST['caste'];
$category = $_POST['category'];
$xconducted = $_POST['xconducted'];
$scattended = $_POST['scattended'];
$scaddress = $_POST['scaddress'];
$scdist = $_POST['scdist'];
$scstate = $_POST['scstate'];
$laddress = $_POST['laddress'];
$lpin = $_POST['lpin'];
$lemail = $_POST['lemail'];
$lstdno = $_POST['lstdno'];
$lmobile = $_POST['lmobile'];
$paddress = $_POST['paddress'];
$ppin = $_POST['ppin'];
$pstdno = $_POST['pstdno'];
$pmobile = $_POST['pmobile'];
$faaddress = $_POST['faaddress'];
$faoccu = $_POST['faoccu'];
$faincome = $_POST['faincome'];
$faoffaddress = $_POST['faoffaddress'];
$fatelno = $_POST['fatelno'];

$date=date("jS  F Y");

$_SESSION['diclass'] =$diclass;
$_SESSION['diyear'] =$diyear;
$_SESSION['sname'] =$sname;
$_SESSION['fname'] =$fname;
$_SESSION['faname'] =$faname;
$_SESSION['mname'] =$mname;
$_SESSION['adcnum'] =$adcnum;
$_SESSION['bdate'] =$bdate;
$_SESSION['placeb'] =$placeb;
$_SESSION['nation'] =$nation;
$_SESSION['mtongue'] =$mtongue;
$_SESSION['religion'] =$religion;
$_SESSION['caste'] =$caste;
$_SESSION['category'] =$category;
$_SESSION['xconducted'] =$xconducted;
$_SESSION['scattended'] =$scattended;
$_SESSION['scaddress'] =$scaddress;
$_SESSION['scdist'] =$scdist;
$_SESSION['scstate'] =$scstate;
$_SESSION['laddress'] =$laddress;
$_SESSION['lpin'] =$lpin;
$_SESSION['lemail'] =$lemail;
$_SESSION['lstdno'] =$lstdno;
$_SESSION['lmobile'] =$lmobile;
$_SESSION['paddress'] =$paddress;
$_SESSION['ppin'] =$ppin;
$_SESSION['pstdno'] =$pstdno;
$_SESSION['pmobile'] =$pmobile;
$_SESSION['faaddress'] =$faaddress;
$_SESSION['faoccu'] =$faoccu;
$_SESSION['faincome'] =$faincome;
$_SESSION['faoffaddress'] =$faoffaddress;
$_SESSION['fatelno'] =$fatelno;

if(($diclass=="") || ($diyear=="") || ($sname==""))
{
	
	//header('location:frmFirstEngAdmission.php?msg=empty');
}
else
{
		$file_name1="";
		$num=rand(10,100);
		if(isset($_FILES['photo']))
		{
			$file_name1 =$sname.$num.".jpg";
			$file_tmp =$_FILES['photo']['tmp_name'];
			$destination = "student/" .$file_name1;

			if(file_exists($destination)){
				echo 'File ', $destination, ' already exists!';
			} else
			{ 
				move_uploaded_file($file_tmp, $destination);
				echo "Success";
			}
		}
	$sql = "INSERT INTO admission1(diclass, diyear, sname, fname,faname, mname, adcnum, bdate,placeb, nation, mtongue, religion,caste, category, xconducted, scattended,scaddress, scdist, scstate, laddress,lpin, lemail, lstdno, lmobile,paddress, ppin, pstdno, pmobile,faaddress, faoccu, faincome, faoffaddress,fatelno)
					VALUES ('$diclass', '$diyear', '$sname', '$fname','$faname', '$mname', '$adcnum', '$bdate','$placeb', '$nation', '$mtongue', '$religion','$caste', '$category', '$xconducted', '$scattended','$scaddress', '$scdist', '$scstate', '$laddress','$lpin', '$lemail', '$lstdno', '$lmobile','$paddress', '$ppin', '$pstdno', '$pmobile','$faaddress', '$faoccu', '$faincome', '$faoffaddress','$fatelno')";
	$result=mysql_query($sql);
		if (!$result)
		{
				die('Error - '.mysql_error());
		}
		else
		{	
			unset($_SESSION['diclass']);
			unset($_SESSION['diyear']);
			unset($_SESSION['sname']);
			unset($_SESSION['fname']);
			unset($_SESSION['faname']);
			unset($_SESSION['mname']);
			unset($_SESSION['adcnum']);
			unset($_SESSION['bdate']);
			unset($_SESSION['placeb']);
			unset($_SESSION['nation']);
			unset($_SESSION['mtongue']);
			unset($_SESSION['religion']);
			unset($_SESSION['caste']);
			unset($_SESSION['category']);
			unset($_SESSION['xconducted']);
			unset($_SESSION['scattended']);
			unset($_SESSION['scaddress']);
			unset($_SESSION['scdist']);
			unset($_SESSION['scstate']);
			unset($_SESSION['laddress']);
			unset($_SESSION['lpin']);
			unset($_SESSION['lemail']);
			unset($_SESSION['lstdno']);
			unset($_SESSION['lmobile']);
			unset($_SESSION['paddress']);
			unset($_SESSION['ppin']);
			unset($_SESSION['pstdno']);
			unset($_SESSION['pmobile']);
			unset($_SESSION['faaddress']);
			unset($_SESSION['faoccu']);
			unset($_SESSION['faincome']);
			unset($_SESSION['faoffaddress']);
			unset($_SESSION['fatelno']);
			header('location:frmFirstEngAdmission2.php');
		}	
}

?>
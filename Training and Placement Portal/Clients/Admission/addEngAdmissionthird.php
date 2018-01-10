<?php
session_start();
require"../../config.php";

$deyear = $_POST['deyear'];
$declass = $_POST['declass'];
$addyear = $_POST['addyear'];
$recnum = $_POST['recnum'];
$recdate = $_POST['recdate'];
$adcnum = $_POST['adcnum'];
$sname = $_POST['sname'];
$fname = $_POST['fname'];
$faname = $_POST['faname'];
$mname = $_POST['mname'];
$bdate = $_POST['bdate'];
$placeb = $_POST['placeb'];
$bstate = $_POST['bstate'];
$nation = $_POST['nation'];
$religion = $_POST['religion'];
$caste = $_POST['caste'];
$category = $_POST['category'];
$cattended = $_POST['cattended'];
$caddress = $_POST['caddress'];
$ctal = $_POST['ctal'];
$cdist = $_POST['cdist'];
$cstate = $_POST['cstate'];
$laddress = $_POST['laddress'];
$ltal = $_POST['ltal'];
$ldist = $_POST['ldist'];
$lstate = $_POST['lstate'];
$lpin = $_POST['lpin'];
$slmobile = $_POST['slmobile'];
$lemail = $_POST['lemail'];
$paddress = $_POST['paddress'];
$ptal = $_POST['ptal'];
$pdist = $_POST['pdist'];
$pstate = $_POST['pstate'];
$ppin = $_POST['ppin'];
$pstdno = $_POST['pstdno'];
$pmobile = $_POST['pmobile'];
$fapname = $_POST['fapname'];
$faoccu = $_POST['faoccu'];
$faincome = $_POST['faincome'];
$famobno = $_POST['famobno'];
$faoffaddress = $_POST['faoffaddress'];

$date=date("jS  F Y");

$_SESSION['deyear'] =$deyear;
$_SESSION['declass'] =$declass;
$_SESSION['addyear'] =$addyear;
$_SESSION['recnum'] =$recnum;
$_SESSION['recdate'] =$recdate;
$_SESSION['adcnum'] =$adcnum;
$_SESSION['sname'] =$sname;
$_SESSION['fname'] =$fname;
$_SESSION['faname'] =$faname;
$_SESSION['mname'] =$mname;
$_SESSION['bdate'] =$bdate;
$_SESSION['placeb'] =$placeb;
$_SESSION['bstate'] =$bstate;
$_SESSION['nation'] =$nation;
$_SESSION['religion'] =$religion;
$_SESSION['caste'] =$caste;
$_SESSION['category'] =$category;
$_SESSION['cattended'] =$cattended;
$_SESSION['caddress'] =$caddress;
$_SESSION['ctal'] =$ctal;
$_SESSION['cdist'] =$cdist;
$_SESSION['cstate'] =$cstate;
$_SESSION['laddress'] =$laddress;
$_SESSION['ltal'] =$ltal;
$_SESSION['ldist'] =$ldist;
$_SESSION['lstate'] =$lstate;
$_SESSION['lpin'] =$lpin;
$_SESSION['lmobile'] =$slmobile;
$_SESSION['lemail'] =$lemail;
$_SESSION['paddress'] =$paddress;
$_SESSION['ptal'] =$ptal;
$_SESSION['pdist'] =$pdist;
$_SESSION['pstate'] =$pstate;
$_SESSION['ppin'] =$ppin;
$_SESSION['pstdno'] =$pstdno;
$_SESSION['pmobile'] =$pmobile;
$_SESSION['faname'] =$faname;
$_SESSION['faoccu'] =$faoccu;
$_SESSION['faincome'] =$faincome;
$_SESSION['famobno'] =$famobno;
$_SESSION['faoffaddress'] =$faoffaddress;


if(($deyear=="") || ($sname==""))
{
	
	header('location:frmEngAdmission.php?msg=empty');
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
	$sql = "INSERT INTO deadmission(deyear, declass, adyear, recnum, recdate, sname, fname,faname, mname, adcnum, bdate, placeb, bstate, nation, religion,caste, category, cattended,caddress, ctal, cdist, cstate, laddress, ltal, ldist, lstate,lpin, slmobile, lemail, paddress, ptal, pdist, pstate, ppin, pstdno, pmobile, fapname, faoccu, faincome, famobno, faoffaddress)
					VALUES ('$deyear', '$declass', '$addyear', '$recnum', '$recdate', '$sname', '$fname','$faname', '$mname', '$adcnum', '$bdate', '$placeb', '$bstate', '$nation', '$religion','$caste', '$category', '$cattended','$caddress', '$ctal', '$cdist', '$cstate', '$laddress', '$ltal', '$ldist', '$lstate','$lpin', '$slmobile', '$lemail', '$paddress', '$ptal', '$pdist', '$pstate', '$ppin', '$pstdno', '$pmobile','$fapname', '$faoccu', '$faincome', '$famobno', '$faoffaddress')";
	$result=mysql_query($sql);
		if (!$result)
		{
				die('Error - '.mysql_error());
		}
		else
		{	
			header('location:frmFESEMarksthird.php');
		}	
}

?>
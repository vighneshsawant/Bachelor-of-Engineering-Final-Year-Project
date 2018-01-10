<?php
//include "../connect.php";
require('fpdf.php');
error_reporting(E_ALL ^ E_NOTICE);
	require"../session_set.php";
	require"../../../config.php";
	$result = mysql_query("Select * from tbl_userprofile where UserID = '$_SESSION[ID]'");
	while($row=mysql_fetch_array($result))
	{
		$maritial = $row['MaritialStatus'];
		$name = $row['Name'];
		$date = $row['DOB'];
		$gender = $row['Gender'];
		$contact = $row['Contact'];
		$address = $row['Address'];
		$email = $row['EmailID'];
		$city = $row['City'];
		$state = $row['State'];
		$sscyear = $row['SSCYear'];
		$sscpercentage = $row['SSCPercentage'];
		$sscuniversity = $row['SSCUniversity'];
		$hscskill = $row['HSCSkill'];
		$hscyear = $row['HSCYear'];
		$hscpercentage = $row['HSCPercentage'];
		$hscuniversity = $row['HSCUniversity'];
		$branch = $row['Branch'];
		$sem1percentage = $row['Sem1Percentage'];
		$sem1KTLive = $row['Sem1KTLive'];
		$sem1KTDead = $row['Sem1KTDead'];
		$sem1KTDrop = $row['Sem1KTDrop'];


		$sem2percentage = $row['Sem2Percentage'];
		$sem2KTLive = $row['Sem2KTLive'];
		$sem2KTDead = $row['Sem2KTDead'];
		$sem2KTDrop = $row['Sem2KTDrop'];


		$sem3percentage = $row['Sem3Percentage'];
		$sem3KTLive = $row['Sem3KTLive'];
		$sem3KTDead = $row['Sem3KTDead'];
		$sem3KTDrop = $row['Sem3KTDrop'];


		$sem4percentage = $row['Sem4Percentage'];
		$sem4KTLive = $row['Sem4KTLive'];
		$sem4KTDead = $row['Sem4KTDead'];
		$sem4KTDrop = $row['Sem4KTDrop'];


		$sem5percentage = $row['Sem5Percentage'];
		$sem5KTLive = $row['Sem5KTLive'];
		$sem5KTDead = $row['Sem5KTDead'];
		$sem5KTDrop = $row['Sem5KTDrop'];


		$sem6percentage = $row['Sem6Percentage'];
		$sem6KTLive = $row['Sem6KTLive'];
		$sem6KTDead = $row['Sem6KTDead'];
		$sem6KTDrop = $row['Sem6KTDrop'];


		$sem7percentage = $row['Sem7Percentage'];
		$sem7KTLive = $row['Sem7KTLive'];
		$sem7KTDead = $row['Sem7KTDead'];
		$sem7KTDrop = $row['Sem7KTDrop'];


		$sem8percentage = $row['Sem8Percentage'];
		$sem8KTLive = $row['Sem8KTLive'];
		$sem8KTDead = $row['Sem8KTDead'];
		$sem8KTDrop = $row['Sem8KTDrop'];
		
		$photo = $row['Photo'];
		$resume = $row['CV'];
	}
$matchdate=explode('/',$date);
$day = $matchdate[0];
$month = $matchdate[1];
$year = $matchdate[2];


switch($month)
{
case 1: $m="January";break;
case 2: $m="February";break;
case 3: $m="March";break;
case 4: $m="April";break;
case 5: $m="May";break;
case 6: $m="June";break;
case 7: $m="July";break;
case 8: $m="August";break;
case 9: $m="September";break;
case 10: $m="October";break;
case 11: $m="November";break;
case 12: $m="December";break;
}
$dob = $day." ".$m.", ".$year;
$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',14);

$pdf->Cell(10,3,"                                                        CV of ".$_SESSION['NAME']);
$pdf->SetFont('Arial','B',10);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(450,3,"------------------------------------------------------------------------------------------------------------------------------------------------------------------");

$pdf->Ln();
$pdf->Cell(10,3,"Personal Details");
$pdf->Ln();
$pdf->Cell(450,3,"------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"Name :-");
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,"                 ".$name);
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"Gender :-");
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,"                 ".$gender);
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"Birth Date :-");
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,"                  ".$dob);
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"Marital Status :-");
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,"                 ".$maritial);
$pdf->Ln();


$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"Address :");
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,"                 ".$address.", ".$state);
$pdf->Ln();


$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"Contact :-");
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,"                 ".$contact);
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"Email ID :-");
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,"                 ".$email);
$pdf->Ln();

$pdf->SetFont('Arial','B',10);
$pdf->Ln();
$pdf->Cell(450,3,"------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();
$pdf->Cell(10,3,"Educational Qualification");
$pdf->Ln();
$pdf->Cell(450,3,"------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"SSC :-");
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,"                 Passed SSC from ".$sscuniversity." Board in ".$sscyear." with ".$sscpercentage."%");
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"HSC :-");
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,"                 Passed HSC from ".$hscuniversity." Board in ".$hscyear." with ".$hscpercentage."%");
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"Engineering :-");
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"                 Branch :-");
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,"                             ".$branch);
$pdf->Ln();
if($sem1percentage<>"Not Applicable")
{
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,4,"                              SEM I :-");
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(10,4,"                                          ".$sem1percentage."");
	$pdf->Ln();
}
if($sem2percentage<>"Not Applicable")
{
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,4,"                              SEM II :-");
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(10,4,"                                          ".$sem2percentage."");
	$pdf->Ln();
}
if($sem3percentage<>"Not Applicable")
{
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,4,"                              SEM III :-");
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(10,4,"                                          ".$sem3percentage."");
	$pdf->Ln();
}
if($sem4percentage<>"Not Applicable")
{
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,4,"                              SEM IV :-");
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(10,4,"                                          ".$sem4percentage."");
	$pdf->Ln();
}
if($sem5percentage<>"Not Applicable")
{
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,4,"                              SEM V :-");
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(10,4,"                                          ".$sem5percentage."");
	$pdf->Ln();
}
if($sem6percentage<>"Not Applicable")
{
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,4,"                              SEM VI :-");
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(10,4,"                                          ".$sem6percentage."");
	$pdf->Ln();
}
if($sem7percentage<>"Not Applicable")
{
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,4,"                              SEM VII :-");
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(10,4,"                                          ".$sem7percentage."");
	$pdf->Ln();
}
if($sem8percentage<>"Not Applicable")
{
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,4,"                              SEM VIII :-");
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(10,4,"                                          ".$sem8percentage."");
	$pdf->Ln();
}

$pdf->SetFont('Arial','B',10);
$pdf->Ln();
$pdf->Cell(450,3, "------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();

$pdf->SetFont('Arial','B',10);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(10,4,"                                                                                                                                                  ".$_SESSION['NAME']);

$pdf->SetFont('Arial','B',10);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(450,3, "------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();

$pdf->Output();

?>

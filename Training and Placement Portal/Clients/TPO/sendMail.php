<?php
require "../../config.php";
require "session_set.php";
require("../../mail/mail.php");
error_reporting(E_ALL ^ E_NOTICE); 
$rows = $_POST['rows'];
$id = $_POST['id'];
$result=mysql_query("Select * from tbl_interview where ID = '$id'");
if (!$result)
{
	die('Error - '.mysql_error());
}
else
{
	if($row=mysql_fetch_array($result))
	{
		$Requirement=$row['Reqiurement'];
		$Qualification=$row['Qualification'];
		$date=$row['Date'];
		$Venue=$row['Venue'];
		$timing=$row['Timing'];
		$seats=$row['Seats'];
		$per=$row['per'];
		$spesub=$row['spesub'];
		$spemarks=$row['spemarks'];
		$currdate = date('d/m/Y');
		$CompanyID=$row['CompanyID'];
		$CName="";
		$result1=mysql_query("Select * from tbl_company where ID = '$CompanyID'");
		if($row1=mysql_fetch_array($result1))
		{
			$CName=$row1['Name'];
		}

						$body='<html>
						<body style="font-size:18px;font-family:Times New Roman;">
							<div style="float:right;font-size:20px;background-color:cyan;">Event Date:-'.$currdate.'</div>
							<div style="font-size:25px;padding:5px 15px;background-color:cyan;box-shadow:10px 10px 10px 10px;">
								Sub: You Are Eligible for this Campus
							</div>
							<div style="padding:10px;">
								<p>Company Name:-<b style="color:red">'.$CName.'</b></p><br>
								<p>Post:-<b style="color:red">'.$Requirement.'</b></p><br>
								<p>Job Location:-<b style="color:red">'.$Venue.'</b></p><br>
								<p>Eligibility Criteria:-<b style="color:red">'.$Qualification.'</b></p><br>
								<p>Minimum:-<b style="color:red">'.$per.'</b></p><br>
								<p>Date and Time:-<b style="color:red">'.$date.' at '.$timing.'</b></p><br>
							</div>
							<div style="padding:30px;">
								 <p>Regards,</p>
								 <p>Sanjay A. Patil ,</p>
								 <p>Associate Professor,</p>
								 <p>Electronics and Telecomm. Dept,</p>
								 <p>A.C. Patil College of Engineering</p>
								 <p>Plot No 17, Sector 04,</p>
								 <p>Kharghar, Navi Mumbai-410 210</p>
								 <p>Office-022 27745722/32, 22976098</p>
								 <p>Email-tpo@acpce.ac.in, sapatil@acpce.ac.in</p>
							</div>
						</body>
					   </html>';
					   $sub="Campus Releated Information from College";

					for($i=0;$i<=$rows;$i++)
					{
					   echo $email = $_POST['email'.$i];
					   sendmail($email,$sub,$body);
					}
		
		header("location:frmInterviews.php?msg=ok");

	}
}
?>

												
														
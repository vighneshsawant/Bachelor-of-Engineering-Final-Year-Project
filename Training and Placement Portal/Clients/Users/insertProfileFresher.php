<?php
require"session_set.php";
require"../../config.php";
$maritial = $_POST['maritial'];$_SESSION['maritial'] = $maritial;
$name = $_SESSION['NAME'];
$day = $_POST['day'];$_SESSION['day'] = $day;
$month = $_POST['month'];$_SESSION['month'] = $month;
$year = $_POST['year'];$_SESSION['year'] = $year;
$gender = $_POST['gender'];$_SESSION['gender'] = $gender;
$contact = $_POST['contact'];$_SESSION['contact'] = $contact;
$address = $_POST['address'];$_SESSION['address'] = $address;
$email = $_POST['email'];$_SESSION['email'] = $email;
$city = $_POST['city'];$_SESSION['city'] = $city;
$state = $_POST['state'];$_SESSION['state'] = $state;
$sscyear = $_POST['sscyear'];$_SESSION['sscyear'] = $sscyear;
$sscpercentage = $_POST['sscpercentage'];$_SESSION['sscpercentage'] = $sscpercentage;
$sscuniversity = $_POST['sscuniversity'];$_SESSION['sscuniversity'] = $sscuniversity;
$hscskill = $_POST['hscskill'];$_SESSION['hscskill'] = $hscskill;
$hscyear = $_POST['hscyear'];$_SESSION['hscyear'] = $hscyear;
$hscpercentage = $_POST['hscpercentage'];$_SESSION['hscpercentage'] = $hscpercentage;
$hscuniversity = $_POST['hscuniversity'];$_SESSION['hscuniversity'] = $hscuniversity;
$branch = $_POST['branch'];$_SESSION['branch'] = $branch;

$sem1percentage = $_POST['sem1percentage'];$_SESSION['sem1percentage'] = $sem1percentage;
$sem1KTLive = $_POST['sem1KTLive'];$_SESSION['sem1KTLive'] = $sem1KTLive;
$sem1KTDead = $_POST['sem1KTDead'];$_SESSION['sem1KTDead'] = $sem1KTDead;
$sem1KTDrop = $_POST['sem1KTDrop'];$_SESSION['sem1KTDrop'] = $sem1KTDrop;

$sem2percentage = $_POST['sem2percentage'];$_SESSION['sem2percentage'] = $sem2percentage;
$sem2KTLive = $_POST['sem2KTLive'];$_SESSION['sem2KTLive'] = $sem2KTLive;
$sem2KTDead = $_POST['sem2KTDead'];$_SESSION['sem2KTDead'] = $sem2KTDead;
$sem2KTDrop = $_POST['sem2KTDrop'];$_SESSION['sem2KTDrop'] = $sem2KTDrop;

$sem3percentage = $_POST['sem3percentage'];$_SESSION['sem3percentage'] = $sem3percentage;
$sem3KTLive = $_POST['sem3KTLive'];$_SESSION['sem3KTLive'] = $sem3KTLive;
$sem3KTDead = $_POST['sem3KTDead'];$_SESSION['sem3KTDead'] = $sem3KTDead;
$sem3KTDrop = $_POST['sem3KTDrop'];$_SESSION['sem3KTDrop'] = $sem3KTDrop;

$sem4percentage = $_POST['sem4percentage'];$_SESSION['sem4percentage'] = $sem4percentage;
$sem4KTLive = $_POST['sem4KTLive'];$_SESSION['sem4KTLive'] = $sem4KTLive;
$sem4KTDead = $_POST['sem4KTDead'];$_SESSION['sem4KTDead'] = $sem4KTDead;
$sem4KTDrop = $_POST['sem4KTDrop'];$_SESSION['sem4KTDrop'] = $sem4KTDrop;

$sem5percentage = $_POST['sem5percentage'];$_SESSION['sem5percentage'] = $sem5percentage;
$sem5KTLive = $_POST['sem5KTLive'];$_SESSION['sem5KTLive'] = $sem5KTLive;
$sem5KTDead = $_POST['sem5KTDead'];$_SESSION['sem5KTDead'] = $sem5KTDead;
$sem5KTDrop = $_POST['sem5KTDrop'];$_SESSION['sem5KTDrop'] = $sem5KTDrop;

$sem6percentage = $_POST['sem6percentage'];$_SESSION['sem6percentage'] = $sem6percentage;
$sem6KTLive = $_POST['sem6KTLive'];$_SESSION['sem6KTLive'] = $sem6KTLive;
$sem6KTDead = $_POST['sem6KTDead'];$_SESSION['sem6KTDead'] = $sem6KTDead;
$sem6KTDrop = $_POST['sem6KTDrop'];$_SESSION['sem6KTDrop'] = $sem6KTDrop;

$sem7percentage = $_POST['sem7percentage'];$_SESSION['sem7percentage'] = $sem7percentage;
$sem7KTLive = $_POST['sem7KTLive'];$_SESSION['sem7KTLive'] = $sem7KTLive;
$sem7KTDead = $_POST['sem7KTDead'];$_SESSION['sem7KTDead'] = $sem7KTDead;
$sem7KTDrop = $_POST['sem7KTDrop'];$_SESSION['sem7KTDrop'] = $sem7KTDrop;

$sem8percentage = $_POST['sem8percentage'];$_SESSION['sem8percentage'] = $sem8percentage;
$sem8KTLive = $_POST['sem8KTLive'];$_SESSION['sem8KTLive'] = $sem8KTLive;
$sem8KTDead = $_POST['sem8KTDead'];$_SESSION['sem8KTDead'] = $sem8KTDead;
$sem8KTDrop = $_POST['sem8KTDrop'];$_SESSION['sem8KTDrop'] = $sem8KTDrop;


$photo = basename( $_FILES['photo']['name']);$_SESSION['photo'] = $photo;
$resume = basename( $_FILES['resume']['name']);$_SESSION['resume'] = $resume;
$target_path = "Data/";
$target_path1 = $target_path . $photo;
$target_path2 = $target_path . $resume;


$dob=$day."/".$month."/".$year;


if(($day=="") || ($month=="") || ($year=="") ||  
($gender =="") || ($contact=="") || ($address =="") || 
($email=="") || ($city=="") || ( $state=="") || 
($sscyear =="") || ($sscpercentage=="") || ($sscuniversity=="") ||  
($hscskill =="") || ($hscyear =="") || ($hscpercentage =="") || 
($hscuniversity =="") )
{
	
	header('location:frmProfileAdd.php?msg=empty');
}

else
{
	$email_parts = explode("@",$email);
	$email_parts = explode(".",$email_parts[1]);
	if(strlen($email_parts[1])>3) 
	{ 
		header('location:frmProfileAdd.php?msg=invalid');
	}
	else
	{
		$result1 = mysql_query("Select * from tbl_college_records where Name = '$name'");

		if ($result1)
		{
			while($row = mysql_fetch_array($result1))
			{
				$chkbranch = $row['Branch'];
				
			}

				move_uploaded_file($_FILES['photo']['tmp_name'], $target_path1);
				move_uploaded_file($_FILES['resume']['tmp_name'], $target_path2);
			
				$sql = "INSERT INTO tbl_userprofile
				(UserID, Name, Address, EmailID, DOB, Contact, City, State, Gender, 
				SSCYear, SSCUniversity, SSCPercentage, 
				HSCUniversity, HSCYear, HSCSkill, HSCPercentage, 
				Photo, CV, MaritialStatus ,
				Branch, Sem1Percentage, Sem1KTLive, Sem1KTDead, Sem1KTDrop, 
				Sem2Percentage, Sem2KTLive, Sem2KTDead, Sem2KTDrop, 
				Sem3Percentage, Sem3KTLive, Sem3KTDead, Sem3KTDrop, 
				Sem4Percentage, Sem4KTLive, Sem4KTDead, Sem4KTDrop, 
				Sem5Percentage, Sem5KTLive, Sem5KTDead, Sem5KTDrop, 
				Sem6Percentage, Sem6KTLive, Sem6KTDead, Sem6KTDrop, 
				Sem7Percentage, Sem7KTLive, Sem7KTDead, Sem7KTDrop, 
				Sem8Percentage, Sem8KTLive, Sem8KTDead, Sem8KTDrop )  
				VALUES ('$_SESSION[ID]','$name','$address','$email','$dob','$contact','$city','$state','$gender',
				'$sscyear','$sscuniversity','$sscpercentage',
				'$hscuniversity','$hscyear','$hscskill','$hscpercentage',
				'$photo','$resume','$maritial',
				'$branch', '$sem1percentage', '$sem1KTLive', '$sem1KTDead', '$sem1KTDrop'
				, '$sem2percentage', '$sem2KTLive', '$sem2KTDead', '$sem2KTDrop'
				, '$sem3percentage', '$sem3KTLive', '$sem3KTDead', '$sem3KTDrop'
				, '$sem4percentage', '$sem4KTLive', '$sem4KTDead', '$sem4KTDrop'
				, '$sem5percentage', '$sem5KTLive', '$sem5KTDead', '$sem5KTDrop'
				, '$sem6percentage', '$sem6KTLive', '$sem6KTDead', '$sem6KTDrop'
				, '$sem7percentage', '$sem7KTLive', '$sem7KTDead', '$sem7KTDrop'
				, '$sem8percentage', '$sem8KTLive', '$sem8KTDead', '$sem8KTDrop')";

				if (!mysql_query($sql))
				{
					die('Error - '.mysql_error());
				}
				else
				{	
					unset($_SESSION['day']);unset($_SESSION['month']);unset($_SESSION['year']);unset($_SESSION['gender']);
					unset($_SESSION['contact']);unset($_SESSION['address']);unset($_SESSION['email']);unset($_SESSION['city']);
					unset($_SESSION['state']);unset($_SESSION['sscyear']);unset($_SESSION['sscpercentage']);unset($_SESSION['sscuniversity']);
					unset($_SESSION['hscskill']);unset($_SESSION['hscyear']);unset($_SESSION['hscpercentage']);unset($_SESSION['hscuniversity']);
					unset($_SESSION['photo']);unset($_SESSION['resume']);unset($_SESSION['maritial']);
					unset($_SESSION['branch']); unset($_SESSION['sem1percentage']); unset($_SESSION['sem1KTLive']); unset($_SESSION['sem1KTDead']); unset($_SESSION['sem1KTDrop']);
					unset($_SESSION['sem2percentage']); unset($_SESSION['sem2KTLive']); unset($_SESSION['sem2KTDead']); unset($_SESSION['sem2KTDrop']);
					unset($_SESSION['sem3percentage']); unset($_SESSION['sem3KTLive']); unset($_SESSION['sem3KTDead']); unset($_SESSION['sem3KTDrop']);
					unset($_SESSION['sem4percentage']); unset($_SESSION['sem4KTLive']); unset($_SESSION['sem4KTDead']); unset($_SESSION['sem4KTDrop']);
					unset($_SESSION['sem5percentage']); unset($_SESSION['sem5KTLive']); unset($_SESSION['sem5KTDead']); unset($_SESSION['sem5KTDrop']);
					unset($_SESSION['sem6percentage']); unset($_SESSION['sem6KTLive']); unset($_SESSION['sem6KTDead']); unset($_SESSION['sem6KTDrop']);
					unset($_SESSION['sem7percentage']); unset($_SESSION['sem7KTLive']); unset($_SESSION['sem7KTDead']); unset($_SESSION['sem7KTDrop']);
					unset($_SESSION['sem8percentage']); unset($_SESSION['sem8KTLive']); unset($_SESSION['sem8KTDead']); unset($_SESSION['sem8KTDrop']);
					header('location:frmMyProfile.php');
				}
		}	
	}
}

?>
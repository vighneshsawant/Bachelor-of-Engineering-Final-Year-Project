<?php
require"session_set.php";
require"../../config.php";



$maritial = $_POST['maritial'];$_SESSION['maritial'] = $maritial;
$name = $_SESSION['NAME'];
$dob = $_POST['dob'];$_SESSION['dob'] = $dob;
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


$resume = $_POST['resume'];$_SESSION['resume'] = $resume;
$photo = $_POST['photo'];$_SESSION['photo'] = $photo;
$changephoto = basename( $_FILES['changephoto']['name']);
$changeresume = basename( $_FILES['changeresume']['name']);


$target_path = $_SERVER['DOCUMENT_ROOT']. "TPO/Clients/Users/Data/";
$target_path1 = $target_path . $changephoto;
$target_path2 = $target_path . $changeresume;

if(($dob=="") ||  
($gender =="") || ($contact=="") || ($address =="") || 
($email=="") || ($city=="") || ( $state=="") || 
($sscyear =="") || ($sscpercentage=="") || ($sscuniversity=="") ||  
($hscskill =="") || ($hscyear =="") || ($hscpercentage =="") || 
($hscuniversity ==""))
{
	
	header('location:frmProfileEdit.php?msg=empty');
}

else
{
	$email_parts = explode("@",$email);
	$email_parts = explode(".",$email_parts[1]);
	if(strlen($email_parts[1])>3) 
	{ 
		header('location:frmProfileEdit.php?msg=invalid');
	}
	else
	{
	
		$result1 = mysql_query("Select * from tbl_college_records where Name = '$name'");

		if ($result1)
		{
			while($row = mysql_fetch_array($result1))
			{
				$chkbranch = $row['Branch'];
				$chksem1percentage = $row['Sem1Percentage'];
				$chksem1KTLive = $row['Sem1KTLive'];
				$chksem1KTDead = $row['Sem1KTDead'];
				$chksem1KTDrop = $row['Sem1KTDrop'];


				$chksem2percentage = $row['Sem2Percentage'];
				$chksem2KTLive = $row['Sem2KTLive'];
				$chksem2KTDead = $row['Sem2KTDead'];
				$chksem2KTDrop = $row['Sem2KTDrop'];


				$chksem3percentage = $row['Sem3Percentage'];
				$chksem3KTLive = $row['Sem3KTLive'];
				$chksem3KTDead = $row['Sem3KTDead'];
				$chksem3KTDrop = $row['Sem3KTDrop'];


				$chksem4percentage = $row['Sem4Percentage'];
				$chksem4KTLive = $row['Sem4KTLive'];
				$chksem4KTDead = $row['Sem4KTDead'];
				$chksem4KTDrop = $row['Sem4KTDrop'];


				$chksem5percentage = $row['Sem5Percentage'];
				$chksem5KTLive = $row['Sem5KTLive'];
				$chksem5KTDead = $row['Sem5KTDead'];
				$chksem5KTDrop = $row['Sem5KTDrop'];


				$chksem6percentage = $row['Sem6Percentage'];
				$chksem6KTLive = $row['Sem6KTLive'];
				$chksem6KTDead = $row['Sem6KTDead'];
				$chksem6KTDrop = $row['Sem6KTDrop'];


				$chksem7percentage = $row['Sem7Percentage'];
				$chksem7KTLive = $row['Sem7KTLive'];
				$chksem7KTDead = $row['Sem7KTDead'];
				$chksem7KTDrop = $row['Sem7KTDrop'];


				$chksem8percentage = $row['Sem8Percentage'];
				$chksem8KTLive = $row['Sem8KTLive'];
				$chksem8KTDead = $row['Sem8KTDead'];
				$chksem8KTDrop = $row['Sem8KTDrop'];
			}
			if (($branch == $chkbranch) && ($chksem1percentage == $sem1percentage) && ($chksem1KTLive == $sem1KTLive) && ($chksem1KTDead == $sem1KTDead) && ($chksem1KTDrop == $sem1KTDrop) &&
				($chksem2percentage == $sem2percentage) && ($chksem2KTLive == $sem2KTLive) && ($chksem2KTDead == $sem2KTDead) && ($chksem2KTDrop == $sem2KTDrop) &&
				($chksem3percentage == $sem3percentage) && ($chksem3KTLive == $sem3KTLive) && ($chksem3KTDead == $sem3KTDead) && ($chksem3KTDrop == $sem3KTDrop) &&
				($chksem4percentage == $sem4percentage) && ($chksem4KTLive == $sem4KTLive) && ($chksem4KTDead == $sem4KTDead) && ($chksem4KTDrop == $sem4KTDrop) &&
				($chksem5percentage == $sem5percentage) && ($chksem5KTLive == $sem5KTLive) && ($chksem5KTDead == $sem5KTDead) && ($chksem5KTDrop == $sem5KTDrop) &&
				($chksem6percentage == $sem6percentage) && ($chksem6KTLive == $sem6KTLive) && ($chksem6KTDead == $sem6KTDead) && ($chksem6KTDrop == $sem6KTDrop) &&
				($chksem7percentage == $sem7percentage) && ($chksem7KTLive == $sem7KTLive) && ($chksem7KTDead == $sem7KTDead) && ($chksem7KTDrop == $sem7KTDrop) &&
				($chksem8percentage == $sem8percentage) && ($chksem8KTLive == $sem8KTLive) && ($chksem8KTDead == $sem8KTDead) && ($chksem8KTDrop == $sem8KTDrop))
			{
			
				if(strlen($changephoto)<=0)
				{
					$p= $photo;
					
				}
				else
				{
					
					unlink ($target_path.$photo);
					$p=$changephoto;
					move_uploaded_file($_FILES['changephoto']['tmp_name'], $target_path1);
					
				}
				
				if(strlen($changeresume)<=0)
				{
					$cv= $resume;
					
				}
				else
				{
					
					unlink ($target_path.$resume);
					$cv=$changeresume;
					move_uploaded_file($_FILES['changeresume']['tmp_name'], $target_path2);
					
				}
				$sql = "UPDATE tbl_userprofile  SET
				 Address= '$address', EmailID= '$email', DOB= '$dob', Contact= '$contact', City='$city' , State='$state' , Gender='$gender' , 
				SSCYear='$sscyear' , SSCUniversity='$sscuniversity' , SSCPercentage='$sscpercentage' , 
				HSCUniversity='$hscuniversity' , HSCYear='$hscyear' , HSCSkill='$hscskill' , HSCPercentage= '$hscpercentage', 
			    Photo='$p' , CV='$cv' ,MaritialStatus= '$maritial', Branch = '$branch',
				Sem1Percentage = '$sem1percentage',  Sem1KTLive = '$sem1KTLive',  Sem1KTDead = '$sem1KTDead',  Sem1KTDrop = '$sem1KTDrop',  
				Sem2Percentage = '$sem2percentage',  Sem2KTLive = '$sem2KTLive',  Sem2KTDead = '$sem2KTDead',  Sem2KTDrop = '$sem2KTDrop',  
				Sem3Percentage = '$sem3percentage',  Sem3KTLive = '$sem3KTLive',  Sem3KTDead = '$sem3KTDead',  Sem3KTDrop = '$sem3KTDrop',  
				Sem4Percentage = '$sem4percentage',  Sem4KTLive =  '$sem4KTLive',  Sem4KTDead = '$sem4KTDead',  Sem4KTDrop = '$sem4KTDrop',  
				Sem5Percentage = '$sem5percentage',  Sem5KTLive = '$sem5KTLive',  Sem5KTDead = '$sem5KTDead',  Sem5KTDrop = '$sem5KTDrop',  
				Sem6Percentage = '$sem6percentage',  Sem6KTLive =  '$sem6KTLive',  Sem6KTDead = '$sem6KTDead',  Sem6KTDrop = '$sem6KTDrop',  
				Sem7Percentage = '$sem7percentage',  Sem7KTLive = '$sem7KTLive',  Sem7KTDead =  '$sem7KTDead',  Sem7KTDrop = '$sem7KTDrop',  
				Sem8Percentage = '$sem8percentage',  Sem8KTLive = '$sem8KTLive',  Sem8KTDead = '$sem8KTDead',  Sem8KTDrop = '$sem8KTDrop' 
				where UserID = '$_SESSION[ID]'";
			
				if (!mysql_query($sql))
				{
					die('Error - '.mysql_error());
				}
				else
				{	
					unset($_SESSION['dob']);unset($_SESSION['gender']);
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
			else
			{
				header('location:frmProfileEdit.php?msg=nomatch');
			}
		}
			
	}
}

?>
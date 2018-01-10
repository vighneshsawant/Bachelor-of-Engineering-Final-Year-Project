<?php
session_start();
require"../../config.php";

$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$sector = $_POST['sector'];;

$date=date("jS  F Y");

if(($name=="")|| ($address=="")|| ($email=="")|| ($contact=="")|| ($sector==""))
{
?>
		<script type="text/javascript">
			alert("Profile Created Successfully");
			window.location='location:frmCompanies.php?msg=empty';
		</script>
<?php	
	//header('location:frmRegistration.php?msg=empty');
}
else 
{
	/*$email_parts = explode("@",$email);
	$email_parts = explode(".",$email_parts[1]);
	if(strlen($email_parts[1])>3) 
	{ 
		header('location:frmRegistration.php?msg=invalid');
	}
	else
	{*/
		$sql = "INSERT INTO tbl_company(JoiningDate,Name,Address,State,City,Contact,EmailID,Sector) VALUES ('$date', '$name','$address','$state','$city','$contact','$email','$sector')";

		if (!mysql_query($sql))
		{
			die('Error - '.mysql_error());
		}
		else
		{	
			session_destroy();
?>
		<script type="text/javascript">
			alert("Profile Created Successfully");
			window.location='frmRegistration.php';
		</script>
<?php
			//header('location:frmCompanies.php?name='.$name.'');
		}	
	}
	

?>
<?php
require"../config.php";

	$name=$_POST['name'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	 $email=$_POST['email'];
	$branch=$_POST['branch'];
	$class=$_POST['class'];
	$semester=$_POST['semester'];
	$subject=$_POST['subject'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	 $sql = "Select * from tbl_teacher where email ='$email'";
	$result=mysql_query($sql);
	if(!$result)
	{
			die(MYSQL_ERROR());
	}
	else
	{
		$num=mysql_num_rows($result);
		if($num<=0)
		{
			 $sql1="INSERT INTO tbl_teacher(name, address, mobile, email, class, branch, semester, subject, username, password)VALUES('$name', '$address', '$mobile', '$email', '$class', '$branch', '$semester', '$subject','$username','$password')";
			$result1=mysql_query($sql1);
			if(!$result1)
			{
				die(MYSQL_ERROR());
			}
			else
			{
?>
		<script type="text/javascript">
			alert("Teacher added successfully");
			location="frmaddstaff.php";
		</script>
<?php
			}
		}
		else
		{
?>
		<script type="text/javascript">
			alert("There is error occured");
			location="frmaddstaff.php";
		</script>
<?php
		}
	}

?>
<?php
session_start();
require"../../config.php";

$branch = $_POST['branch'];
$course = $_POST['course'];
$sem = $_POST['sem'];
$ut="";
if(isset($_POST['test']))
{
	$ut = $_POST['test'];
}
$row = $_POST['row'];

if(($branch=="") || ($course=="") || ($sem==""))
{
	header('location:frmUnitTest1.php');
}
else
{
	for($i=1;$i<$row;$i++)
	{
		$sname = $_POST['sname'.$i];
		$sub1 = $_POST['sub'.$i.'1'];
		$sub2 = $_POST['sub'.$i.'2'];
		$sub3 = $_POST['sub'.$i.'3'];
		$sub4 = $_POST['sub'.$i.'4'];
		$sub5 = $_POST['sub'.$i.'5'];
		$sub6="";
		if(isset($_POST['sub6']))
		{
		   $sub6 = $_POST['sub'.$i.'6'];
		}

			$sql = "INSERT INTO marks(sname, branch, year, sem, ut, sub1, sub2, sub3, sub4, sub5, sub6) 
								VALUES ('$sname', '$branch', '$course', '$sem', '$ut', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6')";
	
			if (!mysql_query($sql))
			{
				die('Error - '.mysql_error());
			}
			else
			{	
?>
		<script type="text/javascript">
			alert("Marks Added Successfully");
			location='frmUnitTest1.php';
		</script>
<?php
				//header('location:frmUnitTest1.php');
			}	
	}
}
?>
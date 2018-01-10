<h2><span><img src="../../images/notification.jpg" height="20" width="20"/>&nbsp;Interview time and venue notifications</span></h2>

<?php 
	require "../../config.php";
	require"session_set.php";
	$result = mysql_query("Select * from tbl_interview ");
	$bool = 0;	
	$n = 0;
	while($row=mysql_fetch_array($result))
	{
		
		$qualification = $row['Qualification'];
		$QualArr = explode(",", $qualification);
		$per = $row['per'];
	
		$result1=mysql_query("Select * from tbl_users where ID = '$_SESSION[ID]'");
		$n = 0;
		while($row1=mysql_fetch_array($result1))
		{ 	
			echo $userQual = $row1['quali'];
			$totalper = $row1['totalper'];
			foreach($QualArr as $qual)
			{
				if($userQual == $qual)
				{
					//if($totalper>=$per)
					//{
						$id = $row['CompanyID'];
						$iid = $row['ID'];
						$bool=1;
						require"interviews.php";
						break;
					//}
				}
				$n++;
			}
			
		}
	}
?>
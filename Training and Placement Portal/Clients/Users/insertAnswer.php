<?php
	error_reporting(E_ALL ^ E_NOTICE);
	require "../../config.php";
	session_start();
	
	$sid = $_POST['sid'];
	$cid = $_POST['cid'];
	$interid = $_POST['interid'];
	$_SESSION['id']=$interid;
	$_SESSION['sid']=$sid;
	$num_count =0;
	$remark="";

		for($i=0;$i<20;$i++)
		{
			$qid=$_POST['question'.$i];
			$answer=$_POST['answer'.$i];
			if($answer=="")
			{
				$remark='Wrong';
			}
			else
			{
					$sql5 = "select answer from tbl_qbank where id='$qid'";
					$result5 = mysql_query($sql5);
					//echo $count = mysql_num_rows($result5);
					if(!$result5)
					{
						die("Error - ".mysql_error());
					}
					else
					{
						if(mysql_num_rows($result5) > 0)
						{
							while($row5 = mysql_fetch_array($result5))
							{
								$correctanswer = $row5['answer'];
							}
							if($correctanswer == $answer)
							{
								$remark = "Correct";
							}
							else
							{
								$remark = "Wrong";
							}
						}
					}
					//echo $remark;
					
					$query  =  "insert into tbl_studentexamdetail(studentid,examid,companyid,question_id,answer,result)
								values('$sid','$interid','$cid','$qid','$answer','$remark')";
					
					$result1 = mysql_query($query);
					if(!$result1)
					{
						die("Error:".mysql_error());
					}
			}
		}
	header('location:FinalResult.php');
?>
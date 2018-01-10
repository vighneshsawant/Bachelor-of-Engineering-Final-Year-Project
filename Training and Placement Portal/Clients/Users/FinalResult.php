<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once "../../config.php";
session_start();
?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once "../../config.php";
session_start();
/*
echo $_SESSION['id'];
echo $_SESSION['name'];
*/
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="1200;url=logout.php">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="1200;url=logout.php">
<link href="../../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../../js/script.js"></script>
<script type="text/javascript" src="../../js/cufon-yui.js"></script>
<script type="text/javascript" src="../../js/arial.js"></script>
<script type="text/javascript" src="../../js/cuf_run.js"></script>
<style type="text/css">
.lbl
{
	font-size:13px;
	float:right;
}
.lbl1
{
	font-size:15px;
	font-family:Arial;
	text-align:left;
}
.lbl2
{
	font-size:13px;
	font-family:Arial;
	text-align:left;
}
.dwdl
{
	width:200px;
	padding:3px;
}
#divex
{
	margin-top:30px;
	float:left;
	width:900px;
	Background-color:white;
	border:2px solid;
	border-radius:10px;
}
#tbex td
{
	text-align:left;
}
.timer
{
	border:none;
	font-size:37px;
	color:orange;
}
#tblFinal tr
{
	text-align:center;
}
</style>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Online Exam</title>
</head>
<script type="text/javascript">
	function ConfirmChoice()
	{
		answer = confirm("Do you really want to Logout?")
		if (answer !=0)
		{
			location = "logout.php";
		}
	}
</script>
<body>
<div id="container">
<div class="main">
  <div class="main_resize">
	<div class="header">
      <div class="logo">
        <h1><a href="#"><span>TPO</span></a><small>It's all about placement</small></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <?php
			$n=3;
			require"menu.php";
		?>
        <div class="clr"></div>
      </div>
      <div class="hbg">
	  
		<?php 
			
			require"marquee.php";
		?>
	  </div>
    </div>
    <div class="content">
      <div class="content_bg"> 
		<div id="divex">
			<?php
			  $sid = $_SESSION['sid'];
			  $exid = $_SESSION['id'];
			 $today = date("d/m/y");

				$percent=0;
				$sql12 = "select count(id) as total from tbl_studentexamdetail where examid = '$exid' and studentid='$sid' and result='Correct'";
				$res12 = mysql_query($sql12);
				if($row12 = mysql_fetch_array($res12))
				{
					$total=$row12['total'];
					$percent=$total/20*100;
				}
			?>
			<div>
			<form id="tblexp">
			<p style="text-align:center; font-size:20px; margin-bottom:10px">Final Result</p>
		<?php
			if($percent >= 60)
					{
						echo "<p style=\"font-weight:bold;font-size:25px; margin-bottom:10px;padding-left:50px;background-color:green;\">Your Result is:-PASSED</p>";
					}
					else
					{
						echo "<p style=\"font-weight:bold;font-size:25px; margin-bottom:10px;padding-left:50px;background-color:red;\">Your Result is:-FAIL</p>";
					}
		?>
			<!--<p style="font-size:15px; margin-bottom:10px"> Exam-id : <?php echo $_SESSION['id']; ?></p>
			<p style="font-size:15px; margin-bottom:10px"> Date : <?php echo $today; ?></p>-->
			<div style="border: 2px solid black">
			<?php
				echo "<table id=\"tblFinal\" style=\"width:100%\" cellpadding=\"5px\">";
				echo "<tr style=\"text-align:center; background-color:#67A0F5; font-weight:bold\">
						<td style=\"color:#FFF\" width=\"10%\"><b>Sr. No.</b></td>
						<td style=\"color:#FFF\"><b>Question</b></td>
						<td style=\"color:#FFF\" width=\"30%\"><b>Answer</b></td>
						<td style=\"color:#FFF\" width=\"10%\"><b>Result</b></td>
						<td style=\"color:#FFF\" width=\"15%\"><b>My Answer</b></td>
						</tr>";

				$sql1 = "select question_id,answer,result from tbl_studentexamdetail where examid = '$exid' and studentid='$sid'";
				$res1 = mysql_query($sql1);
					if(!$res1)
					{
						die('Error - '.mysql_error());
					}
					else
					{
						$i=1;
						$totalcorrect=0;
						while($row1 = mysql_fetch_array($res1))
						{
							$qid = $row1['question_id'];
							$remark = $row1['result'];
							$sql2 = "select question,answer from tbl_qbank where id = '$qid'";
							$res2 = mysql_query($sql2);
							if(!$res2)
							{
								die('Error - '.mysql_error());
							}
							else
							{
								while($row2 = mysql_fetch_array($res2))
								{
									
									echo "<tr style=\"text-align:center\">
											<td>".$i."</td>
											<td>".$row2['question']."</td>
											<td>".$row2['answer']."</td>";
											if($remark == 'Correct')
											{
												$totalcorrect=$totalcorrect+1;
												echo "<td><img src=\"images/success-icon.png\" width=\"25px\" height=\"25px\"></td>";
											}
											elseif($remark == 'Wrong')
											{
												echo "<td><img src=\"images/delete1.png\" width=\"25px\" height=\"25px\"></td>";
											}											
										echo "<td>".$row1['answer']."</td>
										</tr>";
								}
							}
							
							$i++;
						}
					
					}
					echo "</table>";
					echo "";
			?>
			</div>
			</div>
			</form>
		</div>
		<div>
		</div>					
</div>
</body>
</html>

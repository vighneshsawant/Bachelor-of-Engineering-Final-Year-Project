<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TPO</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../../js/script.js"></script>
<script type="text/javascript" src="../../js/cufon-yui.js"></script>
<script type="text/javascript" src="../../js/arial.js"></script>
<script type="text/javascript" src="../../js/cuf_run.js"></script>

</head>
<?php
error_reporting(E_ALL ^ E_NOTICE);
	//require"session_set.php";
?>


<body>
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
        <div class="mainbar">
          <div class="article">
		  <p class="post-data"><span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span>
&nbsp;|&nbsp;  To add new offers, <a  href="frmInterviewAdd.php">Click here </a>		  </p>

<span style="font:normal 24px Arial, Helvetica, sans-serif;color:#595959;font-weight:bold;text-decoration:underline;">

Current Job Offers</span>
            <?php 
				require "../../config.php";
				$result=mysql_query("Select * from tbl_interview");
				$count = mysql_num_rows($result);

				if($count < 1)
				{	
					echo "There no job offers added by you,<br >";
				}
				else
				{	
					
					while($row=mysql_fetch_array($result))
					{
						echo "<table cellpadding=\"0\" cellspacing=\"0\" style=\"color:#000000;width:100%;background:white;margin-top:5px;border:1px solid #78bbe6;\">";
						$date=$row['Date'];
						$matchdate=explode('-',$date);
						$day = $matchdate[2];
						$month = $matchdate[1];
						$year = $matchdate[0];
						
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
						$CompanyID=$row['CompanyID'];
						$Name="";
						$result1=mysql_query("Select * from tbl_company where ID='$CompanyID'");
						if($row1=mysql_fetch_array($result1))
						{
							$Name=$row1['Name'];
						}
						
						echo "<tr valign=\"top\" ><td rowspan=\"4\" width=\"100\"><img  src=\"../../images/j.jpg\" style=\"padding:0;margin:0\" width=\"100\" height=\"80\"/></td>
						<td ><b><u>Company Name: </u></b>&nbsp;&nbsp;".$Name."</td ></tr><tr>
						<td ><b><u>Job Profile: </u></b>&nbsp;&nbsp;".$row['Reqiurement']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b><u>Total Candidates required:</u></b> &nbsp;&nbsp;".$row['Seats']."</td ></tr>
						<tr ><td ><b> <u>Campus Date:</u></b>&nbsp;&nbsp; ".$day.",".$m.", ".$year."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b><u>Timing:</u></b> ".$row['Timing']."</td></tr>
						<tr ><td > <b><u><a href=\"eligiblestud.php?intid=".$row['ID']."\">Eligible Student</a></td>
						<td align=\"right\">
						<a style=\"color:green\" href=\"frmInterviewEdit.php?id=".$row['ID']."\"><img  src=\"../../images/edit.jpg\" style=\"padding:0;margin:0\" width=\"15\" height=\"15\"/>&nbsp;&nbsp;Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a style=\"color:red\" href=\"delInterview.php?id=".$row['ID']."\"><img  src=\"../../images/delete.png\" style=\"padding:0;margin:0\" width=\"15\" height=\"15\"/>&nbsp;&nbsp;Delete</a>
						</td></tr>";
						echo "</table>";
					}
				}
			?>
			
          </div>
	  </div>
        <div class="sidebar">
          <?php require"sidebar.php"; ?>
	
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="rf">&copy; Copyright <a href="">TPO</a>.</p>
    <div class="clr"></div>
  </div>
</div>
</body>
</html>
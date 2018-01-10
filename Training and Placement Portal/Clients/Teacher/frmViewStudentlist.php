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
<script type="text/javascript" language="javascript">
	function getdata(str)
	{
		if (str=="")
		{
			document.getElementById("tabledata").innerHTML="";
			return;
		} 
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("tabledata").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("POST","frmViewStudent.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("branch="+str);
	}
</script>
</head>
<?php
error_reporting(E_ALL ^ E_NOTICE);
	require"session_set.php";
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
			$n=2;
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
			<span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span> <br>
			
			<div id="tabledata">
		<table>
				<thead>
			<tr>
				<th>Student</th>
				<th>Student Name</th>
				<th>Student Branch</th>
				<th>Joining Date</th>
				<th>Pointer</th>
				<th>Email</th>
			</tr>
		</thead>
		<?php
		require "../../config.php";
		$tbl_name="tbl_users"; // Table name
		$abb=$_SESSION['abb'];

		$sql="SELECT * FROM $tbl_name Where quali='".$abb."'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		if($count >= 1)
		{
			while($rows=mysql_fetch_array($result))
			{
			echo "<tr ><td rowspan=\"1\"><img src=../../images/user.png width=\"40\" height=\"40\"/></td>
					<td >
						<b>".$rows['Name']."</b>
					</td>
					<td >";
						$sql1="SELECT * FROM branch WHERE abb='".$rows['quali']."'";
						$result1=mysql_query($sql1);
						$count1=mysql_num_rows($result1);
						if($count1 >= 1)
						{
							if($rows1=mysql_fetch_array($result1))
							{
								echo "<b>".$rows1['branch']."</b>";
							}
						}
			echo "</td>
					<td >
						<b>".$rows['JoiningDate']."</b>
					</td>
					<td >
						<b>".$rows['totalper']."</b>
					</td>
					<td >
						<b>".$rows['email']."</b>
					</td>
			</tr>";

			}
		}
		else {
			echo "There No teacher for this branch";
		}

		?>
		</table>
			</div>
         </div>
		</div>
        <div class="sidebar">
          <div class="gadget">
			<img src="../../images/admin.jpg" width="140" height="140"/>
			</a>
            <div class="clr"></div>
			<ul class="sb_menu">
				 <li class="active"><a  href="frmViewStudentlist.php">View Student</a></li> 
            </ul>
          </div>
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
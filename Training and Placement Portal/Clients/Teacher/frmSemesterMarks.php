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
	function setval(str)
	{
		document.getElementById("inbranch").value=str;
	}
	
	function setsem(str)
	{
		document.getElementById("insem").value=str;
	}
	
	function gettable()
	{
		var branch=document.getElementById("inbranch").value;
		var year=document.getElementById("inyear").value;
		var course=document.getElementById("incourse").value;
		var sem=document.getElementById("insem").value;
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
	xmlhttp.open("POST","frmGetTable.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("branch="+branch+"&year="+year+"&course="+course+"&sem="+sem);
	}
	
	function getdata(str)
	{
		document.getElementById("incourse").value=str;
		if (str=="")
		{
			document.getElementById("year").innerHTML="";
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
				document.getElementById("year").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("POST","frmGetYear.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("ID="+str);
	}
	
	function getdata1(str)
	{
		document.getElementById("inyear").value=str;
		if (str=="")
		{
			document.getElementById("sem").innerHTML="";
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
				document.getElementById("sem").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("POST","frmGetSem.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("ID1="+str);
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
    <form action="insertmarks.php" method="post">
          <div class="article">
				<p class="post-data"><span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span>
				&nbsp;|&nbsp;  To add Marks of students, <a  href="frmUnitTest1.php">Click here </a></p>
				<label>Select Branch</label>
				<select id="branch" name="branch" onchange="setval(this.value)">
					<option>--Select Branch--</option>
					<?php
					require "../../config.php";
					$sql="SELECT * FROM branch";
					$result=mysql_query($sql);
					$count=mysql_num_rows($result);
					if($count >= 1)
					{
						while($rows=mysql_fetch_array($result))
						{
							echo "<option value=".$rows['abb'].">".$rows['branch']."</option>";
						}
					}
					?>
				</select>
				<label>Select Course</label>
				<select id="course" name="course" onchange="getdata(this.value)">
					<option>--Select Course--</option>
					<option value="diploma">Diploma</option>
					<option value="degree">Degree</option>
				</select>
		 </div>
		 <div style="padding-top:10px">
				<label style="padding-right:50px">Select Year</label>
				<select id="year" name="year" onchange="getdata1(this.value)">
					<option>--Select Year--</option>
				</select>
				<label style="padding-right:50px;padding-left:50px;">Select Semester</label>
				<select id="sem" name="sem" onchange="setsem(this.value);gettable()">
					<option>--Select Semester--</option>
				</select>
		  </div>
		  <div>
			<input type="hidden" name="inyear" id="inyear"/>
			<input type="hidden" name="inbranch" id="inbranch"/>
			<input type="hidden" name="incourse" id="incourse"/>
			<input type="hidden" name="insem" id="insem"/>
		  </div>
		  <div id="tabledata">
		  </div>
 	</form>
	  </div>
        <div class="sidebar">
           <div class="gadget">
				<a href="#">
					<img src="../../images/user.png" width="140" height="140"/>
				</a>
				<ul class="sb_menu">
				 <li class="active"><a href="frmViewCampuslist.php">View Campuses</a></li>
				</ul>
				<div class="clr"></div>
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
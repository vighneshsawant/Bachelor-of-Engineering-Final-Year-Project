<?php
error_reporting(E_ALL ^ E_NOTICE);
require"../../config.php";
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
</style>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Online Exam</title>
</head>
<script type="text/javascript">
	function getEmailid(str)
	{
		if (str=="")
		{
			document.getElementById("emailid").innerHTML="";
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
				document.getElementById("emailid").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("GET","getEmailid.php?start="+str,true);
	xmlhttp.send();
	}
	
	function getpaper(str)
	{
	//alert(str)
		if(str != 0)
		{
			location = "insert_company.php?company="+company+"&start="+str;
		}
	}
	
	var time_left = 1200;
	var cinterval;

	function time_dec(){
	time_left--;
	document.getElementById('countdown').innerHTML = time_left;
	if(time_left == 0){
		clearInterval(cinterval);
	}
}
cinterval = setInterval('time_dec()', 1000);
</script>
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
		<div id="divex">
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<h2>Welcome <?php echo $_SESSION['name']; ?>, Your EXAM-ID is <?php echo $_SESSION['id']; ?></h2>
			<div style="border:2px solid">
				<?php 
				require "getpaper.php";
				?>
			</div>
		</div>
	</div>
	</div>	
   </div>
  </div>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TPO</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/arial.js"></script>
<script type="text/javascript" src="../js/cuf_run.js"></script>
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
		var branch=document.getElementById("branch").value;
		var classval=document.getElementById("class").value;
		var semester=document.getElementById("semester").value;
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
				document.getElementById("subject").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("POST","getsub.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("branch="+branch+"&class="+classval+"&semester="+semester);
	//xmlhttp.send("class="+classval);
	//xmlhttp.send("semester="+semester);
	}

	function getsem(str)
	{
		var classval=document.getElementById("class").value;
		//var year=document.getElementById("inyear").value;
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
				document.getElementById("semester").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("POST","getsem.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("class="+classval);
	}
	
	function getbranch(str)
	{
		//var classval=document.getElementById("class").value;
		//var year=document.getElementById("inyear").value;
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
				document.getElementById("branch").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("POST","getbranch.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("course="+str);
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
			$n=4;
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
	<h2><span style="font-weight:bold;text-decoration:underline;"><img src="../images/forum.jpg" style="padding:0;margin:0" height="20" width="20"/>&nbsp;Add new staff</span></h2>
				<form id="form1" name="submit" method="post" action="add_staff.php">
					<table  border="0" cellpadding="0" cellspacing="0" >
						<tr>
							<td width="100px"><strong>Full Name <span class="error">*</span></strong></td>
							<td><input name="name" type="text" id="name" size="50" required /></td>
						</tr>
						<tr>
							<td ><strong>Address <span class="error">*</span></strong></td>
							<td><textarea name="address" cols="51" rows="4" id="address" required></textarea></td>
						</tr>
						<tr>
							<td width="100px"><strong>Mobile No.<span class="error">*</span></strong></td>
							<td><input name="mobile" type="text" id="mobile" size="50" pattern="[789][0-9]{9}" required /></td>
						</tr>
						<tr>
							<td width="100px"><strong>Email ID <span class="error">*</span></strong></td>
							<td><input name="email" type="email" id="email" size="50" required /></td>
						</tr>
						<tr>
							<td width="100px"><strong>Degree/Diploma <span class="error"></span></strong></td>
							<td>
								<select id="class" name="class" onchange="getbranch(this.value)">
									<option>--Select Class--</option>
									<option value="Degree">Degree</option>
									<option value="Diploma">Diploma</option>
								</select>
							</td>
						</tr>
						<tr>
							<td width="100px"><strong>Branch <span class="error">*</span></strong></td>
							<td>
								<select id="branch" name="branch" onchange="getsem(this.value)">
									<option>--Select Branch--</option>
									
								</select>
							</td>
						</tr>
						<tr>
							<td width="110px"><strong>Semester<span class="error">*</span></strong></td>
							<td>
								<select name="semester" id="semester" onchange="gettable()">
									<option>--Select Semester--</option>
								</select>
							</td>
						</tr>
						<tr>
							<td width="110px"><strong>Teach Subject<span class="error">*</span></strong></td>
							<td>
								<select name="subject" id="subject">
									<option>--Select Subject--</option>
								</select>
							</td>
						</tr>
						<tr>
							<td width="100px"><strong>Username <span class="error">*</span></strong></td>
							<td><input name="username" type="text" id="username" size="50" required /></td>
						</tr>
						<tr>
							<td width="100px"><strong>Password <span class="error">*</span></strong></td>
							<td><input name="password" type="password" id="password" size="50" required /></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="Submit" class="button" value="Submit" /> </td>
						</tr>
					</table>
				</form>
            <div class="clr"></div>
          </div>
	  </div>
        <div class="sidebar">
          <div class="gadget">
			<ul class="sb_menu">
              <li class="active"><a href="frmaddstaff.php">Add Staff</a></li>
              <li><a  href="frmViewstafflist.php">View Staff</a></li>  
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
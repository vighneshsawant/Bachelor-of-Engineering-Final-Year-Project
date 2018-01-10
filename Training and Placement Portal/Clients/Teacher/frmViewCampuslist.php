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
				//alert(xmlhttp.responseText);
				document.getElementById("tabledata").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("POST","frmViewCampus.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("ID="+str);
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
          <div class="article">
				<p class="post-data"><span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span>
				&nbsp;|&nbsp;</p>
			<label>Select Company</label>
			<select id="branch" name="branch" onchange="getdata(this.value)">
				<option>--Select Company--</option>
				<?php
				require "../../config.php";
				$sql="SELECT * FROM tbl_company";
				$result=mysql_query($sql);
				$count=mysql_num_rows($result);
				if($count >= 1)
				{
					while($rows=mysql_fetch_array($result))
					{
						echo "<option value=".$rows['ID'].">".$rows['Name']."</option>";
					}
				}
				?>
			</select>
			<div id="tabledata">
			</div>
          </div>
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
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
require"../../config.php";
	$result1 = mysql_query("Select * from tbl_admin ");
	$row = mysql_fetch_array($result1);
	$address = $row['Address'];
	$contact = $row['Contact'];
	$email = $row['EmailID'];
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
		error_reporting(E_ALL ^ E_NOTICE);error_reporting(E_ALL ^ E_NOTICE);
			$n=4;
			require"../menu.php";
		?>
        <div class="clr"></div>
      </div>
      <div class="hbg">
	  
		<?php 
			$n=1;
			require"../marquee.php";
		?>
	  </div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
		  <span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span> <br>
		  <img src="../../images/111.jpg" width="613" height="75" alt="" />
		  <p><a style="font-size:20px" href="">TPO</a><br>
		  <b><u>Mailing Address:</u></b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $address;?><br><br>
		  <b><u>Contact Number:</u></b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $contact;?><br><br>
		  you can mail us at <a href=""><?php echo $email;?></a>
		  
          </p>
          </div>
         </div>
        <div class="sidebar">
          <div class="gadget">
			<img src="../../images/contact.jpg"" width="140" height="140"/>
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
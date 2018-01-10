<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TPO</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<link href="diveffect.css" rel="stylesheet" type="text/css" />
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
			$n=7;
			require"menu.php";
		?>
        <div class="clr"></div>
      </div>
      <div class="hbg">
	  
		<?php 
			
			//require"marquee.php";
		?>
	  </div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar1">
          <div class="article"> 
			<div class="namelinks" style="padding-left:150px;width:100%">
				<div class="view_port1">
				  <div class="polling_message">
						<a href="frmAdmission.php" class="page">Get Admission To Diploma</a>
				  </div>
				  <div class="cylon_eye"></div>
				</div>
				<div class="view_port2">
				  <div class="polling_message">
						<a href="frmFirstEngAdmission.php" class="page">Get Admission To Degree First Year</a>
				  </div>
				  <div class="cylon_eye"></div>
				</div>
				<div class="view_port3">
				  <div class="polling_message">
						<a href="frmEngAdmission.php" class="page">Get Admission To Degree Second Year</a>
				  </div>
				  <div class="cylon_eye"></div>
				</div>
				<div class="view_port4">
				  <div class="polling_message">
						<a href="frmEngAdmissionthird.php" class="page">Get Admission To Degree Third Year</a>
				  </div>
				  <div class="cylon_eye"></div>
				</div>
				<div class="view_port5">
				  <div class="polling_message">
						<a href="frmEngAdmissionforth.php" class="page">Get Admission To Degree Last Year</a>
				  </div>
				  <div class="cylon_eye"></div>
				</div>
			</div>
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
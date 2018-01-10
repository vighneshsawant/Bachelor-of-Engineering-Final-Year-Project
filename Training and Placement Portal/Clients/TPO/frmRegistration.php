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
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
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
			session_start();
			$n=2;
			require"menu.php";
		?>
        <div class="clr"></div>
      </div>
      <div class="hbg">
	  
		<?php 
			$n=3;
			require"marquee.php";
		?>
	  </div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            
            <div class="clr"></div>
            <p class="post-data"><span class="date"><?php $date=date("jS  F Y");echo $date;?></span>
            <div class="clr"></div>
			<h2><span>Registration Form  </span>
			</h2><b>(Fields marked with asterik are required)</b><?php error_reporting(E_ALL ^ E_NOTICE); session_start(); 
				if($_GET['msg']=="incorrect"){echo "<span class=\"error\">--- Please enter matching password ---</span>";}
				if($_GET['msg']=="empty"){echo "<span class=\"error\">--- Please fill the required field ---</span>";}
				?>
			 <form action="insertCompanies.php" method="post" >
            <table>
			 <tr>
                <td >Company's Name <span class="error">*</span></td>
                <td><input id="name" value="<?php echo $_SESSION['name']; ?>" class="text" name="name"  /></td>
              </tr>
			  <tr valign="top">
				<td>Address <span class="error">*</span></td>
				<td ><textarea id="address" class="select" rows="2" cols="80" name="address"  ><?php echo $_SESSION['address']; ?></textarea></td>
			  </tr>
			   <tr>
				<td>City <span class="error">*</span></td>
				<td><input id="city" value="<?php echo $_SESSION['city']; ?>" class="text" name="city"  /></td>
			</tr>
			   <tr>
				<td>State <span class="error">*</span></td>
				<td><input id="state" value="<?php echo $_SESSION['state']; ?>" class="text" name="state"  /></td>
			  </tr>
			  <tr>
				<td>Contact No <span class="error">*</span></td>
				<td ><input id="contact" value="<?php echo $_SESSION['contact']; ?>" class="text" name="contact"  /></td>
			  </tr> 
			  <tr>
				<td>Email Address <span class="error">*</span></td>
				<td ><input id="email"  value="<?php echo $_SESSION['email']; ?>" class="text" name="email"  /></td>
			  </tr> 
			  <tr>
                <td >Company's sector <span class="error">*</span></td>
                <td><input id="name" value="<?php echo $_SESSION['sector']; ?>" class="text" name="sector"  /></td>
              </tr>
			  <tr>
				<td colspan="2"><input type="submit" value="Register" class="button" /></td>
			  </tr>
		   </table>
          </form>
          </div>
          </div>
		 <div class="sidebar">
          <div class="gadget">
            <div class="clr"></div>
           <img src="../../images/company.jpg" width="140" height="140" alt="" />
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
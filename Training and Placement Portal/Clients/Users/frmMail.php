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
			$n=5;
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
		  <p class="post-data"><span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span> </p>
            <h2><span><img style="padding:0;margin:0" src="../../images/mail.png" border=0  height="30" width="30"/>&nbsp;Send Mail </span></h2>
          <form action="sendMail.php" method="post" >
              <ol><?php error_reporting(E_ALL ^ E_NOTICE);  
				if($_GET['msg']=="ok"){echo "<span class=\"success\">--- Message has been mailed successfully ---</span>";}
				if($_GET['msg']=="empty"){echo "<span class=\"error\">--- Please fill the required field ---</span>";}
				if($_GET['msg']=="invalid"){echo "<span class=\"error\">--- Invalid email address,Please enter valid email address ---</span>";}
				?>
                <li>
                  <label for="email">Email Address (required)</label>
                  <input id="email" value="<?php echo $_SESSION['email'];?>" name="email" class="text" />
                </li>
                <li>
                  <label for="website">Subject (required)</label>
                  <input id="website" value="<?php echo $_SESSION['subject'];?>" name="subject" class="text" />
                </li>
                <li>
                  <label for="message">Your Message (required)</label>
                  <textarea class="select" id="message" name="message" rows="8" cols="50"><?php echo $_SESSION['message'];?></textarea>
                </li>
                <li>
                  <input type="submit" value="Send Mail"  class="button" />
                  <div class="clr"></div>
                </li>
              </ol>
            </form>
		  </div>
	  </div>
        <div class="sidebar">
          <div class="gadget">
		  <ul class="sb_menu">
              <li class="active"><a href="frmMyProfile.php"><?php echo $_SESSION['NAME'];?></a></li>
            </ul>
            <a href="frmMyProfile.php">
			<img src="
			<?php 
				require "../../config.php";
				$result = mysql_query("Select * from tbl_userprofile where UserID = '$_SESSION[ID]'");
				$row=mysql_fetch_array($result);
					if(($row['Photo']<>"") || ($row['Photo']<>null))
					{echo "Data/".$row['Photo'];}
					else
					{ echo "../../images/user.png";}
				
				
			?>" width="140" height="140"/>
			</a>
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
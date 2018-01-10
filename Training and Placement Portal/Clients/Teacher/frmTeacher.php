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
			$n=6;
			require"../menu.php";
		?>
        <div class="clr"></div>
      </div>
      <div class="hbg">
	  
		<?php 
			$n=6;
			require"../marquee.php";
		?>
	  </div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            
            <div class="clr"></div>
            <p class="post-data"><span class="date">Todays Date<?php $date=date("jS  F Y");echo $date;?></span> &nbsp;|&nbsp;
            <div class="clr"></div>
			<h2><span>Teacher Login Panel</span></h2>
			<form action="checkLogin.php" method="post" ">
              <ol><?php error_reporting(E_ALL ^ E_NOTICE);  
				if($_GET['msg']=="fail"){echo "<span class=\"error\">--- Incorrect Username or Password ---</span>";}
				if($_GET['msg']=="empty"){echo "<span class=\"error\">--- Please fill the required field ---</span>";}
				?>
                <li>
                  <label>Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" value="<?php echo $_SESSION['username']; ?>" id="name" name="username"  />(required)</label>
                </li>
                <li>
                  <label>Password &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                  <input type="password" id="password" value="<?php echo $_SESSION['password']; ?>" name="password"  />(required)</label>
                </li>
				<br>
                <li>
					<input type="submit" value="Login" class="button" />
					
                </li>
              </ol>
            </form>
          </div>
          </div>
		 <div class="sidebar">
          <div class="gadget">
            <div class="clr"></div>
           <img src="../../images/admin.jpg" width="140" height="140" alt="" />
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
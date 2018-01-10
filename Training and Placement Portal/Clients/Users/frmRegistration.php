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
			$n=3;
			require"../menu.php";
		?>
        <div class="clr"></div>
      </div>
      <div class="hbg">
	  
		<?php 
			$n=3;
			require"../marquee.php";
		?>
	  </div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            
            <div class="clr"></div>
            <p class="post-data"><span class="date"><?php $date=date("jS  F Y");echo $date;?></span> &nbsp;|&nbsp; If already registered please <a href="frmUsers.php">Click here</a> to login
            <div class="clr"></div>
			<h2><span>Registration Form  </span>
			</h2><?php error_reporting(E_ALL ^ E_NOTICE); session_start(); 
				if($_GET['msg']=="incorrect"){echo "<span class=\"error\">--- Please enter matching password ---</span>";}
				if($_GET['msg']=="empty"){echo "<span class=\"error\">--- Please fill the required field ---</span>";}
				if($_GET['msg']=="norecord"){echo "<span class=\"error\">--- No record in College Database ---</span>";}
				?>
			 <form action="insertUser.php" method="post" >
            <table>
			 <tr>
                <td width="150px">Name </td>
                <td><input id="name" class="color" name="name"  />(required)</td>
              </tr>
				<tr>
			
				<td width="150px">Select Branch </td>
				<td><select id="branch" name="branch">
									<option>--Select Branch--</option>
									<?php
									require "../../config.php";
									//$tbl_name="tbl_teacher"; // Table name
									//$branch=$_POST['branch'];

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
				</td>
				
			  </tr>

			  <tr>
				<td>VII Sem Marks</td>
				<td><input id="sem" class="color" name="sem"  />(required)</td>
			  </tr>
			  <tr>
				<td>Email</td>
				<td><input id="email" class="color" name="email"  />(required)</td>
			  </tr>
			  <tr>
				<td>Username</td>
				<td><input id="name" class="color"  name="username"  />(required)</td>
			  </tr>
			  <tr>
				<td>Password</td>
				<td><input id="password"  class="color" name="password"  type="password"/>(required)</td>
			  </tr>
			  <tr>
				<td>Confirm Password</td>
				<td><input id="confirmpassword"  class="color" name="confirmpassword"  type="password"/>(required)</td>
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
           <img src="../../images/users.jpg" width="140" height="140" alt="" />
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
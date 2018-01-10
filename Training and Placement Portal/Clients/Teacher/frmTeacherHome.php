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
			$n=1;
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
		  <p class="post-data"><span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span></p>

<span style="font:normal 24px Arial, Helvetica, sans-serif;color:#595959;font-weight:bold;text-decoration:underline;">

Current Teacher profile</span>
            <?php 
				require "../../config.php";
				 $sql="Select * from tbl_teacher where ID = '$_SESSION[ID]'";
					$result=mysql_query($sql);
					while($row=mysql_fetch_array($result))
					{
						$subid=$row['subject'];
						$subname="";
						$sql1="Select * from subject where id = '$subid'";
						$result1=mysql_query($sql1);
						if($row1=mysql_fetch_array($result1))
						{
							$subname=$row1['subject'];
						}
					
						echo "<table cellpadding=\"0\" cellspacing=\"0\" style=\"font:normal 15px Arial, Helvetica, sans-serif;color:#959595;margin-top:5px;\">";
						
						echo "<tr valign=\"top\" ><td width = \"150px\"><b><u>Teacher Name: </u></b></td><td width=\"200px\">".$row['name']." 
						</td></tr><tr><td><b><u>Address:</u></b> </td><td>".$row['address']."</td >
						</td></tr>
						<tr ><td ><b> <u>Teach Branch:</u></b></td><td> ".$row['branch']."  </td></tr>
						<tr><td><b><u>Teach Subject:</u></b></td><td> ".$subname."</td></tr>
						<tr ><td > <b><u>Email Address:</u></b></td><td> ".$row['email']."</td></tr>
						<tr><td><b><u>Mobile Number</u></b></td><td> ".$row['mobile']."</td></tr>";
						echo "</table>";
					}
					
					
				
			?>
			
          </div>
	  </div>
        <div class="sidebar">
          <div class="gadget">
		  <ul class="sb_menu">
              <li class="active"><a href="frmMyProfile.php"><?php echo $_SESSION['NAME'];?></a></li>
            </ul>
            <a href="frmMyProfile.php">
			<img src="../../images/user.png" width="140" height="140"/>
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
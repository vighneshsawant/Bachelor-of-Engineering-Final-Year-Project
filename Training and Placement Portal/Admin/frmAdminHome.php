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
		  <p class="post-data"><span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span> </p>
            <h2><span style="font:normal 24px Arial, Helvetica, sans-serif;color:#595959;font-weight:bold;text-decoration:underline;">

Non Placed Candidates</span><br></h2>
          <?php 
				require "../config.php";
				$result=mysql_query("Select * from tbl_users where Active = 0");
				$count = mysql_num_rows($result);

				if($count == 0)
				{	
					echo "There are no candidates registered";
				}
				else
				{	
					$result1=mysql_query("Select * from tbl_userprofile where UserID not in (Select UserID from tbl_placement)");
					$count1 = mysql_num_rows($result1);

					if($count1 == 0)
					{	
						echo "There are no non placed candidates";
					}
					else
					{
						while($row1=mysql_fetch_array($result1))
						{
							
							echo"<p style=\"font-family:verdana;font-size:11px\"><span style=\"font-family:Bookman Old Style;font-size:12px;font-weight:bold;text-decoration:underline;\">".$row1['Name']."</span>&nbsp;( ".$row1['Branch']." )
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a style=\"color:green\" href=\"frmPlace.php?id=".$row1['UserID']."\"><img  src=\"../images/add.jpg\" style=\"padding:0;margin:0\" width=\"15\" height=\"15\"/>&nbsp;&nbsp;Place Candidate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
						}
					}
				}
			?>
			<br>
			<br>
			 <h2><span style="font:normal 24px Arial, Helvetica, sans-serif;color:#595959;font-weight:bold;text-decoration:underline;">

Placed Candidates</span><br></h2>
          <?php 
				//require "../config.php";
				$result=mysql_query("Select * from tbl_users where Active = 0");
				$count = mysql_num_rows($result);

				if($count < 1)
				{	
					echo "There are no candidates registered";
				}
				else
				{	
					$result1=mysql_query("Select * from tbl_userprofile where UserID in (Select UserID from tbl_placement)");
					$count1 = mysql_num_rows($result1);

					if($count1 == 0)
					{	
						echo "There are no placed candidates";
					}
					else
					{
						
						while($row1=mysql_fetch_array($result1))
						{
							echo $row1['UserID'];
							$result2 = mysql_query("Select * from tbl_interview where ID = (Select InterviewID from tbl_placement where UserID='$row1[UserID]')");
							
							while($row2=mysql_fetch_array($result2))
							{
								$post = $row2['Reqiurement'];
							}
							$result3 = mysql_query("Select * from tbl_company where ID = (Select CompanyID from tbl_placement where UserID='$row1[UserID]')");
							
							while($row3=mysql_fetch_array($result3))
							{
								$cname = $row3['Name'];
							}
							echo"<p style=\"font-family:verdana;font-size:11px\"><span style=\"font-family:Bookman Old Style;font-size:12px;font-weight:bold;text-decoration:underline;\">".$row1['Name']."</span> Placed in ".$cname." as ".$post."
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a style=\"color:red\" href=\"unPlaceStudent.php?id=".$row1['UserID']."\"><img  src=\"../images/remove.png\" style=\"padding:0;margin:0\" width=\"15\" height=\"15\"/>&nbsp;&nbsp;Unplace Candidate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
						}
					}
				}
			?>
		  </div>
	  </div>
        <div class="sidebar">
          <div class="gadget">
		  <ul class="sb_menu">
              <li class="active"><a href="frmMyProfile.php"><?php echo $_SESSION['NAME'];?></a></li>
            </ul>
			<img src="../images/admin.jpg" width="140" height="140"/>
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
	<DIV style="display:none">
	<?php
		require"sendUserSMS.php";
	?>
	</DIV>
    <div class="clr"></div>
  </div>
</div>
</body>
</html>
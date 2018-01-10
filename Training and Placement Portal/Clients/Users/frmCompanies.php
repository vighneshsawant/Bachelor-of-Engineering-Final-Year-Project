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
		  <p class="post-data"><span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span> </p>
            <h2><span>List of registered companies</span></h2>
            <div class="clr"></div>
            
             <?php 
				require "../../config.php";
				
				$result=mysql_query("Select * from tbl_company ");
				while($row=mysql_fetch_array($result))
				{
					$result1=mysql_query("Select * from tbl_registertocompany where CompanyID = '$row[ID]'");
					$count = mysql_num_rows($result1);

					//$msg = "Number of registered users is ".$count."";
					$result2=mysql_query("Select * from tbl_registertocompany where UserID = '$_SESSION[ID]' and CompanyID = '$row[ID]'");
					$count1 = mysql_num_rows($result2);
					if($count1 > 0)
					{
						//$link = "You are already registered, <a href=\"unregister.php?id=".$row['ID']."\">Click here</a> to unregister";
					}
					else
					{
						//$link = "If you want to register <a href=\"register.php?id=".$row['ID']."\">Click here</a>";
					}
						echo "<table cellpadding=\"0\" cellspacing=\"0\" style=\"color:black;margin-top:5px;\">";
						
						
						echo "<tr valign=\"top\" ><td rowspan=\"4\" width=\"70\"><img  src=\"../../images/company.jpg\" style=\"padding:0;margin:0\" width=\"70\" height=\"70\"/></td>
						<td style=\"font-size:18px\"><b><u>".$row['Name']."</u></b>&nbsp;&nbsp;<span style=\"font-size:12px\"><b>(&nbsp;".$row['Sector']." related company&nbsp;)</b></span></td ></tr>
						<tr ><td colspan =\"2\"><b> <u>Address: </u></b>&nbsp; ".$row['Address']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
						<b> <u>Contact No: </u></b>&nbsp; ".$row['Contact']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b><u>Email Address:</u></b> &nbsp;".$row['EmailID']."</td></tr>
						<tr><td>".$msg.", ".$link." </td></tr>";
						
						echo "</table>";
				}
					
					
				
			?>
          </div>
        </div>
        <div class="sidebar">
          <div class="gadget" >
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
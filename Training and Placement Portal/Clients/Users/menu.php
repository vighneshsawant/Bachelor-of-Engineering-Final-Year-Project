<ul>
  <!--<li <?php if($n==1){ echo "class=\"active\"";}?>><a href="frmUserHome.php">Home</a></li>-->
  <li <?php if($n==1){ echo "class=\"active\"";}?>><a href="eligiblestud.php">Home</a></li>
  <!--<li <?php if($n==3){ echo "class=\"active\"";}?>><a href="frmMyProfile.php">View Result</a></li>-->
  <?php
	session_start();
	require "../../config.php";
	$uid=$_SESSION['ID'];
	$result=mysql_query("Select * from cv Where uid='$uid'");
	$row=mysql_num_rows($result);
	if($row==0)
	{
  ?>
  <li <?php if($n==4){ echo "class=\"active\"";}?>><a href="frmCreateCV.php">Create CV</a></li>
  <?php
	}
  ?>
  <li <?php if($n==2){ echo "class=\"active\"";}?>><a href="frmMyProfile.php">My Profile</a></li>
  <li <?php if($n==6){ echo "class=\"active\"";}?>><a href="frmViewCV.php">View CV</a></li>
  <!--<li <?php if($n==3){ echo "class=\"active\"";}?>><a href="frmCompanies.php">Companies</a></li>
  <li <?php if($n==4){ echo "class=\"active\"";}?>><a href="frmForums.php">Forums</a></li>-->
  <li <?php if($n==5){ echo "class=\"active\"";}?>><a href="frmMail.php">Mail To</a></li>
  <li ><a href="checkLogout.php">Logout</a></li>
</ul>
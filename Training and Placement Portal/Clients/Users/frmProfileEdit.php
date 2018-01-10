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
	require"../../config.php";
	$result = mysql_query("Select * from tbl_userprofile where UserID = '$_SESSION[ID]'");
	while($row=mysql_fetch_array($result))
	{
		$maritial = $row['MaritialStatus'];
		$dob = $row['DOB'];
		$gender = $row['Gender'];
		$contact = $row['Contact'];
		$address = $row['Address'];
		$email = $row['EmailID'];
		$city = $row['City'];
		$state = $row['State'];
		$sscyear = $row['SSCYear'];
		$sscpercentage = $row['SSCPercentage'];
		$sscuniversity = $row['SSCUniversity'];
		$hscskill = $row['HSCSkill'];
		$hscyear = $row['HSCYear'];
		$hscpercentage = $row['HSCPercentage'];
		$hscuniversity = $row['HSCUniversity'];
		$branch = $row['Branch'];
		$sem1percentage = $row['Sem1Percentage'];
		$sem1KTLive = $row['Sem1KTLive'];
		$sem1KTDead = $row['Sem1KTDead'];
		$sem1KTDrop = $row['Sem1KTDrop'];


		$sem2percentage = $row['Sem2Percentage'];
		$sem2KTLive = $row['Sem2KTLive'];
		$sem2KTDead = $row['Sem2KTDead'];
		$sem2KTDrop = $row['Sem2KTDrop'];


		$sem3percentage = $row['Sem3Percentage'];
		$sem3KTLive = $row['Sem3KTLive'];
		$sem3KTDead = $row['Sem3KTDead'];
		$sem3KTDrop = $row['Sem3KTDrop'];


		$sem4percentage = $row['Sem4Percentage'];
		$sem4KTLive = $row['Sem4KTLive'];
		$sem4KTDead = $row['Sem4KTDead'];
		$sem4KTDrop = $row['Sem4KTDrop'];


		$sem5percentage = $row['Sem5Percentage'];
		$sem5KTLive = $row['Sem5KTLive'];
		$sem5KTDead = $row['Sem5KTDead'];
		$sem5KTDrop = $row['Sem5KTDrop'];


		$sem6percentage = $row['Sem6Percentage'];
		$sem6KTLive = $row['Sem6KTLive'];
		$sem6KTDead = $row['Sem6KTDead'];
		$sem6KTDrop = $row['Sem6KTDrop'];


		$sem7percentage = $row['Sem7Percentage'];
		$sem7KTLive = $row['Sem7KTLive'];
		$sem7KTDead = $row['Sem7KTDead'];
		$sem7KTDrop = $row['Sem7KTDrop'];


		$sem8percentage = $row['Sem8Percentage'];
		$sem8KTLive = $row['Sem8KTLive'];
		$sem8KTDead = $row['Sem8KTDead'];
		$sem8KTDrop = $row['Sem8KTDrop'];
		
		$photo = $row['Photo'];
		$resume = $row['CV'];
	}
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
			$n=2;
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
		 
            <h2><span><?php echo $_SESSION['NAME'];?></span></h2>
            <div class="clr"></div>
            
            <?php 
				require "../../config.php";
				$result = mysql_query("Select * from tbl_userprofile where UserID = '$_SESSION[ID]'");
				$count = mysql_num_rows($result);

				if($count < 1)
				{	
					echo "You have not added your profile details yet,<br >So please <a href=\"frmProfileAdd.php\">Add profile details</a>";
				}
				else
				{
					require"FresherEdit.php";
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
            <ul class="sb_menu">
              <li ><a href="frmMyProfile.php">Home</a></li>
              <li class="active"><a  href="frmProfileEdit.php">Update Profile</a></li>
              <li><a href="frmAlbum.php">Add photos</a></li>
              
            </ul>
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
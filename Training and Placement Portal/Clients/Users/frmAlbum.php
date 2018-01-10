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


<script type="text/javascript">
function ValidEntry(form)
{
	var file = form.photo.value;
	
	if (file==null || file=="")
	{
		alert("Please select a file");
		return false;
	}
}
   
</script> 

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
<span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span> <br>
		
		  <?php require"album.php";?>
		  <form action="addPhoto.php" enctype="multipart/form-data" method="post" onsubmit="return ValidEntry(this)">
            <table >
			 <tr>
				<td colspan="2"></td>
			 </tr>
			  <tr>
                <td class="color"  style="font-size:16px;font-weight:bold;text-decoration:underline;"><b>Choose a photo to add to your album</b></td>
                
              </tr>
			  <tr>
				<td colspan="4"></td>
			 </tr>
			  <tr>
				<td colspan="3"><input type="file" class="select" style="background:white" name="photo"  />Only jpg,bmp,gif files allowed
				</td>
			  </tr>
			 <tr>
				<td colspan="4"></td>
			 </tr>
			 <tr>
				<td colspan="4"><input type="submit" value="Add Photo"  class="button" /></td>
			 </tr>
			  
		   </table>
          </form>
            <div class="clr"></div>
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
				$result = mysql_query("Select * from tbl_album where UserID = '$_SESSION[ID]'");
				$row=mysql_fetch_array($result);
					if(($row['Photo']<>"") || ($row['Photo']<>null))
					{echo "Data/".$row['Photo'];}
					else
					{ echo "images/user.png";}
								
			?>" width="140" height="140"/>
			</a>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li ><a href="frmMyProfile.php">Home</a></li>
              <!--<li ><a  href="frmProfileEdit.php">Update Profile</a></li>-->
              <li class="active"><a href="frmAlbum.php">Add photos</a></li>
              
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
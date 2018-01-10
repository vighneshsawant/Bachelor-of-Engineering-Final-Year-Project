<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
error_reporting(E_ALL ^ E_NOTICE);
require"session_set.php";

?>



<body>
<div class="main">
  <div class="main_resize">
    <div class="content">
      <div class="content_bg">
       <?php 
			require "../../config.php";
				
			$result = mysql_query("Select * from tbl_userprofile where UserID = '$_SESSION[ID]'");
			while($row=mysql_fetch_array($result))
			{
				$date=$row['DOB'];
				$matchdate=explode('/',$date);
				$day = $matchdate[0];
				$month = $matchdate[1];
				$year = $matchdate[2];


				switch($month)
				{
				case 1: $m="January";break;
				case 2: $m="February";break;
				case 3: $m="March";break;
				case 4: $m="April";break;
				case 5: $m="May";break;
				case 6: $m="June";break;
				case 7: $m="July";break;
				case 8: $m="August";break;
				case 9: $m="September";break;
				case 10: $m="October";break;
				case 11: $m="November";break;
				case 12: $m="December";break;
				}
				echo"<p style=\"font-family:verdana;font-size:11px\"><span style=\"font-family:Bookman Old Style;font-size:20px;text-decoration:underline;\">".$_SESSION['NAME']."</span>
				<br><img style=\"padding:0;margin:0\" src=\"../../images/birth.jpg\" height=16 width=16/> Born on ".$m." ".$day.", ".$year." &nbsp;&nbsp;&nbsp;<img style=\"padding:0;margin:0\" src=\"../../images/home.jpg\" height=16 width=16/> Lives in ".$row['City'].", ".$row['State'].
				"<br><img style=\"padding:0;margin:0\" src=\"../../images/heart1.jpg\" height=16 width=16/> ".$row['MaritialStatus']."&nbsp;&nbsp;&nbsp;<img style=\"padding:0;margin:0\" src=\"../../images/study.jpg\" height=16 width=16/> Studying at Mumbai University";
				
			}
			?>
			
          
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
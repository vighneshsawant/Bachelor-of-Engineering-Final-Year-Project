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
	//require"session_set.php";
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
			$n=7;
			require"menu.php";
		?>
        <div class="clr"></div>
      </div>
      <div class="hbg">
	  
		<?php 
			
			//require"marquee.php";
		?>
	  </div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar1">
          <div class="article">  
		  <br><?php error_reporting(E_ALL ^ E_NOTICE); session_start(); 
				if($_GET['msg']=="invalid"){echo "<span class=\"error\">--- Invalid email address ---</span>";}
				if($_GET['msg']=="empty"){echo "<span class=\"error\">--- Please fill the required field ---</span>";}
				if($_GET['msg']=="nomatch"){echo "<span class=\"error\">--- Please enter valid Semester Percentage and KT's record ---</span>";}
				?>
		   <form action="adddiadmission2.php" method="post" >
				<div style="margin:15px;width:100%;border:5px double #4799dc;height:30px;">
					<div style="margin:0 160px;width:60%;height:30px;">
						<div style="margin:5px 10px;font-size:20px;font-weight:bold;font-family:normal">
							UNDERTAKING BY THE STUDENTS AND PARENTS
						</div>
					</div>
				</div>
            <table width="100%" cellpadding="10px" style="padding:0 50px;margin:10px;font-size:18px;font-family:normal">
				<tr>
					<td>1. I have studied the rules of Admission and agree to the same</td>
				</tr>
				<tr>
					<td>2. The particulars furnished by my ward are true to the best of my knowledge</td>
				</tr>
				<tr>
					<td>3. I undertake and bind my self to pay all dues within due date on behalf of my ward such as fees,
						charges and duea as levied by the authorities from time to time</td>
				</tr>
				<tr>
					<td>4. I shall take care that my ward behaves properly and do nothing except in the interest of his studies</td>
				</tr> 
			</table>
			<table width="100%" style="padding:0 40px;margin:10px">
				<tr>
					<td>Place</td>
					<td>
						<input type="text" id="place" value="<?php echo $_SESSION['place']; ?>" class="text" name="place" required />
					</td>
					<td>Signature for Candidate</td>
					<td>
						<input type="file" id="csign" value="<?php echo $_SESSION['csign']; ?>" class="text" name="csign" required />
					</td>
				</tr>
				<tr>
					<td>Date</td>
					<td>
						<input type="date" id="date1" value="<?php echo $_SESSION['date1']; ?>" class="text" name="date1"  required/>
					</td>
					<td>Signature of Guardian</td>
					<td>
						<input type="file" id="gsign" value="<?php echo $_SESSION['gsign']; ?>" class="text" name="gsign"  required/>
					</td>
				</tr>
			</table>
			<table width="100%" cellpadding="10px" style="padding:0 50px;margin:10px;font-size:18px;font-family:normal">
				<tr>
					<td>1. I hereby solemnly declare that I have read and understood all the rule of admission to the Diploma 
					courses and I have consulted my Guardian before this form.</td>
				</tr>
				<tr>
					<td>2. I have not been debarred by any examination authority from appearing in examination during the 
					period of my proposed studies</td>
				</tr>
				<tr>
					<td>3. The information furnished by me in this application is true to the best of my knowledge and
					belief.</td>
				</tr>
				<tr>
					<td>4. I fully understand that the offer of admission will be made to me depending upon my inter-se
					-merit and availabity of seat at the times of scrutiny of my application. When I will report to the
					admission authority according to the schedule of admission.</td>
				</tr> 
				<tr>
					<td>5. I hereby agree to confirm to any rules acts and laws onforeed by the Government and I hereby 
					undertake that the admission being given to me on my claim on reservation, if, any, is provisional 
					and the same will be cancelled if thye said claim is rejected by any competent authority.</td>
				</tr>
				<tr>
					<td>6. I have carefully noted the contents of the notification made regarding the five attempts rule
						of MSBTE as per RA-4 displayed on the notice board and agree to abide by it.</td>
				</tr>
			</table>
			<table width="100%" style="padding:0 20px;margin:10px">
				<tr>
					<td>Place</td>
					<td>
						<input type="text" id="place1" value="<?php echo $_SESSION['place1']; ?>" width="80px" style="color:#959595;
							font:normal 12px/1.8em Arial, Helvetica, sans-serif;" name="place1" required />
					</td>
					<td>Date</td>
					<td>
						<input type="date" id="date2" value="<?php echo $_SESSION['date2']; ?>" width="80px" style="color:#959595;
							font:normal 12px/1.8em Arial, Helvetica, sans-serif;" name="date1" required />
					</td>
					<td>Signature of Candidate:</td>
					<td>
						<input type="file" id="csign1" value="<?php echo $_SESSION['csign1']; ?>" class="text" name="csign1"  required/>
					</td>
				</tr>
			</table>
				<div style="margin:15px;width:100%;border:5px double #4799dc;height:30px;">
					<div style="margin:0 160px;width:60%;height:30px;">
						<div style="margin:5px 10px;font-size:20px;font-weight:bold;font-family:normal">
							UNDERTAKING BY THE STUDENTS AND PARENTS
						</div>
					</div>
				</div>
			<table>
				<tr>
					<td style="padding:0 30px;">Academic Year</td>
					<td>
						<input type="text" id="acyear" value="<?php echo $_SESSION['acyear']; ?>" class="text" name="acyear"  />
					</td>
					<td>Total Fees:</td>
					<td>
						<input type="text" id="tfees" value="<?php echo $_SESSION['tfees']; ?>" class="text" name="tfees"  />
					</td>
				</tr>
				<tr>
					<td style="padding:0 30px;">Receipt No. & Date</td>
					<td>
						<input type="recno" id="recno" value="<?php echo $_SESSION['recno']; ?>" class="text" name="recno"  />
					</td>
					<td>Fees Paid:</td>
					<td>
						<input type="text" id="pfees" value="<?php echo $_SESSION['pfees']; ?>" class="text" name="pfees"  />
					</td>
				</tr>
				<tr>
					<td style="padding:0 30px;">Signature</td>
					<td>
						<input type="file" id="sign" value="<?php echo $_SESSION['sign']; ?>" class="text" name="sign"  />
					</td>
				</tr>
			 <tr>
				<td colspan="4"></td>
			 </tr>
			 <tr>
				<td></td>
				<td></td>
				<td colspan="4"><input type="submit" value="Submit"  class="button" /></td>
			 </tr>
			  
		   </table>
          </form>
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
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
		   <form action="addEngAdmission1.php" method="post" >
				<div style="margin:5px;width:100%;height:20px;">
					<div style="height:20px;">
						<div style="margin:0 10px;font-size:18px;font-weight:bold;font-family:normal">
							[6.]Detais of Examination Passed
						</div>
					</div>
				</div>
			<table border="1px">
				<tr>
					<th>Exam of Engg.</th>
					<th >Month & Year</th>
					<th>Exam Seat No.</th>
					<th>Marks out of/Grade Marks</th>
					<th>Marks Obtained/Grade Marks</th>
					<th>Passed/Passed with first class/Dn./ATKT/Grade/Failed</th>
					<th>Number of Subject Failed</th>
				</tr>
				<?php

					for($i=1;$i<7;$i++)
					{ 
						for($j=1;$j<2;$j++)
						{
						?>
						<tr>
							<td><b>
								<?php 
								if($i==1)
								{
									echo "SEM-I";
								}
								else if($i==2)
								{
									echo "SEM-II";
								}
								else if($i==3)
								{
									echo "SEM-III";
								}
								else if($i==4)
								{
									echo "SEM-IV";
								}
								else if($i==5)
								{
									echo "SEM-V";
								}
								else if($i==6)
								{
									echo "SEM-VI";
								}
								?>
							</b></td>
							<td ><input type="text" id="year<?php echo $i?>" value="<?php echo $_SESSION['year'.$i]; ?>" class="text1" name="year<?php echo $i?>"  /></td>
							<td ><input type="text" id="seat<?php echo $i?>" value="<?php echo $_SESSION['seat'.$i]; ?>" class="text1" name="seat<?php echo $i?>"  /></td>
							<td ><input type="text" id="grade<?php echo $i?>" value="<?php echo $_SESSION['grade'.$i]; ?>" class="text1" name="grade<?php echo $i?>"  /></td>
							<td ><input type="text" id="obtain<?php echo $i?>" value="<?php echo $_SESSION['obtain'.$i]; ?>" class="text1" name="obtain<?php echo $i?>"  /></td>
							<td ><input type="text" id="result<?php echo $i?>" value="<?php echo $_SESSION['result'.$i]; ?>" class="text2" name="result<?php echo $i?>"  /></td>
							<td ><input type="text" id="fsub<?php echo $i?>" value="<?php echo $_SESSION['fsub'.$i]; ?>" class="text1" name="fsub<?php echo $i?>"  /></td>
						<?php
						}
						?>
					</tr>
					<?php
					}
					?>
			</table>
			<table width="100%" style="padding:0 10px;margin:10px;font-size:17px;font-family:normal">
				<tr>
					<td>I hereby declare that the above information is true to best of my knowledge and belief.</td>
				</tr>
			</table>
			<table style="padding:0 10px;width:100%">
				<tr>
					<td width="210px">Date</td>
					<td>
						<input type="text" id="date1" value="<?php echo $_SESSION['date1']; ?>" class="text" name="date1"  required/>
					</td>
					<td>Signature of Student</td>
					<td>
						<input type="file" id="ssign" value="<?php echo $_SESSION['ssign']; ?>" class="text" name="ssign"  required/>
					</td>
				</tr>
				<tr>
					<td>Place</td>
					<td>
						<input type="text" id="place" value="<?php echo $_SESSION['place']; ?>" class="text" name="place"  required/>
					</td>
					<td>Name</td>
					<td>
						<input type="text" id="name" value="<?php echo $_SESSION['name']; ?>" class="text" name="name" required />
					</td>
				</tr>
			</table>
				<div style="margin:15px;width:100%;height:50px;">
					<div style="height:50px;">
						<div style="margin:5px 10px;font-size:18px;font-family:normal">
							I certify that my son/daughter is making this application with my permission. I hold myself
							responsible for his/her good conduct and behavior as a student of the college and for payment
							of all his/her fees and dues during his/her stay in the department.
						</div>
					</div>
				</div>
			<table style="padding:50px 10px;width:100%">
				<tr>
					<td width="210px">Date</td>
					<td>
						<input type="text" id="date2" value="<?php echo $_SESSION['date1']; ?>" class="text" name="date2" required />
					</td>
					<td>Signature of Parent</td>
					<td>
						<input type="file" id="ssign1" value="<?php echo $_SESSION['ssign1']; ?>" class="text" name="ssign1" required />
					</td>
				</tr>
				<tr>
					<td>Place</td>
					<td>
						<input type="text" id="place1" value="<?php echo $_SESSION['place1']; ?>" class="text" name="place1" required />
					</td>
					<td>Name</td>
					<td>
						<input type="text" id="name1" value="<?php echo $_SESSION['name1']; ?>" class="text" name="name1"  required/>
					</td>
				</tr>
			</table>
			<table style="padding:0 10px;width:100%">
				<tr>
					<td>Recieved Tuition Fees Rs.</td>
					<td>
						<input type="text" id="tfees" value="<?php echo $_SESSION['tfees']; ?>" class="text" name="tfees"  />
					</td>
					<td>D.D. No.</td>
					<td>
						<input type="text" id="ddno" value="<?php echo $_SESSION['ddno']; ?>" class="text" name="ddno"  />
					</td>
				</tr>
				<tr>
					<td>Dated</td>
					<td>
						<input type="date" id="date3" value="<?php echo $_SESSION['date2']; ?>" class="text" name="date3"  />
					</td>
					<td>Bank Of</td>
					<td>
						<input type="text" id="bank" value="<?php echo $_SESSION['bank']; ?>" class="text" name="bank"  />
					</td>
				</tr>
				<tr>
					<td>Reciept No.</td>
					<td>
						<input type="text" id="recno" value="<?php echo $_SESSION['recno']; ?>" class="text" name="recno"  />
					</td>
					<td>Date</td>
					<td>
						<input type="date" id="date4" value="<?php echo $_SESSION['date3']; ?>" class="text" name="date4"  />
					</td>
				</tr>
			</table>
				<div style="margin:15px;width:100%;height:30px;">
					<div style="width:60%;height:30px;">
						<div style="margin:5px 10px;font-size:20px;font-weight:bold;font-family:normal;">
							<u>FOR OFFICE USE ONLY</u>
						</div>
					</div>
				</div>
			<table border="1px" style="width:100%">
				<tr>
					<td style="width:400px;padding:20px;font-weight:bold;font-size:25px;text-align:center">
						Result Verified By
					</td>
					<td>
						<input type="file" id="esign" value="<?php echo $_SESSION['esign']; ?>" style="padding-left:80px;padding-top:5px" 
						class="text" name="esign"  />
						<div style="border:thin solid black;width:100%;"></div>
						<p style="padding-left:30px;font-size:15px"><b>Signature of Examination Cell</b></p>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td><b>Account/Cashier</b></td>
					<td>
						<input type="file" id="csign" value="<?php echo $_SESSION['csign']; ?>" class="text" name="csign"  />
					</td>
					<td><b>Registrar</b></td>
					<td>
						<input type="file" id="rsign" value="<?php echo $_SESSION['rsign']; ?>" class="text" name="rsign"  />
					</td>
					<td><b>Principle</b></td>
					<td>
						<input type="file" id="psign" value="<?php echo $_SESSION['psign']; ?>" class="text" name="psign"  />
					</td>
				</tr>
			 <tr>
				<td colspan="4"></td>
			 </tr>
			 <tr>
				<td></td>
				<td></td>
				<td colspan="4"><input type="submit" value="Next Step"  class="button" /></td>
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
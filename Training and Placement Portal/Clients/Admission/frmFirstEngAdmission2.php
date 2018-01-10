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
   function showPreview(ele)
	{
				$('#imgAvatar').attr('src', ele.value); // for IE
				if (ele.files && ele.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
				$('#imgAvatar').attr('src', e.target.result);
			}
			reader.readAsDataURL(ele.files[0]);
		}	
	}
</script>
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
		   <form action="addFirstEngAdmission2.php" method="post" >
				<div style="margin:5px;width:100%;height:30px;">
					<div style="height:30px;">
						<div style="margin:0 10px;font-size:18px;font-weight:bold;font-family:normal">
							Detail of Examination Passed:-
						</div>
					</div>
				</div>
				<div style="margin:5px;width:100%;height:20px;">
					<div style="height:20px;">
						<div style="margin:0 10px;font-size:18px;font-weight:bold;font-family:normal">
							(A)(UG)
						</div>
					</div>
				</div>
			<table border="1px" width="100%">
				<tr valign="top">
					<th colspan="1">Details</th>
					<th colspan="4">HSC or Equivalent</th>
				 </tr>
				<tr>
					<th>Subject (Max. Marks)</th>
					<th >MATH(100)</th>
					<th>PHY(100)</th>
					<th><div style="padding-top:8px;padding-left:40px;"><div style="border:thin solid black;width:70%;"></div></div>(100)</th>
					<th>P_M (Total)(300)</th>
				</tr>
			   	<tr>
					<td width="100%"><b><center>Marks Obtained</center></b></td>
					<td ><input type="text" id="math" value="<?php echo $_SESSION['math']; ?>" class="text3" name="math"  required/></td>
					<td ><input type="text" id="phy" value="<?php echo $_SESSION['phy']; ?>" class="text3" name="phy"  requiredrequired/></td>
					<td ><input type="text" id="dash" value="<?php echo $_SESSION['dash']; ?>" class="text3" name="dash"  required/></td>
					<td ><input type="text" id="total" value="<?php echo $_SESSION['total']; ?>" class="text3" name="total"  required/></td>
				</tr>
			</table><br>
				<div style="margin:5px;width:100%;height:20px;">
					<div style="height:20px;">
						<div style="margin:0 10px;font-size:18px;font-weight:bold;font-family:normal">
							(B.)(UG)
						</div>
					</div>
				</div>
			<table border="1px">
				<tr>
					<th>Examination</th>
					<th >Name of Board/University</th>
					<th>Year of Passing</th>
					<th>Maximum Marks</th>
					<th>Marks Obtained</th>
					<th>Class</th>
					<th>Percentage %</th>
				</tr>
				<tr>
					<td><b>S.S.C or Equivalent</b></td>
					<td ><input type="text" id="board10" value="<?php echo $_SESSION['board10']; ?>" class="text1" name="board10"  required/></td>
					<td ><input type="text" id="year10" value="<?php echo $_SESSION['year10']; ?>" class="text1" name="year10"  required/></td>
					<td ><input type="text" id="max10" value="<?php echo $_SESSION['max10']; ?>" class="text1" name="max10"  required/></td>
					<td ><input type="text" id="obt10" value="<?php echo $_SESSION['obt10']; ?>" class="text1" name="obt10"  required/></td>
					<td ><input type="text" id="class10" value="<?php echo $_SESSION['class10']; ?>" class="text1" name="class10"  required/></td>
					<td ><input type="text" id="per10" value="<?php echo $_SESSION['per10']; ?>" class="text1" name="per10"  required/></td>
				</tr>
				<tr>
					<td><b>H.S.C or Equivalent</b></td>
					<td ><input type="text" id="board12" value="<?php echo $_SESSION['board12']; ?>" class="text1" name="board12"  /></td>
					<td ><input type="text" id="year12" value="<?php echo $_SESSION['year12']; ?>" class="text1" name="year12"  /></td>
					<td ><input type="text" id="max12" value="<?php echo $_SESSION['max12']; ?>" class="text1" name="max12"  /></td>
					<td ><input type="text" id="obt12" value="<?php echo $_SESSION['obt12']; ?>" class="text1" name="obt12"  /></td>
					<td ><input type="text" id="class12" value="<?php echo $_SESSION['class12']; ?>" class="text1" name="class12"  /></td>
					<td ><input type="text" id="per12" value="<?php echo $_SESSION['per12']; ?>" class="text1" name="per12"  /></td>
				</tr>
				<tr>
					<td><b>Diploma/Other</b></td>
					<td ><input type="text" id="boardd" value="<?php echo $_SESSION['boardd']; ?>" class="text1" name="boardd"  /></td>
					<td ><input type="text" id="yeard" value="<?php echo $_SESSION['yeard']; ?>" class="text1" name="yeard"  /></td>
					<td ><input type="text" id="maxd" value="<?php echo $_SESSION['maxd']; ?>" class="text1" name="maxd"  /></td>
					<td ><input type="text" id="obtd" value="<?php echo $_SESSION['obtd']; ?>" class="text1" name="obtd"  /></td>
					<td ><input type="text" id="classd" value="<?php echo $_SESSION['classd']; ?>" class="text1" name="classd"  /></td>
					<td ><input type="text" id="perd" value="<?php echo $_SESSION['perd']; ?>" class="text1" name="perd"  /></td>
				</tr>
			</table><br>
				<div style="margin:5px;width:100%;height:20px;">
					<div style="height:20px;">
						<div style="margin:0 10px;font-size:18px;font-weight:bold;font-family:normal">
							(C).JEE Detais 201.
						</div>
					</div>
				</div>
			<table border="1px">
				<tr>
					<th>Roll No.</th>
					<th>Physic</th>
					<th>Chemistry</th>
					<th>Maths</th>
					<th>Total</th>
					<th>Percentage</th>
				</tr>
				<tr>
					<td ><input type="text" id="jroll" value="<?php echo $_SESSION['jroll']; ?>" class="text3" name="jroll"  /></td>
					<td ><input type="text" id="jphy" value="<?php echo $_SESSION['jphy']; ?>" class="text3" name="jphy"  /></td>
					<td ><input type="text" id="jche" value="<?php echo $_SESSION['jche']; ?>" class="text3" name="jche"  /></td>
					<td ><input type="text" id="jmath" value="<?php echo $_SESSION['jmath']; ?>" class="text3" name="jmath"  /></td>
					<td ><input type="text" id="jtotal" value="<?php echo $_SESSION['jtotal']; ?>" class="text3" name="jtotal"  /></td>
					<td ><input type="text" id="jper" value="<?php echo $_SESSION['jper']; ?>" class="text3" name="jper"  /></td>
				</tr>
			</table>
			<table width="100%" style="padding:0 100px;margin:10px;font-size:17px;font-family:normal">
				<tr>
					<td><b>I hereby declare that the above information is true to best of my knowledge and belief.</b></td>
				</tr>
			</table>
			<table style="padding:0 10px;width:100%">
				<tr>
					<td width="210px">Date</td>
					<td>
						<input type="text" id="date1" value="<?php echo $_SESSION['date1']; ?>" class="text" name="date1" required />
					</td>
					<td>Signature of Student</td>
					<td>
						<input type="file" id="ssign" value="<?php echo $_SESSION['ssign']; ?>" class="text" name="ssign" required />
					</td>
				</tr>
				<tr>
					<td>Place</td>
					<td>
						<input type="text" id="place" value="<?php echo $_SESSION['place']; ?>" class="text" name="place" required />
					</td>
					<td>Name</td>
					<td>
						<input type="text" id="name" value="<?php echo $_SESSION['name']; ?>" class="text" name="name"  required/>
					</td>
				</tr>
			</table>
				<div style="margin:15px;width:100%;height:50px;">
					<div style="height:50px;">
						<div style="margin:5px 10px;font-size:18px;font-weight:bold;font-family:normal">
							I certify that my son/daughter is making this application with my permission. I hold myself
							responsible for his/her good conduct and behavior as a student of the college and for payment
							of all his/her fees and dues during his/her stay in the department.
						</div>
					</div>
				</div>
			<table style="padding:0 10px;width:100%">
				<tr>
					<td width="210px">Date</td>
					<td>
						<input type="text" id="date2" value="<?php echo $_SESSION['date1']; ?>" class="text" name="date1" required />
					</td>
					<td>Signature of Student</td>
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
						<input type="date" id="date3" value="<?php echo $_SESSION['date2']; ?>" class="text" name="date2"  />
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
						<input type="date" id="date4" value="<?php echo $_SESSION['date3']; ?>" class="text" name="date3"  />
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
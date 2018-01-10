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
<script type="text/javascript" src="../../jquery-latest.js"></script>
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
			
			require"marquee1.php";
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
		   <form action="addEngAdmission.php" method="post" enctype="multipart/form-data">
            <table>
			 <tr valign="top">
				<td>
				</td>
				<td colspan="2" class="color"  style="padding:50px 80px;font-size:25px;font-weight:bold;text-decoration:underline;">
					ACADEMIC YEAR 2015-2016
				</td>
				<td colspan="2">
					<img scr="" width="150px" height="150px" id="imgAvatar"><br><br>
					<input id="photo" colspan="4" type="file" 
						Style="background-color:black:;olor:#959595;font:normal 12px/1.8em Arial, Helvetica, sans-serif;width:86px" name="photo" onchange="showPreview(this)" required/>
				</td>
			 </tr>
			   	<tr>
					<td ><input id="deyear" colspan="4" value="<?php echo $_SESSION['deyear']; ?>" 
					Style="color:#959595;font:normal 12px/1.8em Arial, Helvetica, sans-serif;width:100px" name="deyear" required /></td>
					<td>Year<span class="error">*</span></td>
					<td ><input id="declass" colspan="4" value="<?php echo $_SESSION['declass']; ?>" 
					Style="color:#959595;font:normal 12px/1.8em Arial, Helvetica, sans-serif;width:450px" name="declass"  required/></td>
					<td>Engineering</td>
				</tr>
				<tr>
					<td></td>
					<td><b>To be filled </b></td>
					<td><b>and signed by the candidate before submitting to the college office</b>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td style="width:380px"><span class="error">*</span><b>Year of Admission to First Year/Direct Second Year :-</b></td>
					<td style="width:100px">
						<input type="text" id="addyear" value="<?php echo $_SESSION['addyear']; ?>" 
						Style="font:normal 12px/1.8em Arial, Helvetica, sans-serif;width:100px" name="addyear" required />
					</td>
				</tr>
				<tr>
					<td><span class="error">*</span><b>F.E./D.S.E. Admission Reciept No.</b></td>
					<td style="width:100px">
						<input type="text" id="recnum" value="<?php echo $_SESSION['recnum']; ?>" 
						Style="font:normal 12px/1.8em Arial, Helvetica, sans-serif;width:100px" name="recnum"  required/>
					</td>
					<td><span class="error">*</span><b>Date</b></td>
					<td>
						<input type="date" id="recdate" value="<?php echo $_SESSION['recdate']; ?>" 
						Style="font:normal 12px/1.8em Arial, Helvetica, sans-serif;width:150px" name="recdate"  required/>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td><span class="error">*</span>Adhar Card Number</td>
					<td>
						<input type="text" id="adcnum" value="<?php echo $_SESSION['adcnum']; ?>" 
						Style="font:normal 12px/1.8em Arial, Helvetica, sans-serif;width:450px" name="adcnum" required />
					</td>
				</tr>
			</table>
			<table>
				<tr>
						<tr>
							<td>[1.]Student Name</td>
							<td >
								<input id="sname" value="<?php echo $_SESSION['sname']; ?>" class="text" name="sname"  required/>
								(Surname)<span class="error">*
							</td>
							<td>
								<input id="fname" value="<?php echo $_SESSION['fname']; ?>" class="text" name="fname" required />
								(Firstname)<span class="error">*
							</td>
							<td>
								<input id="faname" value="<?php echo $_SESSION['faname']; ?>" class="text" name="faname"  required/>
								(Father name)<span class="error">*
							</td>
							<td>
								<input id="mname" value="<?php echo $_SESSION['mname']; ?>" class="text" name="mname" required />
								(Mother name)<span class="error">*
							</td>
						</tr>
					
				</tr>
			</table>
			<table style="padding:15px;">
				<tr>
					<td>Birth Date <span class="error">*</span></td>
					<td colspan="3">
						<input type="date" value="<?php echo $_SESSION['bdate']; ?>" name="bdate" id="bdate" class="text" required/>
					</td>
				</tr>
				<tr>
					<td>Place of Birth</td>
					<td >
						<input id="placeb" value="<?php echo $_SESSION['placeb']; ?>" class="text" name="placeb"  />
					</td>
					<td>State</td>
					<td>
						<input id="bstate" value="<?php echo $_SESSION['bstate']; ?>" class="text" name="bstate"  />
					</td>
					<td>Nationality</td>
					<td>
						<input id="nation" value="<?php echo $_SESSION['nation']; ?>" class="text" name="nation"  />
					</td>
				</tr>
				<tr>
					<td>Religion</td>
					<td >
						<input id="religion" value="<?php echo $_SESSION['religion']; ?>" class="text" name="religion"  />
					</td>
					<td>Caste</td>
					<td>
						<input id="caste" value="<?php echo $_SESSION['caste']; ?>" class="text" name="caste"  />
					</td>
					<td>Category</td>
					<td>
						<input id="category" value="<?php echo $_SESSION['category']; ?>" class="text" name="category"  />
					</td>
				</tr>
			  <tr>
			</table>
			<table >
				<tr valign="top">
					<td><b>[4.]Last College Attended</b><span class="error">*</span></td>
					<td colspan="3">
						<textarea id="cattended" class="select" rows="1" cols="98" name="cattended" required ><?php echo $_SESSION['cattended']; ?>
						</textarea>
					</td>
				</tr>
				<tr valign="top">
					<td>Address <span class="error">*</span></td>
					<td colspan="3">
						<textarea id="caddress" class="select" rows="2" cols="98" name="caddress" required ><?php echo $_SESSION['caddress']; ?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>Tal</td>
					<td>
						<input id="ctal" value="<?php echo $_SESSION['ctal']; ?>" class="text" name="ctal"  />
					</td>
					<td>Dist <span class="error">*</span></td>
					<td>
						<input id="cdist" value="<?php echo $_SESSION['cdist']; ?>" class="text" name="cdist"  />
					</td>
				</tr>
				<tr>
					<td>State <span class="error">*</span></td>
					<td>
						<input id="cstate" value="<?php echo $_SESSION['cstate']; ?>" class="text" name="cstate"  />
					</td>
				</tr>
				<tr valign="top">
					<td><b>[5.]Local Address</b><span class="error">*</span></td>
					<td colspan="3">
						<textarea id="laddress" class="select" rows="2" cols="98" name="laddress"  ><?php echo $_SESSION['laddress']; ?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>Tal</td>
					<td>
						<input id="ltal" value="<?php echo $_SESSION['ltal']; ?>" class="text" name="ltal"  />
					</td>
					<td>Dist<span class="error">*</span></td>
					<td>
						<input id="ldist" value="<?php echo $_SESSION['ldist']; ?>" class="text" name="ldist"  />
					</td>
				</tr>
				<tr>
					<td>State: <span class="error">*</span></td>
					<td>
						<input id="lstate" value="<?php echo $_SESSION['lstate']; ?>" class="text" name="lstate"  />
					</td>
					<td>Pin Code <span class="error">*</span></td>
					<td>
						<input id="lpin" value="<?php echo $_SESSION['lpin']; ?>" class="text" name="lpin"  />
					</td>
				</tr>
				<tr>
					<td>Student Mob. No.: <span class="error">*</span></td>
					<td>
						<input id="slmobile" value="<?php echo $_SESSION['slmobile']; ?>" class="text" name="slmobile"  required/>
					</td>
					<td>Email <span class="error">*</span></td>
					<td>
						<input id="lemail" value="<?php echo $_SESSION['lemail']; ?>" class="text" name="lemail"  required/>
					</td>
				</tr>
				<tr valign="top">
					<td><b>[6.]Permanant Address</b><span class="error">*</span></td>
					<td colspan="3">
						<textarea id="paddress" class="select" rows="2" cols="98" name="paddress" required ><?php echo $_SESSION['paddress']; ?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>Tal</td>
					<td>
						<input id="ptal" value="<?php echo $_SESSION['ptal']; ?>" class="text" name="ptal"  />
					</td>
					<td>Dist<span class="error">*</span></td>
					<td>
						<input id="pdist" value="<?php echo $_SESSION['pdist']; ?>" class="text" name="pdist"  />
					</td>
				</tr>
				<tr>
					<td>State: <span class="error">*</span></td>
					<td>
						<input id="pstate" value="<?php echo $_SESSION['pstate']; ?>" class="text" name="pstate"  />
					</td>
					<td>Pin Code <span class="error">*</span></td>
					<td>
						<input id="ppin" value="<?php echo $_SESSION['ppin']; ?>" class="text" name="ppin"  />
					</td>
				</tr>
				<tr>
					<td>Tel No. STD Code (): <span class="error">*</span></td>
					<td>
						<input id="pstdno" value="<?php echo $_SESSION['pstdno']; ?>" class="text" name="pstdno"  />
					</td>
					<td>Mob. No.: <span class="error">*</span></td>
					<td>
						<input id="pmobile" value="<?php echo $_SESSION['pmobile']; ?>" class="text" name="pmobile"  />
					</td>
				</tr>
				<tr valign="top">
					<td><b>[7.]Name of Father's/Parents</b> <span class="error">*</span></td>
					<td colspan="3">
						<textarea id="fapname" class="select" rows="1" cols="98" name="fapname"  required><?php echo $_SESSION['fapname']; ?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>Occupation <span class="error">*</span></td>
					<td>
						<input id="faoccu" value="<?php echo $_SESSION['faoccu']; ?>" class="text" name="faoccu"  />
					</td>
					<td>Income Rs. <span class="error">*</span></td>
					<td>
						<input id="faincome" value="<?php echo $_SESSION['faincome']; ?>" class="text" name="faincome"  />
					</td>
				</tr>
				<tr>
					<td>Mob. No. <span class="error">*</span></td>
					<td>
						<input id="famobno" value="<?php echo $_SESSION['famobno']; ?>" class="text" name="famobno"  />
					</td>
				</tr>
				<tr valign="top">
					<td>Office Address <span class="error">*</span></td>
					<td colspan="3">
						<textarea id="faoffaddress" class="select" rows="2" cols="98" name="faoffaddress"  ><?php echo $_SESSION['faoffaddress']; ?>
						</textarea>
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
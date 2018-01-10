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
			
			require"marquee.php";
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
		   <form action="adddiadmission.php" method="post" enctype="multipart/form-data">
            <table >
			 <tr valign="top">
				<td>
				</td>
				<td colspan="3" class="color"  style="padding:50px 80px;font-size:25px;font-weight:bold;text-decoration:underline;">
					ACADEMIC YEAR 2015-2016
				</td>
				<td>
					<img scr="" width="150px" height="150px" id="imgAvatar"><br><br>
					<input id="photo" type="file" 
						Style="background-color:black:;color:#959595;font:normal 12px/1.8em Arial, Helvetica, sans-serif;width:86px" name="photo" onchange="showPreview(this)" required/>
				</td>
			 </tr>
			   	<tr>
					<td>Class<span class="error">*</span></td>
					<td>
						<input id="diclass" value="Diploma" class="text" name="diclass"  readonly/><br>
								(Surname)<span class="error">*
					</td>
					<td>Year Diploma in<span class="error">*</span></td>
					<td>
						<select id="diyear" name="diyear" required>
							<option>--Select Year--</option>
							<option value="FE">First Year</option>
							<option value="SE">Second Year</option>
							<option value="TE">Third Year</option>
						</select>
					</td>
					<td>Engineering</td>
				</tr>
				<tr>
						<tr>
							<td>[1.]Student Name</td>
							<td >
								<input id="sname" value="<?php echo $_SESSION['sname']; ?>" class="text" name="sname"  required/><br>
								(Surname)<span class="error">*
							</td>
							<td>
								<input id="fname" value="<?php echo $_SESSION['fname']; ?>" class="text" name="fname"  required/>
								(Firstname)<span class="error">*
							</td>
							<td>
								<input id="faname" value="<?php echo $_SESSION['faname']; ?>" class="text" name="faname"  required/>
								(Father name)<span class="error">*
							</td>
							<td>
								<input id="mname" value="<?php echo $_SESSION['mname']; ?>" class="text" name="mname"  required/>
								(Mother name)<span class="error">*
							</td>
						</tr>
					
				</tr>
			</table>
			<table>
				<tr>
					<td>[2.]Adhar Card Number <span class="error">*</span></td>
					<td>
						<input id="adcnum" value="<?php echo $_SESSION['adcnum']; ?>" class="text" name="adcnum"  required/>
					</td>
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
					<td>Nationality</td>
					<td>
						<input id="nation" value="<?php echo $_SESSION['nation']; ?>" class="text" name="nation"  />
					</td>
					<td>Mother Tongue</td>
					<td>
						<input id="mtongue" value="<?php echo $_SESSION['mtongue']; ?>" class="text" name="mtongue"  />
					</td>
				</tr>
				<tr>
					<td>Religion</td>
					<td >
						<input id="religion" value="<?php echo $_SESSION['religion']; ?>" class="text" name="religion"  required/>
					</td>
					<td>Caste</td>
					<td>
						<input id="caste" value="<?php echo $_SESSION['caste']; ?>" class="text" name="caste"  required/>
					</td>
					<td>Category</td>
					<td>
						<input id="category" value="<?php echo $_SESSION['category']; ?>" class="text" name="category"  required/>
					</td>
				</tr>
			  <tr>
			</table>
			<table>
				<tr valign="top">
					<td>[3.]X/XII std/passed conducted <span class="error">*</span></td>
					<td colspan="3">
						<textarea id="xconducted" class="select" rows="1" cols="98" name="xconducted"  required><?php echo $_SESSION['xconducted']; ?>
						</textarea>
					</td>
				</tr>
				<tr valign="top">
					<td>[4.]Last School/College Attended <span class="error">*</span></td>
					<td colspan="3">
						<textarea id="scattended" class="select" rows="1" cols="98" name="scattended"  required><?php echo $_SESSION['scattended']; ?>
						</textarea>
					</td>
				</tr>
				<tr valign="top">
					<td>Address <span class="error">*</span></td>
					<td colspan="3">
						<textarea id="scaddress" class="select" rows="2" cols="98" name="scaddress"  required><?php echo $_SESSION['scaddress']; ?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>Dist <span class="error">*</span></td>
					<td>
						<input id="scdist" value="<?php echo $_SESSION['scdist']; ?>" class="text" name="scdist"  />
					</td>
					<td>State <span class="error">*</span></td>
					<td>
						<input id="scstate" value="<?php echo $_SESSION['scstate']; ?>" class="text" name="scstate"  />
					</td>
				</tr>
				<tr valign="top">
					<td>[5.]Local Address <span class="error">*</span></td>
					<td colspan="3">
						<textarea id="laddress" class="select" rows="2" cols="98" name="laddress"  required><?php echo $_SESSION['laddress']; ?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>Pin Code <span class="error">*</span></td>
					<td>
						<input id="lpin" value="<?php echo $_SESSION['lpin']; ?>" class="text" name="lpin"  />
					</td>
					<td>Email: <span class="error">*</span></td>
					<td>
						<input id="lemail" value="<?php echo $_SESSION['lemail']; ?>" class="text" name="lemail"  />
					</td>
				</tr>
				<tr>
					<td>Tel.No. STD Code</td>
					<td>
						<input id="lstdno" value="<?php echo $_SESSION['lstdno']; ?>" class="text" name="lstdno"  />
					</td>
					<td>Mob. No.<span class="error">*</span></td>
					<td>
						<input id="lmobile" value="<?php echo $_SESSION['lmobile']; ?>" class="text" name="lmobile"  required/>
					</td>
				</tr>
				<tr valign="top">
					<td>[6.]Permanant Address <span class="error">*</span></td>
					<td colspan="3">
						<textarea id="paddress" class="select" rows="2" cols="98" name="paddress"  required><?php echo $_SESSION['paddress']; ?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>Pin Code <span class="error">*</span></td>
					<td>
						<input id="ppin" value="<?php echo $_SESSION['ppin']; ?>" class="text" name="ppin"  />
					</td>
				</tr>
				<tr>
					<td>Tel.No. STD Code</td>
					<td>
						<input id="pstdno" value="<?php echo $_SESSION['pstdno']; ?>" class="text" name="pstdno"  />
					</td>
					<td>Mob. No.<span class="error">*</span></td>
					<td>
						<input id="pmobile" value="<?php echo $_SESSION['pmobile']; ?>" class="text" name="pmobile"  />
					</td>
				</tr>
				<tr valign="top">
					<td>[7.]Name of Father's/Parents <span class="error">*</span></td>
					<td colspan="3">
						<textarea id="faaddress" class="select" rows="1" cols="98" name="faaddress" required><?php echo $_SESSION['faaddress']; ?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>Occupation <span class="error">*</span></td>
					<td>
						<input id="faoccu" value="<?php echo $_SESSION['faoccu']; ?>" class="text" name="faoccu" required />
					</td>
					<td>Income Rs. <span class="error">*</span></td>
					<td>
						<input id="faincome" value="<?php echo $_SESSION['faincome']; ?>" class="text" name="faincome"  required/>
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
					<td>Tel No. <span class="error">*</span></td>
					<td>
						<input id="fatelno" value="<?php echo $_SESSION['fatelno']; ?>" class="text" name="fatelno"  />
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
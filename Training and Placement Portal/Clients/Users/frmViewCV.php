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
			$n=6;
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
		   <form action="updatecv.php" method="post" >
		   <?php
		   		session_start();
		   		require "../../config.php";
				$uid=$_SESSION['ID'];
				$result=mysql_query("Select * from cv Where uid='$uid'");
				while($row=mysql_fetch_array($result))
				{
		   ?>
			<table>
				<tr valign="top">
					<td>
					</td>
					<td colspan="4" class="color"  style="padding-bottom:20px;font-size:25px;font-weight:bold;text-decoration:underline;">
						STUDENT RESUME
					</td>
			 	</tr>
				<tr valign="top">
					<td>Student Name <span class="error">*</span></td>
					<td colspan="3">
						<textarea id="sname" class="select" rows="1" cols="98" name="sname"  ><?php echo $row['sname']?>
						</textarea>
					</td>
				</tr>
				<tr valign="top">
					<td>Permanant Address <span class="error">*</span></td>
					<td colspan="3">
						<textarea id="paddress" class="select" rows="2" cols="98" name="paddress" ><?php echo $row['paddress']?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>Mobile No. <span class="error">*</span></td>
					<td>
						<input id="mobile" class="text" value="<?php echo $row['mobile']?>" name="mobile"  />
					</td>
					<td>Email-Id. <span class="error">*</span></td>
					<td>
						<input id="email" class="text" value="<?php echo $row['email']?>" name="email"  />
					</td>
				</tr>
				<tr>
					<td>Date of Birth. <span class="error">*</span></td>
					<td>
						<input id="dob" class="text" value="<?php echo $row['dob']?>" name="dob"  />
					</td>
					<td>Gender. <span class="error">*</span></td>
					<td>
						<input id="gender" class="text" value="<?php echo $row['gender']?>" name="gender"  />
					</td>
				</tr>
				<tr>
					<td>Nationality. <span class="error">*</span></td>
					<td>
						<input id="nation" class="text" value="<?php echo $row['nation']?>" name="nation"  />
					</td>
					<td>Marital Status. <span class="error">*</span></td>
					<td>
						<input id="mstatus" class="text" value="<?php echo $row['mstatus']?>" name="mstatus"  />
					</td>
				</tr>
				<tr>
					<td>Languages Know. <span class="error">*</span></td>
					<td>
						<input id="lang" class="text" value="<?php echo $row['lang']?>" name="lang"  />
					</td>
				</tr>
				<tr>
					<td><span class="error"></span></td>
				</tr>
				<tr>
					<td>OTHER QUALIFICATIONS. <span class="error"></span></td>
				</tr>
				<tr valign="top">
					<td></td>
					<td colspan="3">
						<textarea id="q1" class="select"  rows="1" cols="98" name="q1"  ><?php echo $row['q1']?>
						</textarea>
					</td>
				</tr>
				<tr valign="top">
					<td></td>
					<td colspan="3">
						<textarea id="q2" class="select" rows="1" cols="98" name="q2"  ><?php echo $row['q2']?>
						</textarea>
					</td>
				</tr>
				<tr valign="top">
					<td></td>
					<td colspan="3">
						<textarea id="q3" class="select" rows="1" cols="98" name="q3"  ><?php echo $row['q3']?>
						</textarea>
					</td>
				</tr>
				<tr valign="top">
					<td></td>
					<td colspan="3">
						<textarea id="q4" class="select" rows="1" cols="98" name="q4"  ><?php echo $row['q4']?>
						</textarea>
					</td>
				</tr>
			 <tr>
				<td colspan="6">
					<table>
						<tr>
							<th>Examination</th>
							<th>University/Board</th>
							<th>Year of completion</th>
							<th>Class</th>
						</tr>
						<tr>
							<td>
								<input id="ex1" class="text" name="ex1"  value="<?php echo $row['ex1']?>"/>
							</td>
							<td>
								<input id="ui1" class="text" name="ui1"  value="<?php echo $row['ui1']?>"/>
							</td>
							<td>
								<input id="year1" class="text" name="year1" value="<?php echo $row['year1']?>" />
							</td>
							<td>
								<input id="class1" class="text" name="class1"  value="<?php echo $row['class1']?>"/>
							</td>
						</tr>
						<tr>
							<td>
								<input id="ex2" class="text" name="ex2"  value="<?php echo $row['ex2']?>"/>
							</td>
							<td>
								<input id="ui2" class="text" name="ui2" value="<?php echo $row['ui2']?>" />
							</td>
							<td>
								<input id="year2" class="text" name="year2" value="<?php echo $row['year2']?>" />
							</td>
							<td>
								<input id="class2" class="text" name="class2" value="<?php echo $row['class2']?>" />
							</td>
						</tr>
						<tr>
							<td>
								<input id="ex3" class="text" name="ex3"  value="<?php echo $row['ex3']?>"/>
							</td>
							<td>
								<input id="ui3" class="text" name="ui3" value="<?php echo $row['ui3']?>" />
							</td>
							<td>
								<input id="year3" class="text" name="year3" value="<?php echo $row['year3']?>" />
							</td>
							<td>
								<input id="class3" class="text" name="class3"  value="<?php echo $row['class3']?>"/>
							</td>
						</tr>
						<tr>
							<td>
								<input id="ex4" class="text" name="ex4"  value="<?php echo $row['ex4']?>"/>
							</td>
							<td>
								<input id="ui4" class="text" name="ui4"  value="<?php echo $row['ui4']?>"/>
							</td>
							<td>
								<input id="year4" class="text" name="year4"  value="<?php echo $row['year4']?>"/>
							</td>
							<td>
								<input id="class4" class="text" name="class4"  value="<?php echo $row['class4']?>"/>
							</td>
						</tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td></td>
				<td colspan=""><a href="createpdf.php" class="button">Create Pdf</a></td>
				<td colspan="3"><input type="submit" value="UPDATE RESUME"  class="button" /></td>
			 </tr>
			  
		   </table>
		<?php
			}
		?>
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
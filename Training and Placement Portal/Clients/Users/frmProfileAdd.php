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
		  <span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span> 
		   &nbsp;|&nbsp;  
		  <h2><span style="font-weight:bold;text-decoration:underline;">Add Profile details</span></h2>(Fields marked with asterik are required)

		  <br><?php error_reporting(E_ALL ^ E_NOTICE); session_start(); 
				if($_GET['msg']=="invalid"){echo "<span class=\"error\">--- Invalid email address ---</span>";}
				if($_GET['msg']=="empty"){echo "<span class=\"error\">--- Please fill the required field ---</span>";}
				if($_GET['msg']=="nomatch"){echo "<span class=\"error\">--- Please enter valid Semester Percentage and KT's record ---</span>";}
				?>
		   <form action="insertProfileFresher.php" enctype="multipart/form-data" method="post" >
            <table >
			 <tr>
				<td colspan="4" class="color"  style="font-size:16px;font-weight:bold;text-decoration:underline;">Personal details</td>
			 </tr>
			   <tr>
                <td>Birth Date <span class="error">*</span></td>
                <td colspan="3">
					<select class="select" name="day" >
						<option <?php if ($_SESSION['day'] == '0'){echo selected;} ?>  value='0'>-- Day --</option>
						<option <?php if($_SESSION['day'] == '1'){echo selected;} ?> value="1">1</option>
						<option <?php if($_SESSION['day'] == '2'){echo selected;} ?> value="2">2</option>
						<option <?php if($_SESSION['day'] == '3'){echo selected;} ?> value="3">3</option>
						<option <?php if($_SESSION['day'] == '4'){echo selected;} ?> value="4">4</option>
						<option <?php if($_SESSION['day'] == '5'){echo selected;} ?> value="5">5</option>
						<option <?php if($_SESSION['day'] == '6'){echo selected;} ?> value="6">6</option>
						<option <?php if($_SESSION['day'] == '7'){echo selected;} ?> value="7">7</option>
						<option <?php if($_SESSION['day'] == '8'){echo selected;} ?> value="8">8</option>
						<option <?php if($_SESSION['day'] == '9'){echo selected;} ?> value="9">9</option>
						<option <?php if($_SESSION['day'] == '10'){echo selected;} ?> value="10">10</option>
						<option <?php if($_SESSION['day'] == '11'){echo selected;} ?> value="11">11</option>
						<option <?php if($_SESSION['day'] == '12'){echo selected;} ?> value="12">12</option>
						<option <?php if($_SESSION['day'] == '13'){echo selected;} ?> value="13">13</option>
						<option <?php if($_SESSION['day'] == '14'){echo selected;} ?> value="14">14</option>
						<option <?php if($_SESSION['day'] == '15'){echo selected;} ?> value="15">15</option>
						<option <?php if($_SESSION['day'] == '16'){echo selected;} ?> value="16">16</option>
						<option <?php if($_SESSION['day'] == '17'){echo selected;} ?> value="17">17</option>
						<option <?php if($_SESSION['day'] == '18'){echo selected;} ?> value="18">18</option>
						<option <?php if($_SESSION['day'] == '19'){echo selected;} ?> value="19">19</option>
						<option <?php if($_SESSION['day'] == '20'){echo selected;} ?> value="20">20</option>
						<option <?php if($_SESSION['day'] == '21'){echo selected;} ?> value="21">21</option>
						<option <?php if($_SESSION['day'] == '22'){echo selected;} ?> value="22">22</option>
						<option <?php if($_SESSION['day'] == '23'){echo selected;} ?> value="23">23</option>
						<option <?php if($_SESSION['day'] == '24'){echo selected;} ?> value="24">24</option>
						<option <?php if($_SESSION['day'] == '25'){echo selected;} ?> value="25">25</option>
						<option <?php if($_SESSION['day'] == '26'){echo selected;} ?> value="26">26</option>
						<option <?php if($_SESSION['day'] == '27'){echo selected;} ?> value="27">27</option>
						<option <?php if($_SESSION['day'] == '28'){echo selected;} ?> value="28">28</option>
						<option <?php if($_SESSION['day'] == '29'){echo selected;} ?> value="29">29</option>
						<option <?php if($_SESSION['day'] == '30'){echo selected;} ?> value="30">30</option>
						<option <?php if($_SESSION['day'] == '31'){echo selected;} ?> value="31">31</option>
				</select>
				<select class="select" name="month" >
						<option <?php if ($_SESSION['month'] == '0'){echo selected;} ?>  value='0'>-- Month --</option>
						<option <?php if($_SESSION['month'] == '1'){echo selected;} ?> value="1">January</option>
						<option <?php if($_SESSION['month'] == '2'){echo selected;} ?> value="2">February</option>
						<option <?php if($_SESSION['month'] == '3'){echo selected;} ?> value="3">March</option>
						<option <?php if($_SESSION['month'] == '4'){echo selected;} ?> value="4">April</option>
						<option <?php if($_SESSION['month'] == '5'){echo selected;} ?> value="5">May</option>
						<option <?php if($_SESSION['month'] == '6'){echo selected;} ?> value="6">June</option>
						<option <?php if($_SESSION['month'] == '7'){echo selected;} ?> value="7">July</option>
						<option <?php if($_SESSION['month'] == '8'){echo selected;} ?> value="8">August</option>
						<option <?php if($_SESSION['month'] == '9'){echo selected;} ?> value="9">September</option>
						<option <?php if($_SESSION['month'] == '10'){echo selected;} ?> value="10">October</option>
						<option <?php if($_SESSION['month'] == '11'){echo selected;} ?> value="11">November</option>
						<option <?php if($_SESSION['month'] == '12'){echo selected;} ?> value="12">December</option>
					</select>
				
					<select class="select" name="year" >
						<option <?php if ($_SESSION['year'] == '0'){echo selected;} ?>  value='0'>-- Year --</option>
						<option <?php if($_SESSION['year'] == '1980'){echo selected;} ?> value="1980">1980</option>
						<option <?php if($_SESSION['year'] == '1981'){echo selected;} ?> value="1981">1981</option>
						<option <?php if($_SESSION['year'] == '1982'){echo selected;} ?> value="1982">1982</option>
						<option <?php if($_SESSION['year'] == '1983'){echo selected;} ?> value="1983">1983</option>
						<option <?php if($_SESSION['year'] == '1984'){echo selected;} ?> value="1984">1984</option>
						<option <?php if($_SESSION['year'] == '1985'){echo selected;} ?> value="1985">1985</option>
						<option <?php if($_SESSION['year'] == '1986'){echo selected;} ?> value="1986">1986</option>
						<option <?php if($_SESSION['year'] == '1987'){echo selected;} ?> value="1987">1987</option>
						<option <?php if($_SESSION['year'] == '1988'){echo selected;} ?> value="1988">1988</option>
						<option <?php if($_SESSION['year'] == '1989'){echo selected;} ?> value="1989">1989</option>
						<option <?php if($_SESSION['year'] == '1990'){echo selected;} ?> value="1990">1990</option>
						<option <?php if($_SESSION['year'] == '1991'){echo selected;} ?> value="1991">1991</option>
						<option <?php if($_SESSION['year'] == '1992'){echo selected;} ?> value="1992">1992</option>
						<option <?php if($_SESSION['year'] == '1993'){echo selected;} ?> value="1993">1993</option>
						<option <?php if($_SESSION['year'] == '1994'){echo selected;} ?> value="1994">1994</option>
						<option <?php if($_SESSION['year'] == '1995'){echo selected;} ?> value="1995">1995</option>
						<option <?php if($_SESSION['year'] == '1996'){echo selected;} ?> value="1996">1996</option>
						<option <?php if($_SESSION['year'] == '1997'){echo selected;} ?> value="1997">1997</option>
						<option <?php if($_SESSION['year'] == '1998'){echo selected;} ?> value="1998">1998</option>
						<option <?php if($_SESSION['year'] == '1999'){echo selected;} ?> value="1999">1999</option>
						<option <?php if($_SESSION['year'] == '2000'){echo selected;} ?> value="2000">2000</option>
						<option <?php if($_SESSION['year'] == '2001'){echo selected;} ?> value="2001">2001</option>
						<option <?php if($_SESSION['year'] == '2002'){echo selected;} ?> value="2002">2002</option>
						<option <?php if($_SESSION['year'] == '2003'){echo selected;} ?> value="2003">2003</option>
						<option <?php if($_SESSION['year'] == '2004'){echo selected;} ?> value="2004">2004</option>
						<option <?php if($_SESSION['year'] == '2005'){echo selected;} ?> value="2005">2005</option>
						<option <?php if($_SESSION['year'] =='2006'){echo selected;} ?> value="2006">2006</option>
						<option <?php if($_SESSION['year'] == '2007'){echo selected;} ?> value="2007">2007</option>
						<option <?php if($_SESSION['year'] == '2008'){echo selected;} ?> value="2008">2008</option>
						<option <?php if($_SESSION['year'] == '2009'){echo selected;} ?> value="2009">2009</option>
						<option <?php if($_SESSION['year'] == '2010'){echo selected;} ?> value="2010">2010</option>
						<option <?php if($_SESSION['year'] == '2011'){echo selected;} ?> value="2011">2011</option>
						
					</select>
						
				</td>
              </tr>
			  <tr>
				<td>Gender <span class="error">*</span></td>
				<td colspan="3">
					<input type="radio" name="gender" <?php if($_SESSION['gender'] == 'male'){echo checked;} ?> value="male" />Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<input type="radio" name="gender" <?php if($_SESSION['gender'] == 'female'){echo checked;} ?> value="female"/>Female
				</td>
			  </tr>
			  <tr valign="top">
				<td>Address <span class="error">*</span></td>
				<td colspan="3"><textarea id="address" class="select" rows="2" cols="80" name="address"  ><?php echo $_SESSION['address']; ?></textarea></td>
			  </tr>
			  <tr>
				<td>Contact No <span class="error">*</span></td>
				<td ><input id="contact" value="<?php echo $_SESSION['contact']; ?>" class="text" name="contact"  /></td>
			  
				<td>Email Address <span class="error">*</span></td>
				<td ><input id="email"  value="<?php echo $_SESSION['email']; ?>" class="text" name="email"  /></td>
			  </tr> 
			   <tr>
				<td>City <span class="error">*</span></td>
				<td><input id="city" value="<?php echo $_SESSION['city']; ?>" class="text" name="city"  /></td>
				<td>State <span class="error">*</span></td>
				<td><input id="state" value="<?php echo $_SESSION['state']; ?>" class="text" name="state"  /></td>
			  </tr>
			  <tr>
				<td>Maritial Status <span class="error">*</span></td>
				<td colspan="3">
					<input type="radio" name="maritial" <?php if($_SESSION['maritial']<>""){if($_SESSION['maritial'] == 'Single'){echo checked;}}else{echo checked;} ?> value="Single" />Single&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<input type="radio" name="maritial" <?php if($_SESSION['maritial'] == 'Married'){echo checked;} ?> value="Married" />Married&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				</td>
			  </tr>
			  </tr>
			  <tr>
                <td>Profile Photo</td>
                <td colspan="3"><input <?php if($_SESSION['photo']==""){ echo "type=\"file\"";}else{echo "type=\"text\""; }?> value="<?php echo $_SESSION['photo'];?>" class="select" style="background:white" name="photo"  /><?php if($_SESSION['photo']==""){ echo "Only jpg,bmp,gif files allowed"; }?>
				</td>
              </tr>
			  <tr>
				<td colspan="4" class="color"  style="font-size:16px;font-weight:bold;text-decoration:underline;">Educational details</td>
			 </tr>
			 <tr>
                <td colspan="4" style="font-size:14px;font-weight:bold;text-decoration:underline;">SSC details</td>
			</tr>
			<tr>
				<td>Passing year <span class="error">*</span></td>
				<td colspan="3"><input  value="<?php echo $_SESSION['sscyear']; ?>" class="text" name="sscyear"  /></td>
			 </tr>
			 <tr>
				<td>Percentage <span class="error">*</span></td>
				<td colspan="3"><input  value="<?php echo $_SESSION['sscpercentage']; ?>" class="text" name="sscpercentage"  /></td>
			 </tr>
			 <tr>
				<td>Board <span class="error">*</span></td>
				<td colspan="3"><input  value="<?php echo $_SESSION['sscuniversity']; ?>" class="text" name="sscuniversity"  /></td>
			 </tr>
			 <tr>
                <td colspan="4" style="font-size:14px;font-weight:bold;text-decoration:underline;">HSC details</td>
			</tr>
			<tr>
				<td>Skill level <span class="error">*</span></td>
				<td colspan="3">
					<select class="select" name="hscskill" >
						<option <?php if ($_SESSION['hscskill'] == ''){echo selected;} ?>  value=''>-- Select --</option>
						<option <?php if($_SESSION['hscskill'] == 'Arts'){echo selected;} ?> value="Arts">Arts</option>
						<option <?php if($_SESSION['hscskill'] == 'Commerce'){echo selected;} ?> value="Commerce">Commerce</option>
						<option <?php if($_SESSION['hscskill'] == 'Science'){echo selected;} ?> value="Science">Science</option>
					</select>
				</td>
			 </tr>
			<tr>
				<td>Passing year <span class="error">*</span></td>
				<td colspan="3"><input  class="text" name="hscyear"  /></td>
			 </tr>
			 <tr>
				<td>Percentage <span class="error">*</span></td>
				<td colspan="3"><input  class="text" name="hscpercentage"  /></td>
			 </tr>
			 <tr>
				<td>Board <span class="error">*</span></td>
				<td colspan="3"><input  class="text" name="hscuniversity"  /></td>
			 </tr>
			 <tr>
                <td colspan="4" style="font-size:14px;font-weight:bold;text-decoration:underline;">Higher Educational details</td>
			</tr>
			<tr>
                <td colspan="4"><table><tr><td style="font-size:14px;font-weight:bold">Branch <span class="error">*</span> ==></td>
				<td ><select class="select" name="branch" >
						<option <?php if ($_SESSION['branch'] == '0'){echo selected;} ?>  value='0'>-- Please select your Branch --</option>
						<option <?php if ($_SESSION['branch'] == 'Computer Science'){echo selected;} ?>  value='Computer Science'>Computer Science</option>
						<option <?php if ($_SESSION['branch'] == 'Information Technology'){echo selected;} ?>  value='Information Technology'>Information Technology</option>
						<option <?php if ($_SESSION['branch'] == 'Electronics and Telecomunication'){echo selected;} ?>  value='Electronics and Telecomunication'>Electronics and Telecomunication</option>
						<option <?php if ($_SESSION['branch'] == 'Printing and Packaging Technology'){echo selected;} ?>  value='Printing and Packaging Technology'>Printing and Packaging Technology</option>
						<option <?php if ($_SESSION['branch'] == 'Mechanical Science'){echo selected;} ?>  value='Mechanical Science'>Mechanical Science</option>
						<option <?php if ($_SESSION['branch'] == 'Bio-Technology'){echo selected;} ?>  value='Bio-Technology'>Bio-Technology</option>
					</select></td></tr></table></td>
			 </tr>
			<tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" align="right" width="160px" style="font-size:14px;font-weight:bold">First Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if($_SESSION['sem1percentage']<>""){echo $_SESSION['sem1percentage'];}else{echo "";} ?>" class="text" name="sem1percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem1KTLive']<>""){echo $_SESSION['sem1KTLive'];}else{echo "0";} ?>" class="kt" size="5" name="sem1KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem1KTDead']<>""){echo $_SESSION['sem1KTDead'];}else{echo "0";} ?>" class="kt" name="sem1KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem1KTDrop']<>""){echo $_SESSION['sem1KTDrop'];}else{echo "0";} ?>" class="kt" name="sem1KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			  <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Second Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input   class="text" name="sem2percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem2KTLive']<>""){echo $_SESSION['sem2KTLive'];}else{echo "0";} ?>" class="kt" size="5" name="sem2KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem2KTDead']<>""){echo $_SESSION['sem2KTDead'];}else{echo "0";} ?>" class="kt" name="sem2KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem2KTDrop']<>""){echo $_SESSION['sem2KTDrop'];}else{echo "0";} ?>" class="kt" name="sem2KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Third Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  class="text" name="sem3percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem3KTLive']<>""){echo $_SESSION['sem3KTLive'];}else{echo "0";} ?>" class="kt" size="5" name="sem3KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem3KTDead']<>""){echo $_SESSION['sem3KTDead'];}else{echo "0";} ?>" class="kt" name="sem3KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem3KTDrop']<>""){echo $_SESSION['sem3KTDrop'];}else{echo "0";} ?>" class="kt" name="sem3KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Fourth Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if($_SESSION['sem4percentage']<>""){echo $_SESSION['sem4percentage'];}else{echo "";} ?>" class="text" name="sem4percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem4KTLive']<>""){echo $_SESSION['sem4KTLive'];}else{echo "0";} ?>" class="kt" size="5" name="sem4KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem4KTDead']<>""){echo $_SESSION['sem4KTDead'];}else{echo "0";} ?>" class="kt" name="sem4KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem4KTDrop']<>""){echo $_SESSION['sem4KTDrop'];}else{echo "0";} ?>" class="kt" name="sem4KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Fifth Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if($_SESSION['sem5percentage']<>""){echo $_SESSION['sem5percentage'];}else{echo "";} ?>" class="text" name="sem5percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem5KTLive']<>""){echo $_SESSION['sem5KTLive'];}else{echo "0";} ?>" class="kt" size="5" name="sem5KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem5KTDead']<>""){echo $_SESSION['sem5KTDead'];}else{echo "0";} ?>" class="kt" name="sem5KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem5KTDrop']<>""){echo $_SESSION['sem5KTDrop'];}else{echo "0";} ?>" class="kt" name="sem5KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Sixth Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if($_SESSION['sem6percentage']<>""){echo $_SESSION['sem6percentage'];}else{echo "";} ?>" class="text" name="sem6percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem6KTLive']<>""){echo $_SESSION['sem6KTLive'];}else{echo "0";} ?>" class="kt" size="5" name="sem6KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem6KTDead']<>""){echo $_SESSION['sem6KTDead'];}else{echo "0";} ?>" class="kt" name="sem6KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem6KTDrop']<>""){echo $_SESSION['sem6KTDrop'];}else{echo "0";} ?>" class="kt" name="sem6KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Seventh Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if($_SESSION['sem7percentage']<>""){echo $_SESSION['sem7percentage'];}else{echo "";} ?>" class="text" name="sem7percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem7KTLive']<>""){echo $_SESSION['sem7KTLive'];}else{echo "0";} ?>" class="kt" size="5" name="sem7KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem7KTDead']<>""){echo $_SESSION['sem7KTDead'];}else{echo "0";} ?>" class="kt" name="sem7KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem7KTDrop']<>""){echo $_SESSION['sem7KTDrop'];}else{echo "0";} ?>" class="kt" name="sem7KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Eight Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if($_SESSION['sem8percentage']<>""){echo $_SESSION['sem8percentage'];}else{echo "";} ?>" class="text" name="sem8percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem8KTLive']<>""){echo $_SESSION['sem8KTLive'];}else{echo "0";} ?>" class="kt" size="5" name="sem8KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem8KTDead']<>""){echo $_SESSION['sem8KTDead'];}else{echo "0";} ?>" class="kt" name="sem8KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if($_SESSION['sem8KTDrop']<>""){echo $_SESSION['sem8KTDrop'];}else{echo "0";} ?>" class="kt" name="sem8KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			  <!--<tr>
                <td  style="font-size:14px;font-weight:bold">Upload Resume</td>
				<td colspan="3"><input <?php if($_SESSION['resume']==""){ echo "type=\"file\"";}else{echo "type=\"text\""; }?> value="<?php echo $_SESSION['resume'];?>" class="select" style="background:white" name="resume"  /><?php if($_SESSION['resume']==""){ echo "Only pdf,doc,docs files allowed"; }?></td>
			 </tr>-->
			 <tr>
				<td colspan="4"></td>
			 </tr>
			 <tr>
				<td colspan="4"><input type="submit" value="Create My Profile"  class="button" /></td>
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
              <li class="active"><a  href="frmProfileAdd.php">Add Profile</a></li>
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
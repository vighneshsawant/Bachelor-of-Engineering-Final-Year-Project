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
		   <form action="adddiadmission1.php" method="post" >
            <table>
				 <tr valign="top">
					<td style="font-size:17px;font-weight:bold;font-family:normal">
						[8.]Academic
					</td>
					<td style="font-size:17px;font-weight:bold;font-family:normal">
						Record
					</td>
				 </tr>
				<tr>
					<th>Class</th>
					<th>Month & Year of Passing</th>
					<th>School/College Name</th>
					<th>District</th>
					<th>Board</th>
				</tr>
			   	<tr>
					<td>VIII</td>
					<td><input type="text" id="VIIIMYP" value="<?php echo $_SESSION['VIIIMYP']; ?>" class="text2" name="VIIIMYP"  required/></td>
					<td><input type="text" id="VIIISCN" value="<?php echo $_SESSION['VIIISCN']; ?>" class="text2" name="VIIISCN"  required/></td>
					<td><input type="text" id="VIIID" value="<?php echo $_SESSION['VIIID']; ?>" class="text2" name="VIIID"  required/></td>
					<td><input type="text" id="VIIIB" value="<?php echo $_SESSION['VIIIB']; ?>" class="text2" name="VIIIB"  required/></td>
				</tr>
				<tr>
					<td>IX</td>
					<td><input type="text" id="IXMYP" value="<?php echo $_SESSION['IXMYP']; ?>" class="text2" name="IXMYP"  required/></td>
					<td><input type="text" id="IXSCN" value="<?php echo $_SESSION['IXSCN']; ?>" class="text2" name="IXSCN"  required/></td>
					<td><input type="text" id="IXD" value="<?php echo $_SESSION['IXD']; ?>" class="text2" name="IXD"  required/></td>
					<td><input type="text" id="IXB" value="<?php echo $_SESSION['IXB']; ?>" class="text2" name="IXB"  required/></td>
				</tr>
				<tr>
					<td>SSC</td>
					<td><input type="text" id="SSCMYP" value="<?php echo $_SESSION['SSCMYP']; ?>" class="text2" name="SSCMYP"  required/></td>
					<td><input type="text" id="SSCSCN" value="<?php echo $_SESSION['SSCSCN']; ?>" class="text2" name="SSCSCN"  required/></td>
					<td><input type="text" id="SSCD" value="<?php echo $_SESSION['SSCD']; ?>" class="text2" name="SSCD"  required/></td>
					<td><input type="text" id="SSCB" value="<?php echo $_SESSION['SSCB']; ?>" class="text2" name="SSCB"  required/></td>
				</tr>
				<tr>
					<td>HSC</td>
					<td><input type="text" id="HSCMYP" value="<?php echo $_SESSION['HSCMYP']; ?>" class="text2" name="HSCMYP"  required/></td>
					<td><input type="text" id="HSCSCN" value="<?php echo $_SESSION['HSCSCN']; ?>" class="text2" name="HSCSCN"  required/></td>
					<td><input type="text" id="HSCD" value="<?php echo $_SESSION['HSCD']; ?>" class="text2" name="HSCD"  required/></td>
					<td><input type="text" id="HSCB" value="<?php echo $_SESSION['HSCB']; ?>" class="text2" name="HSCB"  required/></td>
				</tr>
			</table>
			<table style="padding:15px 10px;">
				<tr valign="top">
					<th colspan="3">Class-X (SSC)</th>
					<th colspan="4">Class-XI (HSC)(If passed)</th>
				 </tr>
				<tr>
					<th>Examination</th>
					<th >Maximum Marks</th>
					<th>Marks Obtained</th>
					<th>Percentage</th>
					<th>Maximum Marks</th>
					<th>Marks Obtained</th>
					<th>Percentage</th>
				</tr>
			   	<tr>
					<td >Grand Total</td>
					<td ><input type="text" id="SSCE" value="<?php echo $_SESSION['SSCE']; ?>" class="text1" name="SSCE"  required/></td>
					<td ><input type="text" id="SSCM" value="<?php echo $_SESSION['SSCM']; ?>" class="text1" name="SSCM"  required/></td>
					<td ><input type="text" id="SSCO" value="<?php echo $_SESSION['SSCO']; ?>" class="text1" name="SSCO" required /></td>
					<td ><input type="text" id="HSCE" value="<?php echo $_SESSION['HSCE']; ?>" class="text1" name="HSCE"  required/></td>
					<td ><input type="text" id="HSCM" value="<?php echo $_SESSION['HSCM']; ?>" class="text1" name="HSCM"  required/></td>
					<td ><input type="text" id="HSCO" value="<?php echo $_SESSION['HSCO']; ?>" class="text1" name="HSCO"  required/></td>
				</tr>
				<tr>
					<td>Mathematics</td>
					<td ><input type="text" id="SSCEM" value="<?php echo $_SESSION['SSCEM']; ?>" class="text1" name="SSCEM" required /></td>
					<td ><input type="text" id="SSCMM" value="<?php echo $_SESSION['SSCMM']; ?>" class="text1" name="SSCMM"  required/></td>
					<td ><input type="text" id="SSCOM" value="<?php echo $_SESSION['SSCOM']; ?>" class="text1" name="SSCOM"  required/></td>
					<td ><input type="text" id="HSCEM" value="<?php echo $_SESSION['HSCEM']; ?>" class="text1" name="HSCEM"  required/></td>
					<td ><input type="text" id="HSCMM" value="<?php echo $_SESSION['HSCMM']; ?>" class="text1" name="HSCMM" required /></td>
					<td ><input type="text" id="HSCOM" value="<?php echo $_SESSION['HSCOM']; ?>" class="text1" name="HSCOM" required /></td>
				</tr>
				<tr>
					<td>Science</td>
					<td ><input type="text" id="SSCES" value="<?php echo $_SESSION['SSCES']; ?>" class="text1" name="SSCES"  required/></td>
					<td ><input type="text" id="SSCMS" value="<?php echo $_SESSION['SSCMS']; ?>" class="text1" name="SSCMS"  required/></td>
					<td ><input type="text" id="SSCOS" value="<?php echo $_SESSION['SSCOS']; ?>" class="text1" name="SSCOS"  required/></td>
					<td ><input type="text" id="HSCES" value="<?php echo $_SESSION['HSCES']; ?>" class="text1" name="HSCES"  required/></td>
					<td ><input type="text" id="HSCMS" value="<?php echo $_SESSION['HSCMS']; ?>" class="text1" name="HSCMS"  required/></td>
					<td ><input type="text" id="HSCOS" value="<?php echo $_SESSION['HSCOS']; ?>" class="text1" name="HSCOS"  required/></td>
				</tr>
				<tr>
					<td>Vocational/Technical</td>
					<td ><input type="text" id="SSCEV" value="<?php echo $_SESSION['SSCEV']; ?>" class="text1" name="SSCEV"  /></td>
					<td ><input type="text" id="SSCMV" value="<?php echo $_SESSION['SSCMV']; ?>" class="text1" name="SSCMV"  /></td>
					<td ><input type="text" id="SSCOV" value="<?php echo $_SESSION['SSCOV']; ?>" class="text1" name="SSCOV"  /></td>
					<td ><input type="text" id="HSCEV" value="<?php echo $_SESSION['HSCEV']; ?>" class="text1" name="HSCEV"  /></td>
					<td ><input type="text" id="HSCMV" value="<?php echo $_SESSION['HSCMV']; ?>" class="text1" name="HSCMV"  /></td>
					<td ><input type="text" id="HSCOV" value="<?php echo $_SESSION['HSCOV']; ?>" class="text1" name="HSCOV"  /></td>
				</tr>
			</table>
			<table width="100%" style="margin:10px;font-size:17px;font-family:normal">
				<tr>
					<td>[9.]Whether passed with Technical/Vocation Subject in SSC exam</td>
					<td style="float:right;">
						<Select name="SSCVT">
							<option>YES</option>
							<option>NO</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>[10.]Whether passed HSC Science Exam with Vocational/Technical Subject</td>
					<td style="float:right;">
						<Select name="HSCVT">
							<option>YES</option>
							<option>NO</option>
						</select>
					</td style="float:right;">
				</tr>
				<tr>
					<td>[11.]Whether passed HSC with MCVC </td>
					<td style="float:right;">
						<Select name="HSCMCVC">
							<option>YES</option>
							<option>NO</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>[12.]Whether passed Intermediate grade drawing Exam </td>
					<td style="float:right;">
						<Select name="GDE">
							<option>YES</option>
							<option>NO</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>[13.]Whether there is any gap in studies after SSC </td>
					<td style="float:right;">
						<Select name="GAP">
							<option>YES</option>
							<option>NO</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>[14.]If Yes attached gap certificate for the same </td>
					<td style="float:right;">
						<Select name="GAPCER">
							<option>YES</option>
							<option>NO</option>
						</select>
					</td>
				</tr>
			</table>
				<div style="border: thin solid black;width:100%;">
				</div>
				<div style="margin:15px;width:100%;height:30px;">
					<div style="margin:0 300px;border:5px double #4799dc;width:120px;height:30px;">
						<div style="margin:5px 10px;font-size:25px;font-weight:bold;font-family:normal">STATUS</div>
					</div>
				</div>
			<table width="100%" style="margin:10px;font-size:17px;font-family:normal">
				<tr>
					<td>[1.]I have passed SSC from the school located in Maharashtra state </td>
					<td>
						<Select name="LOCATED">
							<option>YES</option>
							<option>NO</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>[2.]I have passed SSC from </td>
					<td>
						<Select name="FROM">
							<option>SB</option>
							<option>CBSE</option>
							<option>ICSE</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>[3.]If passed SSC from outside M.S. whether father is domiciled in M.S. 
						if father is working in Central Govt. undertaking as employee and</td>
					<td>
						<Select name="WORK">
							<option>YES</option>
							<option>NO</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>[4.]Transferred to M.S. within preciding to Academic years</td>
					<td>
						<Select name="TRANSFER">
							<option>YES</option>
							<option>NO</option>
						</select>
					</td>
				</tr>
			</table>
				<div style="margin:15px;width:100%;height:30px;">
					<div style="margin:0 160px;border:5px double #4799dc;width:60%;height:30px;">
						<div style="margin:5px 10px;font-size:20px;font-weight:bold;font-family:normal">
							UNDERTAKING BY THE STUDENTS AND PARENTS
						</div>
					</div>
				</div>
				<div style="margin:25px;width:100%;font-family:normal;font-size:18px;">
					<div style="width:100%">I have read carefully the rules and regulation laid by the Maharashtra State Board of Technical Education(MSBTE)</div>
					<div style="width:100%">for the admission to the Examination conducted by the board. I undertake the responsibility if i fail to fulfill any of</div>
					<div style="width:100%">the conditionsmentioned in the rules and regulation. I accept any and will to obide by action taken by the Computent</div>
					<div style="width:100%">authority as per the MSBTE norms.I will be solely responsible for any loss of the year, or and loss of the fees paid or</div>
					<div style="width:100%">any other  financial loss during the academic year.</div>
				</div> 
			<table>
				<tr>
					<td>Name of the Student</td>
					<td>
						<input type="text" id="sname" value="<?php echo $_SESSION['sname']; ?>" class="text" name="sname"  required/>
					</td>
					<td>Name of the Parent</td>
					<td>
						<input type="text" id="pname" value="<?php echo $_SESSION['pname']; ?>" class="text" name="pname"  required/>
					</td>
				</tr>
				<tr>
					<td>Signature</td>
					<td>
						<input type="file" id="ssign" value="<?php echo $_SESSION['ssign']; ?>" class="text" name="ssign"  required/>
					</td>
					<td>Signature</td>
					<td>
						<input type="file" id="psign" value="<?php echo $_SESSION['psign']; ?>" class="text" name="psign"  required/>
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
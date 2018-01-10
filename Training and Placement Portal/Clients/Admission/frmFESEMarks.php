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
			require"file.php";
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
		   <form action="addFESEMarks.php" method="post" >
				<table style="padding:0 10px;width:100%">
					<tr>
						<td><b>Year of Admission</b></td>
						<td>
							<input type="text" id="addyear" value="<?php echo $_SESSION['addyear']; ?>" class="text" name="addyear"  />
						</td>
						<td><b>F.E. BRANCH<b></td>
						<td>
							<input type="text" id="febranch" value="<?php echo $_SESSION['febranch']; ?>" class="text" name="febranch"  />
						</td>
					</tr>
				</table>
				<div style="margin:5px;width:100%;height:20px;">
					<div style="height:20px;">
						<div style="margin:0 10px;font-size:18px;font-weight:bold;font-family:normal">
							SEM-I
						</div>
					</div>
				</div>
			<table border="1px">
				<tr>
					<th>SR NO.</th>
					<th>NAME OF SUBJECT</th>
					<th>THEORY MARKS</th>
					<th>INTERNAL MARKS</th>
					<th>T/W MARKS</th>
					<th>PRACT MARKS</th>
					<th>ORAL MARKS</th>
					<th>SESSIONAL MARKS</th>
					<th>PASSED/FAILED</th>
				</tr>
					<?php

					for($i=1;$i<8;$i++)
					{ 
						for($j=1;$j<2;$j++)
						{
						?>
						<tr>
							<td ><b><?php echo $i;?></b></td>
							<td ><input type="text" id="SUB<?php echo $j.$i?>" value="<?php echo $_SESSION['SUB'.$j.$i]; ?>" class="text4" name="SUB<?php echo $j.$i?>" /></td>
							<td ><input type="text" id="TMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['TMAR'.$j.$i]; ?>" class="text4" name="TMAR<?php echo $j.$i?>" pattern="[A-Za-z]" /></td>
							<td ><input type="text" id="IMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['IMAR'.$j.$i]; ?>" class="text4" name="IMAR<?php echo $j.$i?>" pattern="[A-Za-z]" /></td>
							<td ><input type="text" id="TWMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['TWMAR'.$j.$i]; ?>" class="text4" name="TWMAR<?php echo $j.$i?>" pattern="[A-Za-z]" /></td>
							<td ><input type="text" id="PMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['PMAR'.$j.$i]; ?>" class="text4" name="PMAR<?php echo $j.$i?>"  pattern="[A-Za-z]"/></td>
							<td ><input type="text" id="OMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['OMAR'.$j.$i]; ?>" class="text4" name="OMAR<?php echo $j.$i?>"  pattern="[A-Za-z]"/></td>
							<td ><input type="text" id="SMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['SMAR'.$j.$i]; ?>" class="text4" name="SMAR<?php echo $j.$i?>"  pattern="[A-Za-z]"/></td>
							<td ><input type="text" id="PF<?php echo $j.$i?>" value="<?php echo $_SESSION['PF'.$j.$i]; ?>" class="text4" name="PF<?php echo $j.$i?>" /></td>
						<?php
						}
						?>
					</tr>
					<?php
					}
					?>
					<tr>
						<td colspan="4">
							<b>Percentage/CGPA:-</b>
							<input type="text" id="per1" value="<?php echo $_SESSION['per1'];?>" class="text" name="per1"/>
						</td>
					</tr>
			</table>
				<div style="margin:5px;width:100%;height:20px;">
					<div style="height:20px;">
						<div style="margin:0 10px;font-size:18px;font-weight:bold;font-family:normal">
							SEM-II
						</div>
					</div>
				</div>
			<table border="1px">
				<tr>
					<th>SR NO.</th>
					<th>NAME OF SUBJECT</th>
					<th>THEORY MARKS</th>
					<th>INTERNAL MARKS</th>
					<th>T/W MARKS</th>
					<th>PRACT MARKS</th>
					<th>ORAL MARKS</th>
					<th>SESSIONAL MARKS</th>
					<th>PASSED/FAILED</th>
				</tr>
					<?php

					for($i=1;$i<8;$i++)
					{ 
						for($j=2;$j<3;$j++)
						{
						?>
						<tr>
							<td ><b><?php echo $i;?></b></td>
							<td ><input type="text" id="SUB<?php echo $j.$i?>" value="<?php echo $_SESSION['SUB'.$j.$i]; ?>" class="text4" name="SUB<?php echo $j.$i?>"/></td>
							<td ><input type="text" id="TMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['TMAR'.$j.$i]; ?>" class="text4" name="TMAR<?php echo $j.$i?>"  pattern="[A-Za-z]"/></td>
							<td ><input type="text" id="IMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['IMAR'.$j.$i]; ?>" class="text4" name="IMAR<?php echo $j.$i?>"  pattern="[A-Za-z]"/></td>
							<td ><input type="text" id="TWMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['TWMAR'.$j.$i]; ?>" class="text4" name="TWMAR<?php echo $j.$i?>"  pattern="[A-Za-z]"/></td>
							<td ><input type="text" id="PMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['PMAR'.$j.$i]; ?>" class="text4" name="PMAR<?php echo $j.$i?>"  pattern="[A-Za-z]"/></td>
							<td ><input type="text" id="OMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['OMAR'.$j.$i]; ?>" class="text4" name="OMAR<?php echo $j.$i?>"  pattern="[A-Za-z]"/></td>
							<td ><input type="text" id="SMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['SMAR'.$j.$i]; ?>" class="text4" name="SMAR<?php echo $j.$i?>"  pattern="[A-Za-z]"/></td>
							<td ><input type="text" id="PF<?php echo $j.$i?>" value="<?php echo $_SESSION['PF'.$j.$i]; ?>" class="text4" name="PF<?php echo $j.$i?>"/></td>
						<?php
						}
						?>
					</tr>
					<?php
					}
					?>
					<tr>
						<td colspan="4">
							<b>Percentage/CGPA:-</b>
							<input type="text" id="per2" value="<?php echo $_SESSION['per2'];?>" class="text" name="per2"/>
						</td>
					</tr>
			</table>
				<table style="padding:0 10px;width:100%">
					<tr>
						<td><b>Year of Admission</b></td>
						<td>
							<input type="text" id="addyear1" value="<?php echo $_SESSION['addyear1']; ?>" class="text" name="addyear1"  />
						</td>
						<td><b>S.E. BRANCH<b></td>
						<td>
							<input type="text" id="febranch1" value="<?php echo $_SESSION['febranch1']; ?>" class="text" name="febranch1"  />
						</td>
					</tr>
				</table>
				<div style="margin:5px;width:100%;height:20px;">
					<div style="height:20px;">
						<div style="margin:0 10px;font-size:18px;font-weight:bold;font-family:normal">
							SEM-III
						</div>
					</div>
				</div>
			<table border="1px">
				<tr>
					<th>SR NO.</th>
					<th>NAME OF SUBJECT</th>
					<th>THEORY MARKS</th>
					<th>INTERNAL MARKS</th>
					<th>T/W MARKS</th>
					<th>PRACT MARKS</th>
					<th>ORAL MARKS</th>
					<th>SESSIONAL MARKS</th>
					<th>PASSED/FAILED</th>
				</tr>
					<?php

					for($i=1;$i<8;$i++)
					{ 
						for($j=3;$j<4;$j++)
						{
						?>
						<tr>
							<td ><b><?php echo $i;?></b></td>
							<td ><input type="text" id="SUB<?php echo $j.$i?>" value="<?php echo $_SESSION['SUB'.$j.$i]; ?>" class="text4" name="SUB<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="TMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['TMAR'.$j.$i]; ?>" class="text4" name="TMAR<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="IMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['IMAR'.$j.$i]; ?>" class="text4" name="IMAR<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="TWMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['TWMAR'.$j.$i]; ?>" class="text4" name="TWMAR<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="PMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['PMAR'.$j.$i]; ?>" class="text4" name="PMAR<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="OMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['OMAR'.$j.$i]; ?>" class="text4" name="OMAR<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="SMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['SMAR'.$j.$i]; ?>" class="text4" name="SMAR<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="PF<?php echo $j.$i?>" value="<?php echo $_SESSION['PF'.$j.$i]; ?>" class="text4" name="PF<?php echo $j.$i?>"  /></td>
						<?php
						}
						?>
					</tr>
					<?php
					}
					?>
					<tr>
						<td colspan="4">
							<b>Percentage/CGPA:-</b>
							<input type="text" id="per3" value="<?php echo $_SESSION['per3'];?>" class="text" name="per3"/>
						</td>
					</tr>
			</table>
				<div style="padding:10px;margin:5px;width:100%;height:20px;">
					<div style="height:20px;">
						<div style="margin:0 10px;font-size:18px;font-weight:bold;font-family:normal">
							SEM-IV
						</div>
					</div>
				</div>
			<table border="1px">
				<tr>
					<th>SR NO.</th>
					<th>NAME OF SUBJECT</th>
					<th>THEORY MARKS</th>
					<th>INTERNAL MARKS</th>
					<th>T/W MARKS</th>
					<th>PRACT MARKS</th>
					<th>ORAL MARKS</th>
					<th>SESSIONAL MARKS</th>
					<th>PASSED/FAILED</th>
				</tr>
					<?php

					for($i=1;$i<8;$i++)
					{ 
						for($j=4;$j<5;$j++)
						{
						?>
						<tr>
							<td ><b><?php echo $i;?></b></td>
							<td ><input type="text" id="SUB<?php echo $j.$i?>" value="<?php echo $_SESSION['SUB'.$j.$i]; ?>" class="text4" name="SUB<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="TMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['TMAR'.$j.$i]; ?>" class="text4" name="TMAR<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="IMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['IMAR'.$j.$i]; ?>" class="text4" name="IMAR<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="TWMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['TWMAR'.$j.$i]; ?>" class="text4" name="TWMAR<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="PMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['PMAR'.$j.$i]; ?>" class="text4" name="PMAR<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="OMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['OMAR'.$j.$i]; ?>" class="text4" name="OMAR<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="SMAR<?php echo $j.$i?>" value="<?php echo $_SESSION['SMAR'.$j.$i]; ?>" class="text4" name="SMAR<?php echo $j.$i?>"  /></td>
							<td ><input type="text" id="PF<?php echo $j.$i?>" value="<?php echo $_SESSION['PF'.$j.$i]; ?>" class="text4" name="PF<?php echo $j.$i?>"  /></td>
						<?php
						}
						?>
					</tr>
					<?php
					}
					?>
					<tr>
						<td colspan="4">
							<b>Percentage/CGPA:-</b>
							<input type="text" id="per4" value="<?php echo $_SESSION['per4'];?>" class="text" name="per4"/>
						</td>
					</tr>
			</table>
			<table>
			 <tr>
				<td style="padding:20px 400px"><input type="submit" value="Next Step"  class="button" /></td>
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
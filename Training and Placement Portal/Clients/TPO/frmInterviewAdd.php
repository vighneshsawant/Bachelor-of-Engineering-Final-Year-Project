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
        <div class="mainbar">
          <div class="article">
		  <p class="post-data"><span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span></p>

           <h2><span>Interview Placement Form  </span>
			</h2><b>(Fields marked with asterik are required)</b><?php error_reporting(E_ALL ^ E_NOTICE); session_start(); 
				if($_GET['msg']=="empty"){echo "<span class=\"error\">--- Please fill the required field ---</span>";}
				?>
			 <form action="insertInterview.php" method="post" >
            <table> 
			<tr>
							<td width="100px"><strong>Select Company <span class="error">*</span></strong></td>
							<td>
								<select id="cid" name="cid">
									<option>--Select Company--</option>
									<?php
									require "../../config.php";
									////$tbl_name="tbl_teacher"; // Table name
									//$branch=$_POST['branch'];

									$sql="SELECT * FROM tbl_company";
									$result=mysql_query($sql);
									$count=mysql_num_rows($result);
									if($count >= 1)
									{
										while($rows=mysql_fetch_array($result))
										{
											echo "<option value=".$rows['ID'].">".$rows['Name']."</option>";
										}
									}
									?>
								</select>
							</td>
						</tr>
			 <tr>
                <td >Requirement<span class="error">*</span></td>
                <td><textarea id="address" class="select" rows="1" cols="80" name="requirement"  ><?php echo $_SESSION['requirement']; ?></textarea></td>
              </tr>
			  <tr valign="top">
                <td>Qualifications <span class="error">*</span></td>
                <td >
					<table>
						<tr>
							<td><input type="checkbox" name="qualification[]" value="CS"/>Computer Engineering</td>
							<td><input type="checkbox" name="qualification[]" value="IT"/>Information Technology</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="qualification[]" value="MECH"/>Mechanical Engineering</td>
							<td><input type="checkbox" name="qualification[]" value="ETRL"/>Electrical Engineering</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="qualification[]" value="EXTC"/>Electronics and Telecommunication Engineering</td>
							<td><input type="checkbox" name="qualification[]" value="ETRX"/>Electronics Engineering</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="qualification[]" value="IS"/>Instrumentation Engineering</td>
						</tr>
					</table>		
				</td>
				</tr>
              </tr>
			   <tr>
                <td >Nos of Candidates<span class="error">*</span></td>
                <td><input value="<?php echo $_SESSION['seats'];?>" name="seats" size="5" class="text" /></td>
              </tr>
			  <tr valign="top">
				<td>Venue <span class="error">*</span></td>
				<td ><textarea id="address" class="select" rows="1" cols="80" name="address"  ><?php echo $_SESSION['address']; ?></textarea></td>
			  </tr>
			  <tr>
                <td>Interview Date <span class="error">*</span></td>
                <td colspan="3">
                	<input type="date" name="idate" id="idate"/>
                </td>
              </tr>
			   <tr>
                <td>Interview Timing <span class="error">*</span></td>
                <td><input type="time" name="time" id="time"/></td>
              </tr>
			  <tr valign="top">
					<td><b>Criteria</b><span class="error">*</span></td>
					<td >
						<table>
							<tr>
								<td>Require Percentage</td>
								<td><input type="text" name="reqtotal" /></td>
							</tr>
							<tr>
								<td>Special Subject</td>
								<td><input type="text" name="spesub" /></td>
							</tr>
							<tr>
								<td>Subject Marks</td>
								<td><input type="text" name="spemarks"/></td>
							</tr>
						</table>		
					</td>
				</tr>
			  <tr><td colspan="2"></td></tr>
			 <tr>
				<td colspan="2"><input type="submit" value="Submit" class="button" /></td>
			  </tr>
		   </table>
          </form>
			
          </div>
	  </div>
        <div class="sidebar">
          <?php require"sidebar.php"; ?>
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
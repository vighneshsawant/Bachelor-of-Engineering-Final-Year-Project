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

require"../../config.php";
$result = mysql_query("Select * from tbl_interview where ID = '$_GET[id]'");
	while($row=mysql_fetch_array($result))
	{
		$requirement = $row['Reqiurement'];
		$address = $row['Venue'];
		$qualification = $row['Qualification'];
		$QualArr = explode(",", $qualification);
		$date = $row['Date'];
		$timing = $row['Timing'];
		$seats = $row['Seats'];
		
		$date = explode(", ",$date);
		$day = $date[1];
		$month = $date[0];
		
		
		$timing= explode(":",$timing);
		$hour = $timing[0];
		$timing= explode(" ",$timing[1]);
		$minute = $timing[0];
		$time = $timing[1];

	}

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
			$n=3;
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

           <h2><span>Update Interview Details </span>
			</h2><b>(Fields marked with asterik are required)</b><?php error_reporting(E_ALL ^ E_NOTICE); session_start(); 
				if($_GET['msg']=="incorrect"){echo "<span class=\"error\">--- Please enter matching password ---</span>";}
				if($_GET['msg']=="empty"){echo "<span class=\"error\">--- Please fill the required field ---</span>";}
				?>
			 <form action="editInterview.php?id=<?php echo $_GET['id'];?>" method="post" >
            <table>
			 <tr>
                <td >Requirement<span class="error">*</span></td>
                <td><textarea id="address" class="select" rows="1" cols="80" name="requirement"  ><?php if(!(isset($_SESSION['requirement']))){echo $requirement;} else {echo $_SESSION['requirement'];} ?></textarea></td>
              </tr>
			  <tr valign="top">
                <td>Qualifications <span class="error">*</span></td>
                <td >
					<table>
						<tr>
							<td><input type="checkbox" name="qualification[]"
							<?php
								foreach($QualArr as $q)
								{
									if($q == "Computer Science" )
									{
										echo "checked";
									}
								}
							?>
							value="Computer Science"/>Computer Science</td>
						</tr>
						<tr>
							<td><input type="checkbox" 
							<?php
								foreach($QualArr as $q)
								{
									if($q == "Information Technology" )
									{
										echo "checked";
									}
								}
							?>
							name="qualification[]" value="Information Technology"/>Information Technology</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="qualification[]" 
							<?php
								foreach($QualArr as $q)
								{
									if($q == "Electronics and Telecomunication" )
									{
										echo "checked";
									}
								}
							?>
							value="Electronics and Telecomunication"/>Electronics and Telecomunication</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="qualification[]" 
							<?php
								foreach($QualArr as $q)
								{
									if($q == "Printing and Packaging Technology" )
									{
										echo "checked";
									}
								}
							?>
							value="Printing and Packaging Technology"/>Printing and Packaging Technology</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="qualification[]" 
							<?php
								foreach($QualArr as $q)
								{
									if($q == "Mechanical Science" )
									{
										echo "checked";
									}
								}
							?> 
							value="Mechanical Science"/>Mechanical Science</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="qualification[]" 
							<?php
								foreach($QualArr as $q)
								{
									if($q == "Bio-Technology" )
									{
										echo "checked";
									}
								}
							?> 
							value="Bio-Technology"/>Bio-Technology</td>
						</tr>
					</table>		
				</td>
				</tr>
              </tr>
			   <tr>
                <td >Nos of Candidates<span class="error">*</span></td>
                <td><input value="<?php if(!(isset($_SESSION['seats']))){echo $seats;} else {echo $_SESSION['seats'];} ?>" name="seats" size="5" class="text" /></td>
              </tr>
			  <tr valign="top">
				<td>Venue <span class="error">*</span></td>
				<td ><textarea id="address" class="select" rows="1" cols="80" name="address"  ><?php if(!(isset($_SESSION['address']))){echo $address;} else {echo $_SESSION['address'];} ?></textarea></td>
			  </tr>
			  <tr>
                <td>Interview Date <span class="error">*</span></td>
                <td colspan="3">
					<select class="select" name="day" >
						
						<option <?php if(($_SESSION['day'] == '01') || ( $day == '01')) {echo selected;} ?> value="01">01</option>
						<option <?php if(($_SESSION['day'] == '02') || ( $day == '02')){echo selected;} ?> value="02">02</option>
						<option <?php if(($_SESSION['day'] == '03') || ( $day == '03')){echo selected;} ?> value="03">03</option>
						<option <?php if(($_SESSION['day'] == '04') || ( $day == '04')){echo selected;} ?> value="04">04</option>
						<option <?php if(($_SESSION['day'] == '05') || ( $day == '05')){echo selected;} ?> value="05">05</option>
						<option <?php if(($_SESSION['day'] == '06') || ( $day == '06')){echo selected;} ?> value="06">06</option>
						<option <?php if(($_SESSION['day'] == '07') || ( $day == '07')){echo selected;} ?> value="07">07</option>
						<option <?php if(($_SESSION['day'] == '08') || ( $day == '08')){echo selected;} ?> value="08">08</option>
						<option <?php if(($_SESSION['day'] == '09') || ( $day == '09')){echo selected;} ?> value="09">09</option>
						<option <?php if(($_SESSION['day'] == '10') || ( $day == '10')){echo selected;} ?> value="10">10</option>
						<option <?php if(($_SESSION['day'] == '11') || ( $day == '11')){echo selected;} ?> value="11">11</option>
						<option <?php if(($_SESSION['day'] == '12') || ( $day == '12')){echo selected;} ?> value="12">12</option>
						<option <?php if(($_SESSION['day'] == '13') || ( $day == '13')){echo selected;} ?> value="13">13</option>
						<option <?php if(($_SESSION['day'] == '14') || ( $day == '14')){echo selected;} ?> value="14">14</option>
						<option <?php if(($_SESSION['day'] == '15') || ( $day == '15')){echo selected;} ?> value="15">15</option>
						<option <?php if(($_SESSION['day'] == '16') || ( $day == '16')){echo selected;} ?> value="16">16</option>
						<option <?php if(($_SESSION['day'] == '17') || ( $day == '17')){echo selected;} ?> value="17">17</option>
						<option <?php if(($_SESSION['day'] == '18') || ( $day == '18')){echo selected;} ?> value="18">18</option>
						<option <?php if(($_SESSION['day'] == '19') || ( $day == '19')){echo selected;} ?> value="19">19</option>
						<option <?php if(($_SESSION['day'] == '20') || ( $day == '20')){echo selected;} ?> value="20">20</option>
						<option <?php if(($_SESSION['day'] == '21') || ( $day == '21')){echo selected;} ?> value="21">21</option>
						<option <?php if(($_SESSION['day'] == '22') || ( $day == '22')){echo selected;} ?> value="22">22</option>
						<option <?php if(($_SESSION['day'] == '23') || ( $day == '23')){echo selected;} ?> value="23">23</option>
						<option <?php if(($_SESSION['day'] == '24') || ( $day == '24')){echo selected;} ?> value="24">24</option>
						<option <?php if(($_SESSION['day'] == '25') || ( $day == '25')){echo selected;} ?> value="25">25</option>
						<option <?php if(($_SESSION['day'] == '26') || ( $day == '26')){echo selected;} ?> value="26">26</option>
						<option <?php if(($_SESSION['day'] == '27') || ( $day == '27')){echo selected;} ?> value="27">27</option>
						<option <?php if(($_SESSION['day'] == '28') || ( $day == '28')){echo selected;} ?> value="28">28</option>
						<option <?php if(($_SESSION['day'] == '29') || ( $day == '29')){echo selected;} ?> value="29">29</option>
						<option <?php if(($_SESSION['day'] == '30') || ( $day == '30')){echo selected;} ?> value="30">30</option>
						<option <?php if(($_SESSION['day'] == '31') || ( $day == '31')){echo selected;} ?> value="31">31</option>
				</select>
				<select class="select" name="month" >
						<option <?php if(($_SESSION['month'] == '01') || ($month == '01')){echo selected;} ?> value="01">January</option>
						<option <?php if(($_SESSION['month'] == '02') || ($month == '02')){echo selected;} ?> value="02">February</option>
						<option <?php if(($_SESSION['month'] == '03') || ($month == '03')){echo selected;} ?> value="03">March</option>
						<option <?php if(($_SESSION['month'] == '04') || ($month == '04')){echo selected;} ?> value="04">April</option>
						<option <?php if(($_SESSION['month'] == '05') || ($month == '05')){echo selected;} ?> value="05">May</option>
						<option <?php if(($_SESSION['month'] == '06') || ($month == '06')){echo selected;} ?> value="06">June</option>
						<option <?php if(($_SESSION['month'] == '07') || ($month == '07')){echo selected;} ?> value="07">July</option>
						<option <?php if(($_SESSION['month'] == '08') || ($month == '08')){echo selected;} ?> value="08">August</option>
						<option <?php if(($_SESSION['month'] == '09') || ($month == '09')){echo selected;} ?> value="09">September</option>
						<option <?php if(($_SESSION['month'] == '10') || ($month == '10')){echo selected;} ?> value="10">October</option>
						<option <?php if(($_SESSION['month'] == '11') || ($month == '11')){echo selected;} ?> value="11">November</option>
						<option <?php if(($_SESSION['month'] == '12') || ($month == '12')){echo selected;} ?> value="12">December</option>
					</select>
						
				</td>
              </tr>
			   <tr>
                <td>Interview Timing <span class="error">*</span></td>
                <td >Hours&nbsp;
					<select class="select" name="hour" >
						<option <?php if(($_SESSION['hour'] == '01') || ($hour == '01')){echo selected;} ?> value="01">01</option>
						<option <?php if(($_SESSION['hour'] == '02') || ($hour == '02')){echo selected;} ?> value="02">02</option>
						<option <?php if(($_SESSION['hour'] == '03') || ($hour == '03')){echo selected;} ?> value="03">03</option>
						<option <?php if(($_SESSION['hour'] == '04') || ($hour == '04')){echo selected;} ?> value="04">04</option>
						<option <?php if(($_SESSION['hour'] == '05') || ($hour == '05')){echo selected;} ?> value="05">05</option>
						<option <?php if(($_SESSION['hour'] == '06') || ($hour == '06')){echo selected;} ?> value="06">06</option>
						<option <?php if(($_SESSION['hour'] == '07') || ($hour == '07')){echo selected;} ?> value="07">07</option>
						<option <?php if(($_SESSION['hour'] == '08') || ($hour == '08')){echo selected;} ?> value="08">08</option>
						<option <?php if(($_SESSION['hour'] == '09') || ($hour == '09')){echo selected;} ?> value="09">09</option>
						<option <?php if(($_SESSION['hour'] == '10') || ($hour == '10')){echo selected;} ?> value="10">10</option>
						<option <?php if(($_SESSION['hour'] == '11') || ($hour == '11')){echo selected;} ?> value="11">11</option>
						<option <?php if(($_SESSION['hour'] == '12') || ($hour == '12')){echo selected;} ?> value="12">12</option>
				</select>&nbsp;&nbsp;&nbsp;Minutes&nbsp;
				<select class="select" name="minute" >
						<option <?php if(($_SESSION['minute'] == '00') ||($minute == '00')){echo selected;} ?> value="00">00</option>
						<option <?php if(($_SESSION['minute'] == '15') ||($minute == '15')){echo selected;} ?> value="15">15</option>
						<option <?php if(($_SESSION['minute'] == '30') ||($minute == '30')){echo selected;} ?> value="30">30</option>
						<option <?php if(($_SESSION['minute'] == '45') ||($minute == '45')){echo selected;} ?> value="45">45</option>
					</select>
				
					<select class="select" name="time" >
						<option <?php if(($_SESSION['time'] == 'am') || ($time == 'am')){echo selected;} ?> value="am">am</option>
						<option <?php if(($_SESSION['time'] == 'pm') || ($time == 'pm')){echo selected;} ?> value="pm">pm</option>
					</select>	
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
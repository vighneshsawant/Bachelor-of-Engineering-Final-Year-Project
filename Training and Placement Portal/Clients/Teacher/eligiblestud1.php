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
			$n=4;
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

<span style="font:normal 24px Arial, Helvetica, sans-serif;color:#595959;font-weight:bold;text-decoration:underline;">

Eligible Candidates List</span><br>
<form action="sendmail.php" method="post">
					<table style="width:100%;padding-top:10px">
						<tr style="background-color:black;color:white">
							<th>Student Name</th>
							<th>Student Branch</th>
							<th>Student Percentage</th>
						</tr>
            <?php 
				require "../../config.php";
				$cid=$_GET['intid'];
				$result=mysql_query("Select * from tbl_interview where CompanyID='$cid'");
				$count = mysql_num_rows($result);

				if($count < 1)
				{	
					echo "There are no candidates registered";
				}
				else
				{	
					
					while($row=mysql_fetch_array($result))
					{
						 $CompanyID=$row['CompanyID'];
							 $branch=$row['Qualification'];
							 $per=$row['per'];
							 $spesub=$row['spesub'];
							 $spemarks=$row['spemarks'];
							 $qualification=explode(",", $branch);
							 $Name="";

							$sql=mysql_query("Select * from tbl_company where ID = '$CompanyID'");
							while($row2=mysql_fetch_array($sql))
							{
								$Name=$row2['Name'];
							}
?>
								<tr>
									<th colspan="3" style="background-color:cyan;font-size:25px;">
										<?php echo $Name;?>
									</th>
								</tr>
<?php
						$i=0;
						foreach($qualification as $q1)
			 			{

							$result1=mysql_query("Select * from tbl_users where quali = '$q1'");
							
							while($row1=mysql_fetch_array($result1))
							{

								$totalper=$row1['totalper'];
								if($per <= $totalper)
								{
?>								
								<tr>
									 	<td>
											<img  src="../../images/profile.jpg" style="padding:0;margin:0" width="15" height="15"/>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												<input type="hidden" name="id" value="<?php echo $id?>">
												<input type="hidden" name="rows" value="<?php echo $i?>">
												<?php echo $row1['Name']?>
											</span>
										</td>
										<td>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												<?php echo $row1['quali']?>
											</span>
										</td>
										<td>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												<?php echo $row1['totalper']?>
												<input type="hidden" name="email.$i" value="<?php echo $row1['email']?>">
											</span>
										</td>
								</tr>
<?php
								}
								$i++;
							}
						
						}
					}
					
				}
?>
				</table>
</form>
          </div>
	  </div>
        <div class="sidebar">
          <div class="gadget">
			<img src="../../images/admin.jpg" width="140" height="140"/>
			</a>
            <div class="clr"></div>
			<ul class="sb_menu">
				 <li class="active"><a  href="frmViewStudentlist.php">View Student</a></li> 
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
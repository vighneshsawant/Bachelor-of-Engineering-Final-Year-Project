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
			$n=1;
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
			<table style="width:100%;padding-top:10px" cellpadding="10" cellspacing="0">
						<tr style="background-color:cyan">
							<th>Company Name</th>
							<th>Requirements</th>
							<th>Venue</th>
							<th>Date</th>
							<th>Timing</th>
							<th>Seats</th>
							<th>Percentage</th>
							<th>Give Test</th>
						</tr>
            <?php 
				require "../../config.php";
				$uid=$_SESSION['ID'];
				$result=mysql_query("Select * from tbl_interview");
				$count = mysql_num_rows($result);

				if($count < 1)
				{	
					echo "There are no candidates registered";
				}
				else
				{	
					
					while($row=mysql_fetch_array($result))
					{
							 $interid=$row['ID'];
							 $seats=$row['Seats'];
							 $Requirement=$row['Reqiurement'];
							 $Venue=$row['Venue'];
							 $Date=$row['Date'];
							 $Timing=$row['Timing'];
							 $CompanyID=$row['CompanyID'];
							 $branch=$row['Qualification'];
							 $per=$row['per'];
							 $spesub=$row['spesub'];
							 $spemarks=$row['spemarks'];

							 $qualification=explode(",", $branch);
						$i=0;
						foreach($qualification as $q1)
			 			{

							$result1=mysql_query("Select * from tbl_users where quali = '$q1' and id='$uid'");
							
							while($row1=mysql_fetch_array($result1))
							{
								$cname="";
								$sid="";
								$result11=mysql_query("Select * from tbl_company where ID = '$CompanyID'");
								if($row11=mysql_fetch_array($result11))
								{
									$cname=$row11['Name'];
									$sid=$row11['ID'];
								}
?>								
								<tr>
									 	<td>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												<input type="hidden" name="id" value="<?php echo $id?>">
												<input type="hidden" name="rows" value="<?php echo $i?>">
												<?php echo $cname?>
											</span>
										</td>
										<td>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												<?php echo $Requirement?>
											</span>
										</td>
										<td>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												<?php echo $Venue?>
											</span>
										</td>
										<td>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												<?php echo $Date?>
											</span>
										</td>
										<td>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												<?php echo $Timing?>
											</span>
										</td>
										<td>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												<?php echo $seats?>
											</span>
										</td>
										<!--<td>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												<?php echo $q1?>
											</span>
										</td>-->
										<td>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												<?php echo $per?>
											</span>
										</td>
									<?php
										$sql="Select * from tbl_studentexamdetail where studentid='$uid' and companyid= '$CompanyID' and examid='$interid'";
										$result12=mysql_query($sql);
										if($result12)
										{
										$num=mysql_num_rows($result12);
										if($num < 1)
										{
									?>
										<td>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												<a href="frmExam.php?cid=<?php echo $CompanyID;?>&sid=<?php echo $uid?>&interid=<?php echo $interid;?>">
													Give Test
												</a>
											</span>
										</td>
									<?php
										}
										else
										{
									?>
										<td>
											<span style="font-family:Bookman Old Style;font-size:15px;font-weight:bold;">
												Test Allready Given
											</span>
										</td>
									<?php
										}
										}
									?>
								</tr>
<?php
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
          <?php //require"sidebar.php"; ?>
	
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
<span style="font:normal 24px Arial, Helvetica, sans-serif;color:#595959;font-weight:bold;text-decoration:underline;">
Current Job Offers</span>
            <?php 
				require "../../config.php";
				 $ID=$_POST['ID'];
				$m="";
				//$sql="Select * from tbl_interview Where ";
				$result=mysql_query("Select * from tbl_interview Where CompanyID='$ID'");
				$count = mysql_num_rows($result);

				if($count < 1)
				{	
					echo "There no job offers added by you,<br >";
				}
				else
				{	
					
					while($row=mysql_fetch_array($result))
					{
						echo "<table cellpadding=\"0\" cellspacing=\"0\" style=\"color:#000000;width:100%;background:white;margin-top:5px;border:1px solid #78bbe6;\">";
						$date=$row['Date'];
						$matchdate=explode('-',$date);
						$day = $matchdate[2];
						$month = $matchdate[1];
						$year = $matchdate[0];
						
						switch($month)
						{
						case 1: $m="January";break;
						case 2: $m="February";break;
						case 3: $m="March";break;
						case 4: $m="April";break;
						case 5: $m="May";break;
						case 6: $m="June";break;
						case 7: $m="July";break;
						case 8: $m="August";break;
						case 9: $m="September";break;
						case 10: $m="October";break;
						case 11: $m="November";break;
						case 12: $m="December";break;
						}
						$CompanyID=$row['CompanyID'];
						$Name="";
						$result1=mysql_query("Select * from tbl_company where ID='$CompanyID'");
						if($row1=mysql_fetch_array($result1))
						{
							$Name=$row1['Name'];
						}
						
						echo "<tr valign=\"top\" ><td rowspan=\"4\" width=\"100\"><img  src=\"../../images/j.jpg\" style=\"padding:0;margin:0\" width=\"100\" height=\"80\"/></td>
						<td ><b><u>Company Name: </u></b>&nbsp;&nbsp;".$Name."</td ></tr><tr>
						<td ><b><u>Job Profile: </u></b>&nbsp;&nbsp;".$row['Reqiurement']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b><u>Total Candidates required:</u></b> &nbsp;&nbsp;".$row['Seats']."</td ></tr>
						<tr ><td ><b> <u>Campus Date:</u></b>&nbsp;&nbsp; ".$day.",".$m.", ".$year."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b><u>Timing:</u></b> ".$row['Timing']."</td></tr>
						<tr ><td > <b><u><a href=\"eligiblestud1.php?intid=".$CompanyID."\">Eligible Student</a></td>
						<td align=\"right\">
						<a style=\"color:green\" href=\"frmInterviewEdit.php?id=".$row['ID']."\"><img  src=\"../../images/edit.jpg\" style=\"padding:0;margin:0\" width=\"15\" height=\"15\"/>&nbsp;&nbsp;Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a style=\"color:red\" href=\"delInterview.php?id=".$row['ID']."\"><img  src=\"../../images/delete.png\" style=\"padding:0;margin:0\" width=\"15\" height=\"15\"/>&nbsp;&nbsp;Delete</a>
						</td></tr>";
						echo "</table>";
					}
				}
		
			?>
			
          </div>
	  </div>
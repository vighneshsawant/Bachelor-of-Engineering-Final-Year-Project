 <?php error_reporting(E_ALL ^ E_NOTICE);
require "../../config.php";
$rresult1=mysql_query("Select * from tbl_company where ID = '$id'");
$rrow1 =mysql_fetch_array($rresult1);
$name=$rrow1['Name'];
$rresult=mysql_query("Select * from tbl_interview where ID = '$iid'");

	while($rrow=mysql_fetch_array($rresult))
	{
		echo "<table cellpadding=\"0\" cellspacing=\"0\" style=\"color:#959595;margin-top:5px;\">";
		$date=$rrow['Date'];
		$matchdate=explode(',',$date);
		$day = $matchdate[1];
		$month = $matchdate[0];
		
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
		
		echo "<tr valign=\"top\" ><td rowspan=\"3\" width=\"100\"><img  src=\"../../images/jj.jpg\" style=\"padding:0;margin:0\" width=\"100\" height=\"70\"/></td><td  colspan=\"3\"> <span style=\"font-size:15px;font-weight:bold;text-decoration:underline\">Job offer for ".$rrow['Reqiurement'].
		" in ".$name."</span></td ></tr>
		<tr ><td ><b> <u>Interview Date:</u></b>&nbsp;&nbsp; ".$m.", ".$day."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b><u>Timing:</u></b> ".$rrow['Timing']."</td></tr><tr><td > <b><u>Venue:</u></b>&nbsp;&nbsp; ".$rrow['Venue']."</td></tr>";
		echo "</table>";
		
		
	}
	///echo $mobile;;
		
?>
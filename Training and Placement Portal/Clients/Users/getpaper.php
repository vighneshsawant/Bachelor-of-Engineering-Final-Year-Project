<script type="text/javascript">
var mins
var secs;

function cd() {
 	mins = 1 * m("2"); // change minutes here
 	secs = 0 + s(":01"); // change seconds here (always add an additional second to your total)
 	redo();
}

function m(obj) {
 	for(var i = 0; i < obj.length; i++) {
  		if(obj.substring(i, i + 1) == ":")
  		break;
 	}
 	return(obj.substring(0, i));
}

function s(obj) {
 	for(var i = 0; i < obj.length; i++) {
  		if(obj.substring(i, i + 1) == ":")
  		break;
 	}
 	return(obj.substring(i + 1, obj.length));
}

function dis(mins,secs) {
 	var disp;
 	if(mins <= 9) {
  		disp = " 0";
 	} else {
  		disp = " ";
 	}
 	disp += mins + ":";
 	if(secs <= 9) {
  		disp += "0" + secs;
 	} else {
  		disp += secs;
 	}
 	return(disp);
}

function redo() {
 	secs--;
 	if(secs == -1) {
  		secs = 59;
  		mins--;
 	}
 	document.cd.disp.value = dis(mins,secs); // setup additional displays here.
 	if((mins == 0) && (secs == 0)) {
  		window.alert("Time is up. Press OK to continue."); // change timeout message as required
  		// window.location = "yourpage.htm" // redirects to specified page once timer ends and ok button is pressed
 	} else {
 		cd = setTimeout("redo()",1000);
 	}
}

function init() {
  cd();
}
window.onload = init;

function tocheck()
{
	var checkFound = false;
	var chx = document.getElementsByTagName('input');
  for (var i=0; i<chx.length; i++) {
    if (chx[i].type == 'radio' && chx[i].checked) {
      checkFound = true;
	  //alert(chx[i].value);
	  document.getElementById('questionform').submit();
    } 
  }
if (checkFound != true) {
   alert ("Please check at least one option.");
   }
}
</script>
<form id="questionform" method="post" action="insertAnswer.php">
<table width="100%" id="exampaper" cellspacing="2px" cellpadding="5px">
<tr></td>&nbsp;</td></tr>
<tr>
<td style="text-align:right" width="30%"><img src="images/t1.jpg" width="50px" height="50px"/></td>
<td style="text-align:left"><label style="font-size:20px">You will redirect to Logout in</label> 
<span id="countdown" style="color:Red; font-size:20px"> 1200 </span><label style="font-size:20px"> Seconds..</label></td></tr>
<?php
				$cid=$_GET['cid'];
				$sid=$_GET['sid'];
				$interid=$_GET['interid'];
	$sql = "select id,question,option1,option2,option3,option4 from tbl_qbank ORDER BY RAND() LIMIT 20";
	$result = mysql_query($sql);
	if(!$result)
	{
		die('error-'.mysql_error());
	}
	else
	{
		if(mysql_num_rows($result)>0)
		{
			$n=1;
			while($row=mysql_fetch_array($result))
			{
				echo("<tr>
				<td colspan=\"4\"><font color=\"red\">Q - ".$n."</font> 
				<input type=\"hidden\" name=\"question".$n."\" value=\"".$row['id']."\">
				<label class=\"lbl1\">".$row['question']."?</label></td></tr>
						<tr><td>
							<input type=\"radio\" name=\"answer".$n."\" value=\"".$row['option1']."\">
							<label class=\"lbl2\">".$row['option1']."</label>
							</td>
						</tr>
						<tr>	
							<td>
							<input type=\"radio\" name=\"answer".$n."\" value=\"".$row['option2']."\">
							<label class=\"lbl2\">".$row['option2']."</label>
							</td>
						</tr>
						<tr>	
							<td>
							<input type=\"radio\" name=\"answer".$n."\" value=\"".$row['option3']."\">
							<label class=\"lbl2\">".$row['option3']."</label>
							</td>
						</tr>
						<tr>	
							<td>
							<input type=\"radio\" name=\"answer".$n."\" value=\"".$row['option4']."\">
							<label class=\"lbl2\">".$row['option4']."</label>
							</td>
						</tr>");
						$n++;
			}
			echo("<tr><td style=\"padding-left: 400px; padding-right: -10px\" colspan=\"4\"><a href=\"#\" class=\"button1\" onclick=\"tocheck();\" style=\"padding:5px 20px;background-color:black;color:white\">Submit</a></td></tr>");
		}
	}
	//echo $company."<br>";
	//echo $emailid;
?>
<input type="hidden" name="cid" value="<?php echo $cid;?>">
<input type="hidden" name="sid" value="<?php echo $sid;?>">
<input type="hidden" name="interid" value="<?php echo $interid;?>">
</form>
</table>
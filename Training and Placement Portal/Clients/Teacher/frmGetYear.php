<option>--Select Year--</option>
<?php
	$ID=$_POST['ID'];
	if($ID=="Diploma")
	{
?>
		<option value="FE">First Year</option>
		<option value="SE">Second Year</option>
		<option value="TE">Third Year</option>
<?php
	}
	else
	{
?>
		<option value="FE">First Year</option>
		<option value="SE">Second Year</option>
		<option value="TE">Third Year</option>
		<option value="BE">Fourth Year</option>
<?php
	}
?>
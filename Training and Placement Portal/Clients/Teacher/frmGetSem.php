<option>--Select Semester--</option>
<?php
	$val=$_POST['ID1'];
	if($val=="FE")
	{
?>
		<option value="Sem 1">SEM-I</option>
		<option value="Sem 2">SEM-II</option>
<?php
	}
	else if($val=="SE")
	{
?>
		<option value="Sem 3">SEM-III</option>
		<option value="Sem 4">SEM-IV</option>
<?php
	}
	else if($val=="TE")
	{
?>
		<option value="Sem 5">SEM-V</option>
		<option value="Sem 6">SEM-VI</option>
<?php
	}
	else if($val=="BE")
	{
?>
		<option value="Sem 7">SEM-VII</option>
		<option value="Sem 8">SEM-VIII</option>
<?php
	}
?>
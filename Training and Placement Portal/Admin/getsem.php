<option>--Select Semester--</option>
<?php
	$val=$_POST['class'];
	if($val=="Degree")
	{
?>
		<option value="Sem 1">SEM-I</option>
		<option value="Sem 2">SEM-II</option>
		<option value="Sem 3">SEM-III</option>
		<option value="Sem 4">SEM-IV</option>
		<option value="Sem 5">SEM-V</option>
		<option value="Sem 6">SEM-VI</option>
		<option value="Sem 7">SEM-VII</option>
		<option value="Sem 8">SEM-VIII</option>
<?php
	}
	else
	{
?>
		<option value="sem 1">SEM-I</option>
		<option value="Sem 2">SEM-II</option>
		<option value="Sem 3">SEM-III</option>
		<option value="Sem 4">SEM-IV</option>
		<option value="Sem 5">SEM-V</option>
		<option value="Sem 6">SEM-VI</option>
<?php
	}
?>
<?php
	require "../config.php";
	$arr = array('CS', 'IT', 'MECH', 'ETRL', 'EXTC', 'ETRX', 'IS');
	$arr1 = array('AM-II', 'SPA', 'ED', 'PHY-II', 'CHEM-II', 'EVS', 'WS-II');
	for($i=0;$i<sizeof($arr);$i++)
	{
		for ($j=0; $j <sizeof($arr1) ; $j++) { 

			$sql=mysql_query("INSERT INTO subject(branch,course,year,sem,subject) VALUES('$arr[$i]','Degree','FE','Sem 2','$arr1[$j]')");
		}
	}
?>
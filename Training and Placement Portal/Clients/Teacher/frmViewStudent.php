<div id="tabledata">
<h2>
	<span style="font-weight:bold;text-decoration:underline;">
	<img src="../../images/forum.jpg" style="padding:0;margin:0" height="20" width="20"/>&nbsp;Staff lists</span>
</h2>
	<table>	
		<thead>
			<tr>
				<th>Teacher</th>
				<th>Teacher Name</th>
				<th>Teach Branch</th>
				<th>Teach Subject</th>
				<th>Email ID</th>
			</tr>
		</thead>
		<?php
		require "../../config.php";
		$tbl_name="tbl_teacher"; // Table name
		$branch=$_POST['branch'];

		$sql="SELECT * FROM $tbl_name Where branch='".$branch."'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		if($count >= 1)
		{
			while($rows=mysql_fetch_array($result))
			{
			echo "<tr ><td rowspan=\"1\"><img src=../../images/user.png width=\"40\" height=\"40\"/></td>
					<td >
						<b>".$rows['name']."</b>
					</td>
					<td >";
						$sql1="SELECT * FROM branch WHERE abb='".$rows['branch']."'";
						$result1=mysql_query($sql1);
						$count1=mysql_num_rows($result1);
						if($count1 >= 1)
						{
							if($rows1=mysql_fetch_array($result1))
							{
								echo "<b>".$rows1['branch']."</b>";
							}
						}
			echo "</td>
					<td >
						<b>".$rows['subject']."</b>
					</td>
					<td >
						<b>".$rows['email']."</b>
					</td>
			</tr>";

			}
		}
		else {
			echo "There No teacher for this branch";
		}

		?>
	</table>
<div class="clr"></div>
</div>
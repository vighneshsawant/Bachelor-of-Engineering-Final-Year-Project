<option>--Select Branch--</option>
									<?php
									require "../../config.php";
									//$tbl_name="tbl_teacher"; // Table name
									$course=$_POST['course'];
								if($course=="Degree")
								{
									$sql="SELECT * FROM branch";
									$result=mysql_query($sql);
									$count=mysql_num_rows($result);
									if($count >= 1)
									{
										while($rows=mysql_fetch_array($result))
										{
											echo "<option value=".$rows['abb'].">".$rows['branch']."</option>";
										}
									}
								}
								else
								{
									echo "<option value='CS'>Computer Engineering</option>";
								}
									?>
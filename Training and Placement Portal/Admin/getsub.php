<?php
						error_reporting(E_ALL ^ E_NOTICE);
						require "../config.php";
						
						echo $course=$_POST['class'];
						echo $branch=$_POST['branch'];
						echo $semester=$_POST['semester'];
						
						$query="SELECT * FROM subject WHERE branch='$branch' and course='$course' and sem='$semester'";
						$result1=mysql_query($query);
						while($rows=mysql_fetch_array($result1))
						{
							$subname=$rows['subject'];
							$id=$rows['id'];
					?>
							<option value="<?php echo $id;?>"><?php echo $subname;?></option>
					<?php
						}
					?>

					
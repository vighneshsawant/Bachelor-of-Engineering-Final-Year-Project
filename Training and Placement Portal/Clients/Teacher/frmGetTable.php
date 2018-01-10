		<div id="tabledata">
		  <table border="1px">
				<tr>
					<th>Student Name</th>
					<?php
						error_reporting(E_ALL ^ E_NOTICE);
						require "../../config.php";
						
						$branch=$_POST['branch'];
						$year=$_POST['year'];
						$course=$_POST['course'];
						$sem=$_POST['sem'];
						$j=1;
						
						$query="SELECT * FROM subject WHERE branch='$branch' and course='$course' and year='$year' and sem='$sem'";
						$result1=mysql_query($query);
						while($rows=mysql_fetch_array($result1))
						{
							$subname=$rows['subject'];
					?>
							<th><?php echo $subname;?></th>
					<?php
							$j++;
						}
					?>
				</tr>
					<?php
						session_start();
						 $query1="SELECT * FROM deadmission WHERE declass='$branch' and deyear='$year'";
						$result2=mysql_query($query1);
						$i=1;
						while($rows=mysql_fetch_array($result2))
						{
							$student=$rows['fname'];
							
						?>
						<tr>
							<td >
								<b>
									<?php echo $student;?>
									<input type="hidden" id="sname<?php echo $i?>" value="<?php echo $student; ?>" class="text5" name="sname<?php echo $i?>"  />
								</b>
							</td>
						<?php
							for($k=1;$k<$j;$k++)
							{
						?>
							<td>
								<input type="text" id="sub<?php echo $i.$k?>" value="<?php echo $_SESSION['SUB'.$i]; ?>" class="text5" name="sub<?php echo $i.$k?>"  />
							</td>
						<?php
							}
						?>
						<?php
							$i++;
						}
							
						?>
							<input type="hidden" id="row" value="<?php echo $i; ?>" class="text5" name="row"  />
						</tr>
						<tr>
							<td>		  
								<div>
							  		<input type="submit" value="Save Marks">
							  	</div>
							</td>
						</tr>
			</table>
		</div>
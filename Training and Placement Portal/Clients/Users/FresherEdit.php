
<html>
<head>

</head>

<body>

<span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span> 
		   &nbsp;
		  <h2><span style="font-weight:bold;text-decoration:underline;">Update Profile details</span></h2>(Fields marked with asterik are required)

		  <br><?php error_reporting(E_ALL ^ E_NOTICE); 
				if($_GET['msg']=="invalid"){echo "<span class=\"error\">--- Invalid email address ---</span>";}
				if($_GET['msg']=="empty"){echo "<span class=\"error\">--- Please fill the required field ---</span>";}
				if($_GET['msg']=="nomatch"){echo "<span class=\"error\">--- Please enter valid Semester Percentage and KT's record ---</span>";}
				?>
		   <form action="editFresher.php" enctype="multipart/form-data" method="post" >
            <table >
			 <tr>
				<td colspan="4" class="color"  style="font-size:16px;font-weight:bold;text-decoration:underline;">Personal details</td>
			 </tr>
			   <tr>
                <td>Birth Date <span class="error">*</span></td>
                <td colspan="3"><input id="dob" value="<?php if(!(isset($_SESSION['dob']))){echo $dob;} else {echo $_SESSION['dob'];}?>" class="text" name="dob"  />
				</td>
              </tr>
			  <tr>
				<td>Gender <span class="error">*</span></td>
				<td colspan="3">
					<input type="radio" name="gender" <?php if(($_SESSION['gender'] == 'male') || ($gender == 'male')){echo "checked";} ?> value="male" />Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<input type="radio" name="gender" <?php if(($_SESSION['gender'] == 'female') || ($gender == 'female')){echo "checked";} ?> value="female"/>Female
				</td>
			  </tr>
			  <tr valign="top">
				<td>Address <span class="error">*</span></td>
				<td colspan="3"><textarea id="address" class="select" rows="2" cols="80" name="address"  ><?php if(!(isset($_SESSION['address']))){echo $address;} else {echo $_SESSION['address'];} ?></textarea></td>
			  </tr>
			  <tr>
				<td>Contact No <span class="error">*</span></td>
				<td ><input id="contact" value="<?php if(!(isset($_SESSION['contact']))){echo $contact;} else {echo $_SESSION['contact'];} ?>" class="text" name="contact"  /></td>
			  
				<td>Email Address <span class="error">*</span></td>
				<td ><input id="email"  value="<?php if(!(isset($_SESSION['email']))){echo $email;} else {echo $_SESSION['email'];} ?>" class="text" name="email"  /></td>
			  </tr> 
			   <tr>
				<td>City <span class="error">*</span></td>
				<td><input id="city" value="<?php if(!(isset($_SESSION['city']))){echo $city;} else {echo $_SESSION['city'];} ?>" class="text" name="city"  /></td>
				<td>State <span class="error">*</span></td>
				<td><input id="state" value="<?php if(!(isset($_SESSION['state']))){echo $state;} else {echo $_SESSION['state'];} ?>" class="text" name="state"  /></td>
			  </tr>
			  <tr>
				<td>Maritial Status <span class="error">*</span></td>
				<td colspan="3">
					<input type="radio" name="maritial" <?php if(($_SESSION['maritial'] == 'Single') || ($maritial=='Single')){echo "checked";} ?> value="Single" />Single&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<input type="radio" name="maritial" <?php if(($_SESSION['maritial'] == 'Married') || ($maritial=='Married')){echo "checked";} ?> value="Married" />Married&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				</td>
			  </tr>			  
			  <tr>
                <td>Profile Photo</td>
				<td colspan="3"><input class="text" type="text" value="<?php if(!(isset($_SESSION['photo'])))
				{
					echo $photo;
				}
				else {echo $_SESSION['photo'];} ?>" name="photo"/>
                <input type="file" class="select" style="background:white" name="changephoto"  /><?php if(($_SESSION['photo']=="") || ($photo=="")){ echo "Only jpg,bmp,gif files "; }?>
				</td>
              </tr>
			  <tr>
				<td colspan="4" class="color"  style="font-size:16px;font-weight:bold;text-decoration:underline;">Educational details</td>
			 </tr>
			 <tr>
                <td colspan="4" style="font-size:14px;font-weight:bold;text-decoration:underline;">SSC details</td>
			</tr>
			<tr>
				<td>Passing year <span class="error">*</span></td>
				<td colspan="3"><input  value="<?php if(!(isset($_SESSION['sscyear']))){echo $sscyear;} else {echo $_SESSION['sscyear'];}?>" class="text" name="sscyear"  /></td>
			 </tr>
			 <tr>
				<td>Percentage <span class="error">*</span></td>
				<td colspan="3"><input  value="<?php if(!(isset($_SESSION['sscpercentage']))){echo $sscpercentage;} else {echo $_SESSION['sscpercentage'];}?>" class="text" name="sscpercentage"  /></td>
			 </tr>
			 <tr>
				<td>University <span class="error">*</span></td>
				<td colspan="3"><input  value="<?php if(!(isset($_SESSION['sscuniversity']))){echo $sscuniversity;} else {echo $_SESSION['sscuniversity'];} ?>" class="text" name="sscuniversity"  /></td>
			 </tr>
			 <tr>
                <td colspan="4" style="font-size:14px;font-weight:bold;text-decoration:underline;">HSC details</td>
			</tr>
			<tr>
				<td>Skill level <span class="error">*</span></td>
				<td colspan="3">
					<select class="select" name="hscskill" >
						<option <?php if (($_SESSION['hscskill'] == 'Not Applicable') || ($hscskill=='Not Applicable')){echo selected;} ?>  value='Not Applicable'>-- Select --</option>
						<option <?php if(($_SESSION['hscskill'] == 'Arts') || ($hscskill=='Arts')){echo selected;} ?> value="Arts">Arts</option>
						<option <?php if(($_SESSION['hscskill'] == 'Commerce') || ($hscskill=='Commerce')){echo selected;} ?> value="Commerce">Commerce</option>
						<option <?php if(($_SESSION['hscskill'] == 'Science') || ($hscskill=='Science')){echo selected;} ?> value="Science">Science</option>
					</select>
				</td>
			 </tr>
			<tr>
				<td>Passing year <span class="error">*</span></td>
				<td colspan="3"><input  value="<?php if(!(isset($_SESSION['hscyear']))){echo $hscyear;} else {echo $_SESSION['hscyear'];} ?>" class="text" name="hscyear"  /></td>
			 </tr>
			 <tr>
				<td>Percentage <span class="error">*</span></td>
				<td colspan="3"><input  value="<?php if(!(isset($_SESSION['hscpercentage']))){echo $hscpercentage;} else {echo $_SESSION['hscpercentage'];} ?>" class="text" name="hscpercentage"  /></td>
			 </tr>
			 <tr>
				<td>University <span class="error">*</span></td>
				<td colspan="3"><input  value="<?php if(!(isset($_SESSION['hscuniversity']))){echo $hscuniversity;} else {echo $_SESSION['hscuniversity'];} ?>" class="text" name="hscuniversity"  /></td>
			 </tr>
			 <tr>
                <td colspan="4" style="font-size:14px;font-weight:bold;text-decoration:underline;">Higher Educational details</td>
			</tr>
			<tr>
                <td colspan="4"><table><tr><td style="font-size:14px;font-weight:bold">Branch <span class="error">*</span> ==></td>
				<td ><select class="select" name="branch" >
						<option <?php if (($_SESSION['branch'] == 'Computer Science') || ($branch == 'Computer Science')){echo selected;} ?>  value='Computer Science'>Computer Science</option>
						<option <?php if (($_SESSION['branch'] == 'Information Technology') || ($branch == 'Information Technology')){echo selected;} ?>  value='Information Technology'>Information Technology</option>
						<option <?php if (($_SESSION['branch'] == 'Electronics and Telecomunication') || ($branch == 'Electronics and Telecomunication')){echo selected;} ?>  value='Electronics and Telecomunication'>Electronics and Telecomunication</option>
						<option <?php if (($_SESSION['branch'] == 'Printing and Packaging Technology') || ($branch == 'Printing and Packaging Technology')){echo selected;} ?>  value='Printing and Packaging Technology'>Printing and Packaging Technology</option>
						<option <?php if (($_SESSION['branch'] == 'Mechanical Science') || ($branch == 'Mechanical Science')){echo selected;} ?>  value='Mechanical Science'>Mechanical Science</option>
						<option <?php if (($_SESSION['branch'] == 'Bio-Technology') || ($branch == 'Bio-Technology')){echo selected;} ?>  value='Bio-Technology'>Bio-Technology</option>
					</select></td></tr></table></td>
			 </tr>
			<tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" align="right" width="160px" style="font-size:14px;font-weight:bold">First Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if(!(isset($_SESSION['sem1percentage']))){echo $sem1percentage;} else {echo $_SESSION['sem1percentage'];} ?>" class="text" name="sem1percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem1KTLive']))){echo $sem1KTLive;} else {echo $_SESSION['sem1KTLive'];} ?>" class="kt" size="5" name="sem1KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem1KTDead']))){echo $sem1KTDead;} else {echo $_SESSION['sem1KTDead'];} ?>" class="kt" name="sem1KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem1KTDrop']))){echo $sem1KTDrop;} else {echo $_SESSION['sem1KTDrop'];} ?>" class="kt" name="sem1KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			  <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Second Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if(!(isset($_SESSION['sem2percentage']))){echo $sem2percentage;} else {echo $_SESSION['sem2percentage'];} ?>" class="text" name="sem2percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem2KTLive']))){echo $sem2KTLive;} else {echo $_SESSION['sem2KTLive'];} ?>" class="kt" size="5" name="sem2KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem2KTDead']))){echo $sem2KTDead;} else {echo $_SESSION['sem2KTDead'];} ?>" class="kt" name="sem2KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem2KTDrop']))){echo $sem2KTDrop;} else {echo $_SESSION['sem2KTDrop'];} ?>" class="kt" name="sem2KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Third Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if(!(isset($_SESSION['sem3percentage']))){echo $sem3percentage;} else {echo $_SESSION['sem3percentage'];} ?>" class="text" name="sem3percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem3KTLive']))){echo $sem3KTLive;} else {echo $_SESSION['sem3KTLive'];} ?>" class="kt" size="5" name="sem3KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem3KTDead']))){echo $sem3KTDead;} else {echo $_SESSION['sem3KTDead'];} ?>" class="kt" name="sem3KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem3KTDrop']))){echo $sem3KTDrop;} else {echo $_SESSION['sem3KTDrop'];} ?>" class="kt" name="sem3KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Fourth Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if(!(isset($_SESSION['sem4percentage']))){echo $sem4percentage;} else {echo $_SESSION['sem4percentage'];} ?>" class="text" name="sem4percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem4KTLive']))){echo $sem4KTLive;} else {echo $_SESSION['sem4KTLive'];} ?>" class="kt" size="5" name="sem4KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem4KTDead']))){echo $sem4KTDead;} else {echo $_SESSION['sem4KTDead'];} ?>" class="kt" name="sem4KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem4KTDrop']))){echo $sem4KTDrop;} else {echo $_SESSION['sem4KTDrop'];} ?>" class="kt" name="sem4KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Fifth Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if(!(isset($_SESSION['sem5percentage']))){echo $sem5percentage;} else {echo $_SESSION['sem5percentage'];} ?>" class="text" name="sem5percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem5KTLive']))){echo $sem5KTLive;} else {echo $_SESSION['sem5KTLive'];} ?>" class="kt" size="5" name="sem5KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem5KTDead']))){echo $sem5KTDead;} else {echo $_SESSION['sem5KTDead'];} ?>" class="kt" name="sem5KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem5KTDrop']))){echo $sem5KTDrop;} else {echo $_SESSION['sem5KTDrop'];} ?>" class="kt" name="sem5KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Sixth Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if(!(isset($_SESSION['sem6percentage']))){echo $sem6percentage;} else {echo $_SESSION['sem6percentage'];} ?>" class="text" name="sem6percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem6KTLive']))){echo $sem6KTLive;} else {echo $_SESSION['sem6KTLive'];} ?>" class="kt" size="5" name="sem6KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem6KTDead']))){echo $sem6KTDead;} else {echo $_SESSION['sem6KTDead'];} ?>" class="kt" name="sem6KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem6KTDrop']))){echo $sem6KTDrop;} else {echo $_SESSION['sem6KTDrop'];} ?>" class="kt" name="sem6KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Seventh Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if(!(isset($_SESSION['sem7percentage']))){echo $sem7percentage;} else {echo $_SESSION['sem7percentage'];} ?>" class="text" name="sem7percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem7KTLive']))){echo $sem7KTLive;} else {echo $_SESSION['sem7KTLive'];} ?>" class="kt" size="5" name="sem7KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem7KTDead']))){echo $sem7KTDead;} else {echo $_SESSION['sem7KTDead'];} ?>" class="kt" name="sem7KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem7KTDrop']))){echo $sem7KTDrop;} else {echo $_SESSION['sem7KTDrop'];} ?>" class="kt" name="sem7KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			 <tr>
				<td colspan="4">
					<table>
					<tr>
						<td align="right" width="160px" style="font-size:14px;font-weight:bold">Eight Semester ==></td>
						<td>Percentage <span class="error">*</span></td>
						<td ><input  value="<?php if(!(isset($_SESSION['sem8percentage']))){echo $sem8percentage;} else {echo $_SESSION['sem8percentage'];} ?>" class="text" name="sem8percentage"  /></td>
					 </tr>
					  <tr>
						<td></td>
						<td >KT's ==></td>
						<td>
						Live&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem8KTLive']))){echo $sem8KTLive;} else {echo $_SESSION['sem8KTLive'];} ?>" class="kt" size="5" name="sem8KTLive"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem8KTDead']))){echo $sem8KTDead;} else {echo $_SESSION['sem8KTDead'];} ?>" class="kt" name="sem8KTDead"  />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dropped if any&nbsp;&nbsp;<input  value="<?php if(!(isset($_SESSION['sem8KTDrop']))){echo $sem8KTDrop;} else {echo $_SESSION['sem8KTDrop'];} ?>" class="kt" name="sem8KTDrop"  />
						</td>
					  </tr>
					</table>
				</td>
			 </tr>
			  <tr >
                <td  style="font-size:14px;font-weight:bold">Resume</td>
				<td colspan="3"><input class="text" type="text" value="<?php if(!(isset($_SESSION['resume'])))
				{
					echo $resume;
				}
				else {echo $_SESSION['resume'];} ?>" name="resume" />
                <input type="file" class="select" style="background:white" name="changeresume"  />
				</td>
			</tr>
			 <tr>
				<td colspan="4"></td>
			 </tr>
			 <tr>
				<td colspan="4"><input type="submit" value="Update Profile"  class="button" /></td>
			 </tr>
			  
		   </table>
          </form>
		  </body>
</html>
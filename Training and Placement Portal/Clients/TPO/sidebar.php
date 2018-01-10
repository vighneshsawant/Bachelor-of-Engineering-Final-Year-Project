<div class="gadget">
		  <ul class="sb_menu">
              <li class="active"><a href="frmMyProfile.php"><?php echo $_SESSION['NAME'];?></a></li>
            </ul>
            <a href="">
			<img src="
			<?php 
require "../../config.php";
				$result = mysql_query("Select * from tbl_company where ID = '$_SESSION[ID]'");
				$row=mysql_fetch_array($result);
					if(($row['Photo']<>"") || ($row['Photo']<>null))
					{echo "Data/".$row['Photo'];}
					else
					{ echo "../../images/company.jpg";}
								
			?>" width="140" height="140" style="padding:0;margin:0"/>
			</a>
            <div class="clr"></div>
           
          </div>
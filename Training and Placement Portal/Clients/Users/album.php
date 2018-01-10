<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />    
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/easypaginate.js"></script>
	<script type="text/javascript">
	
jQuery(function($){
	
	$('ul#items').easyPaginate({
		step:3
	});
	
});    
    
    </script>
    
<style>

/* HTML elements  */		

	html,body{margin:0;padding:0;}
	h1, h2, h3, h4, h5, h6{
		font-weight:normal;
		margin:0;
		line-height:1em;
		}	
	h1{font-size:2em;margin-bottom:.5em;}	
	h2{font-size:1.75em;margin-bottom:.5142em;padding-top:.2em;}	
	h3{font-size:1.5em;margin-bottom:.7em;padding-top:.3em;}
	h4{font-size:1.25em;margin-bottom:.6em;}
	h5,h6{font-size:1em;margin-bottom:.5em;font-weight:bold;}
	
	p, blockquote, ul, ol, dl, form, table, pre{line-height:inherit;margin:0 0 1.5em 0;}
	ul, ol, dl{padding:0;}
	ul ul, ul ol, ol ol, ol ul, dd{margin:0;}
	li{margin:0 0 0 2em;padding:0;display:list-item;list-style-position:outside;}	
	blockquote, dd{padding:0 0 0 2em;}
	pre, code, samp, kbd, var{font:100% mono-space,monospace;}
	pre{overflow:auto;}
	abbr, acronym{
		text-transform:uppercase;
		border-bottom:1px dotted #000;
		letter-spacing:1px;
		}
	abbr[title], acronym[title]{cursor:help;}
	small{font-size:.9em;}
	sup, sub{font-size:.8em;}
	em, cite, q{font-style:italic;}
	img{border:none;}			
	hr{display:none;}	
	table{width:100%;border-collapse:collapse;}
	th,caption{text-align:left;}
	form div{margin:.5em 0;clear:both;}
	label{display:block;}
	fieldset{margin:0;padding:0;border:none;}
	legend{font-weight:bold;}
	input[type="radio"],input[type="checkbox"], .radio, .checkbox{margin:0 .25em 0 0;}

/* //  HTML elements */	

/* base */
	
	body, table, input, textarea, select, li, button{
		font:1em Helvetica, Arial, Sans-Serif;
		line-height:1.5em;
		color:#333;
		}		
	body{
		font-size:12px;
		background:#fff;
		margin:0;
		padding:20px;		
		}	
	a, a:visited{
		text-decoration:none;
		color:#06C;
		}
	a:hover{color:#999;}

/* base */

/* content */

	#container{	
		margin:0 auto;
		width:700px;
		text-align:left;
		position:relative;
		padding:2em 0;
		}
		
	ul#items{		
		margin:1em 0;
		width:auto;
		height:200px;
		overflow:hidden;
		}
	ul#items li{
		list-style:none;
		float:left;
		height:200px;
		overflow:hidden;
		margin:0 4px;
		background:#DBDAE0;
		color:#fff;
		text-align:center;
		-moz-border-radius:5px;
		-webkit-border-radius:5px;
		border-radius:5px;
		-moz-box-shadow:0 1px 1px #777;
		-webkit-box-shadow:0 1px 1px #777;
		box-shadow:0 1px 1px #777;
		color:#555;
		}
	ul#items li:hover{color:#333;}
	ul#items li .image{
		margin:10px 10px 10px 10px;
		width:200px;
		height:140px;
		overflow:hidden;
		border:2px solid #fff;
		-moz-box-shadow:0 1px 1px #bbb;
		-webkit-box-shadow:0 1px 1px #bbb;
		box-shadow:0 1px 1px #bbb;
		}	
	ul#items h3{text-transform:uppercase;font-size:14px;font-weight:bold;margin:.25em 0;text-shadow:#f1f1f1 0 1px 0;}	
	ul#items .info{color:#999;text-shadow:#f1f1f1 0 1px 0;}	
	ol#pagination{position:relative;text-align:left;}
	ol#pagination li{
		display:inline-block;
		width:16px;
		height:16px;
		background:url(images/bg_buttons.png) no-repeat 0 0;
		text-align:left;
		text-indent:-8000px;
		list-style:none;
		cursor:pointer;
		margin:0 2px;
		}
	ol#pagination li:hover{background:url(images/bg_buttons.png) no-repeat 0 -16px;}
	ol#pagination li.current{color:#f00;font-weight:bold;background:url(images/bg_buttons.png) no-repeat 0 -32px;}
	ol#pagination li.prev, ol#pagination li.next{
		position:absolute;
		top:-150px;
		}
	ol#pagination li.prev{left:-30px;background:url(images/bg_buttons.png) no-repeat 0 -64px;}
	ol#pagination li.next{right:-30px;background:url(images/bg_buttons.png) no-repeat 0 -48px;}
	
/* // content */

</style>
    
</head>
<body>
<?php require"session_set.php";?>
<div id="container">
<h1>Photo Album of <?php echo $_SESSION['NAME'];?></h1>
<ul id="items">
    <?php
		require"../../config.php";
		
		
		$result=mysql_query("Select * from tbl_album where UserID='$_SESSION[ID]'");
		$count = mysql_num_rows($result);

		if($count < 1)
		{	
			echo "<li><p class=\"image\"><img style=\"padding:0;margin:0\" src=\"../../images/user.png\"  width=\"200px\" height=\"200px\"/></p>
			<p class=\"info\">No photos are added</p></li>";
		}
		else
		{
			echo "<marquee behavior=\"alternate\" border=\"2px solid blue\"  
style=\"border:  5px double #4799dc;\"  loop=\"-1\" direction=\"left\" scrollamount=\"5\">";
			while($row=mysql_fetch_array($result))
			{
				echo "<img style=\"padding:0;margin:0\" border=\"0\" src=\"Data/".$row['Photo']."\" width=\"200px\" height=\"150px\" />";
			}
			echo"</marquee>";
		}
	?>
	
</ul>

</div>

</body>
</html>

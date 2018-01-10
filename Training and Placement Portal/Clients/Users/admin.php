<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
###################
// TinyBB 1.0 - www.TinyBB.net
// Jake Steele 
###################
// Configuration include files
@include("inc/tinybb-settings.php");
?>
<?php if ($user[admin] == "1"){ ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$bbsetting[tinybb_title]"; ?> Administration</title>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script type="text/javascript">
function insertit(myField, myValue) {
if (document.selection) {
myField.focus();
sel = document.selection.createRange();
sel.text = myValue;
} else if (myField.selectionStart || myField.selectionStart == '0') {
var startPos = myField.selectionStart;
var endPos = myField.selectionEnd;
myField.value = myField.value.substring(0, startPos)
+ myValue
+ myField.value.substring(endPos, myField.value.length);
} else {
myField.value += myValue;
}
}
</script>
<?php
         $codes = array(
		'[b]' => '<span style="font-weight:bold">',
		'[B]' => '<span style="font-weight:bold">',
		'[/b]' => '</span>',
		'[/B]' => '</span>',
		'[i]' => '<span style="font-style:italic">',
		'[I]' => '<span style="font-style:italic">',
  		'[/i]' => '</span>',
  		'[/I]' => '</span>',
		'[u]' => '<span style="text-decoration:underline">',
		'[U]' => '<span style="text-decoration:underline">',
  		'[/u]' => '</span>',
  		'[/U]' => '</span>',
  		':)' => '<img src="icons/smile2.png" />',
  		':D' => '<img src="icons/bigsmile.png" />',
  		'(L)' => '<img src="icons/love.png" />',
  		';)' => '<img src="icons/wink.png" />',
  		':@' => '<img src="icons/angry.png" />',
  		':$' => '<img src="icons/blush.png" />',
  		':P' => '<img src="icons/tongue.png" />',
		':sw:' => '<img src="icons/skywalker.png" />',
		':tired:' => '<img src="icons/yawn.png" />',
		':(' => '<img src="icons/frown.png" />',
		'[youtube]' => '<iframe title="YouTube video player" class="youtube-player" type="text/html" width="480" height="390" src="http://www.youtube.com/embed/',
		'[/youtube]' => '" frameborder="0"></iframe>'
		);
		function convertbb($t) { 
			$s = array_keys($GLOBALS['codes']);
 			$t = str_replace($s, $GLOBALS['codes'], $t);
  			return $t;
		}
		function nl2br_limit($string, $num){
   			$dirty = preg_replace('/\r/', '', $string);
			$clean = preg_replace('/\n{4,}/', str_repeat('<br/>', $num), preg_replace('/\r/', '', $dirty));
   			return nl2br($clean);
		}
		?>
<style type="text/css"> 
<!-- 
body  {
	font: 12px Verdana, Arial, Helvetica, sans-serif;
	background: #81B5E9;
	background:  url(images/bg.jpg) top repeat-x;
	background-repeat:repeat-x;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
}
textarea
{
    width:98%;
	
}
.twoColFixLt #container { 
	width: 80%;  /* using 20px less than a full 800px width allows for browser chrome and avoids a horizontal scroll bar */
	background: #FFFFFF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
}
.twoColFixLt #sidebar1 {
	float: left; /* since this element is floated, a width must be given */
	width: 200px; /* the actual width of this div, in standards-compliant browsers, or standards mode in Internet Explorer will include the padding and border in addition to the width */
	background: #fff; /* the background color will be displayed for the length of the content in the column, but no further */
	border-right:1px;
	border-left:0px;
	border-top:0px;
	border-bottom:0px;
	margin-top:5px;
	border-color:#A4A4A4;
	border-style:solid;
	padding: 15px 10px 15px 20px;
}
.twoColFixLt #mainContent { 
	margin: 0 0 0 250px; /* the left margin on this div element creates the column down the left side of the page - no matter how much content the sidebar1 div contains, the column space will remain. You can remove this margin if you want the #mainContent div's text to fill the #sidebar1 space when the content in #sidebar1 ends. */
	padding: 0 20px 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
	min-height:600px;
} 
.fltrt { /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class should be placed on a div or break element and should be the final element before the close of a container that should fully contain a float */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}

body {
	padding-bottom: 0;
	margin-bottom: 0;
}

body, a, td, th, input, textarea, select {
	font-family: Arial;
	font-size: 12px;
	color: #444;
	text-decoration: none;
}
a {
	font-weight: bold;
}
img {	
	border: 0;
}
form {	
	padding: 0;
	margin: 0;
}
table {
	margin-left:auto;
	margin-right:auto;
	width:600px;
}
.box {
	background: #fff;
	padding: 5px;
	margin-bottom: 10px;
}
.box .content {
	padding: 0px 5px 5px 5px;
}
.square {
	padding: 5px;
	margin-bottom: 5px;
}
.square strong {
	font-size: 14px;
}
.square.menu {
	color: #fff;
	margin-bottom: 0px;
	cursor: pointer;
}
.square.title {
	background-color: #eee;
	color: #444;
}
#pmbar {
	margin:5px;
	width:600px;
	text-align:center;
	padding-top:4px;
	padding-bottom:4px;
}
.square.good {
	background-color: #d9ffcf;
	border-color: #ade5a3;
	color: #1b801b;
}
.square.bad {
	background-color: #ffcfcf;
	border-color: #e5a3a3;
	color: #801b1b;
}
input, textarea, select {
	border: 1px #e0e0e0 solid;
	border-bottom-width: 2px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	padding: 5px;
	font-size: 14px;
	font-weight: bold;
}
input:focus {
	border-color: #ccc;
	background-color: #fafafa;
}
input[type=submit], input.button {	
	border: 1px #e0e0e0 solid;
	border-bottom-width: 2px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	padding: 5px;
	font-size: 14px;
	font-weight: bold;
}
input[type=submit], input.submit {	
	border: 1px #e0e0e0 solid;
	border-bottom-width: 2px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	padding: 5px;
	font-size: 14px;
	font-weight: bold;
}
input[type=submit], input.submit:hover {	
	border: 1px #e0e0e0 solid;
	border-bottom-width: 2px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	padding: 5px;
	font-size: 14px;
	font-weight: bold;
}
td.label {
	width: 25%;
	text-align: right;
}
td.field {
	width: 200px;
	text-align: right;
}
.tpaw {
	background-color: #eee;
	color: #333;
	padding:5px;
	border:#f2f2f2 thin solid;
}
.tpow {
	background-color: #f8f8f8;
	color:#333;
	padding:5px;
	border:#f2f2f2 thin solid;
}
.tpow:hover {
	background-color: #f2f2f2;
	color:#222;
	padding:5px;
	border:#eee thin solid;
}
.tpew {
	background-color: #ccc;
	font-size:16px;
	color: #333;
	padding:5px;
	border:#f2f2f2 thin solid;
}
.tpiw {
	background-color: #ccc;
	font-size:16px;
	color: #333;
	padding:5px;
	border:#f2f2f2 thin solid;
}
.read {
	font-weight:normal;
}
.alert {
    color: #ffffff;
    background-color: #1C1C1C;
    background-image: url('icons/alert.png');
    padding:5px;
    margin: 10px 0px;
    padding:15px 10px 15px 50px;
    background-repeat: no-repeat;
    background-position: 10px center;
}

#forum
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:75%;
border-collapse:collapse;
}
#forum td, #forum th 
{
font-size:1em;
border:1px solid #000;
padding:3px 7px 2px 7px;
}
#forum th 
{
font-size:13px;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-image:url('style/thread_header.png');
color:#ffffff;
}
#forum tr.alt td
{
color:#000000;
background-color:#EAF2D3;
}

.admin {
font-size:12px;
text-align:left;
padding:10px;
background-image:url('style/thread_header.png');
color:#ffffff;
}
.admin {
color: #ffffff;
background-image:url('style/thread_header.png');
}

.avatar {
  max-width: 25px;
  max-height: 25px;
}

.warning {
    color: #ffffff;
    background-color: #1C1C1C;
    background-image: url('icons/alert.png');
    padding:5px;
    margin: 10px 0px;
    padding:15px 10px 15px 50px;
    background-repeat: no-repeat;
    background-position: 10px center;
}

.error {
    padding:10px;
    color: #D8000C;
    background-color: #FFBABA;
    background-image: url('error.png');
}

.success {
    color: #4F8A10;
    padding:10px;
    background-color: #DFF2BF;
    background-image:url('success.png');
}
--> 
</style>
<!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
.twoColFixLt #sidebar1 { width: 230px; }
</style>
<![endif]--><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColFixLt #sidebar1 { padding-top: 30px; }
.twoColFixLt #mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
</head>

<body class="twoColFixLt">
<p>&nbsp;</p>
<div id="container">
<div class="admin"><strong><?php echo "$bbsetting[tinybb_title]"; ?> Administration Panel</strong> <a href="index.php?page=logout"><span style="float:right; color:#ffffff; font-weight:bold;">Logout</span></a></div>
  <div id="sidebar1">
    <?php $list = $_GET['list']; ?>
    <h3>Manage Forum</h3>
    <p><img src="icons/none.gif" alt="none" /> <a href="index.php">Forum Home</a><br />
    <img src="icons/none.gif" alt="none" /> <a href="admin.php">Admin Home</a>    </p>
    
        <div id="CollapsiblePanel2" class="CollapsiblePanel" align="center">
      <div class="CollapsiblePanelTab" tabindex="0"><img src="admin/settings.png" border="0" /> Forums </div>
      <div class="CollapsiblePanelContent">
        <p>
        <a href="?list=settings">Forum Settings</a><br />
        <a href="?list=categories">Categories</a><br />
        <a href="?list=modcp">ModCP Settings</a><br />
        <a href="?list=stats">Statistics</a><br /><br />
        <br />
              </p>
      </div>
    </div>


    <div id="CollapsiblePanel1" class="CollapsiblePanel" align="center">
      <div class="CollapsiblePanelTab" tabindex="0"><img src="admin/settings.png" border="0" /> Config </div>
      <div class="CollapsiblePanelContent">

        <p>
        <a href="?list=accounts">List Accounts</a><br />
          <a href="?list=addaccount">Add New Account</a><br />
          <a href="?list=deleteaccount">Delete Account</a><br />
        <a href="?list=ipsearch">Search IP's</a><br />
        <a href="?list=awards">Profile Awards</a><br /><br />
              </p>
      </div>
    </div>
   
    <p>&nbsp;</p>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
         <?php if ($_GET[tinybb] == "version"){ ?>
         <h2><img src="admin/tinybb.png" border="0"> Version Information</h2>
         <hr>
         Your bulletin board is running TinyBB 1.4 BETA
         <br /><br />
         1.4 BETA includes many awesome updates such as SFC (Simple Forum Categories) released by Jake, the moderation panel from Tyler & also forum settings released by TinyBB.
         <br /><br />
         <strong>Please understand</strong> this software released is classed as BETA, this basically means we've finished most of the script but we're only releasing it for the community to test and the script isn't fully completed.
         Therefore, several bugs may be found but we hope you do not encounter any bugs.
         <?php } elseif($list == "modcp"){ ?>
         <h2><img src="icons/idea.gif" border="0"> Moderator Control Panel Settings</h2>
         <?php if ($_GET['do'] == "update"){ ?>
         <?php
          $message = addslashes(htmlspecialchars($_POST[notice]));
          $rules = addslashes(htmlspecialchars($_POST[rules]));
          $update = mysql_query("UPDATE `admin` SET
          `admin_message` = '$message',
          `rules` = '$rules'
          ") or die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=modcp&m=2\">");
          ?>
          <?php die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=modcp&m=1\">"); ?>
         <?php } else { ?>
         <?php
         $notes = MYSQL_QUERY("SELECT * FROM `admin`");
         $notes = mysql_fetch_array($notes);
         ?>
        <?php 
        if ($_GET['m'] == "1"){ echo "<br /><div class='success'>Moderator Settings updated.</div>"; }
        elseif ($_GET['m'] == "2"){ echo "<br /><div class='error'>The query couldn't complete, there was an error.</div>"; }
        ?>
        <br /><br />
        <form action="admin.php?list=modcp&do=update" method="POST">
        Administrative Message (Displayed on moderator home)<br />
        <textarea name="notice" rows="10" cols="10"><?php echo "$notes[admin_message]"; ?></textarea>
        <br /><br />
        Rules & Information for moderators (Displayed on rules page)<br />
        <textarea name="rules" rows="10" cols="10"><?php echo "$notes[rules]"; ?></textarea>
        <br /><br />
        <input type="submit" value="Update">
        </form>

         <?php } ?>

         <?php } elseif($list == "edit"){ ?>
         <?php if ($_GET['m'] == "1"){ echo "<br /><div class='success'>Thread successfully updated.</div>"; }
         elseif ($_GET['m'] == "2"){ echo "<br /><div class='error'>There was an SQL error while attempting to update the thread.</div>"; }
         elseif ($_GET['m'] == "3"){ echo "<br /><div class='error'>Fields were left blank, unable to process the query without disrupting current threads.</div>"; } ?>
         <?php if ($_GET['type'] == "thread"){ echo "<h2><img src=\"icons/idea.gif\" border=\"0\"> Edit Thread</h2>";
         ?>
         <?php
         $thread = $_GET['thread'];
         $sql = MYSQL_QUERY("SELECT * FROM `tinybb_threads` WHERE `thread_key` = '$thread'");
         $setting = mysql_fetch_array($sql);
         ?>
         <?php if ($_GET['do'] == "update"){ ?>

         <?php
          $title = addslashes(htmlspecialchars($_POST[title]));
          $author = addslashes(htmlspecialchars($_POST[author]));
          $content = addslashes(htmlspecialchars($_POST[content]));
          $cat_id = addslashes(htmlspecialchars($_POST[category]));
          $id = $_POST['id'];
          if ((($title == "") || ($author == "") || ($content == ""))){ die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=edit&m=3\">"); }
          $update = mysql_query("UPDATE `tinybb_threads` SET
          `thread_title` = '$title',
          `cat_id` = '$cat_id',
          `thread_author` = '$author',
          `thread_content` = '$content'

          WHERE `thread_key` = '$id' ") or die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=edit&m=2\">");
          ?>
          <?php die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=edit&type=thread&thread=$_POST[id]&m=1\">"); ?>
         
         <?php } else { ?>
         <form action="admin.php?list=edit&type=thread&do=update" method="POST">
         <input type="hidden" name="id" value="<?php echo "$_GET[thread]"; ?>">
         Thread Title<br />
         <input type="text" name="title" value="<?php echo "$setting[thread_title]"; ?>" size="50">
         <br /><br />
         Thread Author<br />
         <input type="text" name="author" value="<?php echo "$setting[thread_author]"; ?>" size="50">
         <br /><br />
         Thread Category<br />
         <select name='category'>
         <option value="<?php echo "$setting[cat_id]"; ?>"><strong><i>No Change</i></strong>
         <?php
         $query5 = "SELECT * FROM tinybb_categories";
         $result5 = mysql_query($query5);
         while($row5 = mysql_fetch_array($result5, MYSQL_ASSOC)){
         echo "<option value='$row5[cat_id]'>$row5[cat_title]";
         }
         ?>
         </select>
         <br /><br />
         Thread Content<br />
         <textarea name="content" rows="10" cols="10"><?php echo "$setting[thread_content]"; ?></textarea>
         <br /><br />
         <input type="submit" value="Update Thread">
         </form>
         <?php
         } } elseif ($_GET['type'] == "reply"){  echo "<h2><img src=\"icons/idea.gif\" border=\"0\"> Edit Reply</h2>"; ?>
         
         <?php
         $thread = $_GET['reply'];
         $sql = MYSQL_QUERY("SELECT * FROM `tinybb_replies` WHERE `reply_key` = '$thread'");
         $setting = mysql_fetch_array($sql);
         ?>
         
                  <?php if ($_GET['do'] == "update"){ ?>
         
         <?php
          $author2 = addslashes(htmlspecialchars($_POST[author]));
          $content2 = addslashes(htmlspecialchars($_POST[content]));
          $id = $_POST['id'];
          $update = mysql_query("UPDATE `tinybb_replies` SET
          `reply_author` = '$author2',
          `reply_content` = '$content2'

          WHERE `reply_key` = '$id'") or die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=edit&m=2\">");
          ?>
          <?php die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=edit&type=reply&reply=$_POST[id]&m=1\">"); ?>
         
         <?php } else { ?>
         <form action="admin.php?list=edit&type=reply&do=update" method="POST">
         <input type="hidden" name="id" value="<?php echo "$_GET[reply]"; ?>">
         Reply Author<br />
         <input type="text" name="author" value="<?php echo "$setting[reply_author]"; ?>" size="50">
         <br /><br />
         Thread Content<br />
         <textarea name="content" rows="10" cols="10"><?php echo "$setting[reply_content]"; ?></textarea>
         <br /><br />
         <input type="submit" value="Update Thread">
         </form>



         <?php } }
         ?>

         <?php } elseif($list == "settings"){ ?>
         <?php if ($_GET['do'] == "update"){ ?>
         <h2><img src="icons/idea.gif" border="0"> Updating Settings</h2>
         <?php
          $title = addslashes(htmlspecialchars($_POST[bbtitle]));
          $guests = addslashes(htmlspecialchars($_POST[guests]));
          $categories = addslashes(htmlspecialchars($_POST[categories]));
          $maintenance = addslashes(htmlspecialchars($_POST[maintenance]));
          $stats = addslashes(htmlspecialchars($_POST[stats]));
          $maintenance_message = addslashes(htmlspecialchars($_POST[maintenance_message]));
          $registration = addslashes(htmlspecialchars($_POST[register]));
          if ((((($title == "") || ($guests == "") || ($categories == "") || ($maintenance == "") || ($registration == ""))))){ die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=settings&m=3\">"); }
          $update = mysql_query("UPDATE `tinybb_settings` SET
          `tinybb_title` = '$title',
          `tinybb_guest_access` = '$guests',
          `tinybb_stats` = '$stats',
          `tinybb_maintenance` = '$maintenance',
          `tinybb_maintenance_message` = '$maintenance_message',
          `tinybb_categories` = '$categories',
          `tinybb_registration` = '$registration'
          
          ") or die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=settings&m=2\">");
          ?>
          <?php echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=settings&m=1\">"; ?>
         <?php } else { ?>
         <?php
         $sql = MYSQL_QUERY("SELECT * FROM `tinybb_settings`");
         $setting = mysql_fetch_array($sql);
         ?>
         <?php if ($_GET['m'] == "1"){ echo "<br /><div class='success'>Forum settings successfully updated.</div>"; }
         elseif ($_GET['m'] == "2"){ echo "<br /><div class='error'>There was an SQL error while attempting to update the forum settings.</div>"; }
         elseif ($_GET['m'] == "3"){ echo "<br /><div class='error'>Fields were left blank, unable to process the query without disrupting current settings.</div>"; } ?>
         <h2><img src="icons/idea.gif" border="0"> General Settings</h2>
         <form action="?list=settings&do=update" method="POST">
         <strong>Bulletin Board Title</strong><br />
         <input type="text" name="bbtitle" value="<?php echo "$setting[tinybb_title]"; ?>" size="50" autocomplete="off">
         <br /><br />
         <strong>Guests can access the forum?</strong><br />
         <input type="radio" name="guests" value="1" <?php if ($setting[tinybb_guest_access] == "1"){ echo "CHECKED"; } ?>/> Yes<br />
         <input type="radio" name="guests" value="0" <?php if (!$setting[tinybb_guest_access] == "1"){ echo "CHECKED"; } ?>/> No (Must login)
         <br /><br />
         <h2><img src="icons/idea.gif" border="0"> Member Settings</h2>
         <strong>Registration</strong> (If disabled, the register page will show a disabled message)<br />
         <input type="radio" name="register" value="1" <?php if ($setting[tinybb_registration] == "1"){ echo "CHECKED"; } ?>/> Enabled<br />
         <input type="radio" name="register" value="0" <?php if (!$setting[tinybb_registration] == "1"){ echo "CHECKED"; } ?>/> Disabled
         <br /><br />
         <h2><img src="icons/schat.gif" border="0"> Category Settings</h2>
         <strong>Categories Enabled?</strong> (If disabled, the forum home will be similar to the 1.0 - 1.3 series)<br />
         <input type="radio" name="categories" value="1" <?php if ($setting[tinybb_categories] == "1"){ echo "CHECKED"; } ?>/> Enabled<br />
         <input type="radio" name="categories" value="0" <?php if (!$setting[tinybb_categories] == "1"){ echo "CHECKED"; } ?>/> Disabled
         <br /><br />
         <h2><img src="icons/stats.gif" border="0"> Forum index Settings</h2>
         <strong>Enable Statistics?</strong><br />
         <input type="radio" name="stats" value="1" <?php if ($setting[tinybb_stats] == "1"){ echo "CHECKED"; } ?>/> Enabled<br />
         <input type="radio" name="stats" value="0" <?php if (!$setting[tinybb_stats] == "1"){ echo "CHECKED"; } ?>/> Disabled
         <br /><br />
         <h2><img src="icons/reports.png" border="0"> Maintenance Settings</h2>
         <strong>Board Setting</strong> (If disabled the maintenance message will be shown to all users not logged in)<br />
         <input type="radio" name="maintenance" value="1" <?php if ($setting[tinybb_maintenance] == "1"){ echo "CHECKED"; } ?>/> Enabled<br />
         <input type="radio" name="maintenance" value="0" <?php if (!$setting[tinybb_maintenance] == "1"){ echo "CHECKED"; } ?>/> Disabled
         <br /><br />
         <strong>Maintenance Message</strong><br />
         <input type="text" name="maintenance_message" size="50" autocomplete="off" value="<?php echo "$setting[tinybb_maintenance_message]"; ?>">
         <br /><br />
         <input type="submit" value="Save Settings">
         </form>

         <?php } } elseif ($list == "categories"){ ?>
         <?php if ($_GET['do'] == "delete"){ ?>
         <?php
         $catid = clean($_GET[cat]);
         $sql = MYSQL_QUERY("SELECT * FROM `tinybb_categories` WHERE `cat_id` = '$catid'");
         $checker = mysql_fetch_array($sql);
         ?>
         <h2><img src="icons/idea.gif" border="0"> Delete <?php echo "$checker[cat_title]"; ?></h2>
         <div class="alert" style="font-size:13px; font-weight:bold;">Please use this feature carefully, deleting a category is permanent!</div>

         <?php if (!$_GET['con'] == "1"){ ?>
         <?php
         $check_category = mysql_query("SELECT * FROM `tinybb_categories` WHERE `cat_id` = '$catid'") or die(mysql_error());
         if(mysql_num_rows($check_category) == 0){
         die("<h2><img src='icons/idea.gif' border='0'> Error</h2>The category you're attempting to delete doesn't exist...");
         }
         ?>
         <br />
         <form action="?list=categories&do=delete&con=1" method="POST">
         <input type="hidden" name="idoc" value="<?php echo "$_GET[cat]"; ?>">
         Confirm this deletion<br />
         <select name="confirm">
         <option value="0">Do not delete <?php echo "$checker[cat_title]"; ?>
         <option value="1">Delete <?php echo "$checker[cat_title]"; ?>
         </select>
         <br /><br />
         Move existing threads to (Enter ID of category)<br />
         <input type="text" name="idtmt" size="50">
         <br /><br />
         <input type="submit" value="Delete Category">
         </form>
         
         <?php } else { ?>
         
         <?php
         $id = addslashes(htmlspecialchars($_POST[idoc]));
         $confirm = addslashes(htmlspecialchars($_POST[confirm]));
         $idtmt = addslashes(htmlspecialchars($_POST[idtmt]));
         if (!$confirm == "1"){ die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=categories&m=9\">"); }
         if (empty($idtmt)){ die("You must choose a category to move existing threads to."); }
         $check_category = mysql_query("SELECT * FROM `tinybb_categories` WHERE `cat_id` = '$_POST[idtmt]'") or die(mysql_error());
         if(mysql_num_rows($check_category) == 0){
         die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=categories&m=8\">");
         }
         ?>
         
         <?php mysql_query("DELETE FROM tinybb_categories WHERE cat_id='$id'") or die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=categories&m=7\">"); ?>
         <?php $update = mysql_query("UPDATE `tinybb_threads` SET `cat_id` = '$idtmt' WHERE `cat_id` = '$id'") or die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=categories&m=6\">"); ?>
         <?php die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=categories&m=10\">"); ?>
         <?php } ?>
         <?php } elseif ($_GET['do'] == "settings"){ ?>
         <h2><img src="icons/idea.gif" border="0"> Category Settings</h2>
         <?php if ($_GET['s'] == "2"){ ?>
         <?php
         $amount = addslashes(htmlspecialchars($_POST[number]));
         $update = mysql_query("UPDATE `tinybb_settings` SET `tinybb_list_amount` = '$amount'") or die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=categories&m=5\">");
         ?>
         <?php die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=categories&m=4\">"); ?>
         <?php } else { ?>
         <?php
         $sql = MYSQL_QUERY("SELECT * FROM `tinybb_settings`");
         $setting = mysql_fetch_array($sql);
         ?>
         To disable categories, please edit your <a href="admin.php?list=settings">bulletin board settings</a>.<br /><br />
         <form action="?list=categories&do=settings&s=2" method="POST">
         How many threads to show per page<br />
         <input type="text" name="number" value="<?php echo "$setting[tinybb_list_amount]"; ?>" size="50" autocomplete="off">
         <br /><br />
         <input type="submit" value="Save Settings">
         </form>
         <?php } } elseif ($_GET['do'] == "add"){ ?>
         <h2><img src="icons/idea.gif" border="0"> Add Category</h2>
         <?php if ($_GET['s'] == "2"){ ?>

         <?php
                $title = addslashes(htmlspecialchars($_POST[title]));
                $desc = addslashes(htmlspecialchars($_POST[desc]));
                $icon = addslashes(htmlspecialchars($_POST[icon]));
                $perm = addslashes(htmlspecialchars($_POST[perm]));
                $order = addslashes(htmlspecialchars($_POST[order]));
                if ((($title == null) || ($perm == null) || ($order == null))) { die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=categories&m=2\">"); } else {
                $sql = "INSERT INTO tinybb_categories
			(
				cat_title,
				cat_desc,
				cat_icon,
				cat_admin,
				cat_order

			)
			VALUES 
			(
				'$title',
				'$desc',
				'$icon',
				'$perm',
				'$order'
			)";

		mysql_query($sql) or die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=categories&m=3\">");
		              }
         ?>
         
        <?php die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=categories&m=1\">"); ?>
         <?php } else { ?>
         <form action="?list=categories&do=add&s=2" method="POST">
         Category Title<br />
         <input type="text" name="title" size="50">
         <br /><br />
         Category Description (45 Characters Max)<br />
         <input type="text" name="desc" size="50" maxlength="45">
         <br /><br />
         Category Icon (Leave blank for default)<br />
         <input type="text" name="icon" size="50">
         <br /><br />
         Permission to create threads<br />
         <input type="radio" name="perm" value="1" /> Staff<br />
         <input type="radio" name="perm" value="0" /> All
         <br /><br />
         Category Order (Enter numbers only, categorys are decending, 1 at the top, 100 at the bottom ect..)<br />
         <input type="text" name="order" size="50">
         <br /><br />
         <input type="submit" value="Add Category">
         </form>
         <?php } } elseif ($_GET['do'] == "edit"){ ?>
         <?php
         $catid = clean($_GET[cat]);
         $sql = MYSQL_QUERY("SELECT * FROM `tinybb_categories` WHERE `cat_id` = '$catid'");
         $checker = mysql_fetch_array($sql);
         ?>
         <h2><img src="icons/idea.gif" border="0"> Editing <?php echo "$checker[cat_title]"; ?></h2>
         <?php if ($_GET['s'] == "2"){ ?>
         <?php
                $title = addslashes(htmlspecialchars($_POST[title]));
                $desc = addslashes(htmlspecialchars($_POST[desc]));
                $icon = addslashes(htmlspecialchars($_POST[icon]));
                $perm = addslashes(htmlspecialchars($_POST[perm]));
                $order = addslashes(htmlspecialchars($_POST[order]));
          $update = mysql_query("UPDATE `tinybb_categories` SET `cat_title` = '$title', `cat_desc` = '$desc', `cat_icon` = '$icon', `cat_admin` = '$perm', `cat_order` = '$order' WHERE `cat_id` = '$_POST[idoc]'") or die("Could not update category, MySQL error, query could not complete.");
          ?>
          <?php die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=categories&m=4\">"); ?>
         <?php } else { ?>
         <?php
         $check_category = mysql_query("SELECT * FROM `tinybb_categories` WHERE `cat_id` = '$catid'") or die(mysql_error());
         if(mysql_num_rows($check_category) == 0){
         die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=categories&m=11\">");
         }
         ?>
         <form action="?list=categories&do=edit&s=2" method="POST">
         <input type="hidden" name="idoc" value="<?php echo "$_GET[cat]"; ?>">
         Category Title<br />
         <input type="text" name="title" size="50" value="<?php echo "$checker[cat_title]"; ?>">
         <br /><br />
         Category Description (45 Characters Max)<br />
         <input type="text" name="desc" size="50" maxlength="45" value="<?php echo "$checker[cat_desc]"; ?>">
         <br /><br />
         Category Icon (Leave blank for default)<br />
         <input type="text" name="icon" size="50" value="<?php echo "$checker[cat_icon]"; ?>">
         <br /><br />
         Permission to create threads<br />
         <input type="radio" name="perm" value="1" <?php if ($checker[cat_admin] == "1"){ echo "CHECKED"; } ?>/> Staff<br />
         <input type="radio" name="perm" value="0" <?php if (!$checker[cat_admin] == "1"){ echo "CHECKED"; } ?>/> All
         <br /><br />
         Category Order (Enter numbers only, categorys are decending, 1 at the top, 100 at the bottom ect..)<br />
         <input type="text" name="order" size="50" value="<?php echo "$checker[cat_order]"; ?>">
         <br /><br />
         <input type="submit" value="Edit Category">
         </form>
         <?php } } else { ?>
         <h2><img src="icons/idea.gif" border="0"> Categories</h2>
         <a href="admin.php?list=categories&do=add">Add Category</a> | <a href="admin.php?list=categories&do=settings">Settings</a>
         <hr>
         <?php if ($_GET['m'] == "1"){ echo "<br /><div class='success'>Success: Category successfully added.</div>"; }
         elseif ($_GET['m'] == "2"){ echo "<br /><div class='error'>Permission Error: Field left blank!</div>"; }
         elseif ($_GET['m'] == "3"){ echo "<br /><div class='error'>MySQL Query Error: Query could not complete!</div>"; }
         elseif ($_GET['m'] == "4"){ echo "<br /><div class='success'>Success: Category settings updated.</div>"; }
         elseif ($_GET['m'] == "5"){ echo "<br /><div class='error'>MySQL Query Error: Error updating category settings!</div>"; }
         elseif ($_GET['m'] == "6"){ echo "<br /><div class='error'>MySQL Query Error: Couldn't update location of threads!</div>"; }
         elseif ($_GET['m'] == "7"){ echo "<br /><div class='error'>MySQL Query Error: Couldn't delete the category!</div>"; }
         elseif ($_GET['m'] == "8"){ echo "<br /><div class='error'>MySQL Query Error: Cannot move threads to an unknown category!</div>"; }
         elseif ($_GET['m'] == "9"){ echo "<br /><div class='error'>Permission Error: Deletion must be confirmed!</div>"; }
         elseif ($_GET['m'] == "10"){ echo "<br /><div class='success'>Success: Category deleted.</div>"; }
         elseif ($_GET['m'] == "11"){ echo "<br /><div class='error'>MySQL Query Error: The category you're attempting to edit doesn't exist!</div>"; }
         ?>
         <br />
         <?php include("admin/categories.php"); ?>

         <?php } } elseif ($list == "stats"){ ?>
          <h2><img src="icons/idea.gif" /> Forum Statistics</h2>
          <hr />
         <?php
         $sql = "SELECT * FROM tinybb_threads ORDER BY aid DESC LIMIT 1";
         $res = mysql_query($sql) or die (mysql_error());
         while($r=mysql_fetch_assoc($res)){
         echo "<strong>Latest Thread:</strong><a href=\"index.php?page=thread&post=".$r['thread_key']."\"> <span style='font-size:14px;'>".$r['thread_title']."</span></a><br>";
         }
         ?>
         <?php
         $sql = "SELECT * FROM tinybb_replies ORDER BY aid DESC LIMIT 1";
         $res = mysql_query($sql) or die (mysql_error());
         while($r=mysql_fetch_assoc($res)){
         echo "<strong>Latest Reply:</strong><a href=\"index.php?page=thread&post=".$r['thread_key']."#last\"> <span style='font-size:14px;'>Here</span></a><br>";
         }
         ?>
         <?php
         $sql = "SELECT * FROM members ORDER BY id DESC LIMIT 1";
         $res = mysql_query($sql) or die (mysql_error());
         while($r=mysql_fetch_assoc($res)){
         echo "<strong>Newest Member:</strong> <a href=\"index.php?page=profile&id=".$r['username']."\"> <span style='font-size:14px;'>".$r['username']."</span></a><br>";
         }
         ?>  
         <?php
		 $date = date("d-m-Y"); 
		 $result = mysql_query("SELECT * FROM private");
         $pm = mysql_num_rows($result);
		 $result2 = mysql_query("SELECT * FROM tinybb_threads");
         $threads = mysql_num_rows($result2);
		 $result3 = mysql_query("SELECT * FROM tinybb_replies");
         $replies = mysql_num_rows($result3);
		 $result4 = mysql_query("SELECT * FROM members");
         $users = mysql_num_rows($result4);
		 $result5 = mysql_query("SELECT * FROM members WHERE date='$date'");
         $today = mysql_num_rows($result5);
		 echo "<br /><h2><img src='admin/mail.png' border='0'>  Private Message System</h2>$pm Private messages sent/received"; 
		 echo "<br /><h2><img src='admin/threads.png' border='0'>  Threads/Replies</h2>$threads Threads created<br />$replies Replies created";
		 echo "<br /><h2><img src='admin/users.png' border='0'>  Accounts</h2>$users Accounts Created<br />$today Accounts created today";
		 ?>
         <?php } elseif ($list == "awards"){ ?>
         <h3><img src="icons/user.gif" /> Awards</h3>
         <?php if ($_GET['do'] == "delete"){ ?>
         <?php mysql_query("DELETE FROM awards WHERE id='$_GET[id]'") or die("Couldn't delete the award, MySQL error."); ?>
         Award successfully deleted! <a href="?list=awards">Back to awards list</a>.
         <?php } elseif ($_GET['do'] == "add") { ?>
         
         <a href="?list=awards">Cancel</a><br /><br />
         <form action="?list=awards&do=savenew" method="POST">
         Award Image URL<br />
         <input type="text" name="image" size="50"><br /><br />
         Give Award To (Member name)<br />
         <input type="text" name="user" size="50"><br /><br />
         Reason For Award<br />
         <input type="text" name="desc" size="50">
         <br /><br />
         <input type="submit" value="Add Award">
         </form>
         <?php } elseif ($_GET['do'] == "savenew") { ?>
         
                <?php
                $user = addslashes(htmlspecialchars($_POST[user]));
                $image = addslashes(htmlspecialchars($_POST[image]));
                $desc = addslashes(htmlspecialchars($_POST[desc]));  #
                if (($user == null) || ($image == null)) { die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=awards&m=3\">"); }
                $sql = "INSERT INTO awards
			(
				award_user,
				award_img,
				award_desc

			)
			VALUES 
			(
				'$user',
				'$image',
				'$desc'
			)";

		mysql_query($sql) or die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=awards&m=2\">");
		?>
		
		<?php die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=awards&m=1\">"); ?>


         <?php } else { ?>
         <a href="?list=awards&do=add">Give New Award</a><br />
          <hr />
          <?php if ($_GET['m'] == "1"){ echo "<br /><div class='success'>Award successfully given.</div>"; }
         elseif ($_GET['m'] == "2"){ echo "<br /><div class='error'>There was an SQL error while attempting to add the award.</div>"; }
         elseif ($_GET['m'] == "3"){ echo "<br /><div class='error'>Fields were left blank, unable to process the query without disrupting current awards.</div>"; } ?> 
         <br />
          <table id="forum">
         <th>Award Image</th>
         <th>Given to</th>
         <th>Options</th>
         <?php
         // The below is calling data from the "data"base and listing it here in an array.
         $result = mysql_query("SELECT * FROM awards");
    while($row = mysql_fetch_array($result)) {
         ?>
         <tr>
         <td align="center"><img class="avatar" src="<?php echo "$row[award_img]"; ?>" border="0"></td>
         <td align="center"><a href="index.php?page=profile&id=<?php echo "$row[award_user]"; ?>"><?php echo "$row[award_user]"; ?></a></td>
         <td align="center"><a href="?list=awards&do=delete&id=<?php echo "$row[id]"; ?>"><img src="icons/delete.gif"></a></td>
         </tr>
         <?php } ?>
         </table>
         <!-- Developers Awards Mod End -->
         <!-- --------------------------- -->

         <?php } ?>
  
         <?php } elseif ($_GET['news'] == "delete"){ ?>
          <h3><img src="icons/news.gif" /> Deleting Article</h3>
          <hr />       
         <?php mysql_query("DELETE FROM tinybb_news WHERE news_id='$_GET[id]'") or die(mysql_error()); ?>
         Article deleted.
         <?php } elseif ($_GET['news'] == "edit"){ ?>
         <?php if ($_GET['do'] == "submit"){ ?>
          <h3><img src="icons/news.gif" /> Article Saved</h3>
          <hr />
          <?php
          $title = addslashes(htmlspecialchars($_POST[title]));
          $content = addslashes(htmlspecialchars($_POST[content]));
          $update = mysql_query("UPDATE `tinybb_news` SET `news_content` = '$content', `news_title` = '$title' WHERE `news_id` = '$_POST[id]'");
          echo "The article has been updated.";
          ?>        
         <?php } else { ?>
         <?php
         $sql2 = "SELECT * FROM tinybb_news WHERE news_id='$_GET[id]' LIMIT 1";
         $tt = mysql_query($sql2) or die (mysql_error());
         while($p=mysql_fetch_assoc($tt)){ ?>
          <h3><img src="icons/news.gif" /> Editing <?php echo "$p[news_title]"; ?></h3>
          <hr />
         <form action="?news=edit&do=submit" method="POST" name="compose">
         <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
         Article Title<br />
         <input type="text" name="title" size="50" value="<?php echo "$p[news_title]"; ?>" /><br /><br />
         Content<br />
         <textarea cols=70 rows=5 maxlength='1000' name='content'><?php echo "$p[news_content]"; ?></textarea><br />         
         <img src="icons/smile2.png" onclick="insertit(document.compose.content, ':)');" />
         <img src="icons/bigsmile.png" onclick="insertit(document.compose.content, ':D');" />
         <img src="icons/frown.png" onclick="insertit(document.compose.content, ':(');" />
         <img src="icons/wink.png" onclick="insertit(document.compose.content, ';)');" />
         <img src="icons/blush.png" onclick="insertit(document.compose.content, ':$');" />
         <img src="icons/skywalker.png" onclick="insertit(document.compose.content, ':sw:');" />
         <img src="icons/yawn.png" onclick="insertit(document.compose.content, ':tired:');" />
         <img src="icons/love.png" onclick="insertit(document.compose.content, '(L)');" />
         <img src="icons/angry.png" onclick="insertit(document.compose.content, ':@');" />    
         <img src="icons/underline.png" onclick="insertit(document.compose.content, '[u][/u]');" />
         <img src="icons/italic.png" onclick="insertit(document.compose.content, '[i][/i]');" />    
         <img src="icons/bold.png" onclick="insertit(document.compose.content, '[b][/b]');" />
         <br /><br />
         <input type="submit" value="Edit" />
         </form> 
         <?php } } ?>
         <?php } elseif ($_GET['news'] == "list"){ ?>
         <h3><img src="icons/news.gif" /> List Articles</h3>
          <hr />
         <table id="forum">
         <th>Title</th>
         <th>Author</th>
         <th>Options</th>
         <?php
         $sql2 = "SELECT * FROM tinybb_news ORDER BY news_id DESC";
         $tt = mysql_query($sql2) or die (mysql_error());
         while($p=mysql_fetch_assoc($tt)){ ?>
         <tr>
         <td align="center"><a href="?news=edit&id=<?php echo "$p[news_id]"; ?>"><?php echo "$p[news_title]"; ?></a></td>
         <td align="center"><?php echo "$p[news_author]"; ?></td>
         <td align="center">
         <?php
		echo "<a href='admin.php?news=delete&id=$p[news_id]'><img src='icons/delete.gif' border='0'></a>
		<a href='admin.php?news=edit&id=$p[news_id]'><img src='icons/editnews.gif' border='0'></a>
		";
		?>
         </td>
         </tr>
         <?php } ?>
         </table>
         <?php } elseif ($_GET['news'] == "add"){ ?>
         <?php if ($_GET['do'] == "submit"){ ?>
         
         <?php
		        $title = addslashes(htmlspecialchars($_POST[title]));
                $content = addslashes(htmlspecialchars($_POST[content]));
				$author = "$user[username]";
				$date = date("d-m-Y");
		    $sql = "INSERT INTO tinybb_news
			(
			    news_title,
				news_content,
				news_author,
				news_date
				
			)
			VALUES 
			(
				'$title',
                '$content',
				'$author',
				'$date'
			)";

		mysql_query($sql) or die(mysql_error());
				?>
          <h3><img src="icons/news.gif" /> Add Article</h3>
          <hr />
                Article added. <a href="?news=list">Click here to view articles</a>.
         <?php } else { ?>
         <h3><img src="icons/news.gif" /> Add Article</h3>
          <hr />
         <form action="?news=add&do=submit" method="POST" name="compose">
         Article Title<br />
         <input type="text" name="title" size="50" /><br /><br />
         Content<br />
         <textarea cols=70 rows=5 maxlength='1000' name='content'></textarea><br />         
         <img src="icons/smile2.png" onclick="insertit(document.compose.content, ':)');" />
         <img src="icons/bigsmile.png" onclick="insertit(document.compose.content, ':D');" />
         <img src="icons/frown.png" onclick="insertit(document.compose.content, ':(');" />
         <img src="icons/wink.png" onclick="insertit(document.compose.content, ';)');" />
         <img src="icons/blush.png" onclick="insertit(document.compose.content, ':$');" />
         <img src="icons/skywalker.png" onclick="insertit(document.compose.content, ':sw:');" />
         <img src="icons/yawn.png" onclick="insertit(document.compose.content, ':tired:');" />
         <img src="icons/love.png" onclick="insertit(document.compose.content, '(L)');" />
         <img src="icons/angry.png" onclick="insertit(document.compose.content, ':@');" />    
         <img src="icons/underline.png" onclick="insertit(document.compose.content, '[u][/u]');" />
         <img src="icons/italic.png" onclick="insertit(document.compose.content, '[i][/i]');" />    
         <img src="icons/bold.png" onclick="insertit(document.compose.content, '[b][/b]');" />
         <br /><br />
         <input type="submit" value="Add Article" />
         </form> 
         <?php } ?>
         <?php } elseif ($list == "ipsearch"){ ?>
          <h3><img src="icons/user.gif" /> IP Search</h3>
         <hr />
          <?php if ($_GET['do'] == "search"){ ?>
          <table id="forum">
          <th>IP</th>
          <th>Account</th>
          <?php
          // The below is calling data from the "data"base and listing it here in an array.
          $result = mysql_query("SELECT * FROM members WHERE ip='$_POST[ip]'");
          while($row = mysql_fetch_array($result)) { ?>
          <tr>
          <td><?php echo "$row[ip]"; ?></td>
          <td><?php echo "$row[username]"; ?></td>
          </tr>  
          <?php } ?>
          </table>        
          <?php } else { ?>
         <form action="?list=ipsearch&do=search" method="POST">
         Enter IP Address<br />
         <input type="text" name="ip" autocomplete="off" /><br /><br />
         <input type="submit" value="Search" />
         </form>
         <?php } ?>
         <?php } elseif ($list == "addaccount"){ ?>
          <h3><img src="icons/user.gif" /> Add new account</h3>
          <hr />
          <?php if ($_GET['do'] == "add"){ ?>
          <?php
          $check_members = mysql_query("SELECT * FROM `members` WHERE `username` = '$_POST[username]'");   
          if(mysql_num_rows($check_members) != 0){
			  echo "Cannot add the account. Reason: An account already exists with this username!"; 
		  } else {
			    $username = addslashes(htmlspecialchars($_POST[username]));
                $password = sha1(md5(md5(sha1(md5(sha1(sha1(md5($_POST[password])))))))); 
                $email = addslashes(htmlspecialchars($_POST[email]));
                $group = addslashes(htmlspecialchars($_POST[group]));
                $date = date("d-m-Y");
		if (((($username == null) || ($password == null) || ($email == null) || ($group == null)))){ die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=accounts&m=3\">"); } else {
                $sql = "INSERT INTO members
			(
			    username,
				password,
				email,
				admin,
				date


			)
			VALUES 
			(
				'$username',
                '$password',
				'$email',
				'$group',
				'$date'
			)";

		mysql_query($sql) or die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=accounts&m=2\">");
		  }                     
		  ?>
          <?php die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=accounts&m=1\">"); ?>
          <?php } ?>
          <?php } else { ?>
          <form action="?list=addaccount&do=add" method="POST">
          Username<br />
          <input type="text" name="username" autocomplete="off" size="50" /><br /><br />
          Password<br />
          <input type="password" name="password" size="50" /><br /><br />
          Email Address<br />
          <input type="email" name="email" autocomplete="off" size="50" /><br /><br />
          Group<br />
          <select name="group">
          <OPTION VALUE="0">Members
          <OPTION VALUE="1">Administrators
          <OPTION VALUE="mod">Moderators
          <OPTION VALUE="3">Banned
          </select>
          <br /><br />
          <input type="submit" value="Add Account" />
          </form>
          <?php } ?>     
         <?php } elseif ($list == "deleteaccount"){ ?>
         <h3><img src="icons/user.gif" /> Delete an account</h3>
          <hr />
          <?php if ($_GET['do'] == "delete"){ ?>
          <?php 
		  $id = MYSQL_QUERY("SELECT * FROM `members` WHERE `username` = '$_POST[id]'");
          $id = mysql_fetch_array($id);
		  if ($id[username] == ""){ echo "Cannot delete user because <strong><i>$_POST[id]</i></strong> does not exist."; } else { 
		  mysql_query("DELETE FROM members WHERE username='$_POST[id]'") or die(mysql_error());
		  mysql_query("DELETE FROM tinybb_replies WHERE reply_author='$_POST[id]'") or die(mysql_error());
		  mysql_query("DELETE FROM tinybb_threads WHERE thread_author='$_POST[id]'") or die(mysql_error());
		  ?>
          <?php die("<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=admin.php?list=accounts&m=4\">"); ?>
          <?php } } else { ?>
          <strong>By clicking "Continue" the account will be automatically deleted along with all posts & threads associated with it!</strong><br /><br />
          <form action="?list=deleteaccount&do=delete" method="POST">
          Username<br />
          <input type="text" name="id" autocomplete="off" size="50" /><br /><br />
          <input type="submit" value="Continue" />
          <?php } ?>
         <?php } elseif ($list == "saveaccount"){ ?>
         <?php
         $avatar = addslashes(htmlspecialchars($_POST[avatar]));
         $username = $_POST[username];
         $name = addslashes(htmlspecialchars($_POST[name]));
         $biography = $_POST[biography];
         $email = addslashes(htmlspecialchars($_POST[email]));
         $group = addslashes(htmlspecialchars($_POST[group]));
         $update = mysql_query("UPDATE `members` SET `avatar` = '$avatar', `name` = '$name', `bio` = '$biography', `admin` = '$group', `email` = '$email' WHERE `username` = '$username'");
         ?>
         <h3><img src="icons/user.gif" /><?php echo "$username"; ?>'s Account has been updated (<a href="index.php?page=profile&id=<?php echo "$username"; ?>">View Profile</a>)</h3>
          <hr />

         <?php } elseif ($list == "editaccount"){ ?>
         <?php if ($profile[username] == null){ echo "Profile doesn't exist"; } else { ?>
          <h3><img src="icons/user.gif" /> Editing <?php echo "$profile[username]"; ?>'s Account</h3>
          <hr />
          <form action="?list=saveaccount" method="POST">
          <input type="hidden" name="username" value="<?php echo "$profile[username]"; ?>" size="50">
          <strong>User Group</strong><br />
          <select name="group">
          <OPTION VALUE="<?php echo "$profile[admin]"; ?>">No Change
          <OPTION VALUE="0">Members
          <OPTION VALUE="1">Administrators
          <OPTION VALUE="mods">Moderators
          <OPTION VALUE="3">Banned
          </select>
          <br /><br />
          <strong>Email</strong><br />
          <input type="text" name="email" value="<?php echo "$profile[email]"; ?>" size="50">
          <br /><br />
          <strong>IP Address</strong><br />
          <input type="text" name="" value="<?php echo "$profile[ip]"; ?>" size="50" disabled="true">

          <br /><br />
          <h4>Public Profile Information</h4>
          <hr />
          <strong>Avatar (Enter URL)</strong><br />
          <input type="text" name="avatar" size="50" value="<?php echo "$profile[avatar]"; ?>" autocomplete="off">
          <br /><br />
          <strong>Name</strong><br />
          <input type="text" name="name" value="<?php echo "$profile[name]"; ?>" size="50">
          <br /><br />
          <strong>Biography</strong><br />
          <textarea cols=70 rows=5 maxlength="500" name="biography"><?php echo "$profile[bio]"; ?></textarea>
          <br /><br />
          <input type="submit" value="Save <?php echo "$profile[username]"; ?>'s Profile">
          </form>
          <?php } ?>

         <?php } elseif ($list == "accounts"){ ?>
         <h2><img src="icons/idea.gif" border="0"> Accounts</h2>
          <?php if ($_GET['m'] == "1"){ echo "<br /><div class='success'>Account added.</div>"; }
         elseif ($_GET['m'] == "2"){ echo "<br /><div class='error'>There was an SQL error while attempting to add a new forum account.</div>"; }
         elseif ($_GET['m'] == "3"){ echo "<br /><div class='error'>Fields were left blank, unable to process the query without disrupting account settings.</div>"; }
         elseif ($_GET['m'] == "4"){ echo "<br /><div class='error'>Account deleted.</div>"; } ?>
          <br /><br />
         <?php include("admin/accounts.php"); ?>

         <?php } elseif ($list == "tinybb"){ ?>
         <br /><iframe class="iframe" src="http://tinybb.net/tinybb_1.html" name="newsFrame" width="100%" height="250" frameborder="0" allowtransparency="true"></iframe>
         <?php
         } elseif ($list == "downloads"){ ?>
         <br /><iframe class="iframe" src="http://tinybb.net/upgrades_1.html" name="newsFrame" width="100%" height="250" frameborder="0" allowtransparency="true"></iframe>
         <?php
         }elseif (isset($_GET['lock'])){ ?>
         <h3><?php $lock = $_GET['lock']; if ($lock == "1"){ ?><img src="icons/lock.gif" /> Locking a thread<br /></h3><?php } else { ?><img src="icons/unlock.gif" /> Unlocking a thread</h3><?php } ?>
         <?php
         $update = mysql_query("UPDATE `tinybb_threads` SET `thread_lock` = '$lock' WHERE `thread_key` = '$_GET[thread]'");
         if ($lock == "1"){ echo "<span style='color:green; font-weight:bold;'>Thread Locked</a>"; } else { echo "<span style='color:green; font-weight:bold;'>Thread Unlocked</a>"; }
         ?>
         <?php
         } elseif (isset($_GET['deletereply'])){ ?>
         <h3><img src="icons/delete.gif" /> Deleting Reply</h3>
         <?php
         $con = $_GET['con'];
         if ($con == ""){ ?>
         <span style="font-size:14px;">Please confirm you'd like to delete the reply.<br /></span> - <a href="?deletereply&thread=<?php echo $_GET['id']; ?>&con=1">Confirm</a> | <a href="index.php">Cancel</a>
         <?php } elseif ($con == "1") { ?>
         <?php


		mysql_query("DELETE FROM tinybb_replies WHERE reply_key='$_GET[thread]'") or die(mysql_error());

		echo "<span style='color:green; font-weight:bold;'>Reply deleted</a>"; ?><br /><br />

          <?php } ?>
         
         <?php
         } elseif(isset($_GET['delete'])){ ?>
      <h3><img src="icons/delete.gif" /> Deleting Thread</h3>
      <hr />
<?php
$con = $_GET['con']; 
if ($con == ""){ ?>
<span style="font-size:14px;">Please confirm you'd like to delete <a href="thread.php?post=<?php echo $_GET['thread']; ?>" target="_blank"><strong>this thread</strong></a> and all of the replies associated with it.<br /></span> - <a href="?delete&thread=<?php echo $_GET['thread']; ?>&con=1">Confirm</a> | <a href="index.php">Cancel</a>
<?php } elseif ($con == "1") { ?>
      <?php



		mysql_query("DELETE FROM tinybb_threads WHERE thread_key='$_GET[thread]'") or die(mysql_error());
		mysql_query("DELETE FROM tinybb_replies WHERE thread_key='$_GET[thread]'") or die(mysql_error());
		
		echo "<span style='color:green; font-weight:bold;'>Thread & replies deleted</a>"; ?><br /><br />

<?php } } else { ?>
<h2><img src="icons/idea.gif" border="0"> Admin Home</h2>
<div class="admin">Admin Notes</div>
      <?php if ($_GET['do'] == "notes"){ ?>
      <?php
	  $notes = $_POST[notes];
      $update = mysql_query("UPDATE `admin` SET `notes` = '$notes'");
      ?>
      <meta HTTP-EQUIV="REFRESH" content="0; url=admin.php">
      <?php } else { ?>
      <?php
	  $notes = MYSQL_QUERY("SELECT * FROM `admin`");
      $notes = mysql_fetch_array($notes);
	  ?>
      <form action="admin.php?do=notes" method="POST">
      <div class="" align="center"><textarea cols="2" rows="5" name="notes" border="0"/><?php echo $notes[notes]; ?></textarea></div><br />
      <center><input type="submit" value="Update Notes" /></center>
      </form>
      <?php } ?>
<br /><br />
<?php } } ?>
</div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
<!-- end #container --></div>
<script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
//-->
</script>
</body></html>
<br /><br />
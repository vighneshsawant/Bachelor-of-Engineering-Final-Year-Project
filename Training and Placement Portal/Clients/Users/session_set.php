<?PHP

session_start();

if (!(isset($_SESSION['ID']) && $_SESSION['ID'] != '')) {
header ("Location:frmUsers.php");
}

?>
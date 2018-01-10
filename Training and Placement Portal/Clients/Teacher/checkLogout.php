<?php 
 session_start();
  unset($_SESSION['ID']);
  unset($_SESSION['NAME']);
  unset($_SESSION['abb']);
session_destroy();
 
header('Location:../Home/frmHomePage.php');
 
?>
<?php 
 
 session_start();
 
 unset($_SESSION['ID']);
  unset($_SESSION['NAME']);
session_destroy();
 
header('Location:../Clients/Home/frmHomePage.php');
 
?>
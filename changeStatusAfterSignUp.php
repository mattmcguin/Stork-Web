<!DOCTYPE HTML>
<?php session_start(); 
$_SESSION['signInStatus']=1;
Print '<script>window.location.assign("storkRequests.php");</script>';
?>
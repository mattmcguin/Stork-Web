<!DOCTYPE HTML>
<?php session_start(); 
session_destroy();
Print '<script>window.location.assign("signIn.php");</script>';
?>
<?php
session_start();
if(!isset($_SESSION['uname']))     //if session not found redirect to homepage
{
	header('location:home.html');
}
unset($_SESSION['uname']);       // Session Found Unset the variable values
session_destroy();                  // Destroy the session
header('location:Admin.php');
?>
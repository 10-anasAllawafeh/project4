<?php 
session_start();
// print_r($_SESSION);
$name=$_SESSION['name'];
$email=$_SESSION['email'];
echo "$email <hr> Welocme $name, thank you for signing in<br>";

?>
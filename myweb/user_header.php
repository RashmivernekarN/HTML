<?php include'dbconfig.php'; 
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Web</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
	<ul class="nav">
		<li><a href="user_home.php">Home</a></li>
		<li><a href="user_update.php">update profile</a></li>
		<li><a href="logout.php">Logout</a></li>		
	</ul>
</center>


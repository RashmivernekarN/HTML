<?php include'dbconfig.php'; 
session_start();
if(!isset($_SESSION['admin_username'])){
	header("location:admin_login.php");
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
		<li><a href="admin_home.php">Home</a></li>
		<li><a href="view_user.php">View Users</a></li>
		<li><a href="admin_logout.php">logout</a></li>		
		
	</ul>
</center>


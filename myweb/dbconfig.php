<?php
$server="localhost";
$username="root";
$password="";
$db_name="demodb";

$con=mysqli_connect($server,$username,$password,$db_name);
if(!$con){
	echo "Connection Failed";
}
?>
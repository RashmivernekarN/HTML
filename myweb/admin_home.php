<?php include"admin_header.php"; 
$selectQuery="SELECT * FROM admin WHERE username='".$_SESSION['admin_username']."'";
$stmt=$con->query($selectQuery);
$row=mysqli_fetch_assoc($stmt);
?>
<section>
	<h1>Welcome <?=$row['username']?>,</h1>
</section>
<?php include "footer.php";?>
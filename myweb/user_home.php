<?php include "user_header.php"; 
$selectQuery="SELECT * FROM user WHERE username='".$_SESSION['username']."'";
$stmt=$con->query($selectQuery);
$row=mysqli_fetch_assoc($stmt);
?>
<section>
	<h1>Welcome <?=$row['name']?>,</h1>
</section>
<?php include "footer.php"; ?>
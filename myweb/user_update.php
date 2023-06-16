<?php include "user_header.php" ;
$selectQuery="SELECT * FROM user WHERE username='".$_SESSION['username']."'";
$stmt=$con->query($selectQuery);
$count=mysqli_num_rows($stmt);
if($count>0){
	$row=mysqli_fetch_assoc($stmt);
?>
<section>
	<form method="post" action="">
		<label>Username</label>
		<input type="text" name="name" value="<?=$row['name']?>" required="required">
		<label>Email</label>
		<input type="email" name="email" value="<?=$row['email']?>" required="required">	
		<label>Username</label>
		<input type="text" name="username" value="<?=$row['username']?>" required="required" readonly="readonly">
		<label>Current Password</label>
		<input type="text" name="old_password" value="<?=$row['password']?>" readonly="readonly">
		<label>Change Password</label>
		<input type="password" name="password" value="<?=$row['password']?>">
		<button type="submit" name="submit">Update</button>
	</form>
</section>
<?php include "footer.php" ?>
<?php	
}else{
	header("location:logout.php");
}
?>
<?php
if (isset($_POST['submit'])) {
	$updateQuery="UPDATE user SET name='".$_POST['name']."',email='".$_POST['email']."',password='".$_POST['password']."' WHERE username='".$_POST['username']."'";
	if(mysqli_query($con,$updateQuery)){
		echo "Record is Updated";
	}else{
		echo "Please Check your Query";
	}
}
?>

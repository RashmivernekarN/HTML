<?php include "header.php"; ?>
<section>
	<h1>Admin Login</h1>
	<form method="POST" action="">
		<label>Username</label>
		<input type="text" name="username" placeholder="Enter Username" required="required">
		<label>Password</label>
		<input type="password" name="password" placeholder="Enter Password" required="required">
		<button type="submit" name="submit">Login</button>
	</form>
</section>
<?php include "footer.php"; ?>
<?php
	if(isset($_POST['submit'])){
		$selectQuery="SELECT * FROM admin WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
		$stmt=$con->query($selectQuery);
		$count=mysqli_num_rows($stmt);
		if($count>0){
			$row=mysqli_fetch_assoc($stmt);
			session_start();
			$_SESSION['admin_username']=$row['username'];
			header("location:admin_home.php");
		}else{
			echo "Invalid Login Credentials";
		}
	}
?>
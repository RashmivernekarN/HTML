<?php  include "header.php";?>
<section>
	<form method="POST" action="">
		<label>Name</label>
		<input type="text" name="name" placeholder="Enter Name" required="required">
		<label>Email</label>
		<input type="email" name="email" placeholder="Enter email" required="required">
		<label> Username</label>
		<input type="text" name="username" placeholder="Enter Username" required="required">
		<label> Password</label>
		<input type="password" name="password" placeholder="Enter password" required="required">		
		<button type="sumbit" name="submit">Submit</button>
	</form>
</section>
<?php include "footer.php"; ?>
<?php
		if(isset($_POST['submit'])){
			$insertQuery="INSERT INTO user SET name ='".$_POST['name']."',email='".$_POST['email']."',username='".$_POST['username']."', password='".$_POST['password']."'";

			mysqli_query($con,$insertQuery);
			echo "Record Inserted Successfully";

		}

?>




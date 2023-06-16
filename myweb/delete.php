<?php include"dbconfig.php";
$deleteQuery="DELETE from user WHERE id='".$_POST['recordId']."'";
if(mysqli_query($con,$deleteQuery)){
	header("location:view_user.php");
}else{
	echo "Oops..!! Something Went Wrong";
}
?>

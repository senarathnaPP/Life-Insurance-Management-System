<?php
	include_once 'config.php';
?>

<?php
	$name = $_POST["fullName"];
	$email = $_POST["emailAdd"];
	$id = $_POST["nic"];
	$msg = $_POST["msg"];
	
	$sql = "insert into contact(full_name,email,nic,message)values('$name','$email','$id','$msg')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert ('Record inserted successfully!!!')</script>";
	}
	else{
		echo "<script>alert ('Error in insertin records')</script>";
	}
	
	mysqli_close($conn);
?>
<?php
	include_once 'config2.php';
?>

<?php
	$name = $_POST["fullName"];
	$email = $_POST["emailAdd"];
	$subject = $_POST["subject"];
	$msg = $_POST["msg"];
	
	$sql = "insert into contact(full_name,email,subject,message)values('$name','$email','$subject','$msg')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert ('Record inserted successfully!!!')</script>";
	}
	else{
		echo "<script>alert ('Error in insertin records')</script>";
	}
	
	mysqli_close($conn);
?>
	
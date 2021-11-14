<?php
	include_once 'config.php';
?>

<?php
	$fname = $_POST["fullname1"];
	$phoneNo = $_POST["mobile"];
	$e_mail = $_POST["mail"];
	$address = $_POST["addr"];
	$Dob = $_POST["dob"];
	$pass = $_POST["password-1"];
	
	
	$sql1 = "insert into userregister(userId,fullName,phone_no,email,address,dob,password)values('','$fname','$phoneNo','$e_mail','$address','$Dob','$pass')";
    
	 if(mysqli_query($conn,$sql1)){
		 
		 echo "<script>alert ('Successfully recorded!')</script>";
		 header("Location:../html/home1.html");
	 }
	 else
		 echo "<script>alert ('Error!')</script>";
	 
	 mysqli_close($conn);
		 
?>
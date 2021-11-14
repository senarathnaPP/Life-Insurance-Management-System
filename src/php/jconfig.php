<?php

	$fname="";
	$lname="";
	$gen="";
	$pNo="";
	$mail="";
	$address="";
	$id=0;
	$edit_state = false;
	
	$db=mysqli_connect('localhost','root','','service request');
	
	if(isset($_POST['save']))
	{
		$fname = $_POST["FirstName"];
        $lname = $_POST["LastName"];
        $gen = $_POST["gender"];
        $pNo = $_POST["phone"];
        $mail = $_POST["email"];
        $address = $_POST["address"];
		
		$query = "insert into  employee(First_name,Last_name,Gender,phone_number,E_mail,Address)values('$fname','$lname','$gen','$pNo','$mail','$address')";
		mysqli_query($db,$query);
		
		header('location:../php/join.php');
		
	}
	//update records
	if(isset($_POST['update'])){
		$fname = $_POST['FirstName'];
        $lname = $_POST['LastName'];
        $gen = $_POST['gender'];
        $pNo = $_POST['phone'];
        $mail = $_POST['email'];
        $address = $_POST['address'];
		$id=$_POST['id'];
	
	
	$sql="UPDATE employee SET First_name='$fname', Last_name='$lname', Gender='$gen', phone_number='$pNo', E_mail='$mail', Address=' $address'   WHERE emp_id='$id'";
        mysqli_query($db, $sql);
	header('location: ../php/join.php');
	}
	
	//delete records 
	if(isset($_GET['del'])){
	     $id=$_GET['del'];
		 mysqli_query($db, "delete from employee where emp_id='$id'");
		 header('location:../php/join.php');
	}
	
	$results=mysqli_query($db,"select * from employee");

?>
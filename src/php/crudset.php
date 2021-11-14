<?php

	$name="";
	$address="";
	$mobile="";
	$age="";
	$id=0;
	$edit_state=false;

$db = mysqli_connect('localhost','root', '','safe_guard_insurance');

if(isset($_POST['save'])){
	$name=$_POST['name'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$age=$_POST['age'];
	
	$query = "INSERT INTO insurance(name,address,mobile,age)VALUES('$name','$address','$mobile','$age')";
	mysqli_query($db, $query);
	header('location:../php/newset.php');
}

	//updare records
	if(isset($_POST['update'])){
		$name=($_POST['name']);
		$address=($_POST['address']);
		$mobile=($_POST['mobile']);
		$age=($_POST['age']);
		$id=($_POST['id']);
		
		mysqli_query($db, "UPDATE insurance SET name='$name', address='$address',mobile='$mobile',age='$age' WHERE id='$id'");
		header('location:../php/newset.php');
		
	
	}
	
	//delete records
	if(isset($_GET['del'])){
		$id=$_GET['del'];
		mysqli_query($db, "DELETE FROM insurance WHERE id=$id");
		header('location: ../php/newset.php');
		
	}
	$results = mysqli_query($db, "SELECT * FROM insurance");




?>
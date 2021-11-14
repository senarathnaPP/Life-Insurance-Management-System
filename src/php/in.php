<?php

	$type="";
	$time="";
	$diseases="";
	$id=0;
	$edit_state = false;
	
	$db=mysqli_connect('localhost','root','','my insurance');
	
	if(isset($_POST['save']))
	{
		$type=$_POST["type"];
		$time=$_POST["time"];
		$diseases=$_POST["diseases"];
		
		$query = "insert into  product (Insurance_type,Time_period,chronic_diseases)values('$type','$time','$diseases')";
		mysqli_query($db,$query); 
		
		header('location:../php/display.php');
		
	}
	//update records
	if(isset($_POST['update'])){
		$type= ($_POST['type']);
		$time=($_POST['time']);
		$diseases=($_POST['diseases']);
		$id=($_POST['id']);
	
	
	$sql="UPDATE product SET Insurance_type	='$type', Time_period='$time', chronic_diseases ='$diseases' WHERE id='$id'";
        mysqli_query($db, $sql);
	header('location: ../php/display.php');
	}
	
	//delete records 
	if(isset($_GET['del'])){
	     $id=$_GET['del'];
		 mysqli_query($db, "delete from product where id='$id'");
		 header('location:../php/display.php');
	}
	
	$results=mysqli_query($db,"select * from product");

?>
<?php

	$name="";
	$address="";
	$pNo="";
	$id=0;
	$edit_state = false;
	
	$db=mysqli_connect('localhost','root','','lifeinsurance');
	
	if(isset($_POST['save']))
	{
		$name=$_POST["Name"];
		$address=$_POST["address"];
		$pNo=$_POST["pNo"];
		
		$query = "insert into  userregister (fullName,address,phone_no)values('$name','$address','$pNo')";
		mysqli_query($db,$query);
		
		header('location:../php/view.php');
		
	}
	//update records
	if(isset($_POST['update'])){
		$name= ($_POST['Name']);
		$address=($_POST['address']);
		$pNo=($_POST['pNo']);
		$id=($_POST['id']);
	
	
	$sql="UPDATE userregister SET fullName='$name', address='$address', phone_no='$pNo' WHERE userId='$id'";
        mysqli_query($db, $sql);
	header('location: ../php/view.php');
	}
	
	//delete records 
	if(isset($_GET['del'])){
	     $id=$_GET['del'];
		 mysqli_query($db, "delete from userregister where userId='$id'");
		 header('location:../php/view.php');
	}
	
	$results=mysqli_query($db,"select * from userregister");

?>
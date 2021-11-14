<?php

	$name="";
	$Eaddress="";
	$com="";
	$id=0;
	$edit_state = false;
	
	$db=mysqli_connect('localhost','root','','safeguard (2)');
	
	if(isset($_POST['save']))
	{
		$name=$_POST["Name"];
		$Eaddress=$_POST["Email"];
		$com=$_POST["Comment"];
		
		$query = "insert into  comment (Full_Name,E_mail,Comment)values('$name','$Eaddress','$com')";
		mysqli_query($db,$query);
		
		header('location:../php/rating.php');
		
	}
	//update records
	if(isset($_POST['update'])){
		$name= ($_POST['Name']);
		$Eaddress=($_POST['Email']);
		$com=($_POST['Comment']);
		$id=($_POST['id']);
	
	
	$sql="UPDATE comment SET Full_Name='$name', E_mail='$Eaddress', Comment='$com' WHERE id='$id'";
        mysqli_query($db, $sql);
	header('location: ../php/rating.php');
	}
	
	//delete records 
	if(isset($_GET['del'])){
	     $id=$_GET['del'];
		 mysqli_query($db, "delete from comment where id='$id'");
		 header('location:../php/rating.php');
	}
	
	$results=mysqli_query($db,"select * from comment");

?>
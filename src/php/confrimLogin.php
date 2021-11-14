
<?php
	include_once 'config.php';
?>

<?php
   
  mysqli_select_db($conn,$db);
   
     if(isset($_POST['email'])){
		$uname = $_POST['email'];
		$passwrd = $_POST['btn'];
		
		$sql = "select * from userregister where email='".$uname."' AND password='".$passwrd."' limit 1";
		
		$result = mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result)==1){
			echo "You have successfully logged in" ;
			header("Location:../html/home1.html");
		}
		else
			echo "You have entered an incorrect password or username! " ;
		exit();
	}
  
      
?>
<?php
  include_once 'config1.php';
?> 

<?php
   $name = $_POST["fullname"];
   $contact = $_POST["mobile"];
   $mail = $_POST["email"];
   $pnumber = $_POST["number"];
   $service = $_POST["Service"];
   $massage = $_POST["addr"];

   $sql = "insert into request(Request_id,Full_name,Contact_number,	E_mail,Policy_number,Required_service,Massage)values('','$name','$contact','$mail','$pnumber','$service','$massage')";

   if(mysqli_query($conn,$sql)){
	   echo "<script>alert ('Record inserted successfully')</script>";
	   
   }
   else {
	   echo "<script>alert ('Error in inserting Record ')</script>";
   }

   mysqli_close($conn);
?>
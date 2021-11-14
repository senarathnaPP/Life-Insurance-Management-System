<?php
  
	include('jconfig.php');

	//fetch the record to be updated
	if(isset($_GET['edit'])){
			$id = $_GET['edit'];
			$edit_state=true;
        
			$rec=mysqli_query($db,"select * from employee where emp_id='$id'");
        
			$record= mysqli_fetch_array($rec);
			$fname = $record['First_name'];
            $lname = $record['Last_name'];
            $gen = $record['Gender'];
            $pNo = $record['Phone_number'];
            $mail = $record['E_mail'];
            $address = $record['Address'];
			$id=$record['emp_id'];
			}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
	My Insurance
</title>
<link rel="stylesheet" type="text/css" href="../css/join.css"/>
<script src="../js/poljs.js"></script>
</head>
<body>
 
  <table class="listJ" id="userlistJ">
			   <thead>
			      <tr>
				    <th> &nbsp; First Name</th>
					<th>&nbsp;Last Name</th>
					 <th>&nbsp; Gender</th>
					 <th>&nbsp;phone number</th>
					 <th>&nbsp; E-mail</th>
					<th> &nbsp;address</th>
				
				  </tr>
				</thead>
			  <tbody>
			      <?php while($row=mysqli_fetch_array($results)){?>
				<tr>
				<td><?php echo $row['First_name'];?></td>
				<td><?php echo $row['Last_name'];?></td>
				<td><?php echo $row['Gender'];?></td>
				<td><?php echo $row['Phone_number'];?></td>
				<td><?php echo $row['E_mail'];?></td>
				<td><?php echo $row['Address'];?></td>
				<td>
				  <a class="u_btn" href ="join.php?edit=<?php echo $row['emp_id'];?>" >Edit </a>
				  </td>
				 <td>
				   <a class="d_btn" href="jconfig.php?del=<?php echo $row['emp_id'];?>">Delete</a>
				  </td>
		    </tr>  
			  <?php }?>
			  </tbody>
			</table>
 
 
 <div class="table1">
 <table>
   <tr>
     <td>
	   <form  action="../php/jconfig.php" method="POST">
	     <input type="hidden" name="id" value="<?php echo $id;?>">
	     <div>
	      <label>First Name</label>
		  <input type="text" name="FirstName" id="FirstName" value="<?php echo $fname;?>" required >
		 </div>
		 
		 <div>
	      <label>Last Name</label>
		  <input type="text" name="LastName" id="LastName" value="<?php echo $lname;?>" required>
		 </div>
		 
		 <div>
	      <label>Gender</label>
		  <input type="text" name="gender" id="gender" placeholder="type male/female" value="<?php echo $gen;?>" required>
		 </div>
		 
		 <div>
	      <label>phone number</label>
		  <input type="text" name="phone" id="phone"  pattern="[0-9]{10}" value="<?php echo $pNo;?>"  required>
		 </div>
		 
		 <div>
	      <label>E-mail</label>
		  <input type="email" name="email" id="email"  pattern="[a-zA-z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}" value="<?php echo $mail;?>" required>
		 </div>
		 
		 <div>
	      <label>address</label><br>
		  <input  type="text"  name="address"  id="address" value="<?php echo $address;?>" required>
		 </div><br>
		 
		 <div class="input-group">
		  <?php if($edit_state == false):?>
		  <button type="submit" class="btn" name="save">Save</button><br>
		  
		  <?php else:?>
		  <button type="submit" class="btn" name="update">Update</button><br>
		  
		  <?php endif?>
		 
		  
		 </div>
	   </form>	<br>
                 <a href="../html/careers.html">
		  <button  class="btn">Back</button></a>	   
	 </td>
	     
		   
		</td>
	 </tr> 
	 
	 
  </div>
     
</body>
</html>
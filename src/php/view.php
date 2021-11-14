<?php
  
	include('crud.php');
	//fetch the record to be updated
	if(isset($_GET['edit'])){
			$id = $_GET['edit'];
			$edit_state=true;
        

			$rec=mysqli_query($db,"select * from userregister where userId='$id'");
        
			$record= mysqli_fetch_array($rec);
			$name=$record['fullName'];
			$address=$record['address'];
			$pNo=$record['phone_no'];
	        $id=$record['userId'];
			}
?>
<!DOCTYPE html>
<html>
<head>

<title>
	My Insurance
</title>
<link rel="stylesheet" type="text/css" href="../css/view.css">

</head>
<body>
  
  
	<table>
	  <thead>
	    <tr>
		    <th>Name </th>
			<th>Address</th>
			<th>Phone number</th>
			<th colspan ="2">Action </th>
			
		</tr>
	    </thead>
	    <tbody>
			<?php while($row=mysqli_fetch_array($results)){?>
				<tr>
				<td><?php echo $row['fullName'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['phone_no'];?></td>
				<td>
				  <a class="u_btn" href ="view.php?edit=<?php echo $row['userId'];?>" >Edit </a>
				  </td>
				 <td>
				   <a class="d_btn" href="crud.php?del=<?php echo $row['userId'];?>">Delete</a>
				  </td>
		    </tr>  
			  <?php }?>
			
		</tbody>
	 </table>
	 <br>
	  <form method="POST" action="../php/crud.php">
	    <input type="hidden" name="id" value="<?php echo $id;?>">
	    <div class="input-group">
		  <label>Name</label><br>
		  <input type="text" name="Name"  value="<?php echo $name;?>"><br>
		</div><br>
        <div class="input-group">
		  <label>Adress</label><br>
		  <input type="text" style="width:500px" name="address" value="<?php echo $address;?>"><br>
		</div><br>
		<div class="input-group">
		  <label>Phone number</label><br>
		  <input type="text" name="pNo" value="<?php echo $pNo;?>"><br>
		</div><br>
		<div class="input-group">
		  <?php if($edit_state == false):?>
		  <button type="submit" class="btn" name="save">Save</button><br>
		  
		  <?php else:?>
		  <button type="submit" class="btn" name="update">Update</button><br>
		  
		  <?php endif?>
		  
		</div><br>
     </form>
	 
	 <a href="../html/home1.html">
		  <button  class="btn">Back</button></a>
		  
</body>
</html>
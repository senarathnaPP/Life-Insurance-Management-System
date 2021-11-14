<?php
  
	include('submitRating.php');
	//fetch the record to be updated
	if(isset($_GET['edit'])){
			$id = $_GET['edit'];
			$edit_state=true;
        
			$rec=mysqli_query($db,"select * from comment where id='$id'");
        
			$record= mysqli_fetch_array($rec);
			$name=$record["Full_Name"];
			$Eaddress=$record["E_mail"];
			$com=$record["Comment"];
	        
			}
?>
<!DOCTYPE html>
<html>
<head>

<title>
	Safe Guard Insurance 
</title>
<link rel="stylesheet" type="text/css" href="../css/rate.css">

</head>
<body>
  
  
	<table>
	  <thead>
	    <tr>
		    <th>Full Name </th>
			<th>Email</th>
			<th>Comment</th>
			<th colspan ="2">Action </th>
			
		</tr>
	    </thead>
	    <tbody>
			<?php while($row=mysqli_fetch_array($results)){?>
				<tr>
				<td><?php echo $row['Full_Name'];?></td>
				<td><?php echo $row['E_mail'];?></td>
				<td><?php echo $row['Comment'];?></td>
				<td>
				  <a class="u_btn" href ="rating.php?edit=<?php echo $row['id'];?>" >Edit </a>
				  </td>
				 <td>
				   <a class="d_btn" href="submitRating.php?del=<?php echo $row['id'];?>">Delete</a>
				  </td>
		    </tr>  
			  <?php }?>
			
		</tbody>
	 </table>
	 <br>
	  <form method="POST" action="../php/submitRating.php">
	    <input type="hidden" name="id" value="<?php echo $id;?>">
	    <div class="input-group">
		  <label>Name</label><br>
		  <input type="text" name="Name"  value="<?php echo $name;?>"><br>
		</div><br>
        <div class="input-group">
		  <label>E-Malil</label><br>
		  <input type="text" style="width:625px" name="Email" value="<?php echo $Eaddress;?>"><br>
		</div><br>
		<div class="input-group">
		  <label>Comment</label><br>
		  <input type="text" style="height:150px" name="Comment" value="<?php echo $com;?>"><br>
		</div><br>
		<div class="input-group">
		  <?php if($edit_state == false):?>
		  <button type="submit" class="btn" name="save">Save</button><br>
		  
		  <?php else:?>
		  <button type="submit" class="btn" name="update">Update</button><br>
		  
		  <?php endif?>
		</div><br>
     </form>
	 <a href="../html/aboutUs.html">
		  <button  class="btn">Back</button></a>
</body>
</html>
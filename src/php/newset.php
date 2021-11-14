<?php include('crudset.php'); 
if(isset($_GET['edit'])){
	$id =$_GET['edit'];
	$edit_state=true;
	$rec =mysqli_query($db, "SELECT * FROM insurance WHERE id=$id");
	$record=mysqli_fetch_array($rec);
	$name=$record['name'];
	$address=$record['address'];
	$mobile=$record['mobile'];
	$age=$record['age'];
	$id=$record['id'];
	
}




?>
<!DOCTYPE html>
<html> 
<head>

<title>
	My Insurance
</title>
<link rel="stylesheet" type="text/css" href="../css/newset.css">

</head>
<body>

	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Mobile</th>
				<th>Age</th>
				
			</tr>
		</thead>
	<tbody>
	<?php while ($row = mysqli_fetch_array($results)){ ?>
		 
	
	<tr>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
		<td><?php echo $row['age']; ?></td>
		<td>
			<a class ="edit_btn" href="newset.php?edit=<?php echo $row['id']; ?>">Edit</a>
		</td>
		<td>
			<a class="del_btn" href="crudset.php?del=<?php echo $row['id']; ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
	<form method ="post" action="crudset.php">
	<input type= "hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
		<label>Address</label>
		<input type="text" name="address" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
		<label>Mobile</label>
		<input type="text" name="mobile" value="<?php echo $mobile; ?>">
		</div>
		<div class="input-group">
		<label>Age</label>
		<input type="text" name="age" value="<?php echo $age; ?>">
		</div>

		<div class="input-group">
		<?php if ($edit_state == false): ?>
		<button type="submit" name="save" class="btn">Save</button>
		<?php else: ?>
		<button type="submit" name="update" class="btn">Update</button>			
		<?php endif ?>
		
		</div>
		
	</form>
	<a href="../html/contactus.html">
		  <button  class="btn">Back</button></a>
	</body>
	</html>
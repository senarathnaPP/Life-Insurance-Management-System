<?php
  
	include('in.php');
	//fetch the record to be updated
	if(isset($_GET['edit'])){
			$id = $_GET['edit'];
			$edit_state=true;
        
			$rec=mysqli_query($db,"select * from product where id='$id'");
        
			$record= mysqli_fetch_array($rec);
			$type=$record['Insurance_type'];
			$time=$record['Time_period'];
			$diseases=$record['chronic_diseases'];
	        $id=$record['id'];
			}
?>
<!DOCTYPE html>
<html>
<head>

<title>
	My Insurance
</title>
<link rel="stylesheet" type="text/css" href="../css/display.css">

</head>
<body>
  
  
	<table>
	  <thead>
	    <tr>
		    <th>Type </th>
			<th>Time</th>
			<th>Diseases</th>
			<th colspan ="2">Action </th>
			
		</tr>
	    </thead>
	    <tbody>
			<?php while($row=mysqli_fetch_array($results)){?>
			<tr>
			<td><?php echo $row['Insurance_type'];?></td>
			<td><?php echo $row['Time_period'];?></td>
			<td><?php echo $row['chronic_diseases'];?></td>
			
				<td>
				  <a class="u_btn" href ="display.php?edit=<?php echo $row['id'];?>" >Edit </a>
				  </td>
				 <td>
				   <a class="d_btn" href="in.php?del=<?php echo $row['id'];?>">Delete</a>
				  </td>
		    </tr>  
			<?php }?> 
					
		</tbody>
	 </table>
	 <br>
	  <form method="POST" action="../php/in.php">
	    <input type="hidden" name="id" value="<?php echo $id;?>">
	    <div class="input-group">
		  <label>Type</label><br>
		  <input type="text" name="type"  value="<?php echo $type;?>"><br>
		</div><br>
        <div class="input-group">
		  <label>Time</label><br>
		  <input type="text"  name="time" value="<?php echo $time;?>"><br>
		</div><br>
		<div class="input-group">
		  <label>Diseases</label><br>
		  <input type="text" name="diseases" value="<?php echo $diseases;?>"><br>
		</div><br>
		<div class="input-group">
		  <?php if($edit_state == false):?>
		  <button type="submit" class="btn" name="save">Save</button><br>
		  
		  <?php else:?>
		  <button type="submit" class="btn" name="update">Update</button><br>
		  
		  <?php endif?>
		</div><br>
     </form>
	 <a href="../html/pro.html">
		  <button  class="btn">Back</button></a>
</body>
</html>
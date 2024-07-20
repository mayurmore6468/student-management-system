<?php 
	include_once('header.php');

	

   
	$query="SELECT * FROM student";
	$query_run=mysqli_query($connection,$query);

 ?>
	<div>
		<div class="container">
			<h2>PHP Student Management System</h2>
			<hr>
			<a href="insertdata.php" class="btn btn-success" style="margin-left: 80%;">Add Data</a>
			<br><br>

 		

<table class="table table-border" style="background-color: pink;">

	<thead class="table-dark">
		<th>ID</th>
		<th>User Name</th>
		<th>City</th>
		<th>Address</th>
		<th>Message</th>
		<th>Edit</th>
		<th>Delete</th>
	</thead>

<?php

	if ($query_run) 
	{
		while ($row= mysqli_fetch_array($query_run)) 
		{
?>			
			<tbody>
				<td><?php echo $row['id'];  ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['city']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['message']; ?></td>
				<form action="upadatedata.php" method="post">
					<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
					<td><input type="submit" name="edit" class="btn btn-primary" value="EDIT"></td>
				</form>
				<form action="delete.php" method="post">
					<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
					<td><input type="submit" name="delete" class="btn btn-danger" value="Delete"></td>
				</form>
			</tbody>
			<?php 	
		}
	}
 
    else
	{
		echo "No record found";
	}
?>
</table>
		</div>
	</div>

</body>
</html>


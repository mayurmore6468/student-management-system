<?php 
	include_once('header.php');
 ?>
	<?php
	
	

	$id = $_POST['id'];

	$query = "SELECT * FROM student WHERE id='$id'";
	$query_run = mysqli_query($connection,$query);

	if ($query_run) 
	{
		while ($row= mysqli_fetch_array($query_run)) 
		{
			?>
<div class="container">
	<div class="jumbotron">
		<h2>PHP -CRUD: Upadte Data</h2>
		<hr>
		<form action="" method="post">
					<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" placeholder="Enter First Name" required>
					</div>
					<div class="form-group">
						<label>city</label>
						<input type="text" name="city" class="form-control" value="<?php echo $row['city'] ?>" placeholder="Enter Last Name" required>
					</div>
					<div class="form-group">
						<label>address</label>
						<input type="text" name="address" class="form-control" value="<?php echo $row['address'] ?>" placeholder="Enter contact number" required>
					</div>
					<div class="form-group">
						<label>message</label>
						<input type="text" name="message" class="form-control" value="<?php echo $row['message'] ?>" placeholder="Enter contact number" required>
					</div>
					<div class="mt-2">
						<button type="submit" name="update" class="btn btn-primary">Update Data</button>
						<a href="index.php" class="btn btn-danger">Cancel</a>
					</div>
		    </form>
		    <?php 
		    	if (isset($_POST['update'])) {
		    		$username = $_POST['username'];
		    		$city = $_POST['city'];
		    		$address = $_POST['address'];
		    		$message = $_POST['message'];

		    		$query= "UPDATE student SET username='$username',city='$city',address='$address', message='$message' WHERE id='$id'";
		    		$query_run= mysqli_query($connection,$query);

		    		if ($query_run) {
		    			echo '<script> alert("Data Updated")</script>';
		    			header("location: index.php");
		    		}
		    		else{
		    			echo '<script> alert("Data not updated")</script>';
		    		}

		    	}
		     ?>
		
	</div>
	
</div>
 <?php  
		}
	}
	else{
		echo '<script> alert("No record found")</script>';
	}
?>
</body>
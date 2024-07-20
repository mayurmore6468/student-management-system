<?php 
	include_once('header.php');
	
 ?>
	<div class="container">
		<div class="jumbotron">
			<div>
				<h2>PHP - CRUD: Add Data</h2>
				<hr>
				<form action="" method="post">
					<div class="form-group">
						<label>User Name</label>
						<input type="text" name="username" class="form-control" placeholder="Enter First Name" required>
					</div>
					<div class="form-group">
						<label>City</label>
						<input type="text" name="city" class="form-control" placeholder="Enter Last Name" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control" placeholder="Enter contact number" required>
					</div>
					<div class="form-group">
						<label>Message</label>
						<input type="text" name="message" class="form-control" placeholder="Enter contact number" required>
					</div>
					<div class="mt-2">
						<button type="submit" name="insert" class="btn btn-primary">Add Data</button>
						<a href="index.php" class="btn btn-danger">Back</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>

<?php 
	

	// if (isset($_POST['insert'])) {
	// 	$username = $_POST['username'];
	// 	$city = $_POST['city'];
	// 	$address = $_POST['address'];
	// 	$message = $_POST['message'];

	// 	$query= "INSERT INTO student(`username`,`city`,`address`,`message`) VALUES('$username','$city','$address','$message')";
	// 	$query_run=mysqli_query($connection,$query);
	// 	echo ("JJJJJJJJ");

	// 	if ($query_run) {
	// 		echo '<script> alert("Data saved ") </script>';
			
	// 	}
	// 	else{
	// 		echo '<script> alert("Data not saved ") </script>';
	// 	}
	// }

	// if (isset($_POST['insert'])) {
	// 	// Get form data and sanitize it to prevent SQL injection
	// 	$username = mysqli_real_escape_string($connection, $_POST['username']);
	// 	$city = mysqli_real_escape_string($connection, $_POST['city']);
	// 	$address = mysqli_real_escape_string($connection, $_POST['address']);
	// 	$message = mysqli_real_escape_string($connection, $_POST['message']);
	
	// 	// Prepare the SQL query using prepared statements
	// 	$stmt = $connection->prepare("INSERT INTO student (username, city, address, message) VALUES (?, ?, ?, ?)");
	// 	$stmt->bind_param("ssss", $username, $city, $address, $message);
	
	// 	if ($stmt->execute()) {
	// 		echo '<script>alert("Data saved");</script>';
	// 	} else {
	// 		echo '<script>alert("Data not saved: ' . $stmt->error . '");</script>';
	// 	}
	
	// 	// Close the statement
	// 	$stmt->close();
	// }



	if (isset($_POST['insert'])) {
		// Get form data and sanitize it to prevent SQL injection
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$city = mysqli_real_escape_string($connection, $_POST['city']);
		$address = mysqli_real_escape_string($connection, $_POST['address']);
		$message = mysqli_real_escape_string($connection, $_POST['message']);
	
		// Prepare the SQL query using prepared statements
		$stmt = $connection->prepare("INSERT INTO student (username, city, address, message) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("ssss", $username, $city, $address, $message);
	
		if ($stmt->execute()) {
			echo '<script>alert("Data saved");</script>';
		} else {
			echo '<script>alert("Data not saved: ' . $stmt->error . '");</script>';
		}
	
		// Close the statement
		$stmt->close();
	}
 ?>
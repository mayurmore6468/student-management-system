<?php 
	$connection= mysqli_connect('localhost','root','','phpcrud');

	if (isset($_POST['delete'])) {
		$id= $_POST['id'];

		$query="DELETE FROM student WHERE id='$id'";
		$query_run= mysqli_query($connection,$query);

		if ($query_run) {
			echo '<script> alert("Data deleted successfully")</script>';
			header("location: index.php");
		}
		else{
			echo '<script> alert("Data not deleted")</script>';
		}
	}
 ?>
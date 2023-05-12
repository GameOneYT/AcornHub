<?php
	require_once'conn.php';
	if(ISSET($_POST['insert'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$address=$_POST['address'];
		
		
		$query="INSERT INTO `member` (firstname, lastname, address) VALUES('$firstname', '$lastname', '$address')";
		
		$conn->exec($query);
		
		header("location:index.php");
	}
?>
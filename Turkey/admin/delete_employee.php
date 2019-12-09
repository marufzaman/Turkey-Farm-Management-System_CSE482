<?php
	include("includes\config.php");

	$sql = "DELETE FROM `employee` WHERE e_id = '$_GET[id]' ";

	if ($conn->query($sql) === TRUE) {
		echo "delete successfully<br><br>";
		header("Location:employee.php");

	} 
	else {
		echo "Error: " . $sql . "<br><br>" . $conn->error;
	}

	$conn->close();
?>
<?php
	include("includes\config.php");

	$sql = "DELETE FROM `admin` WHERE a_id = '$_GET[id]' ";

	if ($conn->query($sql) === TRUE) {
		echo "delete successfully<br><br>";
		header("Location:profile.php");

	} 
	else {
		echo "Error: " . $sql . "<br><br>" . $conn->error;
	}

	$conn->close();
?> 
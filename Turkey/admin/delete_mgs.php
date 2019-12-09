<?php
	include("includes\config.php");

	$sql = "DELETE FROM `message` WHERE mgs_id = '$_GET[id]' ";

	if ($conn->query($sql) === TRUE) {
		echo "delete successfully<br><br>";
		header("Location:message.php");

	} 
	else {
		echo "Error: " . $sql . "<br><br>" . $conn->error;
	}

	$conn->close();
?> 
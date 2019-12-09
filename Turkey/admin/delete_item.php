<?php
	include("includes\config.php");

	$sql = "DELETE FROM `items` WHERE item_id = '$_GET[id]' ";

	if ($conn->query($sql) === TRUE) {
		echo "delete successfully<br><br>";
		header("Location:update_product.php");

	} 
	else {
		echo "Error: " . $sql . "<br><br>" . $conn->error;
	}

	$conn->close();
?> 


<?php
	include("includes\config.php");

	$sql = "INSERT INTO `items` (`item_name`, `item_type`, `item_price`, `item_quantity`) VALUES ('$_POST[iName]', '$_POST[iType]', '$_POST[iPrice]', '$_POST[iQuantity]')";

	if ($conn->query($sql) === TRUE) {
		echo "New item has been added successfully!<br><br>";
		header("Location:update_product.php");

	} 
	else {
		echo "Error: " . $sql . "<br><br>" . $conn->error;
	}

	$conn->close();
?> 


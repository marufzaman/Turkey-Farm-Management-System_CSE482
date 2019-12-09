<?php
	include("includes\config.php");

	$id = $_POST['id'];
	$name = $_POST['iName'];
	$type = $_POST['iType'];
	$price = $_POST['iPrice'];
	$quantity = $_POST['iQuantity'];

/*
	echo "\n".$id;
	echo "\n".$name;
	echo "\n".$type;
	echo "\n".$price;
	echo "\n".$quantity;
	*/
	
	$sql = "UPDATE items SET item_name = '$name', item_type = '$type', item_price = '$price', item_quantity = '$quantity' WHERE item_id = '$id'";
	//$result = $conn->query($sql);

	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully<br><br>";
		} 
	else {
			echo "Error: " . $sql . "<br><br>" . $conn->error;
		}
	
	header("Location:update_product.php");

?>

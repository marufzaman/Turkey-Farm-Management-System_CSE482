<?php
	include("includes\config.php");

	$id = $_POST['id'];
	$first = $_POST['aFirst'];
	$last = $_POST['aLast'];
	$gender = $_POST['aGender'];
	$cell = $_POST['aCell'];
	$address = $_POST['aAddress'];
	$position = $_POST['aPosition'];
	$user = $_POST['aUser'];
	$pwd = $_POST['aPwd'];

	
	$sql = "UPDATE admin SET a_first = '$first', a_last = '$last', a_gender = '$gender', a_cell = '$cell', a_address = '$address', a_position = '$position', a_user = '$user', a_pwd = '$pwd' WHERE a_id = '$id'";
	//$result = $conn->query($sql);

	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully<br><br>";
		} 
	else {
			echo "Error: " . $sql . "<br><br>" . $conn->error;
		}
	
	header("Location:profile.php");

?>

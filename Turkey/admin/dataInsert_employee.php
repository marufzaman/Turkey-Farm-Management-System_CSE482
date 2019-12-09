<?php
	include("includes\config.php");

	$sql = "INSERT INTO `employee` (`e_first`, `e_last`, `e_gender`, `e_cell`, `e_address`, `e_position`, `e_salary`, `e_join`) VALUES ('$_POST[eFirst]', '$_POST[eLast]', '$_POST[eGender]', '$_POST[eCell]', '$_POST[eAddress]', '$_POST[ePosition]', '$_POST[eSalary]', '$_POST[eJoin]')";

	if ($conn->query($sql) === TRUE) {
		echo "New item has been added successfully!<br><br>";
		header("Location:employee.php");

	} 
	else {
		echo "Error: " . $sql . "<br><br>" . $conn->error;
	}

	$conn->close();
?>
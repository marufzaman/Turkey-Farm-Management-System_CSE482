<?php
	include("includes\config.php");

	$id = $_POST['id'];
	$first = $_POST['eFirst'];
	$last = $_POST['eLast'];
	$gender = $_POST['eGender'];
	$cell = $_POST['eCell'];
	$address = $_POST['eAddress'];
	$position = $_POST['ePosition'];
	$salary = $_POST['eSalary'];
	$join = $_POST['eJoin'];

	
	$sql = "UPDATE employee SET e_first = '$first', e_last = '$last', e_gender = '$gender', e_cell = '$cell', e_address = '$address', e_position = '$position', e_salary = '$salary', e_join = '$join' WHERE e_id = '$id'";
	//$result = $conn->query($sql);

	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully<br><br>";
		} 
	else {
			echo "Error: " . $sql . "<br><br>" . $conn->error;
		}
	
	header("Location:employee.php");

?>

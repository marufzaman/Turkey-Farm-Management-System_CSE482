<?php
	include("includes\config.php");

	$sql = "INSERT INTO `message` (`mgs_name`, `mgs_cell`, `mgs_email`, `mgs`) VALUES ('$_POST[name]', '$_POST[cell]','$_POST[mail]', '$_POST[message]')";

	if ($conn->query($sql) === TRUE) {
		echo "New message has been sent successfully!<br><br>";
		header("Location:contact.php");

	} 
	else {
		echo "Error: " . $sql . "<br><br>" . $conn->error;
	}

	$conn->close();
?> 


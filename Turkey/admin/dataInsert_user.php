<?php
	include("includes\config.php");

	$sql = "INSERT INTO `admin` (`a_first`, `a_last`, `a_gender`, `a_cell`, `a_address`, `a_position`, `a_user`, `a_pwd`) VALUES ('$_POST[aFirst]', '$_POST[aLast]', '$_POST[aGender]', '$_POST[aCell]', '$_POST[aAddress]', '$_POST[aPosition]', '$_POST[aUser]', '$_POST[aPwd]')";

	if ($conn->query($sql) === TRUE) {
		echo "New user has been created successfully!<br><br>";
		header("Location: profile.php");

	} 
	else {
		echo "Error: " . $sql . "<br><br>" . $conn->error;
	}

	$conn->close();
?>
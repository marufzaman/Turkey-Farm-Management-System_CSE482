<?php
  include_once "includes\Header.php";
?>
	<title>Employee | Admin</title>
</head>
<body>
	<div id="wrapper">
		<div id="banner-wrapper">
			<header>
				<div id="header-inner">
					<a href="home.php" id="logo" title="Turkey"></a>
					<h2 class="company"> <br>Daudkandi Turkey Farm Ltd.</h2>
					<br><br>
					<nav>
						<a href="#" id="menu-icon"></a>
						<ul>
							<li><a href="home.php" class="current" title="Home">Home</a></li>
							<li><a href="profile.php" title="Profile">Profile</a></li>
							<li><a href="message.php" title="Messages">Customer Messages</a></li>
							<li><a href="logout.php" title="Login">Logout</a></li>
						</ul>
					</nav><br><br><br><br>
					<p class="welcome">Welcome, <label style="color: #117864; text-transform: lowercase;"><?php echo strtoupper($name);?> 😁</label></p>
				</div>
			</header> <br>
		</div>
	<div class="clearfix-padding"></div>

	<br>

	<section class="admin_opt">
		<h3 class="items">Employee List</h3>
		<br> <br> <br>
		<!-- Database-->

		<table class="admin_product">
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Mobile</th>
				<th>Address</th>
				<th>Position</th>
				<th>Salaty</th>
				<th>Join Date</th>
				<th>Action</th>
			</tr>

			<?php
				include("includes\config.php");
				$sql = "SELECT * FROM `employee` ORDER BY e_first, e_last ASC";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	echo "<tr>";
					    	echo "<td>" . $row['e_first']. " " . $row['e_last'] . "</td>";
					    	echo "<td>" . $row['e_gender']. "</td>";
					    	echo "<td>" . $row['e_cell']. "</td>";
					    	echo "<td>" . $row['e_address']. "</td>";
					    	echo "<td>" . $row['e_position']. "</td>";
					    	echo "<td>" . $row['e_salary']. " BDT</td>";
					    	echo "<td>" . $row['e_join']. "</td>";?>

					    	<td style="font-weight: bold; text-align: center;">
								<a class="edt" href="<?php echo "edit_employee.php?id=". $row['e_id'] ?> ">Edit </a>
								<?php echo " | "?>
								<a class="del" href="<?php echo "delete_employee.php?id=". $row['e_id'] ?> "> Remove</a>  
							</td>

				    	</tr>
			<?php	}
				} else {
				    //echo "0 results";
				}
				$conn->close();
			?> 
		</table>
		<br><br>
		<center><a class="insert" href="insert_employee.php">New Employee</a></center>
		
	</section>
	
<?php
  include_once "includes\Footer.php";
 ?>
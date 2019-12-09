<?php
  include_once "includes\Header.php";
?>
	<title>Profile | Admin</title>
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
							<li><a href="home.php" title="Home">Home</a></li>
							<li><a href="profile.php" class="current" title="Profile">Profile</a></li>
							<li><a href="message.php" title="Messages">Customer Messages</a></li>
							<li><a href="logout.php" title="Login">Logout</a></li>
						</ul>
					</nav><br><br><br><br>
					<p class="welcome">Welcome, <label style="color: #117864; text-transform: lowercase;"><?php echo strtoupper($name);?> 😁</label></p>
				</div>
			</header> <br>
		</div>
	<div class="clearfix-padding"></div>

	<section class="admin_opt">
		<h3 class="items">Profile</h3>
		<br> <br> <br>
		<!-- Database-->

		<table class="admin_product">
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Mobile</th>
				<th>Address</th>
				<th>Position</th>
				<th>User Name</th>
				<th>Password</th>
				<th>Action</th>
			</tr>

			<?php
			include("includes\config.php");
			$sql = "SELECT * FROM `admin`";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	echo "<tr>";
				    	echo "<td>" . $row['a_first']. " " . $row['a_last'] . "</td>";
				    	echo "<td>" . $row['a_gender']. "</td>";
				    	echo "<td>" . $row['a_cell']. "</td>";
				    	echo "<td>" . $row['a_address']. "</td>";
				    	echo "<td>" . $row['a_position']. "</td>";
				    	echo "<td>" . $row['a_user']. "</td>";
				    	echo "<td>" . $row['a_pwd']. "</td>";?>

				    	<td style="font-weight: bold; text-align: center;">
							<a class="edt" href="<?php echo "edit_user.php?id=". $row['a_id'] ?> ">Edit </a>
							<?php echo " | "?>
							<a class="del" href="<?php echo "delete_user.php?id=". $row['a_id'] ?> "> Delete</a>  
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
		<center><a class="insert" href="insert_user.php">New User</a></center>
		
	</section>
	
<?php
  include_once "includes\Footer.php";
 ?>
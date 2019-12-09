<?php
  include_once "includes\Header.php";
?>
	<title>Products | Admin</title>
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
							<li><a href="profile.php" title="Profile">Profile</a></li>
							<li><a href="message.php" class="current" title="Messages">Customer Messages</a></li>
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
		<h3 class="items">Customer's Messages</h3>
		<p>*-- Newest First --*</p>
		<br> <br> <br>
		<!-- Database-->

		<table class="admin_product">
			<tr>
				<th style="width: 60px;">SL</th>
				<th style="width: 210px;">Customer Name</th>
				<th style="width: 170px;">Mobile Number</th>
				<th style="width: 170px;">Email Address</th>
				<th style="width: 270px;">Message</th>
				<th style="width: 100px">Action</th>
			</tr>

			<?php
				include("includes\config.php");
				$sql = "SELECT * FROM `message` ORDER BY mgs_id DESC";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	echo "<tr>";
					    	echo "<td>" . $row['mgs_id']. "</td>";
					    	echo "<td>" . $row['mgs_name']. "</td>";
					    	echo "<td>" . $row['mgs_cell']. "</td>";
					    	echo "<td>" . $row['mgs_email']. "</td>";
					    	echo "<td>" . $row['mgs']. "</td>";?>
					    	<td style="font-weight: bold; text-align: center;">
								<a class="del" href="<?php echo "delete_mgs.php?id=". $row['mgs_id'] ?> "> Delete</a>  
							</td>

				    	</tr>
			<?php	}
				} else {
				    //echo "0 results";
				}
				$conn->close();
			?> 
		</table>

		
	</section>

	<br>
	
<?php
  include_once "includes\Footer.php";
 ?>
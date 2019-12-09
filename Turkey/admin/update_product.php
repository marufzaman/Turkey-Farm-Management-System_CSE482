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
		<h3 class="items">Update Products</h3>
		<br> <br> <br>
		<!-- Database-->

		<table class="admin_product">
			<tr>
				<th style="width: 250px;">Item Name</th>
				<th style="width: 250px;">Item Type</th>
				<th style="width: 170px;">Price</th>
				<th style="width: 170px;">Quantity</th>
				<th style="width: 210px;">Action</th>
			</tr>

			<?php
				include("includes\config.php");
				$sql = "SELECT * FROM `items` ORDER BY item_type, item_name";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	echo "<tr>";
					    	echo "<td>" . $row['item_name']. "</td>";
					    	echo "<td>" . $row['item_type']. "</td>";
					    	echo "<td>" . $row['item_price']. "</td>";
					    	echo "<td>" . $row['item_quantity']. "</td>";?>
					    	<td style="font-weight: bold; text-align: center;">
								<a class="edt" href="<?php echo "edit_item.php?id=". $row['item_id'] ?> ">Edit </a>
								<?php echo " | "?>
								<a class="del" href="<?php echo "delete_item.php?id=". $row['item_id'] ?> "> Delete</a>  
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
		<center><a class="insert" href="insert_item.php">Insert New Products</a></center>
		
	</section>

	
<?php
  include_once "includes\Footer.php";
 ?>
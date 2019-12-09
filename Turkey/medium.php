<?php
  include_once "includes\Header.php";
?>
	<title>Daudkandi Turkey Farm Ltd. | Our Products</title>
</head>
<body>
	<div id="wrapper">
		<div id="banner-wrapper">
			<header>
				<div id="header-inner">
					<a href="index.php" id="logo" title="Turkey"></a>
					<nav>
						<a href="#" id="menu-icon"></a>
						<ul>
							<li><a href="index.php" title="Home">Home</a></li>
							<li><a href="about.php" title="About us">About Us</a></li>
							<li><a href="product.php" class="current" title="Our Products">Our Products</a></li>
							<li><a href="Contact.php" title="Contact">Contact</a></li>
							<li><a href="login.php" title="Login">Login</a></li>
						</ul>
					</nav>
				</div>
			</header>
<!--- Slider Start -->
		

<!--- Slider End -->
	</div>
<div class="clearfix-padding"></div>
	<section>
		<h3 class="items"><a href="product.php" title="Other Items">Other Items</a>Price of Medium Size Turkey</h3>
		<br> <br> <br>
		<!-- Database-->

		<table class="price">
			<tr style="color: #1B4F72">
				<th style="width: 60%;">Item Name</th>
				<th style="width: 40%;">Price</th>
			</tr>

			<?php
				include("includes\config.php");
				$sql = "SELECT item_name, item_price FROM `items` where `item_type` = 'Medium Turkey'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	echo "<tr>";
					    	echo "<td>" . $row['item_name']. "</td>";
					    	echo "<td>" . $row['item_price']. "  BDT</td>";?>
				    	</tr>
			<?php	}
				} else {
				    //echo "0 results";
				}
				$conn->close();
			?> 
		</table>


	</section>
<!-- End One Third Padding Section-->
	
	
<?php
  include_once "includes\Footer.php";
 ?>
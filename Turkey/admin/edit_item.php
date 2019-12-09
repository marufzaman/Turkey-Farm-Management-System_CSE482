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

	<form action="update_item.php" method="post" style="width: 80%; margin: 15px auto;">

		<?php
			include("includes\config.php");
			$id = $_GET['id'];
			$sql = "SELECT * FROM `items` where item_id =$id";
			$result = $conn->query($sql);

			$iName="";
			$iType="";
			$iPrice="";
			$iQuantity="";

			//echo "$id";

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			   		$iName = $row['item_name'];
			   		$iType = $row['item_type'];
			   		$iPrice = $row['item_price'];
			   		$iQuantity = $row['item_quantity'];
			    }
			} else {
			    //echo "0 results";
			}
			$conn->close();
		?>

		<section class="admin_opt">
			<h3 class="items"><a href="update_product.php">Go Back</a>Edit Products</h3>
			<br> <br> <br>
			<!-- Database-->


			<table class="edit_item">
				<tr>
					<td style="width: 35%">
						<p>Item Name: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="iName" placeholder="Item Name" value="<?php echo "$iName"?>" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Item Type: </p>
					</td>
					<td style="width: 65%">
						<select class="select" name="iType" required="">
							<option value="Turkey Chicks">Turkey Chicks</option>
							<option value="Medium Turkey">Medium Turkey</option>
							<option value="Adult Turkey">Adult Turkey</option>
							<option value="Egg">Egg</option>
							<option value="Meat">Meat</option>
						</select>
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Price: </p>
					</td>
					<td style="width: 65%">
						<input type="number" name="iPrice" placeholder="Price" value="<?php echo "$iPrice"?>" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Quantity: </p>
					</td>
					<td style="width: 65%">
						<input type="number" name="iQuantity" placeholder="Quantity" value="<?php echo "$iQuantity"?>" required="">
					</td>
				</tr>
			</table>

			<br><input type="hidden" name="id"  value="<?php echo "$id" ?>" ><br>
			<input class="update_btn" type="submit" name="Submit" value="Update">
			
		</section>

	</form>
	
<?php
  include_once "includes\Footer.php";
 ?>
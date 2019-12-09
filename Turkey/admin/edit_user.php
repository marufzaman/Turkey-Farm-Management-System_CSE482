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

	<br>

	<form action="update_user.php" method="post" style="width: 80%; margin: 40px auto;">

	<?php
		include("includes\config.php");
		$id = $_GET['id'];
		$sql = "SELECT * FROM `admin` where a_id =$id";
		$result = $conn->query($sql);

		$aFirst="";
		$aLast="";
		$aGender="";
		$aCell="";
		$aAddress="";
		$aPosition="";
		$aUser="";
		$aPwd="";

		//echo "$id";

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		   		$aFirst = $row['a_first'];
		   		$aLast = $row['a_last'];
		   		$aGender = $row['a_gender'];
		   		$aCell = $row['a_cell'];
		   		$aAddress = $row['a_address'];
		   		$aPosition = $row['a_position'];
		   		$aUser = $row['a_user'];
		   		$aPwd = $row['a_pwd'];
		    }
		} else {
		    //echo "0 results";
		}
		$conn->close();
	?>

	<section class="admin_opt">
		<h3 class="items"><a href="profile.php">Go Back</a>Update User Info</h3>
		<br> <br> <br>
		<!-- Database-->
		<table class="edit_item">
				<tr>
					<td style="width: 35%">
						<p>First Name: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="aFirst" placeholder="First Name" value="<?php echo "$aFirst"?>"  required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Last Name: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="aLast" placeholder="Last Name" value="<?php echo "$aLast"?>"  required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Gender: </p>
					</td>
					<td style="width: 65%">
						<select class="select" name="aGender" value="<?php echo "$aGender"?>"  required="">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Other</option>
						</select>
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Mobile Number: </p>
					</td>
					<td style="width: 65%">
						<input placeholder="+8801XXXXXXXXX" pattern="^([+]8{2})?01(1|8|9|5|6|7)[0-9]{8}$" type="Phone" name="aCell" maxlength="14" value="<?php echo "$aCell"?>"  required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Address: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="aAddress" placeholder="Address" value="<?php echo "$aAddress"?>"  required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Position: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="aPosition" placeholder="Position" value="<?php echo "$aPosition"?>"  required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Username: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="aUser" placeholder="Enter Your Username" value="<?php echo "$aUser"?>"  required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Password: </p>
					</td>
					<td style="width: 65%">
						<input type="password" name="aPwd" placeholder="mm / dd / yyyy" value="<?php echo "$aPwd"?>"  required="">
					</td>
				</tr>
			</table>

			<br><input type="hidden" name="id"  value="<?php echo "$id" ?>" ><br>
			<input class="update_btn" type="submit" name="Submit" value="Update">
		</form>
	</section>
	
<?php
  include_once "includes\Footer.php";
 ?>
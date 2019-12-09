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

	<form action="update_employee.php" method="post" style="width: 80%; margin: 40px auto;">

	<?php
		include("includes\config.php");
		$id = $_GET['id'];
		$sql = "SELECT * FROM `employee` where e_id =$id";
		$result = $conn->query($sql);

		$eFirst="";
		$eLast="";
		$eGender="";
		$eCell="";
		$eAddress="";
		$ePosition="";
		$eSalary="";
		$eJoin="";

		//echo "$id";

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		   		$eFirst = $row['e_first'];
		   		$eLast = $row['e_last'];
		   		$eGender = $row['e_gender'];
		   		$eCell = $row['e_cell'];
		   		$eAddress = $row['e_address'];
		   		$ePosition = $row['e_position'];
		   		$eSalary = $row['e_salary'];
		   		$eJoin = $row['e_join'];
		    }
		} else {
		    //echo "0 results";
		}
		$conn->close();
	?>

	<section class="admin_opt">
		<h3 class="items"><a href="employee.php">Go Back</a>Update Employee Info</h3>
		<br> <br> <br>
		<!-- Database-->


		<table class="edit_item">
				<tr>
					<td style="width: 35%">
						<p>First Name: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="eFirst" placeholder="First Name" value="<?php echo "$eFirst"?>"  required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Last Name: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="eLast" placeholder="Last Name" value="<?php echo "$eLast"?>"  required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Gender: </p>
					</td>
					<td style="width: 65%">
						<select class="select" name="eGender" value="<?php echo "$eGender"?>"  required="">
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
						<input placeholder="+8801XXXXXXXXX" pattern="^([+]8{2})?01(1|8|9|5|6|7)[0-9]{8}$" type="Phone" name="eCell" maxlength="14" value="<?php echo "$eCell"?>"  required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Address: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="eAddress" placeholder="Address" value="<?php echo "$eAddress"?>"  required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Position: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="ePosition" placeholder="Position" value="<?php echo "$ePosition"?>"  required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Salary: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="eSalary" placeholder="Salary" value="<?php echo "$eSalary"?>"  required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Join Date: </p>
					</td>
					<td style="width: 65%">
						<input type="date" name="eJoin" placeholder="mm / dd / yyyy" value="<?php echo "$eJoin"?>"  required="">
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
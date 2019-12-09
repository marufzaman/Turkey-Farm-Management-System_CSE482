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

	<section class="admin_opt">
		<h3 class="items"><a href="employee.php">Go Back</a>New Employee</h3>
		<br> <br> <br>
		<!-- Database-->

		<form action="dataInsert_employee.php" method="post" style="width: 80%; margin: 40px auto;">
		<table class="edit_item">
				<tr>
					<td style="width: 35%">
						<p>First Name: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="eFirst" placeholder="First Name" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Last Name: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="eLast" placeholder="Last Name" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Gender: </p>
					</td>
					<td style="width: 65%">
						<select class="select" name="eGender" required="">
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
						<input placeholder="+8801XXXXXXXXX" pattern="^([+]8{2})?01(1|8|9|5|6|7)[0-9]{8}$" type="Phone" name="eCell" maxlength="14" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Address: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="eAddress" placeholder="Address" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Position: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="ePosition" placeholder="Position" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Salary: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="eSalary" placeholder="Salary" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Join Date: </p>
					</td>
					<td style="width: 65%">
						<input type="date" name="eJoin" placeholder="mm / dd / yyyy" required="">
					</td>
				</tr>
			</table>

			<br>
			<input class="update_btn" type="submit" name="Submit" value="Insert New">
		</form>
	</section>
	
<?php
  include_once "includes\Footer.php";
 ?>
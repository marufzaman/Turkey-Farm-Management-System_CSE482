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

	<section class="admin_opt">
		<h3 class="items"><a href="profile.php">Go Back</a>New Admin</h3>
		<br> <br> <br>
		<!-- Database-->

		<form action="dataInsert_user.php" method="post" style="width: 80%; margin: 40px auto;">
		<table class="edit_item">
				<tr>
					<td style="width: 35%">
						<p>First Name: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="aFirst" placeholder="First Name" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Last Name: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="aLast" placeholder="Last Name" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Gender: </p>
					</td>
					<td style="width: 65%">
						<select class="select" name="aGender" required="">
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
						<input placeholder="+8801XXXXXXXXX" pattern="^([+]8{2})?01(1|8|9|5|6|7)[0-9]{8}$" type="Phone" name="aCell" maxlength="14" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Address: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="aAddress" placeholder="Address" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Position: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="aPosition" placeholder="Position" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Username: </p>
					</td>
					<td style="width: 65%">
						<input type="text" name="aUser" placeholder="Username" required="">
					</td>
				</tr>

				<tr>
					<td style="width: 35%">
						<p>Password: </p>
					</td>
					<td style="width: 65%">
						<input type="password" name="aPwd" placeholder="Choose a Password" required="">
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
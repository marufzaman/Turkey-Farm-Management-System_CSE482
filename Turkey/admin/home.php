<?php
  include_once "includes\Header.php";
?>
	<title>Home | Admin</title>
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

	<br><br><br><br><br>

	<div style="border: 5px;width: 80%;margin-left: 10%;">
		<a href="update_product.php">
			<div class="left_i">
				<p class="bottom-left">Update Products</p>
			</div>
		</a>
		<a href="profile.php">	
			<div class="center_i">
				<p class="bottom-center">Profile</p>
			</div>
		</a>
		<a href="employee.php">
			<div class="right_i">
				<p class="bottom-right">Employee List</p>	
			</div>
		</a>
	</div>
	
	<br><br><br><br><br><br><br><br><br>
	
<?php
  include_once "includes\Footer.php";
 ?>
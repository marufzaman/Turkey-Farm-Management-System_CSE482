<?php
	$error = "";
	if(isset($_POST['loginbtn'])){
		$userName = $_POST['user'];
		$userPass = $_POST['password'];

		include('includes\config.php');
		$sql = " SELECT * FROM admin WHERE a_user = '$userName' AND a_pwd =  '$userPass'";
		$result = $conn->query($sql);
		if($result->num_rows >0){
			session_start();
			$_SESSION['id'] = $userName; 
			header("location: admin/home.php");
		}
		else{
			$error = "invalid username or password!";
		}
	}
?>

<?php
  include_once "includes\Header.php";
?>
	<title>Daudkandi Turkey Farm Ltd. | Login</title>

	<!-- Custom Theme files -->
	<link href="login-css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="login-css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="login-css/loginstyle.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- jquery files-->
	<script src="jquery/jquery.js"></script>
	<script src="jquery/jquery-ui.js"></script>
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
							<li><a href="product.php" title="Our Products">Our Products</a></li>
							<li><a href="Contact.php" title="Contact">Contact</a></li>
							<li><a href="login.php" class="current" title="Login">Login</a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
	<div class="clearfix-padding"></div>
	

	<div class="main-agileits">
	<!--form-stars-here-->
			<div class="form-agile">
				<h2>Admin Login</h2>
				<form method="POST">
					<div class="form-sub">
						<input type="text" name="user" placeholder="Enter Username " required=""/>
					<div class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					</div>
					<div class="form-sub">
						<input type="password" name="password" placeholder="Enter Password" required=""/>
					<div class="icon">
						<i class="fa fa-unlock-alt" aria-hidden="true"></i>
					</div>
					</div>
					<label class="w3-text-red"><b><?php echo $error; ?></b></label>
					<div class="submit">
						<input type="submit" name="loginbtn" value="Login">
					</div>
				</form>
			</div>
	<!--//form-ends-here-->
	</div>

<!-- End One Third Padding Section-->
	
	
<?php
  include_once "includes\Footer.php";
 ?>
<?php
  include_once "includes\Header.php";
?>
	<title>Daudkandi Turkey Farm Ltd. | Home</title>
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
							<li><a href="index.php" class="current" title="Home">Home</a></li>
							<li><a href="about.php" title="About us">About Us</a></li>
							<li><a href="product.php" title="Our Products">Our Products</a></li>
							<li><a href="Contact.php" title="Contact">Contact</a></li>
							<li><a href="login.php" title="Login">Login</a></li>
						</ul>
					</nav>
				</div>
			</header> <br> <br> <br>
<!--- Slider Start -->
		<script src="js/jquery.bxslider.min.js"></script><!--For Image Slider-->
		<br> <br>
		<div class="slide-wrap">
			<section class="slider">
				<ul class="slider1">
					<li><img src="img/pics/desktop-1.png"></li>
					<li><img src="img/pics/desktop-2.png"></li>
					<li><img src="img/pics/desktop-3.png"></li>
				</ul>
			</section>
		</div>
		<script type="text/javascript">
			$('.slider1').bxSlider({
				mode: 'fade',
				captions: false,
				auto:true,
				pager:false,

			});
			$('.slider2').bxSlider({
				pager:false,
				captions: true,
				maxSlides: 3,
				minSlides: 1,
				slideWidth: 230,
				slideMargin: 10
			});
			$('.slider3').bxSlider({
				mode: 'fade',
				captions: false,
				auto:true,
				pager:false,
				controls:false,
			});
		</script>
	    
<!--- Slider End -->
	</div>
<div class="clearfix-padding"></div>
	<section class="left-col">
		<p>Daudkandi Turkey Farm is one of the largest Turkey farm. With its specialized knowledge on the respective sector based on the assistance of experienced experts, this company is continuously establishing new dimension in farming of turkey in Bangladesh. <a href="about.php" style="font-style: italic; color: #EC8063; text-decoration: underline;">Details</a></p>
	</section>
	<section class="sidebar">
		<h2 class="company">Welcome to <br>The Website of <br>Daudkandi Turkey Farm Ltd.</h2>
	</section>
<!-- End left Column and Sidebar Image-->
<div class="clearfix-padding"></div>
	<section class="one-third-padding">
		<h3 class="heading">Sales Notice Board</h3>
		<p style="border: 5px">Our Turkey Farm offers healthy and strong turkey birds of different age for sell.<br><br>
		<span style="color: #A52A2A; font-weight: bolder;">Turkey birds are available of the following ages:<br></span>

		1) 1 week. <br>
		2) 2 weeks. <br>
		3) 3 weeks. <br>
		4) 1 month. <br>
		5) 1-2 months. <br>
		6) 2-3 months. <br>
		7) 3-4 months. <br>
		8) 4-5 months. <br>
		9) 5-6 months. <br>
		10) 6-7 months. <br>

		Sales are going on priority contact basis.

		Those who have turkey farms already or going to establish a new farm will get attractive discount!<br>
		</p>
	</section>
	<section class="right-col">
		<h3 class="heading">Our Products</h3>
		<p style="width: 90%; text-align: justify;">All birds are processed on the farm in our processing facility and are inspected for wholesomeness. Our and turkey are sold wholesale to local markets in various states. We are also connected with different restaurant in order to provide fresh turkey.</p>
			<div style="border: 5px;width: 80%;margin-left: 10%;">
				<a href="small.php">
					<div class="left">
						<img src="img/pics/small.png" alt="Small Turkey" style="width: 100%">
						<div class="bottom-left"><a href="small.php">Turkey Chick</a></div>
					</div>
				</a>
				<a href="medium.php">	
					<div class="right">
						<img src="img/pics/medium.png" alt="Medium Size Turkey" style="width: 100%">
						<div class="bottom-right"><a href="medium.php">Medium Size Turkey</a></div>
					</div>
				</a>
				<a href="large.php">
					<div class="left">
						<img src="img/pics/large.png" alt="Large Size Turkey" style="width: 100%">
						<div class="bottom-left"><a href="large.php">Large Size Turkey</a></div>
					</div>
				</a>
				<a href="egg.php">
					<div class="right">
						<img src="img/pics/egg.png" alt="Egg" style="width: 100%">
						<div class="bottom-right"><a href="egg.php">Egg</a></div>
					</div>
				</a>
				<a href="meat.php">
					<div class="left">
						<img src="img/pics/meat.png" alt="Meat (K.G)" style="width: 100%">
						<div class="bottom-left"><a href="meat.php">Meat (K.G)</a></div>
					</div>
				</a>
			</div>
	</section>
<!-- End One Third Padding Section-->
	
<?php
  include_once "includes\Footer.php";
 ?>
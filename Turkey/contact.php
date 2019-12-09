<?php
	include_once "includes\Header.php";
?>
	<title>Daudkandi Turkey Farm Ltd. | Contact</title>
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
							<li><a href="about.php"  title="About Us">About Us</a></li>
							<li><a href="product.php" title="Our Products">Our Products</a></li>
							<li><a href="Contact.php" class="current" title="Contact">Contact</a></li>
							<li><a href="login.php" title="Login">Login</a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>

		<br>
		<!-- Container (Contact Section) -->

		<div class="clearfix-padding"></div>
		<section class="left">
			<h3 class="heading">Contact</h3>
		    <p>Contact us and we'll get back to you within 24 hours.</p>
		    <br>
		    <br>

		    <p><span style="color: #A52A2A; font-weight: bolder;"> Daudkandi Bazar Road</p>
		   	<p><span style="color: #A52A2A; font-weight: bolder;"> Daudkandi, Comilla</p>
		   	<p><span style="color: #A52A2A; font-weight: bolder;"> +880 1781615899</p>
		   	<p><span style="color: #A52A2A; font-weight: bolder;"> daudkandi.turkeyfarm@gmail.com</p>
		</section>

		<section class="right">
			<h3 class="heading">Mail Us</h3>
			<form class="con_form" action="contact-action.php" method="post">
				<table>
					<tr>
						<td>
							<p>Name: </p>
						</td>
						<td>
							<div class="form-title">
								<input placeholder="Name"  type="text" name="name" required="" minlength="5">
							</div>
						</td>
					</tr>

					<tr>
						<td style="width: 155px;">
							<p>Mobile Number: </p>
						</td>
						<td>
							<div class="form-title">
								<input placeholder="+8801XXXXXXXXX" pattern="^([+]8{2})?01(1|8|9|5|6|7)[0-9]{8}$" class="phone" type="Phone" name="cell" required="">
							</div>
						</td>
					</tr>

					<tr>
						<td>
							<p>E-mail: </p>
						</td>
						<td>
							<div class="form-title">
								<input placeholder="E-mail"  type="email" name="mail" required="">
							</div>
						</td>
					</tr>

					<tr>
						<td>
							<p>Message: </p>
						</td>
						<td>
							<div class="form-title">
								<textarea placeholder="Type your message Here. Not more than 384 Character" type="text" name="message" required="" rows="10" cols="30"></textarea>
							</div>
						</td>
					</tr>

					<tr>
						<td>
							
						</td>
						<td>
							<div class="form-title">
								<button name="submit">Submit</button>
							</div>
						</td>
					</tr>
				</table>
			</form>
		</section>
<?php
  include_once "includes\Footer.php";
 ?>
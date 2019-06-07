
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Swim club</title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							(+355)668181832
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							swimclub@gmail.com
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>

						

					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><h2 style="color: white">Swim Club</h2></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu" style="font-weight: bold">
							
						</ul>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
			<div class="member">
			<h2>Member Register/Login</h2>
			<?php
			
			             if(isset($_SESSION['login_user'])) {
			
			            ?>

						<div class="user-panel">
							<a href="">Welcome : <i><?php echo $login_session; ?></i></a>
							<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
						</div>

					  <?php }  ?>

					  <?php
			
			           if(!isset($_SESSION['login_user'])) {
			
			          ?>

			            <div class="user-panel">
							<a href="Register.php"><i class="fa fa-user-circle-o"></i> Register</a>
							<a href="LoginIndex.php"><i class="fa fa-sign-in"></i> Login</a>
						</div>
			</div>

					<?php }  ?>
			<br>
			<br>
			<div class="user-panel">
			<h2>Coach Register/Login</h2>
						<?php
			
			             if(isset($_SESSION['login_user'])) {
			
			            ?>

						<div class="user-panel">
							<a href="">Welcome : <i><?php echo $login_session; ?></i></a>
							<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
						</div>

					  <?php }  ?>

					  <?php
			
			           if(!isset($_SESSION['login_user'])) {
			
			          ?>

			            <div class="user-panel">
							<a href="RegisterC.php"><i class="fa fa-user-circle-o"></i> Register</a>
							<a href="LoginIndexC.php"><i class="fa fa-sign-in"></i> Login</a>
						</div>


					<?php }  ?>
			</div>
		</div><br><br>
		
		<div class="competition">
<button onclick="window.location.href='competiton.php'">COMPETITION</button>
	</div>
		<br>
		<div class="performance">
			<button onclick="window.location.href='performance.php'">PERFORMANCE</button></div>
	</header>
	
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="club.jpg">
		
	</section>
	<!-- Hero section end -->

	<!-- feature section -->
	
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 footer-widget">
					<h2 style="color: white">Swim Club</h2>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US
						</h5>
						<p><i class="fa fa-map-marker"></i>Stoke On Trent, United Kingdom</p>
						<p><i class="fa fa-phone"></i>(+355)6661214321</p>
						<p><i class="fa fa-envelope"></i>swimclub@gmail.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6  footer-widget">
					<div class="newslatter-widget">
					
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">About us</a></li>
						<li><a href="">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
                                        
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
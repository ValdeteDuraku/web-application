	
<?php
$connection = mysqli_connect("localhost", "root", "","swimclub");
include('sessionC.php');
$user_check=$_SESSION['login_user'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];

?>

<html>
<head>
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
							(+355)6661214321
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
						
						<?php
			
			             if(isset($_SESSION['login_user'])) {
			
			            ?>

						<div class="user-panel">
							<a href="">Welcome : <i><?php echo $login_session; ?></i></a>
							<a href="logoutC.php"><i class="fa fa-sign-out"></i> Logout</a>
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
					</div>
				</div>
			</div>
				<h2>This is coach profile</h2>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="profile.jpg">
		<div class="container text-white">
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
		</div>
	</div>
<div class="notes">
<button onclick="window.location.href='notes.php'">NOTES</button>
	</div>
	
<div class="col-lg-4 col-md-7 sidebar">
					<div class="author-card">
						<div class="author-img set-bg"><i class="fa fa-user fa-5x"></i></div>
						<div class="author-info">
							<p><?php echo $firstname; ?></p>
							<p><?php echo $lastname; ?></p>
	
	
							
							
						</div>
						<div class="author-contact">
							<p><i class="fa fa-envelope"></i><?php echo $user_check; ?></p>
						</div>
					</div>
	 
				</div>
	<!-- page -->
	<div class="notes">

	</div>
		<!-- page end -->

	<!-- Footer section -->
	<footer class="footer- section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row" >
				<div class="col-lg-4 col-md-6 footer-widget" style="margin-top: 10%">
					<h2 style="color: white">Swim club</h2>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 footer-widget" style="margin-top: 10%">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>United Kingdom</p>
						<p><i class="fa fa-phone"></i>(+355)6661214321</p>
						<p><i class="fa fa-envelope"></i>swimclub@gmail.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6  footer-widget" style="margin-top: 10%">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
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
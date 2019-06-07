<!DOCTYPE html>
<html lang="en">
<head>
	<title>Swiming Club</title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="bootstrap.min.css"/>
	<link rel="stylesheet" href="font-awesome.min.css"/>
	<link rel="stylesheet" href="animate.css"/>
	<link rel="stylesheet" href="owl.carousel.css"/>
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
							Sclub@gmail.com
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
						<div class="user-panel">
							<a href="RegisterC.php"><i class="fa fa-user-circle-o"></i> Register</a>
							<a href="LoginIndexC.php"><i class="fa fa-sign-in"></i> Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><h2 style="color: white">Swimming Club</h2></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="istock.jpg">
		<div class="container text-white">
		</div>
	</section>
	<!--  Page top end -->

	<!-- page -->
	<section class="page-section blog-page">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-6">
					<div class="contact-right">
						<div class="section-title">
							<h3>Register</h3>
							
						</div>
						<form class="contact-form" method="post" action="registeractionC.php">
							<div class="row">
								
									<div class="col-md-6">
										<input type="text" name="firstname" placeholder="First Name" required="required">
									</div>
									<div class="col-md-6">
										<input type="text" name="lastname" placeholder="Last Name" required="required">
									</div>
									<div class="col-md-6">
										<input type="text" name="email" placeholder="Email" required="required">
									</div>
									
								<div class="col-md-6">
										<input type="password" name="password" placeholder="Password" required="required">
									</div>
								
								<div class="col-md-6">
										<input type="number" name="Note_Id" placeholder="0" required="required">
									</div>
								<div class="col-md-6">
										<input type="number" name="difference" placeholder="1" required="required">
									</div>
								<div class="col-md-6">
										<input type="file" name="file1" placeholder="Qualification" required="required">
									</div>
									<div class="col-md-12">
										<input type="submit" class="site-btn" value="REGISTER NOW"></button>
									</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- page end -->

	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 footer-widget">
					<h2 style="color: white">Swimming Club</h2>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6  footer-widget">
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
					<ul>
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

	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>


</body>
</html>
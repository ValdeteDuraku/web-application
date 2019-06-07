<?php
$connection = mysqli_connect("localhost", "root", "","swimclub");
include('session.php');	
$user_check=$_SESSION['login_user'];
$login_session =$row['fname'];

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
						

						<div class="user-panel">
							<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
						</div>

					  <?php   ?>

					  <?php
			
			           if(!isset($_SESSION['login_user'])) {
			
			          ?>

			            <div class="user-panel">
							<a href="Register.php"><i class="fa fa-user-circle-o"></i> Register</a>
							<a href="LoginIndex.php"><i class="fa fa-sign-in"></i> Login</a>
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
				<h2>Notes</h2>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="note.jpg">
		<div class="container text-white">
		</div>
	</section>
	<!--  Page top end -->
	

	
	<table border='1' align="center">
	<tr>
		<th>First Name</th>
		<th>Coach</th>
		<th>Note</th>
		</tr>
	 <td><?php echo $login_session ; ?></td>
	<td><?php  
		$coach=mysqli_query($connection,"select Coach from notes where Member='".$login_session."'")or die(mysqli_error($db));;
while($row = mysqli_fetch_array($coach)) {
	echo "$row[Coach] <br>";
	
}?>
		</td>
	<td>
		<?php 
		 $ses_sql=mysqli_query($connection,"select Notes from notes where Member='".$login_session."'")or die(mysqli_error($db));;
while($row = mysqli_fetch_array($ses_sql)) {
	echo "$row[Notes] <br>";
	
} ?>
		</td>
	</table>
	

	
	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
		</div>
	</div>
	<!-- Header section end -->
	

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
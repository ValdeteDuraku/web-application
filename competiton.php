<?php 
$dataPoints = array(
	array("x"=> 1 , "y"=> 55.6, "indexLabel"=> "First Place"),
	array("x"=> 2, "y"=> 58.5, "indexLabel"=> "Second Place"),
	array("x"=> 3, "y"=> 60, "indexLabel"=> "Third Place"),
	array("x"=> 4, "y"=> 61.40, "indexLabel"=> "Fourth Place"),
);
	
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
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Winners"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
		   }
	</script> 
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
		
				<h2>COMPETITION</h2>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="competition.jpg">
		<div class="container text-white">
		</div>
	</section>
	<!--  Page top end -->
	<h5>Table of records from 2018 Competiton</h5>
	<br><br>
	<div class="graphics">
		
<div id="chartContainer" style="height: 200px; width: 20%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<table border="1" div class="tabl1">
	<br><br>
	<tr>
	<th> Swimmer </th>
	<th> Coach </th>
	<th> Age </th>
	</tr>
	<tr>
	<td> Endru </td>
	<td> Philip </td>
	<td> 28 </td>
	</tr>
	<tr>
	<td> Elise </td>
	<td> Amber </td>
	<td> 25 </td>
	</tr>
	<tr>
	<td> Anis </td>
	<td> Emma </td>
	<td> 28 </td>
	</tr>
	<tr>
	<td> Holly </td>
	<td> Stonne </td>
	<td> 27 </td>
	</tr>
	</table>
	</div>
	
	<br><br>
	<br>
	<br>
	<h5> Swimers part of competition for 2019.</h5>
	
	<div id="comp-members">
	<table border='1' align="center">	
		
	<tr><br>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Coach</th>
		<th>Age</th>
		</tr>
	<tr>
		<td><?php

$connection = mysqli_connect("localhost", "root", "","swimclub");
		
$sqliCommand = mysqli_query($connection, "(SELECT  fname,lastname,Coach,age FROM members WHERE performance='excellent') UNION (SELECT firstname,lastname,Coach,age FROM swimmer WHERE performance='excellent')")or die(mysqli_error($db));

while($row = mysqli_fetch_array($sqliCommand)) {
	echo "$row[fname] <br>";
	
}?></td>
		<td>
		<?php

$connection = mysqli_connect("localhost", "root", "","swimclub");
		
$sqliCommand = mysqli_query($connection, "(SELECT  fname,lastname,Coach FROM members WHERE performance='excellent') UNION (SELECT firstname,lastname,Coach FROM swimmer WHERE performance='excellent')")or die(mysqli_error($db));

while($row = mysqli_fetch_array($sqliCommand)) {
	echo "$row[lastname] <br>";
	
}?>
		</td>
		<td>		<?php

$connection = mysqli_connect("localhost", "root", "","swimclub");
		
$sqliCommand = mysqli_query($connection, "(SELECT  fname,lastname,Coach FROM members WHERE performance='excellent') UNION (SELECT firstname,lastname,Coach FROM swimmer WHERE performance='excellent')")or die(mysqli_error($db));

while($row = mysqli_fetch_array($sqliCommand)) {
	echo "$row[Coach] <br>";
	
}?></td>
<td>		
	<?php

$connection = mysqli_connect("localhost", "root", "","swimclub");
		
$sqliCommand = mysqli_query($connection, "(SELECT  fname,lastname,Coach,age FROM members WHERE performance='excellent') UNION (SELECT firstname,lastname,Coach,age FROM swimmer WHERE performance='excellent')")or die(mysqli_error($db));

while($row = mysqli_fetch_array($sqliCommand)) {
	echo "$row[age] <br>";
	
}?></td>
		</tr>
	</table>
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
<?php
include('LoginC.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
	if($difference ==1){ 
header("location: coachprofile.php");
}
	else { 
header("location: profil.php");
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Swimm Club</title>
<link href="css/login_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Login the Swim Club</h1>
<div id="login">
<h2>Login</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit2" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
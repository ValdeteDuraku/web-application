<?php

$connection = mysqli_connect("localhost", "root", "","swimclub");

session_start();

$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($connection,"select * from coach where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);

$login_session =$row['firstname'];

if(!isset($login_session)){
mysqli_close($connection); 
header('Location: first.php'); 
}

?>
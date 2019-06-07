<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","swimclub");
// Selecting Database
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select * from members where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['fname'];

if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: first.php'); // Redirecting To Home Page
}
?>
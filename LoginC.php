<?php
session_start(); // Starting Session
$_SESSION = array();
$error=''; // Variable To Store Error Message
if (isset($_POST['submit2'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","swimclub");

	// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from coach where password='".$password."' AND email='".$username."'");
$rows = mysqli_num_rows($query);
	
	if ($rows == 1) 
{
$difference= 1;
	$_SESSION['login_user']=$username; // Initializing Session
			header("location: coachprofile.php");

		
// Redirecting To Other Page
} 
mysqli_close($connection); // Closing Connection
}
}
?>
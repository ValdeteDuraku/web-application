<?php
session_start(); // Start sessions
if(session_destroy()) // Destroying All Sessions
{
header("Location: LoginIndexC.php"); // Redirecting To Home Page
}
?>
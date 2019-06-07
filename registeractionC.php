<?php

session_start();
$connection=mysqli_connect("localhost","root","","swimclub");

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$notes=$_POST['Note_Id'];
$file1=$_POST['file1'];
$difference=$_POST['difference'];

$query="insert into coach values('".$firstname."', '".$lastname."', '".$email."', '".$password."', '".$notes."','".$file1."','".$difference."')";

$result=mysqli_query($connection,$query);


if($result)
{
		echo"<script type='text/javascript'>";
  echo "alert('You have been registered successfully! Now you can login to see your performance');";
  echo "window.location ='LoginIndexC.php';";   
  echo"</script>";
		
		}

		
		else
		{
		echo"<script type='text/javascript'>";
  echo "alert('You could not registered! Try to fill correct the form required');";
  echo "window.location = 'RegisterC.php';";   
  echo"</script>";
		
		}
?>

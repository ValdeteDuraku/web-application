<?php

session_start();
$connection=mysqli_connect("localhost","root","","swimclub");


$errors = array();
$required = array("fname","lastname","Email","age","emergency","performance","Coach","parent","password","difference");  
foreach($_POST as $key=>$value)
{
    if(!empty($value))
    {
        $$key = $value;
    }
    else
    {
         if(in_array($key, $required))
         {
             array_push($errors, $key);
         }
    }        

}

$firstname=$_POST['fname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$age=$_POST['age'];
$emergency=$_POST['emergency'];
$performance=$_POST['performance'];
$Coach=$_POST['Coach'];
$parent=$_POST['parent'];
$password=$_POST['password'];
$difference=$_POST['difference'];

$query="insert into members values('".$firstname."', '".$lastname."', '".$email."', '".$age."', '".$emergency."', '".$performance."', '".$Coach."', '".$parent."', '".$password."', '".$difference."')";

$result=mysqli_query($connection,$query);


if($result)
{
		echo"<script type='text/javascript'>";
  echo "alert('You have been registered successfully! Now you can login to see your performance');";
  echo "window.location ='LoginIndex.php';";   
  echo"</script>";
		
		}
//echo "shtimi i te dhenave u be";
		
		else
		{
		echo"<script type='text/javascript'>";
  echo "alert('You could not registered! Try to fill correct the form required');";
  echo "window.location = 'Register.php';";   
  echo"</script>";
		
		}
?>

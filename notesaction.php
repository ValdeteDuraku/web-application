<?php

$connection=mysqli_connect("localhost", "root", "","swimclub");
include('notes.php');

print_r($_POST);
if(isset($_POST['Submit'])){

	$Notes=$_POST['Notes'];
$fname=$_POST['Member'];
	
foreach($Notes as $key => $value){ 

$query1="insert into notes (Notes,Member,Coach) values('".$value."','".$fname[$key]."','".$firstname."')";


$result=mysqli_query($connection,$query1);
	switch ($value) {
    case "9":

			$sql = "UPDATE members SET performance='excellent' WHERE fname='".$fname[$key]."';";
   break;
		case "8":

			$sql = "UPDATE members SET performance='Good' WHERE fname='".$fname[$key]."';";
			  break;
			 
case "7":

			$sql = "UPDATE members SET performance='Middle_level' WHERE fname='".$fname[$key]."';";
			
			  break;
 case "6":

			$sql = "UPDATE members SET performance='Basic_Level' WHERE fname='".$fname[$key]."';";
			  break;
			
 case "5":

			$sql = "UPDATE members SET performance='Pass' WHERE fname='".$fname[$key]."';";
			  break;
case "4":

			$sql = "UPDATE members SET performance='Fail' WHERE fname='".$fname[$key]."';";
			
        break;
			
		  default:
        echo "Your performance is not enought to participate in competition!";
	}
	$result=mysqli_query($connection,$sql);
 if($result)
 {
	
	echo"<script type='text/javascript'>";
	echo "alert('Your notes are send successfully.');";
	 echo "window.location ='notes.php';"; 
	echo"</script>";
 } 
else 
{
	echo"<script type='text/javascript'>";
	echo "alert('Sorry!Can't send notes!);";
	 echo "window.location ='notes.php';";   
	echo"</script>";
 }
}

}
?>
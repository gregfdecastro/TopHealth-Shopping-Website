<?php
session_start();
require 'dbcon.php';

if(isset($_POST['send']))
{
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $feedback = mysqli_real_escape_string($con, $_POST['feedback']);
   
   
	$query = "INSERT INTO feedback (fullname,email,feedback) VALUES ('$fullname','$email','$feedback')";
        mysqli_query($con,$query) or die("Data not saved!");
		echo '<script>alert("Feedback sent!")</script>';
        

}else{
    echo '<script>alert("Feedback not sent!")</script>';
}
?>
<?php
session_start();
require 'dbcon.php';

if(isset($_POST['save']))
{
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

	if($password == $confirmpassword){
		
		$query = "INSERT INTO user (fullname,username,contact,email,address,password,confirmpassword) VALUES ('$fullname','$username','$contact','$email','$address','$password','$confirmpassword')";
        mysqli_query($con,$query) or die("Data not saved!");
		echo '<script>alert("Registration Successful.")</script>';
        
        
	}else{
		echo '<script>alert("Please re-enter your password.")</script>';
    
	}

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
    <title>TopHealth</title>
    <link rel="icon" href="images/logo and design/Health Shop Logo.png" type="image/icon type">
</head>
<body>
<nav>
        <div class="logo"> 
         <img src="images/logo and design/Health Shop Logo.png" alt="Logo" width="80" height="80"> 
         <a> TopHealth </a> 
     </div>
     
    </nav>
    <div class="box">
        
        <div class="inner-box">
                <form action="registration.php" method="POST">
				
		
		    <h2>Registration</h2>
			<input type="text" name="fullname" placeholder="Enter full name" required>
			<input type="text" name="username" placeholder="Enter username" required>
			<input type="number" name="contact" placeholder="Enter phone number" required>
			<input type="email" name="email" placeholder="Enter email address" required>
			<input type="text" name="address" placeholder="Enter complete address" required>
			<input type="password" name="password" placeholder="Enter password" required>
			<input type="password" name="confirmpassword" placeholder="Confirm password" required>
			
		    <input type="submit" name="save" value="Submit">
			
			<p style="text-align:center;">
			<span> Already registered? </span><a class="link" href="login.php">Login</a>
		</p>
				 
				
			
	
		</form>
        </div>  
    </div>
    
</body>
</html>
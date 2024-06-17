<?php
session_start();
require 'dbcon.php';

if(isset($_POST['admin']))
{
    
    $username = $_POST['username'];
    $password =  $_POST['password'];
   
    $query="select * from admin where username='$username'AND password='$password'";
    $result=mysqli_query($con,$query) or die("Data Retrieval Error");

if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
  
    $_SESSION['password'] = $row['password'];
   
    header("Location: landingpage.php");

}else{
    echo '<script>alert("Invalid Login Credentials.")</script>';
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
        <form action="login-admin.php" method="POST">

                <h2>Admin Login</h2>
                    
                    <input type="text" name="username" placeholder="Username" required/>
                    <input type="password" name="password" placeholder="Password" required/>

                <p><input type="checkbox" /><span> Keep me signed in </span></p>
                <p><span class="forgot"><a href="forgotpassword.php">Forgot password?</a></span>
                </p>

                    <input type="submit" name="admin" value="Login"/>

                <p style="text-align:center;">
                    <span> Not yet registered? </span><a class="link" href="registration.php"> Signup now</a>
                </p>

                </form>
        </div>  
    </div>
    
</body>
</html>
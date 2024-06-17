<?php

session_start();
require 'dbcon.php';

  if(isset($_SESSION['id'])==false){
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <title>TopHealth</title>
  <link rel="icon" href="images/logo and design/Health Shop Logo.png" type="image/icon type">
</head>
<body>

<nav>
        <div class="logo"> 
         <img src="images/logo and design/Health Shop Logo.png" alt="Logo" width="80" height="80"> 
         <a> TopHealth </a> 
     </div>
     
       
      
     <div class="navLinks">
          <ul>
             <li><a href="home-logged.php">Home</a></li>
             <li><a href="about-logged.php">About</a></li>
             <li><a href="products-logged.php">Products</a></li>
            
             <li><a href="#">Contact</a></li>
     
             <div class="dropdown">
                 <a class="fa fa-user" style="font-size:24px; color: #2691d9"></a>
                 <div class="dropdown-content">
                 <a href="profile.php">Profile</a>
                    <a href="login-admin.php">Admin</a>
                   <a href="logout.php">Logout</a>
                 </div>
               </div>
              
        
          </ul>
        </div>
</nav>

<nav>
      <div class="column3">
        <img src="images/logo and design/page_design.png" alt="banner" width="500px">
      </div>
    </nav>
      

<div class="formcontact">
      <form action="add_feedback.php" method="POST">
        <div class="about3">
          <h2>Contact Us</h2>
        </div>
		<input type="text" name="fullname" placeholder="Fullname" required/>
		
		<input type="email" name="email"  placeholder="Email Address" required/>
   
		<input type="text" name="feedback" placeholder="Message"required/>
	

    <input type="submit" name="send" value="Submit">
	
    </form>
</div>



   <div class="rights4"> <a> © 2022 TopHealth. All Rights Reserved. </a> 
   </div>
    
 
 

</body>
</html>
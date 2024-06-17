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
    <title>TopHealth</title>
    <link rel="icon" href="images/logo and design/Health Shop Logo.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body>
<nav style="margin-right: 10px; width:96%">
        <div class="logo"> 
         <img src="images/logo and design/Health Shop Logo.png" alt="Logo" width="80" height="80"> 
         <a> TopHealth </a> 
     </div>
     
       
      
        
     <div class="navLinks">
          <ul>
             <li><a href="home-logged.php">Home</a></li>
             <li><a href="about-logged.php">About</a></li>
             <li><a href="products-logged.php">Products</a></li>
            
             <li><a href="contact-logged.php">Contact</a></li>
     
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

      <div class="about">
         <h2>About Me</h2>
         
         <br><br>
         <div class="names" style="margin-left: 25%;">
    <img src="images/images-about/Greg.jpg" alt="Greg" width="200" height="200" style="display: block; margin: 0 auto;">
    <p style="margin: 0; font-weight: bold;">Greg Francis De Castro</p>
</div>
        

<br><br>
         <p style="text-align: justify; max-width: 600px; margin: 0 auto;">
    Hello! My name is Greg Francis De Castro, and I am a Bachelor of Science in Information Technology (BSIT) student at Bulacan State University. This website is a project for my Web and Systems Technologies 1 course.
    <br><br>
    Throughout my studies, I have developed a strong foundation in web development, programming, and technology. I am passionate about creating efficient, user-friendly web applications that provide a seamless experience for users.
    <br><br>
    This project showcases my skills and knowledge gained during my coursework, and I am excited to share it with you. Thank you for visiting my website!
    <br><br>
    Feel free to explore and learn more about my work. If you have any questions or feedback, please do not hesitate to contact me.
</p>

        
        </div>

       
      </div>

    <nav>
      
      
    
             
      
      
    
    </nav>

      
    <div class="rights2" style="margin-top: 5%;" > <a> © 2022 TopHealth. All Rights Reserved. </a> 


</body>
</html>
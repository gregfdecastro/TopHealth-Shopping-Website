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
     <a href="login.php"><button type="button">User login</button> </a>

                   
                 </div>
               </div>
     </ul>
   </div>
 </nav>

   
   <!-- Header content with banner image -->
   <div class="row">
     <div class="column1">
       <h1>Online Health</h1>
       <h1>Shopping Website</h1>  
       <p>It’s your future. Be there happy and healthy.</p>
       <div class="dropdown">
           <a href="#"><button type="button">Admin</button> </a> 
                 <div class="dropdown-content">
                 <a href="admin.php">Manage users</a>
                 <a href="admin-cart.php">Manage products</a>
                 <a href="admin-sales.php">Check orders</a>
                 <a href="admin-feedback.php">Check feedbacks</a>
                 
                 </div>
               </div>
     </div>
     <div class="column2">
       <img src="images/logo and design/page_design.png" alt="banner" width="500px">
     </div>
   </div>


   <div class="rightsland"> <a> © 2022 TopHealth. All Rights Reserved. </a> 
   

 

</body>
</html>
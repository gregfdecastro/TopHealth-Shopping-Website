

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
             <li><a href="home.php">Home</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="products.php">Products</a></li>
            
             <li><a href="contact.php">Contact</a></li>
     
             <div class="dropdown">
           <a href="#"><button type="button">Login</button> </a> 
                 <div class="dropdown-content">
                 <a href="login.php">User login</a>
                    <a href="login-admin.php">Admin login</a>
                 </div>
               </div>
            
               <li>  <a href="registration.php"><button type="button">Signup</button> </a> </li>
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
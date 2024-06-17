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
             <li><a href="#">Home</a></li>
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
      <div class="gallery">
 <div class="topnav">
    

 <form method="post">
   
<input type="text" name="search" placeholder="Search...">
<a class="fa fa-shopping-cart" href="cart.php" style="font-size:36px; color: #2691d9;" ></a>	
<div class="buttonSearch">
<button type="submit" name="look">
</div>

	
</form>
</div>
</div>
<?php

$conn = new PDO("mysql:host=localhost;dbname=decastro_database",'root','');

if (isset($_POST["look"])) {
	$str = $_POST["search"];
	$sth = $conn->prepare("SELECT * FROM `products` WHERE name like '%$str%'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
	       
            <table class="center">
            <tr>
            <th>Results</th>
            <th></th>
            <th>Name</th>
            <th></th>
            <th>Price</th>
            <th></th>
            <th>Available</th>
            
     
         </tr>
			<tr>
                 <td></td>
                <td></td>
				<td><?php echo $row->name; ?></td>
                <td></td>
				<td>₱<?php echo $row->price;?></td>
                <td></td>
                <td>&#10004;</td>
			</tr>
			</Table>
<?php 
	}
		
		
		else{
			echo '<script>alert("Search No Result.")</script>';
		}


}

?>
    
</div>

<div class="banner">
<img src="images/logo and design/Banner.jpg" alt="Banner" width="1000" height="500">
</div>

<div class="rated">
    <p> Top Rated Products!
    </p>
</div>   

<div class="gallery">

<div class="content">
    
    <img src="images/images-products/strawberry.png" height="50%" width="50%">
    <h2>Strawberry</h2>
    <h3>Fruit</h3>
    
   
    <fieldset class="rating">
        <center>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </fieldset>
    
</div>

<div class="content">
   
    <img src="images/images-products/Apple.png" height="50%" width="50%">
    <h2>Apple</h2>
    <h3>Fruit</h3>
    
   
    <fieldset class="rating">
        <center>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </fieldset>
</div>
<div class="content">
   
    <img src="images/images-products/Spinach.png" height="50%" width="50%">
    <h2>Spinach</h2>
    <h3>Vegetable</h3>
    
   
    <fieldset class="rating">
        <center>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
    </fieldset>
</div>


</div>


   <div class="rights"> <a> © 2022 TopHealth. All Rights Reserved. </a> 
   
    
 

</body>
</html>
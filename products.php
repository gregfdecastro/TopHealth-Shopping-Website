<?php
 session_start();
 require 'dbcon.php';

 
 
if(isset($_POST['add_to_cart'])){



   if(isset($_SESSION['id'])==false){
      header("Location: login.php");
     }

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($con, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TopHealth</title>
   <link rel="icon" href="images/logo and design/Health Shop Logo.png" type="image/icon type">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/menu.css">
   <link rel="stylesheet" href="css/style-cart.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

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
                 <a style="font-size: medium;" href="login.php">User login</a>
                    <a style="font-size: medium;" href="login-admin.php">Admin login</a>
                 </div>
               </div>
            
               <li>  <a href="registration.php"><button type="button">Signup</button> </a> </li>
          </ul>
        </div>
</nav>

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
             
               <table class="Ptable">
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
<div class="container">

<section class="products">
<BR></BR>
   <BR></BR>
 

   <h1 class="heading">Products</h1>
 

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div style="border-style: solid;
    border-color: #2691d9; border-width: 2px; border-radius: 10px; margin: auto;"class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">₱ <?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>


<script src="js/script.js"></script>

</body>
</html>
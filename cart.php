<?php

session_start();
require 'dbcon.php';

  if(isset($_SESSION['id'])==false){
   header("Location: login.php");
}
?>





<?php

@include 'dbcon.php';



if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($con, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($con, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($con, "DELETE FROM `cart`");
   header('location:cart.php');
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
  
   <link rel="stylesheet" href="css/style-cart.css">
   <link rel="stylesheet" href="css/menu.css">
</head>
<body>

<nav>
    <div class="logo"> 
     <img src="images/logo and design/Health Shop Logo.png" alt="Logo" width="80" height="80"> 
     <div class="tophealth">
     <a> TopHealth </a>
     </div>
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
             <a style="font-size: medium;"href="profile.php">Profile</a>
             <a style="font-size: medium;" href="login-admin.php">Admin</a>
                <a style="font-size: medium;" href="logout.php">Logout</a>

             </div>
           </div>
      </ul>
    </div>
 
    
  </nav>
<div style="border-style: solid;
    border-color: #2691d9; border-width: 2px; border-radius: 10px;" class="container">

<section class="shopping-cart">

   <h1 class="heading">Cart</h1>

   <table>

      <thead >
         <th style="background-color: #2691d9">Image</th>
         <th style="background-color: #2691d9">Name</th>
         <th style="background-color: #2691d9">Price</th>
         <th style="background-color: #2691d9">Quantity</th>
         <th style="background-color: #2691d9">Total Price</th>
         <th style="background-color: #2691d9">Action</th>
      </thead>
      <tbody>

         <?php 
         
         $select_cart = mysqli_query($con, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>₱<?php echo number_format($fetch_cart['price']); ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input style="background-color: #ffa500" type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>₱<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a style="background-color: #D11A2A" href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a style="background-color: green;" href="products-logged.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
            <td colspan="3">grand total</td>
            <td>₱<?php echo $grand_total; ?>/-</td>
            <td><a style="background-color: #D11A2A" href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a style="background-color:#2691d9 ;" href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
   </div>

</section>

</div>
   

<script src="js/script.js"></script>

</body>
</html>
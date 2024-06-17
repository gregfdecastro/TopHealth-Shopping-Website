<?php
 session_start();
 require 'dbcon.php';

   if(isset($_SESSION['id'])==false){
    header("Location: login-admin.php");
   }

 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

     <div class="navLinks">
     <ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="about.php">About</a></li>
       <li><a href="products.php">Products</a></li>
       <li><a href="contact.php">Contact</a></li>
       <div class="dropdown">
           <a href="#"><button type="button">Admin</button> </a> 
                 <div class="dropdown-content">
                 <a href="admin.php">Manage users</a>
                 <a href="admin-cart.php">Manage products</a>
                 <a href="admin-feedback.php">Check feedbacks</a>
                 
                 </div>
               </div>
               <li>  <a href="logout.php"><button type="button">Logout</button> </a> </li>
               </div>
     </ul>
   </div>
     </nav>



    <div class="container-admin">

        <?php include('message.php'); ?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


        <div class="row-admin">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Orders
                            
                        </h4>
                    </div>
                    <div  class="card-body">

                        <table class="table table-bordered table-striped">
                            
                            <thead>
                                
                                <tr >
                                   
                                    <th>Order ID</th>
                                    <th>Full name</th>
                            
                                    <th>Phone number</th>
                                    <th>Email address</th>
                                    <th>Payment method</th>
                                    <th>Sales</th>
                                    <th>Date ordered</th>
                                    <th>Order details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM purchase";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $user)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $user['id']; ?></td>
                                                <td><?= $user['name']; ?></td>
                                                <td><?= $user['number']; ?></td>
                                                <td><?= $user['email']; ?></td>
                                                <td><?= $user['method']; ?></td>
                                                <td>₱ <?= $user['total_price']; ?>.00</td>
                                                <td><?= $user['oras']; ?></td>
                                            
                                                <td>
                                                <a href="sales-view.php?id=<?= $user['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                <form action="sales-view.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_order" value="<?=$user['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
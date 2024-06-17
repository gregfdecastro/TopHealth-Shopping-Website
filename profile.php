<?php
 session_start();
 require 'dbcon.php';


   if(isset($_SESSION['id'])==false){
    header("Location: login.php");
   }
   $id = $_SESSION['id']

 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
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
            
             <li><a href="contact-logged.php">Contact</a></li>
     
             <div class="dropdown">
                 <a class="fa fa-user" style="font-size:24px; color: #2691d9"></a>
                 <div class="dropdown-content">
                 <a href="#">Profile</a>
                    <a href="login-admin.php">Admin</a>
                   <a href="logout.php">Logout</a>
                 </div>
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

        <div style="border-style: solid;
    border-color: #2691d9; width: 60%; margin-left:20%; border-radius: 10px;"  class="row-admin">
            <div style="border-radius: 10px;" class="col-md-12">
                <div  style="border-radius: 10px;" class="card">
                    <div class="card-header">
                        <h4>Profile
                           
                        </h4>
                    </div>
                    <div  class="card-body">

                        <table  class="table table-bordered table-striped">
                            
                            <thead>
                                
                                <tr >
                                   
                                
                                    <th >Full Name</th>
                                    <th>Username</th>
                                    <th>Phone number</th>
                                    <th>Email address</th>
                                    <th>Complete address</th>
                                    <th>Password</th>
                                    
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM user WHERE id = '$id'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $user)
                                        {
                                            ?>
                                            <tr>
                                            
                                                <td><?= $user['fullname']; ?></td>
                                                <td><?= $user['username']; ?></td>
                                                <td><?= $user['contact']; ?></td>
                                                <td><?= $user['email']; ?></td>
                                                <td><?= $user['address']; ?></td>
                                                <td><?= $user['password']; ?></td>
                                            
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> Profile not found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                        <a href="profile-edit.php?id=<?= $user['id']; ?>" class="btn btn-success btn-sm">Update profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <div style="margin-top: 20%; font-weight: 100;" class="rights"> <a> © 2022 TopHealth. All Rights Reserved. </a> 
</body>
</html>
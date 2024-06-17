<?php
session_start();
require 'dbcon.php';
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
    <title>Users View</title>
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
                 <a class="fa fa-user" style="font-size:24px; color: #2691d9"></a>
                 <div class="dropdown-content">
                  
                    <a href="landingpage.php">Admin</a>
                   <a href="logout.php">Logout</a>
                 </div>
               </div>
          </ul>
        </div>
</nav>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User View Details 
                            <a href="admin.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM user WHERE id='$user_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Fullname</label>
                                        <p class="form-control">
                                            <?=$user['fullname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Username</label>
                                        <p class="form-control">
                                            <?=$user['username'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone number</label>
                                        <p class="form-control">
                                            <?=$user['contact'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email Address</label>
                                        <p class="form-control">
                                            <?=$user['email'];?>
                                        </p>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label>Complete Address</label>
                                        <p class="form-control">
                                            <?=$user['address'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <p class="form-control">
                                            <?=$user['password'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Confirm password</label>
                                        <p class="form-control">
                                            <?=$user['confirmpassword'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
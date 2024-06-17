<?php
session_start();
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
    
    <title>User Create</title>
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

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Add 
                            <a href="admin.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Fullname</label>
                                <input type="text" name="fullname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Phone number</label>
                                <input type="number" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Complete Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Confirm password</label>
                                <input type="password" name="confirmpassword" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_user" class="btn btn-primary">Save Student</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>